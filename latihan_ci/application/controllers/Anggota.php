<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Anggota extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_anggota');
	}
	
	public function index(){
		$x['data']=$this->M_anggota->show_Anggota();
		$this->load->view('V_anggota',$x);
	}
}
