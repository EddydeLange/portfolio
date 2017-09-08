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
        $UserName = $_POST['Username'];  
        $PassWord = $_POST['Password'];

        $data = $this->LoginModel->getUserData($UserName); // data van de db
        $_SESSION["username"] = $_POST['Username'];
        

            if ($UserName == $data[0]->name && $PassWord == $data[0]->ov_number) {
                echo ($_SESSION["username"]);
                session_start();
                
            } else {
                echo("verkeerde login gegevens");
                // session_unset(); 
                // session_destroy(); 
            }
               
        }
    
}