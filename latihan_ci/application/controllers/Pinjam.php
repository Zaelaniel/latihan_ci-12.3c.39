<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pinjam extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_pinjam');
	}
	
	public function index(){
		$x['data']=$this->m_pinjam->show_pinjam();
		$this->load->view('v_pinjam',$x);
	}
}
