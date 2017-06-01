<?php
	class file_model extends CI_Model {

        public function getFiles() {
        	
        	$this->load->database();
        	$this->db->where('file_active', 1);
    		$imports = $this->db->get('imports')->result();
    		
    		return $imports;
        }

        public function deleteFile(){

        	$this->load->database();
        	$this->db->set('file_active', 0);
			$this->db->where('id', $id);
			$this->db->update('file_active');

			return 'gelukt';
        }

	}
?>
