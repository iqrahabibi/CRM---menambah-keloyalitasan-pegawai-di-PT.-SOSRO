<?php
Class ctrlreportpdf extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model('modelreport');
        $this->load->model('modeluser');
        $this->load->library('pdf');
    }

    function viewpromo(){

        $this->session->nama;
        $admin = $this->modeluser->ambiladmin($this->session->nama);
        $alluser            = $this->modeluser->getalluser();
    $data['datauser']   = $alluser;
    		$data['admin'] = $admin;
        $data['nama']= $this->session->nama;
        $this->load->view('reportpromo', $data);
    }

    function viewtesti(){
        $this->session->nama;
        $admin = $this->modeluser->ambiladmin($this->session->nama);
        $alluser            = $this->modeluser->getalluser();
        $data['datauser']   = $alluser;
    	$data['admin'] = $admin;
        $data['nama']= $this->session->nama;
        $this->load->view('reporttesti', $data);
    }

    function viewfeedback(){
        $this->session->nama;
        $admin = $this->modeluser->ambiladmin($this->session->nama);
        $alluser            = $this->modeluser->getalluser();
    $data['datauser']   = $alluser;
    	$data['admin'] = $admin;
        $data['nama']  = $this->session->nama;
        $this->load->view('reportfeedback', $data);
    }

    function reportpromo(){

        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        $pdf->Image('assets/images/logo.gif',11,8,40,20);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'PT. SINAR SOSRO',0,1,'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(190,7,'Kantor Perwakilan Lenteng Agung',0,1,'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(190,7,'Jl Raya Depok RT 01/08 (Samping SMU 38)',0,1,'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(190,7,'Lenteng Agung, Kel Jagakarsa, Jakarta Selatan - Indonesia',0,1,'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(190,7,'Telp (021) 7864 58889',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'LAPORAN PROMO',0,1,'C');
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(190,7,'------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(5,6,'NO',1,0,'C');
        $pdf->Cell(40,6,'JUDUL',1,0,'C');
        $pdf->Cell(30,6,'TANGGAL INPUT',1,1,'C');
        $x=1;

        $pdf->SetFont('Arial','',7);
        $i=1;
        $penilaianperiode = $this->modelreport->pdfpromo();
        foreach ($penilaianperiode as $row){
            $pdf->Cell(5,6,$x,1,0,'C');
            $pdf->Cell(40,6,$row->judul,1,0,'C');
            $pdf->Cell(30,6,$row->tgl_input,1,1,'C');
            $i++;
            $x++;
        }
        $pdf->Output();
    }

    function reporttesti(){

        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        $pdf->Image('assets/images/logo.gif',11,8,40,20);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'PT. SINAR SOSRO',0,1,'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(190,7,'Kantor Perwakilan Lenteng Agung',0,1,'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(190,7,'Jl Raya Depok RT 01/08 (Samping SMU 38)',0,1,'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(190,7,'Lenteng Agung, Kel Jagakarsa, Jakarta Selatan - Indonesia',0,1,'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(190,7,'Telp (021) 7864 58889',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'LAPORAN TESTIMONI',0,1,'C');
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(190,7,'------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(5,6,'NO',1,0);
        $pdf->Cell(40,6,'NAMA',1,0);
        $pdf->Cell(30,6,'ISI',1,0);
        $pdf->Cell(30,6,'PENILAIAN',1,1);
        $x=1;

        $pdf->SetFont('Arial','',7);
        $penilaiankode = $this->modelreport->pdftesti();
        foreach ($penilaiankode as $row){
            $pdf->Cell(5,6,$x,1,0);
            $pdf->Cell(40,6,$row->nama,1,0);
            $pdf->Cell(30,6,$row->isi,1,0);
            $pdf->Cell(30,6,$row->penilaian,1,1);
            $x++;
        }
        $pdf->Output();
    }

    function reportfeedback(){

        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        $pdf->Image('assets/images/logo.gif',11,8,40,20);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'PT. SINAR SOSRO',0,1,'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(190,7,'Kantor Perwakilan Lenteng Agung',0,1,'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(190,7,'Jl Raya Depok RT 01/08 (Samping SMU 38)',0,1,'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(190,7,'Lenteng Agung, Kel Jagakarsa, Jakarta Selatan - Indonesia',0,1,'C');
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(190,7,'Telp (021) 7864 58889',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'LAPORAN SURAT FEEDBACK',0,1,'C');
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(190,7,'------------------------------------------------------------------------------------------------------------------------------------------------------------------',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(5,6,'NO',1,0);
        $pdf->Cell(30,6,'NAMA',1,0);
        $pdf->Cell(50,6,'EMAIL',1,0);
        $pdf->Cell(80,6,'ISI',1,1);
        $x=1;
// var_dump($tgl1); exit();
        $pdf->SetFont('Arial','',7);
        $suratkeputusan = $this->modelreport->pdffeedback();
        foreach ($suratkeputusan as $row){
            $pdf->Cell(5,6,$x,1,0);
            $pdf->Cell(30,6,$row->nama,1,0);
            $pdf->Cell(50,6,$row->email,1,0);
            $pdf->Cell(80,6,$row->isi,1,1);
            $x++;
        }
        $pdf->Output();
    }
}
