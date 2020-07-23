<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function message_id() {
	return	[
		'required' => '{field} tidak boleh kosong.',
		'max_length' => '{field} maksimal {param} karakter.',
		'min_length' => '{field} minimal {param} karakter.',
		'is_unique' => '{field} telah digunakan, Mohon cari {field} yang lain!.'
	];
}