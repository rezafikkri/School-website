<?php

/**
* 
*/
class Model_jurusan extends CI_Model {

	public function getJurusan() {
		return $this->db->get("jurusan")->result();
	}

	public function getOneJurusan() {
		return $this->db->get_where('jurusan',['jurusan_id' => $this->uri->segment(3)])->row();
	}
	
	public function insertJurusan() {
		$data = [
			'jurusan_id' => $this->uuid->generate_uuid(),
			'jurusan' => $this->input->post('jurusan'),
			'url_logo' => $this->input->post('url_logo'),
			'keterangan' => $this->input->post('keterangan',false)
		];
		$this->db->insert('jurusan',$data);
		return true;
	}

	public function editJurusan() {
		$jurusan_id = $this->input->post('jurusan_id');
		$data = [
			'jurusan' => $this->input->post('jurusan'),
			'url_logo' => $this->input->post('url_logo'),
			'keterangan' => $this->input->post('keterangan',false)
		];
		$this->db->where('jurusan_id',$jurusan_id);
		$this->db->update('jurusan',$data);
		return true;
	}

	public function deleteJurusan() {
		$this->db->where('jurusan_id',$this->uri->segment(3));
		$this->db->delete('jurusan');
		return true;
	}
}