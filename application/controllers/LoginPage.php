<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginPage extends MY_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }

    public function index()
    {
    	crender('index', $data);
    }


}

?>