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
    
    public function searchChange() {
        $studentId = null;
        $this->load->model('OverviewModel');
        $data['searchStudents'] = $this->OverviewModel->getStudents();
        echo json_encode($data["searchStudents"]);
    }

    public function getStudentsForSearching($studentId)
    {
        $this->load->model('OverviewModel');
        $data['student'] = $this->OverviewModel->getStudents($studentId);
        $data['PHPfileName'] = 'overviewAssignmentsStudent';
        crender('index', $data);
    }
}
