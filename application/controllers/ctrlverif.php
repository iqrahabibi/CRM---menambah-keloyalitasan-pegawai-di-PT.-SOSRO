<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlverif extends CI_Controller {

	public function __construct() {
		parent::__construct();
            $this->load->model('modelkwitansi');
  	}
	 
	public function index(){
        $allkwitansi	= $this->modelkwitansi->getalluser();
		$data['kwitansi']	= $allkwitansi;

		$this->load->view('datakwitansi', $data);
	}

	public function ubahstatus($id){
        
      $data = array(
        'status'      => "1"
      );
    
      $result = $this->modelkwitansi->UpdateUser($id,$data);
    
      $data = NULL;
      if($result){
        redirect('ctrlverif');
      }else{
    
        $nama = $this->session->nama;
        $data['nama'] = $nama;
        $data['result'] = "Gagal";
        $this->load->view('datakwitansi',$data);
      }
    }

    public function ubahstatustolak($id){
        
      $data = array(
        'status'      => "2"
      );
    
      $result = $this->modelkwitansi->UpdateUser($id,$data);
    
      $data = NULL;
      if($result){
        redirect('ctrlverif');
      }else{
    
        $nama = $this->session->nama;
        $data['nama'] = $nama;
        $data['result'] = "Gagal";
        $this->load->view('datakwitansi',$data);
      }
    }
}
