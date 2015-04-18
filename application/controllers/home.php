<?php
class Home extends CI_Controller
{
	public function Home()
	{
		parent::__construct();
		$this->load->model('barangModel');
	}
	
	function index()
	{
		$this->load->view('homepage');
	}

	public function listBarang()
	{
		$data['barang']=$this->barangModel->get_all_barang();
		$this->load->view('listBarang', $data);
	}
	
	public function listPeminjaman()
	{
		$this->load->view('listPeminjaman');
	}

	public function formulir()
	{
		if($this->cart->total_items()!=0) {
			$this->load->view('formulir');
		} else {
			redirect(base_url()."home/listBarang");
		}
	}
	
	public function detailKeranjang()
	{
		$this->load->view('listKeranjang');
	}
}
