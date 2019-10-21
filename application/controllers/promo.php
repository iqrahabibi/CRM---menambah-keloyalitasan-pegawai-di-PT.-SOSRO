<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class promo extends CI_Controller {

	public function __construct() {
		parent::__construct();
            $this->load->model('modelpromo');
            $this->load->model('modelkritik');
  	}
	 
	public function index(){
		$allfeedback	= $this->modelpromo->getalluser();
		$data['promo']	= $allfeedback;

		$this->load->view('formpromo', $data);
    }

    function upload_file(){

        $config['upload_path'] = 'uploads/';
    
        $config['allowed_types'] = 'jpg|png';
    
        $this->load->library('upload', $config);
    
        if($this->upload->do_upload('resume')){
    
         return $this->upload->data();  
    
        }else{
    
         return $this->upload->display_errors();
    
        }
    
      }
    
    public function send(){
        $this->load->helper(array('form', 'url'));
			$nama_file = md5(uniqid(rand(), true));
			$this->load->library('upload');
      		$config = [
      			'upload_path' => './assets/gambar_promo/',
      			'allowed_types' => 'gif|jpg|png|jpeg|bmp',
            	'file_name' => $nama_file
      		];
			$this->upload->initialize($config);
				if(!$this->upload->do_upload('resume')){
					$gambar="";
				}else{
			$gambar=$this->upload->file_name;
				}
        $join           = $this->modelkritik->join();
        $subject = 'judul - ' . $this->input->post("judul"); //subjek di pesan email

        $data = array(
            'judul'=>$this->input->post('judul'),
            'isi'=>$this->input->post('isi'),
            'tgl_input'=>$this->input->post('tgl'),
            'kode_promo'=>$this->input->post('kd_promo'),
            'gambar'=>$gambar
        );

        $result = $this->modelpromo->insertdata($data);
    
        $file_data = $this->upload_file();
    
        if(is_array($file_data)){
    
         $message = '
    
         <h3 align="center">Contoh</h3>
    
          <table border="1" width="100%" cellpadding="5">
    
           <tr>
    
            <td width="30%">judul</td>
    
            <td width="70%">'.$this->input->post("judul").'</td>
    
           </tr>
    
           <tr>
    
            <td width="30%">Isi</td>
    
            <td width="70%">'.$this->input->post("isi").'</td>
    
           </tr>
    
          </table>
    
         ';
    
     
    
          $config = Array(
    
               'protocol'  => 'smtp',
    
               'smtp_host' => 'ssl://smtp.googlemail.com', //host gmail
    
               'smtp_port' => 465, //port gmail
    
               'smtp_user' => 'm.naufal12@gmail.com',    // Ganti dengan email gmail kamu
			    'smtp_pass' => 'emongmengkyabu',
    
               'mailtype'  => 'html', //tipe email
    
               'charset'  => 'iso-8859-1',
    
               'wordwrap'  => TRUE
    
          );
    
          $this->load->library('email', $config);
    
          $this->email->set_newline("\r\n");
    
          $this->email->from('m.naufal12@gmail.com', 'SOSRO | NAUFAL'); //masukkan alamat email pengirim
    
          foreach($join as $coba)
        {
            $this->email->to($coba->email);
        } //masukkan alamat gmail kamu / email yang dituju
    
          $this->email->subject($subject);
    
             $this->email->message($message);
    
             $this->email->attach($file_data['full_path']);
    
             if($this->email->send() && $result){
    
            //   if(delete_files($file_data['file_path'])){
    
            //    $this->session->set_flashdata('message', 'Lamaran Terkirim');
    
               redirect('promo');
    
              
    
             }else{
    
              if(delete_files($file_data['file_path'])){
    
               $this->session->set_flashdata('message', 'Pengiriman Lamaran Error');
    
               redirect('promo');
    
              }
    
             }
    
         }else{
    
          $this->session->set_flashdata('message', 'Attach File Error ');
    
             redirect('promo');
    
         }
    
      }

	
}
