 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('url');

        // load custom helpers
        $this->load->helper('view');

        $CI =& get_instance();
        $CI->basic();
    }
    public function basic(){}

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
