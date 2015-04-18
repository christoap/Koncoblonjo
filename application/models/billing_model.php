<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Billing_model extends CI_Model {
    
    function __construct()
    {
    	parent::__construct();
    }
     // Get all details ehich store in "products" table in database.
    public function get_all()
	{
		$query = $this->db->get('barang');
		return $query->result_array();
	}
    
    // Insert customer details in "customer" table in database.
	public function order($data)
	{
		$this->db->insert('transaksi', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;		
	}
	

        // Insert ordered product detail in "order_detail" table in database.
	public function insert_order_detail($data)
	{
		$this->db->insert('detail_transaksi', $data);
	}
	function update_total($data,$id)
	{
		$this->db->where('ID_TRANSAKSI',$id);
		$this->db->update('TRANSAKSI',$data);
	}
       
}