<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrllayarutamapromosi extends CI_Controller {
	public function __construct() {
		parent::__construct();
            $this->load->model('modelpromo');
            $this->load->model('modeluser');
  	}
	 
	public function index(){
        $allfeedback	= $this->modelpromo->getalluser();
        $nama = $this->session->nama;
        $ambildataadmin = $this->modeluser->ambiladmin($nama);
        $data['kritik']	= $allfeedback;
        $data['nama']   = $nama;
        $data['admin']  = $ambildataadmin;
        
        $this->load->view('layarutamapromosi', $data);
       
		
    }
}
