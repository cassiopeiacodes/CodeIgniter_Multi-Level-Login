<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('inc\Header');
		$this->load->view('user\Admin');
		$this->load->view('inc\Footer');
	}
}
