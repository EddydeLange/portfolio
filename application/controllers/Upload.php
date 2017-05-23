<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		crender('index');
	}

	public function csv()
	{
		redirect('files/index');
	}
}
