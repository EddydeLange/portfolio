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
        $data['students'] = $this->LoginModel->getUserData(); // data van de db

        $UserName = $_POST['Username']; // wat de gebruiker heeft ingevuld
        //$PassWord = $_POST['Password'];

            if ($UserName == $data) {
                echo ('gelijk aan elkaar!');
            } else{
                echo("niet gelijk aan elkaar!");
            }
               
        }
    
}