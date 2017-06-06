<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends MY_Controller {

    function __construct()
    {
        parent::__construct();
         $this->load->helper(array('form', 'url')); 

    }

    public function index($error = null)
    {	
		crender('index', array('error' => ''));
    }

    public function uploadFile() { 
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
         $config['max_size']      = 10000; 
         $config['max_width']     = 1920; 
         $config['max_height']    = 1080;  
         $this->load->library('upload', $config);
            print_r($this->upload->display_errors()); 
         if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            print_r($this->upload->display_errors());
            redirect('upload/index', $error); 
         }
            
         else { 
            redirect('files/index');
         } 
      } 

  	public function getAnswers($data) {
  		return $data;
  	}
}
