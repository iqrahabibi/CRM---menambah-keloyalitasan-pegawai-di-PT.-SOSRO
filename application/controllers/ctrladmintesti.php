<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrladmintesti extends CI_Controller {

	public function __construct() {
		parent::__construct();
            $this->load->model('modelkwitansi');
            $this->load->model('modeltesti');
  	}
	 
	public function index(){
        $allfeedback	= $this->modeltesti->getalluser();
		$data['testi']	= $allfeedback;

		$this->load->view('datatesti', $data);
	}

	public function ubahstatus(){
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        
      $data = array(
        'status'      => $status
      );
    
      $result = $this->modeltesti->UpdateUser($id,$data);
    
      $data = NULL;
      if($result){
        redirect('ctrladmintesti');
      }else{
    
        $nama = $this->session->nama;
        $data['nama'] = $nama;
        $data['result'] = "Gagal";
        $this->load->view('datatesti',$data);
      }
    }
}
