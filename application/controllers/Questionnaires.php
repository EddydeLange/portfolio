<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
	*$PHPfileName is needed when you link to other file of your project but you want to keep the css and js files.
*/
class questionnaires extends MY_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model('AssignmentsModel');
    }


 	//START INDEXES
	public function index()
	{
		$this->load->library('session');
		$data['subjects'] = $this->AssignmentsModel->getSubjects();
        $data['PHPfileName'] = 'questionnaires/overviewQuestionnaires';
		crender('index', $data);
	}

	public function overviewQuiz($id = null)
	{
		$data['questions'] = $this->AssignmentsModel->getAssignments($id);
		$data['topicId'] = $id;
    	$data['PHPfileName'] = 'Questionnaires/Quiz';
		
		crender('index', $data);
	}
	//END INDEXES
}
