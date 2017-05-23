<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('file_model');
		$data['fileNames'] = $this->file_model->getFiles();
		crender('index', $data);
	}
}
