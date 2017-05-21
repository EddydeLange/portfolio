<?php
class OverviewModel extends CI_model {
    public function getStudents($studentId = null) {
        $this->load->database();
        if (!is_null($studentId)) {
            $this->db->where('id', $studentId);
        }
        $GetStudents = $this->db->get('students');
        $students   = $GetStudents->result();

        return $students;
    }

    public function getAssignments($assignmentId = null) {
        $this->load->database();
        if (!is_null($assignmentId)) {
            $this->db->where('id', $assignmentId);
        }
        $getAssignments = $this->db->get('subjects');
        $assignments = $getAssignments->result();

        return $assignments;
    }

    public function getAssignmentsQuestionsAnswers($studentId, $assignmentId) {

        $this->load->database();
        $this->db->join('answers', 'answers.question_id = questions.id', 'left outer');
        $this->db->where('answers.student_id', $studentId);
        $this->db->where('questions.subject_id', $assignmentId);
        $getQuestionsAndAnswers = $this->db->get('questions');
        $questionsAndAnswers = $getQuestionsAndAnswers->result();

        return $questionsAndAnswers;

    }
}
?>
