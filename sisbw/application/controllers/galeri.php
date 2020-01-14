<?php

/**
* 
*/
class galeri extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Model_galeri','galeri');
	}
	
	public function foto() {

		$data['foto'] = $this->galeri->getFoto(15);
		$this->template->load('template','galeri/galeriFoto',$data);
	}

	public function ajaxGetFoto() {
		$data = $this->galeri->getFoto(15,$this->input->get('offset'));
		if($data) {
			echo json_encode($data);
		} else {
			echo json_encode(null);
		}

		return true;
	}

	public function video() {
		$data['video'] = $this->galeri->getVideo(6);
		$this->template->load('template','galeri/galeriVideo',$data);
	}

	public function ajaxGetVideo() {
		$data = $this->galeri->getVideo(6,$this->input->get('offset'));
		if($data) {
			echo json_encode($data);
		} else {
			echo json_encode(null);
		}
		return true;
	}
}