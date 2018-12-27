<?php
class M_Admin extends CI_Model{
	
	function show_Admin(){
		$hasil=$this->db->query("SELECT * FROM Admin");
		return $hasil;
	}
	
}