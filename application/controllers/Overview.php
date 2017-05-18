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

}
