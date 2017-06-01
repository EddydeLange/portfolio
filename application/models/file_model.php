<?php
	class file_model extends CI_Model {

        public function getFiles() {
        	
        	$this->load->database();
        	$imports = $this->db->get('imports')->result();
    		
    		return $imports;
        }

	}
?>
