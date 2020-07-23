<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function cek_komentar_id($komentar_idFor,$komentar_idMetaData) {

	if($komentar_idFor == $komentar_idMetaData) {
		return 'muncul';
	} else {
		return '';
	}
}