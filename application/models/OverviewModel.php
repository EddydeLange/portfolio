<?php
class OverviewModel extends CI_model {
    public function GetStudents() {
        $this->load->database();
        $GetStudents = $this->db->get('students');
        $students   = $GetStudents->result();
        return $students;
    }

    public function getAssignments() {
        $this->load->database();
        $getAssignments = $this->db->get('subjects');
        $assignments = $getAssignments->result();
        return $assignments;
    }
}
?>
