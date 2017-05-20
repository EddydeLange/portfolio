<?php
	class file_model extends CI_Model {

        public function getDatabase() {
           	$this->load->database();
			$getImports = $this->db->get('imports');
			$imports = $getImports->result();
        }

        public function getFiles() {
        	$fileNames = [];
        	$this->load->database();
    		$imports = $this->db->get('imports')->result();
    		foreach ($imports as $import) {
    			$fileNames[] = $import->filename;
    		}
    		return $fileNames;
        }
	}
?>
