<?php

/**
* 
*/
class kejuruan extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Model_jurusan','jurusan');
	}
	
	public function index() {
		$data['jurusan'] = $this->jurusan->getJurusan();
		$this->template->load('template','kejuruan/kejuruan',$data);
	}

	public function kejuruanDetail() {
		$data['jurusan'] = $this->jurusan->getOneJurusan();
		$this->template->load('template','kejuruan/kejuruanDetail',$data);
	}
}