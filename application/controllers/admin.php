<?php 
class Admin extends CI_Controller
{
	function Admin ()
	{
		parent::__construct();
		$this->load->model('barangModel');
		$this->load->model('transaksi');
		$this->load->helper('file');
		$this->load->model('userModel');
		$this->load->library('email');
	}
	function index()
	{
		$this->cek_login();
		$this->load->view('admin/homepage');
	}
	function tambah_barang()
	{	
		$this->cek_login();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('admin/header');
			$this->load->view('tambahbarang');
		}
		else
		{
			$this->cek_login();
			$nama = $this->input->post('nama');
			$harga = $this->input->post('harga');
			$deskripsi = $this->input->post('deskripsi');
			$foto = $this->input->post('foto');
			
			$data = array(
			   'id_barang' => 'a',
			   'nama_barang' =>$nama,
			   'harga' => $harga,
			   'deskripsi' => $deskripsi,
			   'foto'=>"temp"
			);
		 	  
			$id = $this->barangModel->tambahbarang($data);
			$this->do_upload($id);
			redirect(base_url()."admin_page/listBarang");
		}
		
	}
	public function listBarang()
	{
		$this->cek_login();
		$this->load->view('admin/listBarang');
	}
	
	public function listPeminjaman()
	{
		$this->cek_login();
		$this->load->view('admin/listPeminjaman');
	}
	
	public function addBarang()
	{
		$this->cek_login();
		$this->load->view('admin/addBarang');
	}
	
	
	public function cek_login()
	{
		if($this->session->userdata('username')==NULL)
		{
			redirect('login');
		}
	}	
	function do_upload($id)
	{
		echo "id".$id;
		$config['file_name']="$id.png";
		$config['upload_path'] = './picture/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '4000';
		$config['max_width']  = '2048';
		$config['max_height']  = '1600';
		$this->upload->initialize($config);
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

		}
		return $config['file_name'];
	}
	
	function edit_barang()
	{
		$this->cek_login();
		$id=$this->input->post('id');
		$name = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$deskripsi = $this->input->post('deskripsi');
		
		$data = array(
		   'nama_barang' =>$name,
		   'harga' => $harga,
		   'deskripsi' => $deskripsi
		);
		
		$b=$this->barangModel->edit_barang($data,$id);
		redirect($this->agent->referrer());
	}
	
	public function editphoto()
	{
		$this->cek_login();
		$id=$this->input->post('id');
		$this->hapusfoto($id);
		$filename = $this->do_upload($id);
		redirect($this->agent->referrer());
	}
	
	public function hapusfoto($id)
	{
		$path="./picture/$id.png";
		if (unlink($path));
	}
	
	public function hapus_barang()
	{
		$this->cek_login();
		$id=$this->input->post('id');
		$this->hapusfoto($id);
		$this->barangModel->hapus_barang($id);
		redirect(base_url()."admin_page/listBarang");
	}
	
	public function detailPeminjaman($id=0)
	{
		$this->cek_login();
		if($id==0) redirect(base_url()."admin");	
		$this->session->set_userdata("id_pinjam", $id);
		$data["id_pinjam"] = $id;
		$data["peminjaman"] = $this->barangModel->get_peminjaman_by_id($id);
		$this->load->view('admin/detailPeminjaman', $data);
	}
	function editstatus()
	{
		$this->cek_login();
		$id=$this->input->post('id');
		$status=$this->input->post('status');
		$this->transaksi->edit_status($id,$status);
		redirect('admin_page/listTransaksi');
	}
	function changepassword()
	{
		$this->cek_login();
		$password=$this->input->post('password');
		$password2=$this->input->post('password2');
		$data['changePassword']=$this->userModel->changepassword($password,$password2);
		$this->load->view('admin/header');
		$this->load->view('admin/home',$data);
	}
	function sendemail()
	{
		$this->cek_login();
		$email=$this->input->post('email');
		$id=$this->input->post('id');
		$pesan=$this->input->post('pesan');
		
		$this->load->library('email');
	    // FCPATH refers to the CodeIgniter install directory
	    // Specifying a file to be attached with the email
	    // if u wish attach a file uncomment the script bellow:
	    //$file = FCPATH . 'yourfilename.txt';
	    // Defines the email details
	    $this->email->from('ripas.filqadar@gmail.com', 'Admin');
	    $this->email->to($email);
	    $this->email->subject('Hi Costumer');
	    $this->email->message($pesan);
	    //also this script
	    //$this->email->attach($file);
	    // The email->send() statement will return a true or false
	    // If true, the email will be sent
	    if ($this->email->send()) {
	    	$this->transaksi->updatePesan($id);
	    	redirect('admin_page/pesan');
	    } 
	    else {
	    echo $this->email->print_debugger();
      }
	}
}


