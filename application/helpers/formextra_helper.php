<?php
/**
*   Dibuat untuk mempermudah penambahan form pada website
*/

defined('BASEPATH') OR exit('No direct script access allowed');

function _login()
{
  $data['open']     = array(
    'class'         => 'form-group',
    'id'            => 'login',
  );
  $data['username'] = array(
    'name'					=> 'username',
    'id'   					=> 'username',
    'type'					=> 'text',
    'class'					=> 'form-control my-2',
    'value'					=> set_value('username'),
    'placeholder'		=> 'Masukkan Username'
  );
  $data['password'] = array(
    'name'					=> 'password',
    'id'						=> 'password',
    'type'					=> 'password',
    'class'					=> 'form-control my-2',
    'value'					=> set_value('password'),
    'maxlength'			=> 20,
    'placeholder'		=> 'Masukkan Password',
  );
  $data['login'] = array(
    'name'					=> 'daftar',
    'type'					=> 'submit',
    'class'					=> 'btn btn-primary btn-block my-4',
    'content'				=> 'Masuk',
    'title'         => 'Login ke Akun'
  );

  return $data;
}

function _daftar($opt)
{
  $data['open']     = array(
    'class'         => 'form-group m-auto',
    'id'            => 'daftar'
  );
  $data['username'] = array(
    'name'					=> 'username-daftar',
    'id'   					=> 'username-daftar',
    'type'					=> 'text',
    'class'					=> 'form-control my-2',
    'value'					=> set_value('username-daftar'),
    'placeholder'		=> 'Masukkan Username'
  );
  $data['password'] = array(
    'name'					=> 'password-daftar',
    'id'						=> 'password-daftar',
    'type'					=> 'password',
    'class'					=> 'form-control my-2',
    'value'					=> set_value('password-daftar'),
    'maxlength'			=> 20,
    'placeholder'		=> 'Masukkan Password'
  );
  $data['level'] = array(
    'name'					=> 'level',
    'id'						=> 'level',
    'type'					=> 'text',
    'class'					=> 'form-control my-2',
    'value'					=> set_value('level'),
    'options'       => $opt,
  );
  $data['daftar'] = array(
    'name'					=> 'daftar',
    'type'					=> 'button',
    'class'					=> 'btn btn-warning btn-block my-4',
    'content'				=> 'Daftar Sekarang',
    'title'         => 'Lakukan Pendaftaran',
    'data-toggle'   => 'modal',
    'data-target'   => '.daftar-modal'
  );
  return $data;
}
