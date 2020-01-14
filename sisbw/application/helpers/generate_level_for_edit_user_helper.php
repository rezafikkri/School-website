<?php defined('BASEPATH') OR exit('No direct script access allowed');

function generate_level_user($level_input) {

	$ci = & get_instance();
	$listWhite = ['operator','admin','superAdmin'];

	/* jika level input kosong */
	if($level_input === null) {
		return 'operator';

	/* jika level login sama dengan operator dan level input tidak sama dengan operator*/
	} elseif($ci->session->userdata('SISBW')['level'] === 'operator' && $level_input != "operator") {
		return "operator";

	/* jika level login sama dengan admin dan level input sama dengan superAdmin */
	} elseif($ci->session->userdata('SISBW')['level'] === 'admin' && $level_input === 'superAdmin') {
		return 'admin';

	/* jika level input ada dalam listWhite */
	} elseif(in_array($level_input, $listWhite)) {
		return $level_input;

	} else {
		return 'operator';
	}
}