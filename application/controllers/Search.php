<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
	*$fileNameView is needed when you link to other file of your project but you want to keep the css and js files.
*/
class Search extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('OverviewModel');
	}

    public function searchChange() {
        $studentId = null;
        $data['searchStudents'] = $this->OverviewModel->getStudents();
        echo json_encode($data["searchStudents"]);
    }

    public function getStudentsForSearching($studentId)
    {
        $data['student'] = $this->OverviewModel->getStudents($studentId);
        $data['fileNameView'] = 'overviewAssignmentsStudent';
        crender('index', $data);
    }
}
