<?php

/**
* 
*/
class Model_home extends CI_Model {
	
	public function insertPengunguman() {

		$data = [
			'pengunguman_id' => $this->uuid->generate_uuid(),
			'judul' => $this->input->post('judul'),
			'isi' => $this->input->post('isi')
		];
		$this->db->insert('pengunguman',$data);
		return true;
	}

	public function editPengunguman() {

		$data = [
			'judul' => $this->input->post('judul'),
			'isi' => $this->input->post('isi')
		];
		$this->db->update('pengunguman',$data);
		return true;
	}

	public function getPengunguman() {
		return $this->db->get('pengunguman');
	}

	/* berita */

	public function insertBerita() {
		
		$data = [
			'judulBesar' => $this->input->post('judulBesar'),
			'judulKecil' => $this->input->post('judulKecil'),
			'urlImgUtama' => $this->input->post('urlImgUtama'),
			'isi' => $this->input->post('isi',false),
			'berita_id' => $this->uuid->generate_uuid(),
			'post' => time()
		];

		$this->db->insert('berita',$data);
		return true;
	}

	public function editBerita() {
		$berita_id = $this->input->post('berita_id');
		$data = [
			'judulBesar' => $this->input->post('judulBesar'),
			'judulKecil' => $this->input->post('judulKecil'),
			'urlImgUtama' => $this->input->post('urlImgUtama'),
			'isi' => $this->input->post('isi',false),
			'post' => time()
		];

		$this->db->where('berita_id',$berita_id);
		$this->db->update('berita',$data);
		return true;
	}

	public function deleteBerita() {
		
		$berita_id = $this->uri->segment(3);
		$this->db->where('berita_id',$berita_id);
		$del = $this->db->delete('berita');
		if(!$del) {

			if($this->db->error()['code'] === 1451) {
				return "dataForeignKey";
			} else {
				return "error";
			}

		} else {
			return $del;
		}
	}

	public function getBerita($limit=0,$offset=0) {
		if($limit != 0 && $offset == 0) {
			$this->db->limit($limit);
		} else if($limit !=0 && $offset != 0) {
			$this->db->limit($limit,$offset);
		}
		$this->db->order_by("post","DESC");
		return $this->db->get("berita")->result();
	}

	public function listBerita() {
		$this->db->select('berita_id, judulBesar, post');
		$this->db->where('berita_id !=',$this->uri->segment(3));
		return $this->db->get('berita')->result();
	}

	public function getOneBerita() {
		return $this->db->get_where('berita',['berita_id'=>$this->uri->segment(3)])->row();
	}
}