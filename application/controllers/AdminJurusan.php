<?php

/**
* 
*/
class AdminJurusan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(cek_login() === 'noLogin') {
			redirect('auth/login');
			return false;

		} elseif($this->session->userdata('SISBW')['level'] != 'admin' && $this->session->userdata('SISBW')['level'] != 'superAdmin') {
			redirect('adminHome');
			return false;
		}
		
		$this->load->model('Model_jurusan','jurusan');
	}
	
	public function index() {
		$data['jurusan'] = $this->jurusan->getJurusan();
		$this->template->load('templateAdmin','admin/jurusan/jurusan',$data);
	}

	public function insertJurusan() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('jurusan','Jurusan','required|max_length[50]',message_id());
			$this->form_validation->set_rules('url_logo','Url logo','max_length[100]',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {
                generate_errors(['jurusan','url_logo','keterangan']);
                redirect('adminJurusan/insertJurusan');
                return false;

            } else {
                
				$this->jurusan->insertJurusan();
				redirect('adminJurusan');
				return true;
            }

		} else {
			$data['errors'] = get_errors();
			$data['old_value'] = get_old_value();
			$this->template->load('templateAdmin','admin/jurusan/insertJurusan',$data);
		}
	}

	public function editJurusan() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('jurusan','Jurusan','required|max_length[50]',message_id());
			$this->form_validation->set_rules('url_logo','Url logo','max_length[100]',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {
                generate_errors(['jurusan','url_logo'],false);
                redirect('adminJurusan/editJurusan/'.$this->input->post('jurusan_id'));
                return false;

            } else {
                
				$this->jurusan->editJurusan();
				redirect('adminJurusan');
				return true;
            }

		} else {
			$data['errors'] = get_errors();
			$data['jurusan'] = $this->jurusan->getOneJurusan();
			$this->template->load('templateAdmin','admin/jurusan/editJurusan',$data);
		}
	}

	public function deleteJurusan() {
		$this->jurusan->deleteJurusan();
		redirect('adminJurusan');
		return true;
	}
}