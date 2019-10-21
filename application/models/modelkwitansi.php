<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelkwitansi extends CI_Model {

	public function __construct() {
		parent::__construct();


	}

  public function InsertData($data){
		$checkinsert = false;
		try{
			$this->db->insert('kwitansi',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			$checkinsert = false;
		}
		return $checkinsert;
	}
	public function getalluser(){
		$result = $this->db->get('kwitansi');
		return $result->result();
	}

	public function UpdateUser($id,$data){
		$checkupdate = false;
		try{
			$this->db->where('id',$id);
			$this->db->update('kwitansi',$data);
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
			$this->db->delete('kwitansi');
			$checkupdate = true;
		}catch (Exception $ex) {
			$checkupdate = false;
		}
		return $checkupdate;
    }
    
    public function cek($order){
		$result = $this->db->where('nama_order',$order)->where('status = 1')->get('kwitansi');
		return $result->row();
	}
}
