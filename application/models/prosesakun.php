<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class prosesakun extends CI_Model {
	public function __construct()
	{
		parent::__construct();
    $this->load->helper(array('array'));
	}

	public function _level()
  {
    $query    = $this->db->get('level');
    $data     = $query->result_array();
    foreach ($data as $value) {
      $dataolah[$value['level']] = $value['nama'];
    }
    $dataolah[0]  = 'Pilih Level Hak Akses';
    ksort($dataolah);
    //echo "<pre>"; var_dump($dataolah); echo "</pre>";
    return $dataolah;
  }
	public function namalevel($lvl)
	{
		$this->db->where('level',$lvl);
		$query = $this->db->get('level')->row_array();
		return $query['nama'];
	}

	public function login($uname,$pass)
	{
		$this->db->select('id, level, username');
		$this->db->where('username',$uname);
		$query = $this->db->get('akun')->row_array();

		foreach ($query as $key => $value) {
			if($key == "level"){
				$sess_data[$key] = $this->prosesakun->namalevel($value);
			}
			else {
				$sess_data[$key]		= $value;
			}
		}
		return $this->session->set_userdata($sess_data);
	}

	public function daftar($uname,$pass,$lvl)
	{
		$pass		= password_hash($pass, PASSWORD_DEFAULT, array('cost' => 13));
		$datamasuk = array(
			'username'		=> $uname,
			'password'		=> $pass,
			'level'				=> $lvl
		);
		return $this->db->insert('akun',$datamasuk);
	}
}
