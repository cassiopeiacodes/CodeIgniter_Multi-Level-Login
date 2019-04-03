<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$config['error_prefix'] = '<small class="text-danger">';
$config['error_suffix'] = '</small>';
$config['login'] = array(
  array(
    'field'       => "username",
    'label'       => "username",
    'rules'       => "trim|required|callback_usernamematch",
    'errors'      => array(
                        'required'      => "*{field} tidak boleh kosong!",
                        'usernamematch'      => "*{field} tidak ditemukan!"
                      )
  ),
  array(
    'field'       => 'password',
    'label'       => 'Password',
    'rules'       => 'trim|callback_passwordmatch|required',
    'errors'      => array(
                        'required'  => "*{field} tidak boleh kosong!",
                        'passwordmatch'  => "*{field} tidak cocok!"
                      )
  )
);
$config['daftar'] =
array(
  array(
    'field' => 'username-daftar',
    'label' => 'Username',
    'rules' => 'trim|required|is_unique[akun.username]',
    'errors' => array(
                  'required'  => "*{field} tidak boleh kosong!",
                  'is_unique' => "*{field} sudah digunakan!"
                )
  ),
  array(
    'field' => 'password-daftar',
    'label' => 'Kata Sandi',
    'rules' => 'trim|required|differs[username-daftar]',
    'errors' => array(
                  'required'  => "*{field} tidak boleh kosong!",
                  'differs'  => "*{field} tidak boleh sama {param}!"
                )
  ),
  array(
    'field' => 'level',
    'label' => 'Hak Akses',
    'rules' => 'trim|callback_levelmatch',
    'errors' => array(
                  'levelmatch'  => "*{field} harus di pilih!"
                )
  )
);
