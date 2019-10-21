<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller {

	public function __construct() {
		parent::__construct();
			$this->load->model('modelkritik');
			$this->load->model('modeltesti');
  	}
	 
	public function index(){
		$allfeedback	= $this->modelkritik->getalluser();
		$cek 			= $this->modeltesti->ambildata();
		$data['kritik']	= $allfeedback;
		$data['cek']	= $cek;

		$this->load->view('index', $data);
	}
}
