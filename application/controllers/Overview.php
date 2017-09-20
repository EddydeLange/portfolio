<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
	*$fileNameView is needed when you link to other file of your project but you want to keep the css and js files.
*/
class Overview extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('OverviewModel');
	}

	public function index()
	{
	 	$data['students'] = $this->OverviewModel->getStudents();
		crender('index', $data);
	}

	public function overviewStudent($studentId, $assignmentId)
	{
		$data['questionsAndAnswers'] = $this->OverviewModel->getAssignmentsQuestionsAnswers($studentId, $assignmentId);
		$data['student'] = $this->OverviewModel->getStudents($studentId);
		$saveStudentId = $studentId;
		$studentId = null;
		$data['subject'] = $this->OverviewModel->getAssignments($studentId, $assignmentId);
		$data['fileNameView'] = 'overviewStudent';
		crender('index', $data);
	}

	public function overviewAssignmentsStudent($studentId)
	{
		$data['student'] = $this->OverviewModel->getStudents($studentId);
		$data['assignments'] = $this->OverviewModel->getAssignments($studentId);
		$data['fileNameView'] = 'overviewAssignmentsStudent';
		crender('index', $data);
	}
}
