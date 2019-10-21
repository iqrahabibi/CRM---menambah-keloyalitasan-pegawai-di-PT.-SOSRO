<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
            $this->load->model('modelkritik');
            $this->load->model('modeluser');
  	}
	 
	public function index(){
        $allfeedback	= $this->modelkritik->getalluser();
        $nama = $this->session->nama;
        $ambildataadmin = $this->modeluser->ambiladmin($nama);
        $data['kritik']	= $allfeedback;
        $data['nama']   = $nama;
        $data['admin']  = $ambildataadmin;
        
        $this->load->view('admin', $data);
       
		
	}
}
