<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlpromo extends CI_Controller {

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
        
        $this->load->view('promo', $data);
       
		
    }

    public function EditData(){
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $tgl = $this->input->post('tgl');
        $kodepromo = $this->input->post('kd_promo');
        $isi = $this->input->post('isi');
        
    
      $data = array(
        'judul'      => $judul,
        'tgl_input'      => $tgl,
        'kode_promo'      => $kodepromo,
        'isi'      => $isi
      );
    
      $result = $this->modelpromo->Update($id,$data);
    
      $data = NULL;
      if($result){
        redirect('promo');
      }else{
    
        $nama = $this->session->nama;
        $data['nama'] = $nama;
        $data['result'] = "Gagal";
        $this->load->view('formpromo',$data);
      }
    }
    
    public function DeleteData($id){
        $result = $this->modelpromo->DeleteUser($id);

        if($result){
            redirect('promo');
        }else{

            $nama = $this->session->nama;
            $data['nama'] = $nama;
            $data['result'] = "Gagal";
            $this->load->view('formpromo',$data);
        }
    }
}
