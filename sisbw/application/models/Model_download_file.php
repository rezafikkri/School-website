<?php

/**
* 
*/
class Model_download_file extends CI_Model {

	public function tampilFile() {
		$this->db->order_by('post','DESC');
	    return $this->db->get('file_download')->result();
	}

	public function getOneFile() {
	    return $this->db->get_where('file_download',['file_download_id'=>$this->uri->segment(3)])->row();
	}
	
	public function insertFile() {

	    $data = [
	    	'file_download_id' => $this->uuid->generate_uuid(),
	    	'name' => $this->input->post('name'),
	    	'url' => linkDownload($this->input->post('url')),
	    	'post' => time()
	    ];

	    $this->db->insert('file_download',$data);
	    return true;
	}

	public function editFile() {

		$file_id = $this->input->post('file_download_id');
	    $data = [
	    	'name' => $this->input->post('name'),
	    	'url' => linkDownload($this->input->post('url')),
	    	'post' => time()
	    ];

	    $this->db->where('file_download_id',$file_id);
	    $this->db->update('file_download',$data);
	    return true;
	}

	public function deleteFile() {
		$this->db->where('file_download_id',$this->uri->segment(3));
	    $this->db->delete('file_download');
	    return true;
	}
}