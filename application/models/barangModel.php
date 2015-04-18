<?php
class BarangModel extends CI_Model
{
	function BarangModel()
	{
		parent::__construct();
	}
	
	function get_all()
	{
		$query="select * from barang";
		$query=$this->db->query($query);
		return $query->result();
	}
	function getBarang1($id)
	{
		$sql="select * from barang where ID_BARANG='$id'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function  tambahbarang($data)
	{
		print_r($data);
		$this->db->insert('barang',$data);

		$sql='select id_barang from barang order by id_barang desc limit 1';
		$id=$this->db->query($sql);
		$id=$id->result_array();
		$id=$this->updateFoto($id[0]['id_barang']);
		return $id;
	}
	function updateFoto($id)
	{
		if ($id!='0')
		{
			
			$id=substr($id, 4);	
			echo "id".$id;
			
		}
		
		$id=$id+1;
		$id="BRG_".$id;
		$sql="update barang set ID_BARANG='$id', FOTO='$id' where ID_BARANG='a'";
		$query=$this->db->query($sql);
		return $id;

	}
	function getKategori()	
	{
		$sql="select * from kategori";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function edit_barang($data,$id)
	{
		$this->db->where('ID_BARANG',$id);
		$this->db->update('barang',$data);
	}
	function hapus_barang($id)
	{
		$this->db->delete('barang',array('ID_BARANG'=>$id));
	}
	function get_all_transaksi()
	{
		$sql="select * from transaksi";
		$query=$this->db->query($sql);
		return $query->result();
	}
}