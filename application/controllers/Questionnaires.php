<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
	*$fileNameView is needed when you link to other file of your project but you want to keep the css and js files.
*/
class questionnaires extends MY_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('AssignmentsModel');
    }

	public function index()
	{
		$this->load->library('session');
		$data['subjects'] = $this->AssignmentsModel->getSubjectsQuestionnaires();
        $data['fileNameView'] = 'questionnaires/overviewQuestionnaires';
		crender('index', $data);
	}

	public function overviewQuiz($id = null)
	{
		$data['questions'] = $this->AssignmentsModel->getAssignments($id);
		$data['subjects'] = $this->AssignmentsModel->getSubjectsQuestionnaires($id);
    	$data['fileNameView'] = 'Questionnaires/quiz';
		crender('index', $data);
	}

}
