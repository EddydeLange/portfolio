<?php
class AssignmentsModel extends CI_model {
    public function getSubjects() {
        $this->load->database();
        $getSubjects = $this->db->get('subjects');
        $subjects = $getSubjects->result();

        return $subjects;
    }
    public function formPage($id) {

        return $id;
    }
}

?>
