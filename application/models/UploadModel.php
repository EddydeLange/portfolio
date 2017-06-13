<?php
class UploadModel extends CI_Model {

    public function uploadFunction()
    {
            parent::__construct();
            // Your own constructor code
    }

    public function insertFileName($fileName)
    {        	
    	$this->load->database();
		$data = array('filename' => $fileName);
		$this->db->insert('imports', $data);
    }

}