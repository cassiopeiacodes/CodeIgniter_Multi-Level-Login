<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('formextra','form'));
		$this->load->model(array('prosesakun'));

		if ($this->session->has_userdata('level')) {
			redirect($this->session->userdata('level'));
		}
	}

	//	halaman awal berupa login
	public function index()
	{
		$data['login']	= _login();

		$this->load->view('inc\Header');
		$this->load->view('inc\Home',$data);
		$this->load->view('inc\Footer');
	}

	//	halaman awal berupa daftar
	public function daftar()
	{
		$_level = $this->prosesakun->_level();
		//	ambil extra dari helper formextra
		$data['daftar']	= _daftar($_level);

		$this->load->view('inc\Header');
		$this->load->view('inc\Daftar',$data);
		$this->load->view('inc\Footer');
	}
}
