<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('UploadModel');
    }

    public function index($error = null)
    {
		crender('index', array('error' => ''));
    }

    public function uploadFile() { 
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'csv|xls|xlsx|xml'; 
         $config['max_size']      = 10000; 

         $this->load->library('upload', $config);
         $this->upload->initialize($config);
    
        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            redirect('upload/index', $error); 
        }
      
        $this->UploadModel->insertFileName($this->upload->data());
       	redirect('files/index');
        
      } 

  	public function getAnswers($data) {
  		return $data;
  	}
}
