<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends MY_Controller
{

    function __construct() 
    {
        parent::__construct();
        $this->load->model('fileModel');
    }
    
    //START INDEXES
    public function index()
    {
        $data['imports'] = $this->fileModel->getFiles();
        crender('index', $data);
    }
    
    public function FileHistory()
    {
        $data['imports'] = $this->fileModel->getInactiveFiles();
        crender('index', $data);
    }
    //END INDEXES

    //CRUD FUNCTIONS START
    public function setInactive($id)
    {
        $data['response'] = $this->fileModel->setInactive($id);
    }

    public function deleteFile($id)
    {
        $data['response'] = $this->fileHistoryModel->deleteFile($id);
    }
    //CRUD FUNCTIONS END

}
