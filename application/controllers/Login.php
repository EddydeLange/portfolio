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
    	crender('index');
    }

    public function Login()
    { 
        // wat de gebruiker heeft ingevuld 
        $userName = $_POST['Username'];  
        $password = $_POST['Password'];

        $data = $this->LoginModel->getUserData($userName); // data van de db

        if ($userName == $data[0]->name && $password == $data[0]->ov_number) {
            session_start();
            $_SESSION["username"] = $_POST['Username'];
        } else {
            echo("verkeerde login gegevens"); 
        }        
    }

    public function userLogout()
    {
        session_start();
        session_destroy();
        redirect('Login/index');
    }

}