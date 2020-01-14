<?php

/**
* 
*/
class Model_visi_misi extends CI_Model {

	public function getVisiMisi() {
		return $this->db->get('visi_misi');
	}

	public function insertVisiMisi() {
		$data = [
			'visi_misi_id' => $this->uuid->generate_uuid(),
			'visi' => $this->input->post('visi',false),
			'misi' => $this->input->post('misi',false)
		];
		$this->db->insert('visi_misi',$data);
		return true;
	}

	public function editVisiMisi() {
		$data = [
			'visi' => $this->input->post('visi',false),
			'misi' => $this->input->post('misi',false)
		];
		$this->db->update('visi_misi',$data);
		return true;
	}
}