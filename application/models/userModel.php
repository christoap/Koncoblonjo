<?php
class UserModel extends CI_Model
{
	function __construct()
	{
		//parent::__construct();
		$this->load->database();
		
	}
	
	function check($username,$password)
	{
		try{
			$sql = "select * from akun where username= '".$username."' and password= '".$password."' ";
			$query = $this->db->query($sql);
			if($query->result()){
				echo "berhasil query";
				return 1;
			}
			else{
				return false;
			}
		}
		catch(Exception $e){
			return false;
		}
	}
	function changepassword($password,$password2)
	{
		try {
			$sql="select * from user where password=md5('$password')";
			$query=$this->db->query($sql);
			if($query->result()){
				$sql="update user set password=md5('$password2')";
				$query=$this->db->query($sql);
				return "berhasil";
				} 
			else{
				return "gagal";
			}
		} 

		catch (Exception $e) {
			return "gagal";
		}
	}
	public function userbaru($data1)
	{


		$this->db->insert('akun',$data1);
		
	}


}