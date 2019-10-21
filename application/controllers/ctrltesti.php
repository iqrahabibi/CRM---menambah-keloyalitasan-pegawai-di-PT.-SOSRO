<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrltesti extends CI_Controller {

	public function __construct() {
		parent::__construct();
            $this->load->model('modelkwitansi');
            $this->load->model('modeltesti');
  	}
	 
	public function index(){
        $allfeedback	= $this->modeltesti->getalluser();
        $allkwitansi        = $this->modelkwitansi->getalluser();
        $data['kwitansi']   = $allkwitansi;
		$data['testi']	= $allfeedback;

		$this->load->view('formtestimoni', $data);
	}

	public function simpan(){
		$noorder 	    = $this->input->post('no_order');
		$nama			= $this->input->post('nama');
        $isi			= $this->input->post('isi');
        $nilai          = $this->input->post('nilai');

		$data = array(
			'nama' 		=> $nama,
			'no_order' 	=> $noorder,
			'isi' 		=> $isi,
			'penilaian' => $nilai
		);
        if($this->modelkwitansi->cek($noorder) == 0 || $this->modelkwitansi->cek($noorder) == null){
			$this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Gagal Kirim</h4>
                    <p>No Order Tidak Sesuai atau No Order Belum Di Verifikasi</p>
                </div>');
		}else{
		$result = $this->modeltesti->InsertData($data);
        }
	 	// Load library email dan konfigurasinya
		if ($result) {
			Redirect('ctrltesti');
		} else {
			Redirect('ctrltesti');
		}
	}

	public function dibaca($id){
		$email	= $this->uri->segment('4');
		$nama 	= $this->uri->segment('5');
		$data = array(
			'status'	=> 1
		);

		$result = $this->modelkritik->updatedibaca($id, $data);

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
		$this->email->message("Harap bersabar kepada ".$nama.", email anda sudah kami proses, Ini adalah contoh email CodeIgniter untuk notifikasi penerimaan kritik dan saran yang dikirim menggunakan SMTP email Google (Gmail).<br><br> Klik <strong>");


		if($result && $this->email->send()){
			redirect('ctrlmailbox');
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

		$result = $this->modelkritik->updatedibaca($id, $data);

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
			redirect('ctrlmailbox');
		}
	}
}
