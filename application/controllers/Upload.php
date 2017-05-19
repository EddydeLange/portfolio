<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('upload');
	}

	public function csv()
	{
		$this->load->view('files');
	}
}

