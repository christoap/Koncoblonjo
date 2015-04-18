<?php
class Transaksi extends CI_Model
{
	function Transaksi()
	{
		parent::__construct();
	}
	function edit_status ($id,$status)
	{
		$sql="update transaksi set status=$status where ID_TRANSAKSI='$id'";
		$query=$this->db->query($sql);
	}
	function detail_transaksi($id)
	{
		$sql="SELECT barang.`NAMA_BARANG`,detail_transaksi.`QUANTITY` FROM detail_transaksi,transaksi,barang WHERE transaksi.`ID_TRANSAKSI`=$id AND transaksi.`ID_TRANSAKSI`=detail_transaksi.`ID_TRANSAKSI`AND detail_transaksi.`ID_BARANG`=barang.`ID_BARANG`";
		$query=$this->db->query($sql);
		return $query->result();
	}
	function submitkontak($data)
	{
		try {
			$this->db->insert('kontak',$data);
			return true;
			
		} catch (Exception $e) {
			echo $e->getMessage();
			return false;
			
		}
	}
	function getPesan()
	{
		$sql="select * from kontak";
		$query=$this->db->query($sql);
		return $query->result();
	}
	function updatePesan($id)
	{
		$sql="update kontak set status='Sudah Dibalas' where id_kontak='$id'";
		$query=$this->db->query($sql);
		return true;
	}

}