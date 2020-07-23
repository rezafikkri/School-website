<?php

/**
* 
*/
class Model_sejarah extends CI_Model {

	public function getSejarah() {
		return $this->db->get('sejarah');
	}

	public function insertSejarah() {
		$data = [
			'sejarah_id' => $this->uuid->generate_uuid(),
			'judul_sejarah' => $this->input->post('judul_sejarah'),
			'sejarah' => $this->input->post('sejarah',false)
		];
		$this->db->insert('sejarah',$data);
		return true;
	}

	public function editSejarah() {
		$data = [
			'judul_sejarah' => $this->input->post('judul_sejarah'),
			'sejarah' => $this->input->post('sejarah',false)
		];
		$this->db->update('sejarah',$data);
		return true;
	}
}