<?php
class M_buku extends CI_Model{
	
	function show_buku(){
		$hasil=$this->db->query("SELECT * FROM buku");
		return $hasil;
	}
	
}