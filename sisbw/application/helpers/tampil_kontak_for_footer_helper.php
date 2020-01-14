<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function get_kontak_for_footer() {

	$ci = & get_instance();
	$ci->load->model('Model_kontak','kontak');

	return $ci->kontak->getKontak()->row();
}