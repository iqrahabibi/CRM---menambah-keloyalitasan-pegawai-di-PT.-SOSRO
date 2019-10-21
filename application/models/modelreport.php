<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelreport extends CI_Model {

	public function __construct() {
		parent::__construct();
    }

    public function pdfpromo(){
        $result= $this->db->query("select * from promo");
        return $result->result();
    }

    public function pdftesti(){
        $result= $this->db->query("select * from testimoni");
        return $result->result();
    }

    public function pdffeedback(){
        $result = $this->db->query("select * from feedback");
        return $result->result();
    }
}
