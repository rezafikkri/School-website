<?php

/**
* 
*/
class Model_kontak extends CI_Model {

	public function getKontak() {
		return $this->db->get('kontak');
	}

	public function insertKontak() {
		$data = [
			'kontak_id' => $this->uuid->generate_uuid(),
			'no_telp' => $this->input->post('no_telp'),
			'email'	 => $this->input->post('email'),
			'facebook' => $this->input->post('facebook'),
			'alamat' => $this->input->post('alamat')
		];
		$this->db->insert('kontak',$data);
		return true;
	}

	public function editKontak() {
		$data = [
			'no_telp' => $this->input->post('no_telp'),
			'email'	 => $this->input->post('email'),
			'facebook' => $this->input->post('facebook'),
			'alamat' => $this->input->post('alamat')
		];
		$this->db->update('kontak',$data);
		return true;
	}
}