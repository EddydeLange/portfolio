<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }

    public function index()
    {
    	crender('index'/*/,$data/*/);
    }

    public function Login(){
    	$answers = $this->input->post();
    	echo $answers;
    }


}

?>