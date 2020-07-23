<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function generateFileUploadErrors() {

	$ci = & get_instance();

	$error = $ci->upload->display_errors('<p class="warning">', '</p>');
	$ci->session->set_userdata('error',$error);

	return true;
}

function getFileUploadErrors() {

	$ci = & get_instance();

	$error = $ci->session->userdata('error');
	$ci->session->unset_userdata('error');

	return $error;
}