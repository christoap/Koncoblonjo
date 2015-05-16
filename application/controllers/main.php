<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('cart');
        $this->load->model('transaksi');
    }

	public function index()
	{
		$data['username']= $this->session->userdata('username');
		$this->load->view('header',$data);
		$this->load->view('index');
		$this->load->view('footer');
		
	}
	public function about()
	{
		$this->load->view('header_guest');
		$this->load->view('about');
		$this->load->view('footer');
	}
	function hto()
	{
		$this->load->view('header_guest');
		$this->load->view('hto');
		$this->load->view('footer');
	}
	function kontak()
	{
		$this->load->view('header_guest');
		$this->load->view('kontak');
		$this->load->view('footer');
	}
	function submitkontak()
	{
		$nama=$this->input->post('nama');
		$email=$this->input->post('email');
		$hp=$this->input->post('hp');
		$pesan=$this->input->post('pesan');
		$data = array('id_kontak' =>"",
		'Nama'=>$nama,
		'E-mail'=>$email,
		'NO_HP'=>$hp,
		'pesan'=>$pesan,
		'status'=>'Belum Dibalas');
		$this->transaksi->submitkontak($data);
		redirect('shopping');
	}

	function checkout()
	{
		$this->load->view('header');
		$this->load->view('checkout');
		$this->load->view('footer');
	}

	function cart()
	{
		$this->load->view('header');
		$this->load->view('cart');
		$this->load->view('footer');
	}

	function login()
	{
		//$this->session->sess_destroy();


		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	function uc()
	{
		$this->load->view('header');
		$this->load->view('404');
		$this->load->view('footer');
	}
	function logout()
	{
		$this->session->sess_destroy();
      	$this->index();
	}
}
