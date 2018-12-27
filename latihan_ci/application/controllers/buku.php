<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Buku extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_buku');
	}
	
	public function index(){
		$x['data']=$this->M_buku->show_Buku();
		$this->load->view('v_buku',$x);
	}
}
