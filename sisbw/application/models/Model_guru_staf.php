<?php

/**
* 
*/
class Model_guru_staf extends CI_Model {

	public function getGuru() {

		$this->db->where('kategori','guru');
		$this->db->order_by('nama','ASC');
		return $this->db->get('guru_staf');
	}

	public function getOneGuru() {
		return $this->db->get_where('guru_staf',['guru_staf_id'=>$this->uri->segment(3), 'kategori'=>'guru']);
	}
	
	public function insertGuru() {
		$data = [
			'guru_staf_id' => 1,
			'nama' => $this->input->post('nama_guru'),
			'jabatan' => $this->input->post('jabatan'),
			'keterangan' => $this->input->post('keterangan'),
			'kategori' => 'guru'
		];
		$this->db->insert('guru_staf',$data);
		return true;
	}

	public function editGuru() {
		$guru_staf_id = $this->input->post('guru_staf_id');
		$data = [
			'nama' => $this->input->post('nama_guru'),
			'jabatan' => $this->input->post('jabatan'),
			'keterangan' => $this->input->post('keterangan')
		];
		$this->db->where('guru_staf_id',$guru_staf_id);
		$this->db->update('guru_staf',$data);
		return true;
	}

	public function deleteGuru() {
		$this->db->where(['guru_staf_id'=>$this->uri->segment(3), 'kategori'=>'guru']);
		$this->db->delete('guru_staf');
		return true;
	}

	// staf
	public function getStaf() {
		$this->db->where('kategori','staf');
		$this->db->order_by('nama','ASC');
		return $this->db->get('guru_staf');
	}

	public function getOneStaf() {
		return $this->db->get_where('guru_staf',['guru_staf_id'=>$this->uri->segment(3), 'kategori'=>'staf']);
	}

	public function insertStaf() {
		$data = [
			'guru_staf_id' => $this->uuid->generate_uuid(),
			'nama' => $this->input->post('nama_staf'),
			'jabatan' => $this->input->post('jabatan'),
			'kategori' => 'staf'
		];
		$this->db->insert('guru_staf',$data);
		return true;
	}

	public function editStaf() {
		$guru_staf_id = $this->input->post('guru_staf_id');
		$data = [
			'nama' => $this->input->post('nama_staf'),
			'jabatan' => $this->input->post('jabatan')
		];
		$this->db->where(['guru_staf_id'=>$guru_staf_id, 'kategori'=>'staf']);
		$this->db->update('guru_staf',$data);
		return true;
	}

	public function deleteStaf() {
		$this->db->where(['guru_staf_id'=>$this->uri->segment(3), 'kategori'=>'staf']);
		$this->db->delete('guru_staf');
		return true;
	}
}