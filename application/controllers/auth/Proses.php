<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
    $this->load->helper(array('formextra','form'));
		$this->load->model(array('prosesakun'));
    $this->load->library('form_validation');
	}

	//	proses pada saat login
	public function login()
	{
		if($this->form_validation->run('login')==FALSE){
			$this->session->set_flashdata('msg_data','Gagal melakukan login!');
			$data['login']	= _login();

			$this->load->view('inc\Header');
			$this->load->view('inc\Home',$data);
			$this->load->view('inc\Footer');
    }
    else{
			$uname	= $this->input->post('username');
			$pass		= $this->input->post('password');

			$this->prosesakun->login($uname,$pass);

			$nama = $this->session->userdata('username');
			$this->session->set_flashdata('msg_data',"Selamat datang kembali, $nama!");
			$level = $this->session->userdata('level');
			redirect($level);
    }
	}
	//	validasi untuk mencocokan username di database
	public function usernamematch($uname)
  {
    $this->db->where('username like binary',$uname);
    $query = $this->db->get('akun');
    if ($query->num_rows()==FALSE & $uname!="") return FALSE;
    else return TRUE;
  }
	//	validasi untuk mencocokan password di database
  public function passwordmatch($pass)
	{
    $query = $this->db->get('akun');
    $pass_hash = $query->row('password'); //	ambil data password dalam database
    if ($pass!="" & password_verify($pass,$pass_hash)==FALSE ) return FALSE;
    else return TRUE;
  }

	//	ekseskusi untuk melakukan pendaftaran
  public function daftar()
	{
    if($this->form_validation->run('daftar'))
    {
			$uname 	= $this->input->post('username-daftar');
			$pass		= $this->input->post('password-daftar');
			$lvl		= $this->input->post('level');

      $this->prosesakun->daftar($uname, $pass, $lvl);
			$this->session->set_flashdata('msg_data', 'Berhasil melakukan pendaftaran!');
			redirect(base_url());
    }
    else
    {
			$this->session->set_flashdata('msg_data', 'Gagal memasukkan data!');

      $_level = $this->prosesakun->_level();
  		//	ambil extra dari helper formextra
  		$data['daftar']	= _daftar($_level);

			$this->load->view('inc\Header');
			$this->load->view('inc\Daftar',$data);
			$this->load->view('inc\Footer');
    }
	}
	//	digunakan untuk melakukan validasi ke database tabel level
  public function levelmatch($lvl)
  {
    $this->db->where('level',$lvl);
    $query = $this->db->get('akun');
    if ($query->num_rows()==0 & $lvl==0) return FALSE;
    else return TRUE;
  }

	//	untuk ekseskusi logout
	public function logout()
	{
		$this->session->sess_destroy();
		session_start();
		$this->session->set_flashdata('msg_data','Selamat datang, Anda telah keluar dari sesi!');
		redirect(base_url());
	}
}
