<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function getLogo($href) {
	$ci = & get_instance();
	$ci->load->model('Model_settings','settings');

	$logo = $ci->settings->tampilLogoSekolah()->row_array();

    if($logo && file_exists("assets/img/logo sekolah/".$logo['file_name'])) {
        return '<a href="'.base_url($href).'" class="navbar-brand"><img class="lazy" data-src="'.base_url('assets/img/logo sekolah/'.$logo['file_name']).'" src=""></a>';
    } else {
        return anchor($href,'SISBW',['class'=>'navbar-brand text']);
    }
}