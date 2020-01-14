<?php

/**
* 
*/
class Model_galeri extends CI_Model {
	
	public function insertFoto() {
		$data = [
			'foto_id' => $this->uuid->generate_uuid(),
			'url_foto' => $this->input->post('url_foto',true),
			'keterangan' => $this->input->post('keterangan',true),
			'post' => time()
		];
		$this->db->insert('foto',$data);
		return true;
	}

	public function editFoto() {
		$foto_id = $this->input->post('foto_id',true);
		$data = [
			'url_foto' => $this->input->post('url_foto',true),
			'keterangan' => $this->input->post('keterangan',true),
			'post' => time()
		];
		$this->db->where('foto_id',$foto_id);
		$this->db->update('foto',$data);
		return true;
	}

	public function deleteFoto() {
	 	$this->db->where('foto_id',$this->uri->segment(3));
	 	$this->db->delete('foto');
	 	return true;
	}

	public function getFoto($limit=0,$offset=0) {
		if($limit != 0 && $offset==0) {
			$this->db->limit($limit);
		} else if($limit != 0 && $offset != 0) {
			$this->db->limit($limit,$offset);
		}
		$this->db->order_by("post","DESC");
		return $this->db->get("foto")->result();
	}

	public function getOneFoto() {
		return $this->db->get_where('foto',['foto_id'=>$this->uri->segment(3)])->row();
	}

	// video
	public function getVideo($limit=0,$offset=0) {
		if($limit != 0 && $offset==0) {
			$this->db->limit($limit);
		} else if($limit != 0 && $offset != 0) {
			$this->db->limit($limit,$offset);
		}
		$this->db->order_by('post','DESC');
		return $this->db->get('video')->result();
	}

	public function getOneVideo() {
		return $this->db->get_where('video',['video_id'=>$this->uri->segment(3)])->row();
	}
	
	public function insertVideo() {
		$data = [
			'video_id' => $this->uuid->generate_uuid(),
			'url_video' => $this->input->post('url_video',true),
			'post' => time()
		];
		$this->db->insert('video',$data);
		return true;
	}

	public function editVideo() {
		$video_id = $this->input->post('video_id',true);
		$data = [
			'url_video' => $this->input->post('url_video',true),
			'post' => time()
		];
		$this->db->where('video_id',$video_id);
		$this->db->update('video',$data);
		return true;
	}

	public function deleteVideo() {
	 	$this->db->where('video_id',$this->uri->segment(3));
	 	$this->db->delete('video');
	 	return true;
	}
}