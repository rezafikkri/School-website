<?php

/**
* 
*/
class DownloadFile extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	    $this->load->model('Model_download_file','file');
	}
	
	public function index() {
		$data['file'] = $this->file->tampilFile();
		$this->template->load('template','downloadFile/downloadFile',$data);
	}
}