<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FileHistory extends MY_Controller
{

    public function index()
    {
        $this->load->model('FileHistoryModel');
        $data['imports'] = $this->FileHistoryModel->getFiles();
        crender('index', $data);
    }

    public function deleteFile($id)
    {
        $this->load->model('fileHistoryModel');
        $data['response'] = $this->fileHistoryModel->deleteFile($id);
    }

}