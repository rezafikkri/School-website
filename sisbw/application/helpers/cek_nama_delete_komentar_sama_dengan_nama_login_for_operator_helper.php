<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function cek_nama_yang_delete_komentar($nama_yang_komen) {

	$ci = & get_instance();
	if( $ci->session->userdata('SISBW')['level'] == 'operator' && $nama_yang_komen == $ci->session->userdata('SISBW')['nama'] ) {
		return true;

	} elseif( $ci->session->userdata('SISBW')['level'] == 'admin' && $nama_yang_komen == $ci->session->userdata('SISBW')['nama'] ) {
		return true;

	} elseif( $ci->session->userdata('SISBW')['level'] == 'superAdmin' ) {
		return true;
	} else {
		return false;
	}
}