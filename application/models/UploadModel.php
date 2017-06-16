<?php
class UploadModel extends CI_Model {

    public function uploadFunction()
    {
            parent::__construct();
            // Your own constructor code
    }

    public function insertFileName($fileData)
    {        
    	$this->load->database();
		$data = [
			'filename' => $fileData['file_name'],
			'file_size' => $fileData['file_size'],
			'file_date' => date("d-m-Y"),
			'file_active' => 1
		];
		$this->db->insert('imports', $data);
    }

}