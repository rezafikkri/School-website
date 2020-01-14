<?php

/**
* 
*/
class fasilitas extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Model_fasilitas','fasilitas');
	}
	
	function index() {
		$data['fasilitas'] = $this->fasilitas->getFasilitas();
		$this->template->load('template','fasilitas/fasilitas',$data);
	}
}