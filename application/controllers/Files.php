<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends MY_Controller
{
    
    function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->model('fileModel');
        $data['imports'] = $this->fileModel->getFiles();
        crender('index', $data);
    }
    
    public function setInactive($id)
    {
        $this->load->model('fileModel');
        $data['response'] = $this->fileModel->setInactive($id);
    }
}