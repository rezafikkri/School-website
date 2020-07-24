<?php

/**
* 
*/
class AdminHome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(cek_login() === 'noLogin') {
			redirect('auth/login');
			return false;
		}

		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('Model_home','home');
		$this->load->model('Model_komentar','komentar');
	}
	
	public function index() {
		$pengunguman = $this->home->getPengunguman();

		$data['pengunguman'] = $pengunguman->row();
		$data['jmlPengunguman'] = $pengunguman->num_rows();
		$data['berita'] = $this->home->getBerita();
		$this->template->load('templateAdmin','admin/home/home',$data);
	}

	public function insertPengunguman() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('judul','Judul','required|max_length[50]',message_id());
			$this->form_validation->set_rules('isi','Isi','required',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {
                generate_errors(['judul','isi']);
                redirect('adminHome/insertPengunguman');
                return false;

            } else {
                
				$this->home->insertPengunguman();
				redirect('adminHome');
				return true;
            }

		} else {
			$data['errors'] = get_errors();
			$data['old_value'] = get_old_value();
			$data['pengunguman'] = $this->home->getPengunguman()->row();
			$this->template->load('templateAdmin','admin/home/insertPengunguman',$data);
		}
	}

	public function editPengunguman() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('judul','Judul','required|max_length[50]',message_id());
			$this->form_validation->set_rules('isi','Isi','required',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {
                generate_errors(['judul','isi'],false);
                redirect('adminHome/editPengunguman');
                return false;

            } else {
                
				$this->home->editPengunguman();
				redirect('adminHome');
				return true;
            }

		} else {
			$data['errors'] = get_errors();
			$data['pengunguman'] = $this->home->getPengunguman()->row();
			$this->template->load('templateAdmin','admin/home/editPengunguman',$data);
		}
	}

	/* berita */

	public function insertBerita() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('judulBesar','Judul Besar','required|max_length[50]',message_id());
			$this->form_validation->set_rules('judulKecil','Judul Kecil','max_length[32]',message_id());
			$this->form_validation->set_rules('urlImgUtama','Url image utama','max_length[100]',message_id());
			$this->form_validation->set_rules('isi','Isi','required',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {

				generate_errors(['judulBesar','judulKecil','urlImgUtama','isi']);
				redirect('adminHome/insertBerita');
				return false;

			} else {

				$this->home->insertBerita();
				redirect('adminHome');
				return true;
			}

		} else {
			$data['errors'] = get_errors();
			$data['old_value'] = get_old_value();
			$this->template->load('templateAdmin','admin/home/insertBerita',$data);
		}
	}

	public function editBerita() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('judulBesar','Judul Besar','required|max_length[50]',message_id());
			$this->form_validation->set_rules('judulKecil','Judul Kecil','max_length[32]',message_id());
			$this->form_validation->set_rules('urlImgUtama','Url image utama','max_length[100]',message_id());
			$this->form_validation->set_rules('isi','Isi','required',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {

				generate_errors(['judulBesar','judulKecil','urlImgUtama','isi'],false);
				redirect('adminHome/editBerita/'.$this->input->post('berita_id'));
				return false;

			} else {

				$this->home->editBerita();
				redirect('adminHome');
				return true;
			}

		} else {
			$data['errors'] = get_errors();
			$data['berita'] = $this->home->getOneBerita();
			$this->template->load('templateAdmin','admin/home/editBerita',$data);
		}
	}

	public function deleteBerita() {
		
		$del = $this->home->deleteBerita();
		if($del === 'dataForeignKey') {
			redirect('adminHome/index/dataForeignKey');
		} elseif($del === 'error') {
			redirect('adminHome/index/error');
		} else {
			redirect('adminHome');
		}

		return true;
	}

	/* komentar */

	public function insertKomentar() {
		
		if(isset($_POST['submit'])) {


			$this->form_validation->set_rules('komentar','Komentar','required',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {

				generate_errors(['komentar'],false);
				redirect('adminHome/insertKomentar/'.$this->input->post('berita_id'));
				return false;

			} else {

				$nama = $this->session->userdata('SISBW')['nama'];
				$this->komentar->insertKomentar($nama);
				redirect('adminHome/insertKomentar/'.$this->input->post('berita_id'));
				return true;
			}

		} else {
			$this->load->helper('cek_komentar_id_in_komenBalas_for_show_form_komen_balas');

			$komentar = $this->komentar->getKomentar($this->uri->segment(3));

			$data['errors'] = get_errors();
			$data['metaData'] = get_metaData();
			$data['jmlKomentar'] = $komentar->num_rows();
			$data['komentar'] = $komentar->result();
			$this->template->load('templateAdmin','admin/home/komentar',$data);
		}
	}

	public function deleteKomentar() {

		if($this->session->userdata('SISBW')['level'] != 'superAdmin') {
			$this->db->select('nama');
			$this->db->where(['komentar_id'=>$this->uri->segment(4)]);
			$nama_yang_komen = $this->db->get('komentar')->row()->nama;
		} else $nama_yang_komen = null;
		
		if(cek_nama_yang_delete_komentar($nama_yang_komen)) {
			$del = $this->komentar->deleteKomentar();
			redirect('adminHome/insertKomentar/'.$this->uri->segment(3));
		} else {
			redirect('adminHome/insertKomentar/'.$this->uri->segment(3));
		}

		return true;
	}

	public function balasKomentar() {

		$this->form_validation->set_rules('komenBalas','Komentar','required',message_id());
		$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

		if(!$this->form_validation->run()) {

			generate_errors(['komenBalas'],false,$this->input->post('komentar_id'));
			redirect('adminHome/insertKomentar/'.$this->uri->segment(3));
			return false;

		} else {

			$nama = $this->session->userdata('SISBW')['nama'];
			$this->komentar->balasKomentar($nama);
			redirect('adminHome/insertKomentar/'.$this->uri->segment(3));
			return true;
		}
	}

	public function deleteKomentarBalas() {

		if($this->session->userdata('SISBW')['level'] != 'superAdmin') {
			$this->db->select('nama');
			$this->db->where(['balas_id'=>$this->uri->segment(5)]);
			$nama_yang_komen = $this->db->get('komentarBalas')->row()->nama;
		} else $nama_yang_komen = null;

		if(cek_nama_yang_delete_komentar($nama_yang_komen)) {
			$this->komentar->deleteKomentarBalas();
			redirect('adminHome/insertKomentar/'.$this->uri->segment(3));
		} else {
			redirect('adminHome/insertKomentar/'.$this->uri->segment(3));
		}

		return true;
	}
}