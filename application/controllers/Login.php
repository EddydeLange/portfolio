<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{
	function __construct()
    {
        parent::__construct();
        $this->load->model('loginModel');
    }

    public function index()
    {
    	crender('index');
        //0 loginRender('index');
    }

    public function Login()
    { 
        // wat de gebruiker heeft ingevuld 
        $userName = $_POST['Username'];  
        $password = $_POST['Password'];
        $data = $this->loginModel->getUserData($userName); // data van de db
        $result = (object)["statusCode" => 500, "message" => ""];

        try {
            if ($userName == $data[0]->name && $password == $data[0]->ov_number) {
                // session_start();
                // $_SESSION["username"] = $_POST['Username'];
                var_dump($data);
                $result->statusCode = 200;
                $result->message = 'success';
                return json_encode($result);
            } else {
                throw new Exception('False login credentials.');
            }
        } catch (Exception $e) {
            $result->statusCode = 403;
            $result->message = $e;
            json_encode($result);
            var_dump($result);
        }

        return json_encode($result);
    }

    public function userLogout()
    {
        session_start();
        session_destroy();
        redirect('Login/index');
        exit;
    }

}