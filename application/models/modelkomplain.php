<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelkomplain extends CI_Model {

	public function __construct() {
		parent::__construct();


	}

  public function InsertData($data){
		$checkinsert = false;
		try{
			$this->db->insert('feedback',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			$checkinsert = false;
		}
		return $checkinsert;
	}

	public function getalluser(){
    $result = $this->db->get('feedback');
    return $result->result();
  }
	public function getalluser2(){
    $result = $this->db->query("SELECT * from feedback group by status");
    return $result->result();
  }

	public function Updatedibaca($id,$data){
		$checkupdate = false;
		try{
			$this->db->where('id',$id);
			$this->db->update('feedback',$data);
			$checkupdate = true;
		}catch (Exception $ex) {

			$checkupdate = false;
		}

		return $checkupdate;

	}
}
