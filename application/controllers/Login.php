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
        $UserNameDB = $data['Students'] = $this->LoginModel->getUserData(); // wat er in de db staat

        $UserName = $_POST['Username']; // wat de gebruiker heeft ingevuld
        //$PassWord = $_POST['Password'];

            if ($UserName == $UserNameDB) {
                echo ('gelijk aan elkaar');
            } else{
                echo("niet gelijk aan elkaar");
            }
               
        }
    
}