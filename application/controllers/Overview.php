<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
		$data['assignments'] = $this->OverviewModel->getAssignments();
		$this->load->view('index',$data);
	}

	public function overviewStudent($studentId, $assignmentId)
	{
		$this->load->model('OverviewModel');
		$data['$questionsAndAnswers'] = $this->OverviewModel->getAssignmentsQuestionsAnswers($studentId, $assignmentId);
		$data['students'] = $this->OverviewModel->getStudents($studentId);
		$data['subjects'] = $this->OverviewModel->getAssignments($assignmentId);
		$data['fileName'] = 'overviewStudent';
		$this->load->view('index',$data);
	}
}
