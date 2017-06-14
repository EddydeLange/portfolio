<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FileHistory extends MY_Controller
{
 


    public function index()
    {
        $this->load->model('fileModel');
        $data['imports'] = $this->fileModel->getFiles();
        crender('index', $data);
    }

}