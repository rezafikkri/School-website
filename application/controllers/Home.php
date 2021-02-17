<?php

/**
* 
*/
class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Model_home','home');
		$this->load->model('Model_komentar','komentar');
	}
	
	public function index() {
		$this->load->model('Model_galeri','galeri');
		$this->load->model('Model_settings','settings');

		$data['foto'] = $this->galeri->getFoto(3);
		$data['pengunguman'] = $this->home->getPengunguman()->row();
		$data['berita'] = $this->home->getBerita(2);
		$data['openingWord'] = $this->settings->tampilOpeningWord()->row_array();
		$this->template->load('template','home/home',$data);
	}

	public function ajaxGetBerita() {
		$data = $this->home->getBerita(4,$this->input->get('offset',true));
		$i = 0;
		foreach($data as $r) {
			$hasil[$i] = $r;
			$hasil[$i]->post = generate_post($r->post);
			$i++;
		}
		echo json_encode($hasil??null);
		return true;
	}

	public function beritaDetail() {
		$this->load->helper('cek_komentar_id_in_komenBalas_for_show_form_komen_balas');

		$komentar = $this->komentar->getKomentar($this->uri->segment(3));

		$data['errors'] = get_errors();
		$data['old_value'] = get_old_value();
		$data['metaData'] = get_metaData();

		$data['berita'] = $this->home->getOneBerita();
		$data['listBerita'] = $this->home->listBerita();
		$data['jmlkomentar'] = $komentar->num_rows();
		$data['komentar'] = $komentar->result();
		$this->template->load('template','home/beritaDetail',$data);
	}

	public function insertKomentar() {
		
		$this->form_validation->set_rules('nama','Nama','required|max_length[32]',message_id());
		$this->form_validation->set_rules('komentar','Komentar','required',message_id());
		$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

		if(!$this->form_validation->run()) {

			generate_errors(['nama','komentar']);
			redirect('home/beritaDetail/'.$this->input->post('berita_id'));
			return false;

		} else {

			$nama = $this->input->post('nama');

			$this->komentar->insertKomentar($nama);
			redirect('home/beritaDetail/'.$this->input->post('berita_id'));
			return true;
		}
	}

	public function balasKomentar() {

		$this->form_validation->set_rules('namaBalas','Nama','required|max_length[32]',message_id());
		$this->form_validation->set_rules('komenBalas','Komentar','required',message_id());
		$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

		if(!$this->form_validation->run()) {

			generate_errors(['namaBalas','komenBalas'],true,$this->input->post('komentar_id'));
			redirect('home/beritaDetail/'.$this->uri->segment(3));
			return false;

		} else {

			$nama = $this->input->post('namaBalas');
			$this->komentar->balasKomentar($nama);
			redirect('home/beritaDetail/'.$this->uri->segment(3));
			return true;
		}
	}

	public function privacyPolicy() {
		$this->template->load('template','home/privacyPolicy');
	}
}
