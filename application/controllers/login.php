<?php

class Login extends CI_Controller
{
	function Login()
	{
		parent::__construct();
		$this->load->model('userModel');

	}
	
	function index()
	{
		$data['header']=0;
		$this->load->view('admin/header',$data);
		$this->load->view('admin/login');

	}
	function masuk()
	{	
		$username = $this->input->post('user');
		$password = $this->input->post('pass');
		$query = $this->userModel->check($username, $password);
		if ($query)
		{
			$data=array('username'=>$username);
			$this->session->set_userdata($data);
			//check return value from model
		}
		else
		{
			$data['checklogin']=1;
			$this->load->view('header',$data);
			$this->load->view('login',$data);
		}
	}
	function isiform()
	{
  		$nama 	= $this->input->post('Nama_User'); //input nim
  		$alamat = $this->input->post('Alamat'); //input nama
  		$dob 	= $this->input->post('Tanggal_lahir'); //input alamat
    	$nohp  	= $this->input->post('Nomor_HP'); //input nama
  		$username= $this->input->post('username'); //input alamat
  		$password= $this->input->post('password'); //input alamat
  		
  		$data1 = array (
  		'Nama_User'	=> $nama,
  		'Alamat'	=> $alamat,
  		'Tanggal_lahir'	=> $dob,
  		'Nomor_HP'	=> $nohp,
  		'username'	=> $username,
  		'password'	=> $password
  		);
		  $debug = $this->userModel->userbaru($data1);

  		
      redirect ('main/login');
	}


	function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('num_pinjam');
		$this->session->unset_userdata('status_admin');
		$this->session->sess_destroy();
		redirect('login');
	}
}