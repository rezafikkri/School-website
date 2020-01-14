<?php

/**
* 
*/
class Model_struktur extends CI_Model {

	public function getStruktur() {
		return $this->db->get('struktur');
	}

	public function editStruktur() {
		$data = [
			'url_struktur' => $this->input->post('url_struktur',true)
		];
		$this->db->update('struktur',$data);
		return false;
	}

	public function insertStruktur() {
		$data = [
			'struktur_id' => $this->uuid->generate_uuid(),
			'url_struktur' => $this->input->post('url_struktur',true)
		];
		$this->db->insert('struktur',$data);
		return false;
	}
}