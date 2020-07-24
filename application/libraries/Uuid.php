<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Uuid {
	
	static public function generate_uuid() {

		return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x', 
			mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
			mt_rand( 0, 0xffff ),
			mt_rand( 0, 0x0fff ) | 0x4000,
			mt_rand( 0, 0x3fff ) | 0x8000,
			mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
		);
	}

	static public function change_idForQuery_IN($id) {
		
		$arrid = explode(',', $id);
		for($i = 0; $i < count($arrid); $i++) {
			$idA[] = "'".$arrid[$i]."'";
		}

		return $idH = implode(',', $idA);
	}
}