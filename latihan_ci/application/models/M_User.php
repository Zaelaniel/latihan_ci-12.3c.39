<?php
class M_User extends CI_Model{
	
	function show_User(){
		$hasil=$this->db->query("SELECT * FROM user");
		return $hasil;
	}
	
}