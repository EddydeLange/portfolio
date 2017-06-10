<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
	*$PHPfileName is needed when you link to other file of your project but you want to keep the css and js files.
*/
class Overview extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->library('session');
		$this->load->model('OverviewModel');
	 	$data['students'] = $this->OverviewModel->getStudents();
		crender('index', $data);
	}

	public function overviewStudent($studentId, $assignmentId)
	{
		$this->load->model('OverviewModel');
		$data['questionsAndAnswers'] = $this->OverviewModel->getAssignmentsQuestionsAnswers($studentId, $assignmentId);
		$data['student'] = $this->OverviewModel->getStudents($studentId);
		$saveStudentId = $studentId;
		$studentId = null;
		$data['subject'] = $this->OverviewModel->getAssignments($studentId, $assignmentId);
		if ($data['subject'] == null) {
			return $this->overviewAssignmentsStudent($saveStudentId);
		} else {
			$data['PHPfileName'] = 'overviewStudent';
			crender('index', $data);
		}
	}

	public function overviewAssignmentsStudent($studentId)
	{
		$this->load->model('OverviewModel');
		$data['student'] = $this->OverviewModel->getStudents($studentId);
		$data['assignments'] = $this->OverviewModel->getAssignments($studentId);
		if ($data['assignments'] == null) {
			return $this->index();
		} else {
			$data['PHPfileName'] = 'overviewAssignmentsStudent';
			crender('index', $data);
		}
	}
}
