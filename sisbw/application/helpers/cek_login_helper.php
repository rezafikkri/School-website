<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function cek_login() {
	$ci = & get_instance();
	$login = $ci->session->userdata('SISBW');
	if($login['login'] != 'yes') {
		return 'noLogin';
	} else {
		return 'yesLogin';
	}
}

function cek_login_for_page_login() {
	$ci = & get_instance();
	$login = $ci->session->userdata('SISBW');
	if($login['login'] == 'yes') {
		redirect('adminHome');
	}
}