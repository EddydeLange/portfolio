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
        loginRender('index');
    }

    public function Login()
    { 
        // wat de gebruiker heeft ingevuld 
        $userName = $_POST['Username']; 
        $password = $_POST['Password'];
        $admin = ('1');
        $data = $this->loginModel->getUserData($userName); // data van de db
        
        if ($userName == $data[0]->name && $password == $data[0]->ov_number) {
            session_start();
            $_SESSION["username"] = $_POST['Username'];

            if ($admin == $data[0]->admin) {
                // $_SESSION["admin"] = [$data[0]->admin];
                redirect('Files/index');
                $_SESSION["auth"] = ['admin'];
            } elseif ($admin !== $data[0]->admin) {
                // $_SESSION["user"] = [$data[0]->admin];
                $_SESSION["auth"] = ['user'];
                redirect('Overview/index');  
            }
        } else {
        // error = ....

        // $this->view ..... login
        }
             
    }

    //<?php if ( $_SESSION["admin"] = ['1']) { ?
    // <!--  <?php } ?
    //<?php }  elseif ( $_SESSION["user"] = ['0']) {  ?

    public function userLogout()
    {
        session_start();
        session_destroy();
        redirect('');
        exit;
    }

}