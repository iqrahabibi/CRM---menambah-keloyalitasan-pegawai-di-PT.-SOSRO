<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlkwitansi extends CI_Controller {

	public function __construct() {
		parent::__construct();
            $this->load->model('modeluser');
            $this->load->model('modelkwitansi');
  	}
	 
	public function index(){
		$this->load->view('formfaktur');
    }
    
    public function EditData(){
        $id = $this->input->post('id');
        $no_order = $this->input->post('no_order');
        $tgl = $this->input->post('tgl');
        $tipe = $this->input->post('tipe');
        $outlet = $this->input->post('outlet');
        $alamat = $this->input->post('alamat');
    
      $data = array(
        'no_order'      => $no_order,
        'tgl_transaksi'      => $tgl,
        'tipe_bayar'      => $tipe,
        'outlet'      => $outlet,
        'alamat'  => $alamat
      );
    
      $result = $this->modelkwitansi->UpdateUser($id,$data);
    
      $data = NULL;
      if($result){
        redirect('ctrlkwitansi');
      }else{
    
        $nama = $this->session->nama;
        $data['nama'] = $nama;
        $data['result'] = "Gagal";
        $this->load->view('datakwitansi',$data);
      }
    }
    
        public function DeleteData($id){
            $result = $this->modelkwitansi->DeleteUser($id);
    
            if($result){
                redirect('ctrlkwitansi');
            }else{
    
                $nama = $this->session->nama;
                $data['nama'] = $nama;
                $data['result'] = "Gagal";
                $this->load->view('datakwitansi',$data);
            }
        }
    
        public function InsertData(){
          $this->load->helper(array('form', 'url'));
          $nama_file = md5(uniqid(rand(), true));
          $this->load->library('upload');
              $config = [
                'upload_path' => './assets/gambar_komplain/',
                'allowed_types' => 'gif|jpg|png|jpeg|bmp',
                  'file_name' => $nama_file
              ];
          $this->upload->initialize($config);
            if(!$this->upload->do_upload('gambar')){
					$gambar="";
				  }else{
			$gambar=$this->upload->file_name;
				}
        
          $data = array(
            'no_order'      => $gambar,
            'nama_order'    => $this->input->post('no_order'),
            'status'        => "0"
          );
    
              $result = $this->modelkwitansi->InsertData($data);
    
              $data = null;
              if($result){
                  Redirect('ctrlkwitansi');
              }else{
                  Redirect('ctrlkwitansi');
              }
          }
}
