<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function linkDownload($url) {

	$pattern = ['/https:\/\//i'];
	foreach($pattern as $p) {
		if(!preg_match($p, $url)) {

			$urlH = explode("/", $url);
			$return = "https://".end($urlH);
			return $return;

		} else {
			return $url;
		}
	}
}