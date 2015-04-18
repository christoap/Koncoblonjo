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
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$query = $this->userModel->check($username, $password);
		if ($query)
		{
			$data=array('username'=>$username);
			$this->session->set_userdata($data);
			redirect('main');
		}
		else
		{
			$data['checklogin']=1;
			$this->load->view('login',$data);
		}
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