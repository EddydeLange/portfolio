<?php
class StudentModel extends CI_Model {

   public $name;
   public $ov_number;

   public function insertEntry($name, $ov_number)
    {
        $this->name   = $name; 
        $this->ov_number  = $ov_number;

        $this->db->insert('students', $this);
    }

}