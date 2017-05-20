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
	 	$data['students'] = $this->OverviewModel->GetStudents();
		$data['assignments'] = $this->OverviewModel->getAssignments();
		$this->load->view('index',$data);
	}

	public function overviewStudent($studentId, $assignmentId)
	{
		die();
		$data['fileName'] = 'overviewStudent';
		$this->load->view('index',$data);
		var_dump($studentId);
		var_dump($assignmentId);
	}
}
