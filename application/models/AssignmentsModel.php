<?php
class AssignmentsModel extends CI_model
{

    public function getSubjects()
    {
        $this->load->database();
        $getSubjects = $this->db->get('subjects');
        $subjects = $getSubjects->result();

        return $subjects;
    }

    public function insertData($dataSubjects, $dataFormInputs)
    {
        $this->load->database();
        $this->db->insert('subjects', $dataSubjects);
        $lastId = $this->db->insert_id();

        foreach ($dataFormInputs as $question) {
            if ($question !== '') {
                $dataArray = array(
                    'question' => $question,
                    'subject_id' => $lastId
                );
                $this->load->database();
                $this->db->insert('questions', $dataArray);
            }
        }
        return 'succes';
    }
}
