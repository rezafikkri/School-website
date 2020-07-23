<?php

/**
* 
*/
class profile extends CI_Controller {
	
	public function sejarahSekolah() {
		$this->load->model('Model_sejarah','sejarah');
		$data['sejarah'] = $this->sejarah->getSejarah()->row();
		$this->template->load('template','profile/sejarah',$data);
	}

	public function kepalaSekolah() {
		$this->load->model('Model_kepala_sekolah','kepala_sekolah');
		$data['kepala_sekolah'] = $this->kepala_sekolah->getKepalaSekolah()->row();
		$this->template->load('template','profile/kepalaSekolah',$data);
	}

	public function visiMisi() {
		$this->load->model('Model_visi_misi','visi_misi');
		$data['visi_misi'] = $this->visi_misi->getVisiMisi()->row();
		$this->template->load('template','profile/visiMisi',$data);
	}

	public function struktur() {
		$this->load->model('Model_struktur','struktur');
		$data['struktur'] = $this->struktur->getStruktur()->row();
		$this->template->load('template','profile/struktur',$data);
	}
}