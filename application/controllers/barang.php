<?php
class Barang extends CI_Controller
{
	public function Barang()
	{
		parent::__construct();
		$this->load->model('barangModel');
	}
	
	function index()
	{
	
	}

	public function loadBarang()
	{
		$data['barang']=$this->barangModel->get_all_barang();
		$this->load->view('barangData', $data);
	}
}
