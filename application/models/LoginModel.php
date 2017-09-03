<?php
class LoginModel extends CI_Model
{
	public function getUserData(){
		$this->load->database();
		$this->db->where('name');
		$UserNameDB = $this->db->get('students')->result();
        
        return $UserNameDB;
	}
}

?>