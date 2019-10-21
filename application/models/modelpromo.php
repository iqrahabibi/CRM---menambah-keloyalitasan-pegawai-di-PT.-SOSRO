<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelpromo extends CI_Model {

	public function __construct() {
		parent::__construct();


	}

  public function InsertData($data){
		$checkinsert = false;
		try{
			$this->db->insert('promo',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			$checkinsert = false;
		}
		return $checkinsert;
	}

	public function getalluser(){
    $result = $this->db->get('promo');
    return $result->result();
  }
	

	public function Update($id,$data){
		$checkupdate = false;
		try{
			$this->db->where('id',$id);
			$this->db->update('promo',$data);
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
			$this->db->delete('promo');
			$checkupdate = true;
		}catch (Exception $ex) {
			$checkupdate = false;
		}
		return $checkupdate;
    }
}
