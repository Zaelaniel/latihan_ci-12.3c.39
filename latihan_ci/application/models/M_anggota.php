<?php
class M_anggota extends CI_Model{
	
	function show_anggota(){
		$hasil=$this->db->query("SELECT * FROM anggota");
		return $hasil;
	}
	
}