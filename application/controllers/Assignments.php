<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
	*$PHPfileName is needed when you link to other file of your project but you want to keep the css and js files.
*/
class Assignments extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->library('session');
		$this->load->model('AssignmentsModel');
        $data['PHPfileName'] = 'assignments/overviewAssignments';
		crender('index', $data);
	}
}
