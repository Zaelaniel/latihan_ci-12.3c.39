<?php
class M_pinjam extends CI_Model{
	
	function show_pinjam(){
		$hasil=$this->db->query("SELECT * FROM pinjam");
		return $hasil;
	}
	
}