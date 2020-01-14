<?php

/**
* 
*/
class Model_kepala_sekolah extends CI_Model {
	
	public function getKepalaSekolah() {
		return $this->db->get_where('guru_staf',['kategori'=>'kepala_sekolah']);
	}

	public function insertKepalaSekolah() {
		$data = [
			'guru_staf_id' => $this->uuid->generate_uuid(),
			'url_fotoProfile' => $this->input->post('url_fotoProfile'),
			'nama' => $this->input->post('nama_kepala_sekolah'),
			'keterangan' => $this->input->post('keterangan',false),
			'jabatan' => 'Kepala Sekolah',
			'kategori' => 'kepala_sekolah'
		];
		$this->db->insert('guru_staf',$data);
		return true;
	}

	public function editKepalaSekolah() {
		$kepala_sekolah_id = $this->input->post('kepala_sekolah_id');
		$data = [
			'url_fotoProfile' => $this->input->post('url_fotoProfile'),
			'nama' => $this->input->post('nama_kepala_sekolah'),
			'keterangan' => $this->input->post('keterangan',false)
		];
		$this->db->where('guru_staf_id',$kepala_sekolah_id);
		$this->db->update('guru_staf',$data);
		return true;
	}
}