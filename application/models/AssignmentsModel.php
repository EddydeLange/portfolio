<?php
class AssignmentsModel extends CI_model
{

    public function getSubjects($id = null)
    {
        $this->load->database();
        if ($id) {
            $this->db->where('id', $id);
        }
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
    }

    public function getAssignments($id)
    {
        $this->load->database();
        $this->db->where('questions.subject_id', $id);
        $getAssignments = $this->db->get('questions');
        $assignments = $getAssignments->result();

        return $assignments;
    }

    public function updateData($newQuestionVal, $questionId)
    {
        $this->load->database();
        $this->db->set('question', $newQuestionVal);
        $this->db->where('id', $questionId);
        $this->db->update('questions');
    }

    public function deleteQuestion($questionId)
    {
        $this->load->database();
        $this->db->where('id', $questionId);
        $this->db->delete('questions');
    }

    public function addNewQuestion($topicId, $newQuestionText)
    {
        $data = [
            'subject_id' => $topicId,
            'question'  => $newQuestionText
        ];
        $this->load->database();
        $this->db->insert('questions', $data);
    }

}
