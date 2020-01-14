<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function generate_post($post=null) {
	if($post != null) {

		date_default_timezone_set("Asia/Jakarta");

		$selisih = time()-$post;
		$detik = $selisih;
		$menit = $selisih/60;
		$jam = $selisih/(60*60);
		$hari = $selisih/(60*60*24);

		if($detik < 10) {
			return "baru saja";

		} else if($detik < 60) {
			return ceil($detik)." detik";

		} else if($menit < 60) {
			return ceil($menit)." menit";

		} else if($jam <= 23) {
			return ceil($jam)." jam";

		} else if($hari < 3) {
			return ceil($hari)." hari";

		} else {
			return date('d M Y',$post);
		}

	} else {
		return "";
	}
}