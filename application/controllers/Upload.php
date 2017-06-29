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


        $data = $this->upload->data();
        
        $file = fopen('./uploads/' . $this->upload->data('file_name'),"r");
		print_r($file);
		
 		

 		


 		//$file = fopen($data['full_path'], 'r');

		//$row = fgetcsv($file);
		//var_dump($row);
		//dd($row);


        //$this->load->model('StudentModel');
        //$this->StudentModel->insertEntry('test','test');




       	//redirect('files/index');
        
      } 

  	public function getAnswers($data) {
  		return $data;
  	}
}
