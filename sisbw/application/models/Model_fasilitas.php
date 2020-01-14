<?php

/**
* 
*/
class Model_fasilitas extends CI_Model {
	
	public function getFasilitas() {
		return $this->db->get('fasilitas')->result();
	}

	public function getOneFasilitas() {
		return $this->db->get_where('fasilitas',['fasilitas_id'=>$this->uri->segment(3)])->row();
	}

	public function insertFasilitas() {
		$data = [
			'fasilitas_id' => $this->uuid->generate_uuid(),
			'url_img' => $this->input->post('url_img',true),
			'keterangan' => $this->input->post('keterangan',true)
		];
		$this->db->insert('fasilitas',$data);
		return true;
	}

	public function editFasilitas() {
		$fasilitas_id = $this->input->post('fasilitas_id',true);
		$data = [
			'url_img' => $this->input->post('url_img',true),
			'keterangan' => $this->input->post('keterangan',true)
		];
		$this->db->where('fasilitas_id',$fasilitas_id);
		$this->db->update('fasilitas',$data);
		return true;
	}

	public function deleteFasilitas() {
		$this->db->where('fasilitas_id',$this->uri->segment(3));
		$this->db->delete('fasilitas');
		return true;
	}
}