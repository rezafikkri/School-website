<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function generateWakilandGuru($data) {

	$hasil = [];
	$no = 0;
	foreach($data as $d) {
		if(strtolower($d->jabatan) == "wakil kepala sekolah") {
			$hasil['id'] = $d->guru_staf_id;
			$hasil['nama'] = $d->nama;
			$hasil['jabatan'] = $d->jabatan;
			$hasil['keterangan'] = $d->keterangan;
			$hasil['kategori'] = $d->kategori;
			$hasil['url_fotoProfile'] = $d->url_fotoProfile;

			unset($data[$no]);
			break;
		}

		$no++;
	}

	if(count($hasil) === 0) {
		$hasil = null;
	}

	return [$hasil,$data];
}