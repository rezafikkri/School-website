<?php

/**
* 
*/
class adminFasilitas extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		if(cek_login() === 'noLogin') {
			redirect('auth/login');
			return false;

		} elseif($this->session->userdata('SISBW')['level'] != 'admin' && $this->session->userdata('SISBW')['level'] != 'superAdmin') {
			redirect('adminHome');
			return false;
		}
		
		$this->load->model('Model_fasilitas','fasilitas');
	}

	public function index() {
		$data['fasilitas'] = $this->fasilitas->getFasilitas();
		$this->template->load('templateAdmin','admin/fasilitas/fasilitas',$data);
	}

	public function insertFasilitas() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('url_img','Url img','required|max_length[100]',message_id());
			$this->form_validation->set_rules('keterangan','Keterangan','required|max_length[50]',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {
                generate_errors(['url_img','keterangan']);
                redirect('adminFasilitas/insertFasilitas');
                return false;

            } else {
                
				$this->fasilitas->insertFasilitas();
				redirect('adminFasilitas');
				return true;
            }

		} else {
			$data['errors'] = get_errors();
			$data['old_value'] = get_old_value();
			$this->template->load('templateAdmin','admin/fasilitas/insertFasilitas',$data);
		}
	}

	public function editFasilitas() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('url_img','Url img','required|max_length[100]',message_id());
			$this->form_validation->set_rules('keterangan','Keterangan','required|max_length[50]',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {
                generate_errors(['url_img','keterangan'],false);
                redirect('adminFasilitas/editFasilitas/'.$this->input->post('fasilitas_id'));
                return false;

            } else {
                
				$this->fasilitas->editFasilitas();
				redirect('adminFasilitas');
				return true;
            }

		} else {
			$data['errors'] = get_errors();
			$data['fasilitas'] = $this->fasilitas->getOneFasilitas();
			$this->template->load('templateAdmin','admin/fasilitas/editFasilitas',$data);
		}
	}

	public function deleteFasilitas() {
		$this->fasilitas->deleteFasilitas();
		redirect('adminFasilitas');
		return true;
	}
}