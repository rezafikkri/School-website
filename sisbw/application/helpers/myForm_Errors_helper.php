<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function generate_errors($arr=null,$old=true,$metaData=null) {

	if($arr != null && is_array($arr)) {

		$ci = & get_instance();
	    $hasil_errors = [];
	    $hasul_old = [];
	    for($i = 0; $i < count($arr); $i++) {
	        $hasil_errors[$arr[$i]]=form_error($arr[$i]);

	        if($old == true) {
	        	$hasil_old[$arr[$i]]=set_value($arr[$i]);
	    	}
	    }

	    $ci->session->set_userdata('errors',$hasil_errors);
	    if($old == true) {
	    	$ci->session->set_userdata('old_value',$hasil_old);
	    }
	    if($metaData != null) {
	    	$ci->session->set_userdata('metaData',$metaData);
	    }
	    return true;
	}

	return false;
}

function get_errors() {

	$ci = & get_instance();
	$return = $ci->session->userdata('errors');

	$ci->session->unset_userdata('errors');
	return $return;
}

function get_old_value() {

	$ci = & get_instance();
	$return = $ci->session->userdata('old_value');

	$ci->session->unset_userdata('old_value');
	return $return;
}

function get_metaData() {

	$ci = & get_instance();
	$return = $ci->session->userdata('metaData');

	$ci->session->unset_userdata('metaData');
	return $return;
}