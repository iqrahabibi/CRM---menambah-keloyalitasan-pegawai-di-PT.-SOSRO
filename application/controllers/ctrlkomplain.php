<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrlkomplain extends CI_Controller {

	public function __construct() {
		parent::__construct();
			$this->load->model('modelkomplain');
			$this->load->model('modelkwitansi');
  	}
	 
	public function index(){
		$allfeedback	= $this->modelkomplain->getalluser();
		$data['kritik']	= $allfeedback;

		$this->load->view('formkomplain', $data);
	}

	public function sendmail(){
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
		$emailtujuan 	= $this->input->post('email');
		$nama			= $this->input->post('nama');
		$isi			= $this->input->post('kritik');
		$no_order		= $this->input->post('no_order');

		$data = array(
			'nama' 		=> $nama,
			'email' 	=> $emailtujuan,
			'isi' 		=> $isi,
			'gambar'	=> $gambar,
			'status' 	=> 0
		);

		if($this->modelkwitansi->cek($no_order) == 0 || $this->modelkwitansi->cek($no_order) == null){
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Gagal Kirim</h4>
                    <p>No Order Tidak Sesuai atau No Order Belum Di Verifikasi</p>
                </div>');
		}else{
			$result = $this->modelkomplain->InsertData($data);

			$config = [
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.gmail.com',
				'smtp_user' => 'm.naufal12@gmail.com',    // Ganti dengan email gmail kamu
				'smtp_pass' => 'emongmengkyabu',      // Password gmail kamu
				'smtp_port' => 465,
				'crlf'      => "\r\n",
				'newline'   => "\r\n"
			];

			// Load library email dan konfigurasinya
			$this->load->library('email', $config);

			// Email dan nama pengirim
			$this->email->from('m.naufal12@gmail.com', 'SOSRO | NAUFAL');

			// Email penerima
			$this->email->to($emailtujuan); // Ganti dengan email tujuan kamu

			// Lampiran email, isi dengan url/path file
			//$this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

			// Subject email
			$this->email->subject('NOTIFIKASI PENERIMAAN KRITIK DAN SARAN | NaufalDevSosro.com');

			// Isi email
			$this->email->message("Terima kasih kepada ".$nama." sudah memberikan kritik dan saran Kepada Kantor Penjualan Sinar SOSRO");
			
			$this->email->send();
		}
		// Tampilkan pesan sukses atau error
		if ($result) {
			Redirect('ctrlkomplain');
		} else {
			Redirect('ctrlkomplain');
		}
	}

	public function dibaca($id){
		$email	= $this->uri->segment('4');
		$nama 	= $this->uri->segment('5');
		$data = array(
			'status'	=> 1
		);

		$result = $this->modelkomplain->updatedibaca($id, $data);

		$config = [
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_user' => 'm.naufal12@gmail.com',    // Ganti dengan email gmail kamu
			'smtp_pass' => 'emongmengkyabu',      // Password gmail kamu
			'smtp_port' => 465,
			'crlf'      => "\r\n",
			'newline'   => "\r\n"
		];

	 	// Load library email dan konfigurasinya
		$this->load->library('email', $config);

		// Email dan nama pengirim
		$this->email->from('m.naufal12@gmail.com', 'SOSRO | NAUFAL');

		// Email penerima
		$this->email->to($email); // Ganti dengan email tujuan kamu

		// Lampiran email, isi dengan url/path file
		//$this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

		// Subject email
		$this->email->subject('NOTIFIKASI PEMBACAAN KRITIK DAN SARAN | NaufalDevSosro.com');

		// Isi email
		$this->email->message("Harap bersabar kepada ".$nama.", email anda sudah kami proses.");


		if($result && $this->email->send()){
			redirect('ctrlkomplain');
		}
	}

	public function dibalas(){
		$id 		= $this->input->post('id');
		$email		= $this->input->post('email');
		$nama 		= $this->input->post('nama');
		$balasan	= $this->input->post('balasan');
		$data = array(
			'balasan'	=> $balasan,
			'status'	=> 2
		);

		$result = $this->modelkomplain->updatedibaca($id, $data);

		$config = [
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_user' => 'm.naufal12@gmail.com',    // Ganti dengan email gmail kamu
			'smtp_pass' => 'emongmengkyabu',      // Password gmail kamu
			'smtp_port' => 465,
			'crlf'      => "\r\n",
			'newline'   => "\r\n"
		];

	 	// Load library email dan konfigurasinya
		$this->load->library('email', $config);

		// Email dan nama pengirim
		$this->email->from('m.naufal12@gmail.com', 'SOSRO | NAUFAL');

		// Email penerima
		$this->email->to($email); // Ganti dengan email tujuan kamu

		// Lampiran email, isi dengan url/path file
		//$this->email->attach('https://masrud.com/content/images/20181215150137-codeigniter-smtp-gmail.png');

		// Subject email
		$this->email->subject('NOTIFIKASI BALASAN KRITIK DAN SARAN | NaufalDevSosro.com');

		// Isi email
		$this->email->message("dengan ini balasan dari kami : ".$balasan.", dan terima kasih <b>".$nama."</b> sudah meluangkan waktu untuk memberi kritik dan saran kepada kami");


		if($result && $this->email->send()){
			redirect('ctrlkomplain');
		}
	}
}
