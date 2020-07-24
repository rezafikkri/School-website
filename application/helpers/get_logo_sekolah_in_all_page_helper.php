<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function getLogo() {
	$ci = & get_instance();
	$ci->load->model('Model_settings','settings');

	$logo = $ci->settings->tampilLogoSekolah()->row_array();

    if($logo && file_exists("assets/img/logo sekolah/".$logo['file_name'])) {
        return base_url('assets/img/logo sekolah/'.$logo['file_name']);
    } else {
        return 'School Website';
    }
}