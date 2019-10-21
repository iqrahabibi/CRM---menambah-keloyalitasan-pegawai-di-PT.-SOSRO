<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modeltesti extends CI_Model {

	public function __construct() {
		parent::__construct();


	}

  public function InsertData($data){
		$checkinsert = false;
		try{
			$this->db->insert('testimoni',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			$checkinsert = false;
		}
		return $checkinsert;
	}
	public function getalluser(){
		$result = $this->db->get('testimoni');
		return $result->result();
	}

	public function UpdateUser($id,$data){
		$checkupdate = false;
		try{
			$this->db->where('id',$id);
			$this->db->update('testimoni',$data);
			$checkupdate = true;
		}catch (Exception $ex) {

			$checkupdate = false;
		}

		return $checkupdate;

	}

	public function DeleteUser($id){
		$checkupdate = false;
		try{
			$this->db->where('id',$id);
			$this->db->delete('testimoni');
			$checkupdate = true;
		}catch (Exception $ex) {
			$checkupdate = false;
		}
		return $checkupdate;
    }
    
    public function ambildata(){
		$result = $this->db->query("SELECT * from testimoni where status = 2");
		return $result->result();
    }
}
