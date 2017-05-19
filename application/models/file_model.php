
<?php	
	class file_model extends CI_Model {

        public function getDatabase() {
           	$this->load->database();	
			$getImports = $this->db>get('imports');
			$imports = $getImports->result();
        }

	}
?>