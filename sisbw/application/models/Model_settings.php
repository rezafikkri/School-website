<?php

/**
* 
*/
class Model_settings extends CI_Model {

	public function tampilLogoSekolah() {
	    return $this->db->get('logo_sekolah');
	}
	
	public function insertLogoSekolah($upload_data) {

		$data = [
			'logo_sekolah_id' => $this->uuid->generate_uuid(),
			'file_name' => $upload_data[0]['file_name']
		];
		$this->db->insert('logo_sekolah',$data);
		return true;
	}

	public function updateLogoSekolah($upload_data,$logo_sekolah_id) {

		$data = [
			'file_name' => $upload_data[0]['file_name']
		];
		$this->db->where('logo_sekolah_id',$logo_sekolah_id);
		$this->db->update('logo_sekolah',$data);
		return true;
	}

	/* opening word */

	public function tampilOpeningWord() {
	    return $this->db->get('opening_word');
	}

	public function insertOpeningWord() {
	    $data = [
	    	'opening_word_id' => $this->uuid->generate_uuid(),
	    	'nama_sekolah' => $this->input->post('nama_sekolah'),
	    	'url_background' => $this->input->post('url_background'),
	    	'word' => $this->input->post('word',false)
	    ];
	    $this->db->insert('opening_word',$data);
	    return true;
	}

	public function editOpeningWord() {
	    $data = [
	    	'nama_sekolah' => $this->input->post('nama_sekolah'),
	    	'url_background' => $this->input->post('url_background'),
	    	'word' => $this->input->post('word',false)
	    ];
	    $this->db->update('opening_word',$data);
	    return true;
	}
}