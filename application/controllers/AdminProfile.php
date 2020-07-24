<?php

/**
* 
*/
class AdminProfile extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(cek_login() === 'noLogin') {
			redirect('auth/login');
			return false;

		} elseif($this->session->userdata('SISBW')['level'] != 'admin' && $this->session->userdata('SISBW')['level'] != 'superAdmin') {
			redirect('adminHome');
			return false;
		}
		
		$this->load->model('Model_sejarah','sejarah');
		$this->load->model('Model_kepala_sekolah','kepala_sekolah');
		$this->load->model('Model_visi_misi','visi_misi');
		$this->load->model('Model_struktur','struktur');
	}

	public function index() {
		$this->sejarah();
	}
	
	// sejarah
	public function sejarah() {

		$sejarah = $this->sejarah->getSejarah();
		$data['jmlSejarah'] = $sejarah->num_rows();
		$data['sejarah'] = $sejarah->row();
		$this->template->load('templateAdmin','admin/sejarah/sejarah',$data);
	}

	public function insertSejarah() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('judul_sejarah','Judul sejarah','required|max_length[50]',message_id());
			$this->form_validation->set_rules('sejarah','Sejarah','required',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {

				generate_errors(['judul_sejarah','sejarah']);
				redirect('adminProfile/insertSejarah');
				return false;

			} else {

				$this->sejarah->insertSejarah();
				redirect('adminProfile/sejarah');
				return true;
			}

		} else {
			$data['errors'] = get_errors();
			$data['old_value'] = get_old_value();
			$this->template->load('templateAdmin','admin/sejarah/insertSejarah',$data);
		}
	}

	public function editSejarah() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('judul_sejarah','Judul sejarah','required|max_length[50]',message_id());
			$this->form_validation->set_rules('sejarah','Sejarah','required',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {

				generate_errors(['judul_sejarah','sejarah'],false);
				redirect('adminProfile/editSejarah');
				return false;

			} else {

				$this->sejarah->editSejarah();
				redirect('adminProfile/sejarah');
				return true;
			}
			
		} else {
			$data['errors'] = get_errors();
			$data['sejarah'] = $this->sejarah->getSejarah()->row();
			$this->template->load('templateAdmin','admin/sejarah/editSejarah',$data);
		}
	}

	// kepala sekolah
	public function kepalaSekolah() {

		$data['kepala_sekolah'] = $this->kepala_sekolah->getKepalaSekolah()->row();
		$data['jmlKepalaSekolah'] = $this->kepala_sekolah->getKepalaSekolah()->num_rows();
		$this->template->load('templateAdmin','admin/kepalaSekolah/kepalaSekolah',$data);
	}

	public function insertKepalaSekolah() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('nama_kepala_sekolah','Nama','required|max_length[50]',message_id());
			$this->form_validation->set_rules('url_fotoProfile','Url foro profile','max_length[100]',message_id());
			$this->form_validation->set_rules('keterangan','Keterangan','required',message_id());

			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {

				generate_errors(['nama_kepala_sekolah','url_fotoProfile','keterangan']);
				redirect('adminProfile/insertKepalaSekolah');
				return false;

			} else {

				$this->kepala_sekolah->insertKepalaSekolah();
				redirect('adminProfile/kepalaSekolah');
				return true;
			}

		} else {
			$data['errors'] = get_errors();
			$data['old_value'] = get_old_value();
			$this->template->load('templateAdmin','admin/kepalaSekolah/insertKepalaSekolah',$data);
		}
	}

	public function editKepalaSekolah() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('nama_kepala_sekolah','Nama','required|max_length[50]',message_id());
			$this->form_validation->set_rules('url_fotoProfile','Url foro profile','max_length[100]',message_id());
			$this->form_validation->set_rules('keterangan','Keterangan','required',message_id());

			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {

				generate_errors(['nama_kepala_sekolah','url_fotoProfile','keterangan'],false);
				redirect('adminProfile/editKepalaSekolah');
				return false;

			} else {

				$this->kepala_sekolah->editKepalaSekolah();
				redirect('adminProfile/kepalaSekolah');
				return true;
			}

		} else {
			$data['errors'] = get_errors();
			$data['kepala_sekolah'] = $this->kepala_sekolah->getKepalaSekolah()->row();
			$this->template->load('templateAdmin','admin/kepalaSekolah/editKepalaSekolah',$data);
		}
	}

	// visi misi
	public function visiMisi() {

		$visiMisi = $this->visi_misi->getVisiMisi();
		$data['visi_misi'] = $visiMisi->row();
		$data['jmlVisiMisi'] = $visiMisi->num_rows();
		$this->template->load('templateAdmin','admin/visiMisi/visiMisi',$data);
	}

	public function insertVisiMisi() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('visi','Visi','required',message_id());
			$this->form_validation->set_rules('misi','Misi','required',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {

				generate_errors(['visi','misi']);
				redirect('adminProfile/insertVisiMisi');
				return false;

			} else {

				$this->visi_misi->insertVisiMisi();
				redirect('adminProfile/visiMisi');
				return true;
			}

		} else {
			$data['errors'] = get_errors();
			$data['old_value'] = get_old_value();
			$this->template->load('templateAdmin','admin/visiMisi/insertVisiMisi',$data);
		}
	}

	public function editVisiMisi() {

		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('visi','Visi','required',message_id());
			$this->form_validation->set_rules('misi','Misi','required',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {

				generate_errors(['visi','misi'],false);
				redirect('adminProfile/editVisiMisi');
				return false;

			} else {

				$this->visi_misi->editVisiMisi();
				redirect('adminProfile/visiMisi');
				return true;
			}

		} else {
			$data['errors'] = get_errors();
			$data['visi_misi'] = $this->visi_misi->getVisiMisi()->row();
			$this->template->load('templateAdmin','admin/visiMisi/editVisiMisi',$data);
		}
	}

	// struktur
	public function struktur() {

		$struktur = $this->struktur->getStruktur();
		$data['jmlStruktur'] = $struktur->num_rows();
		$data['struktur'] = $struktur->row();
		$this->template->load('templateAdmin','admin/struktur/struktur',$data);
	}

	public function insertStruktur() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('url_struktur','Url struktur','required|max_length[100]',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {

				generate_errors(['url_struktur'], false);
				redirect('adminProfile/insertStruktur');
				return false;

			} else {

				$this->struktur->insertStruktur();
				redirect('adminProfile/struktur');
				return true;
			}

		} else {
			$data['errors'] = get_errors();
			$this->template->load('templateAdmin','admin/struktur/insertStruktur',$data);
		}
	}

	public function editStruktur() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('url_struktur','Url struktur','required|max_length[100]',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {

				generate_errors(['url_struktur'],false);
				redirect('adminProfile/editStruktur');
				return false;

			} else {

				$this->struktur->editStruktur();
				redirect('adminProfile/struktur');
				return true;
			}

		} else {
			$data['errors'] = get_errors();
			$data['struktur'] = $this->struktur->getStruktur()->row();
			$this->template->load('templateAdmin','admin/struktur/editStruktur',$data);
		}
	}

}