<?php

/**
* 
*/
class Model_komentar extends CI_Model {
	
	public function insertKomentar($nama) {

		$data = [
			'komentar_id' => $this->uuid->generate_uuid(),
			'berita_id' => $this->input->post('berita_id'),
			'nama' => $nama,
			'komentar' => $this->input->post('komentar'),
			'post' => time()
		];
		$this->db->insert('komentar',$data);
		return true;
	}

	public function balasKomentar($nama) {
		$data = [
			'balas_id' => $this->uuid->generate_uuid(),
			'komentar_id' => $this->input->post('komentar_id'),
			'nama' => $nama,
			'komenBalas' => $this->input->post('komenBalas'),
			'post' => time()
		];
		$this->db->insert('komentarbalas',$data);
		return true;
	}

	public function deleteKomentarBalasAll($komentar_id) {
		$this->db->where(['komentar_id'=>$komentar_id]);
		$this->db->delete('komentarbalas');
		return true;
	}

	public function deleteKomentar() {
		$berita_id = $this->uri->segment(3);
		$komentar_id = $this->uri->segment(4);
		// delete all komentar balas where komentar id
		$this->deleteKomentarBalasAll($komentar_id);
		// delete komentar
		$this->db->where(['berita_id'=>$berita_id,'komentar_id'=>$komentar_id]);
		$this->db->delete('komentar');
		return true;
	}

	public function deleteKomentarBalas() {
		$komentar_id = $this->uri->segment(4);
		$balas_id = $this->uri->segment(5);
		$this->db->where(['balas_id'=>$balas_id,'komentar_id'=>$komentar_id]);
		$this->db->delete('komentarbalas');
		return true;
	}

	public function getKomentar($berita_id) {

		$this->db->select('komentar_id,nama,komentar,post');
		$this->db->where('berita_id',$berita_id);
		$this->db->order_by('post','DESC');
		return $this->db->get('komentar');
	}

	public function getKomenBalas($komentar_id) {

		$this->db->select('balas_id,nama,komenBalas,post');
		$this->db->where('komentar_id',$komentar_id);
		$this->db->order_by('post','ASC');
		return $this->db->get('komentarbalas')->result();
	}
}