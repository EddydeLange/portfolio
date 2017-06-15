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
}
