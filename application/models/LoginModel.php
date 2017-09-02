<?php
class LoginModel extends CI_Model
{
	public function getUserData(){
		$this->load->database();
		$getUserData = $this->db->select('name');
		$this->db->get('students');
		
		$Students = $getUserData->result();
	}
}

?>