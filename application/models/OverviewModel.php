<?php
class OverviewModel extends CI_model {
    public function getData() {
        $this->load->database();
        $GetStudents = $this->db->get('students');
        $students   = $GetStudents->result();
        return $students;
    }
}
?>
