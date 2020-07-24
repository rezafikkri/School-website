<?php

/**
* 
*/
class AdminGaleri extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(cek_login() === 'noLogin') {
			redirect('auth/login');
			return false;
		}

		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('Model_galeri','galeri');
	}

	public function index() {
		$this->foto();
	}
	
	public function foto() {
		$data['foto'] = $this->galeri->getFoto(15);
		$this->template->load('templateAdmin','admin/foto/foto',$data);
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

	public function insertFoto() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('url_foto','Url foto','required|max_length[100]',message_id());
			$this->form_validation->set_rules('keterangan','keterangan','required',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {
                generate_errors(['url_foto','keterangan']);
                redirect('adminGaleri/insertFoto');
                return false;

            } else {
                
				$this->galeri->insertFoto();
				redirect('adminGaleri/foto');
				return true;
            }

		} else {
			$data['errors'] = get_errors();
			$data['old_value'] = get_old_value();
			$this->template->load('templateAdmin','admin/foto/insertFoto',$data);
		}
	}

	public function editFoto() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('url_foto','Url foto','required|max_length[100]',message_id());
			$this->form_validation->set_rules('keterangan','keterangan','required',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {
                generate_errors(['url_foto','keterangan'],false);
                redirect('adminGaleri/editFoto/'.$this->input->post('foto_id'));
                return false;

            } else {
                
				$this->galeri->editFoto();
				redirect('adminGaleri/foto');
				return true;
            }

		} else {
			$data['errors'] = get_errors();
			$data['foto'] = $this->galeri->getOneFoto();
			$this->template->load('templateAdmin','admin/foto/editFoto',$data);
		}
	}

	public function deleteFoto() {
		$this->galeri->deleteFoto();
		redirect('adminGaleri/foto');
		return true;
	}

	//video
	public function video() {
		$data['video'] = $this->galeri->getVideo(6);
		$this->template->load('templateAdmin','admin/video/video',$data);
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

	public function insertVideo() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('url_video','Url video','required|max_length[100]',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {
                generate_errors(['url_video']);
                redirect('adminGaleri/insertVideo');

            } else {
                
				$this->galeri->insertVideo();
				redirect('adminGaleri/video');
            }

		} else {
			$data['errors'] = get_errors();
			$data['old_value'] = get_old_value();
			$this->template->load('templateAdmin','admin/video/insertVideo',$data);
		}
	}

	public function editVideo() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('url_video','Url video','required|max_length[100]',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {
                generate_errors(['url_video'],false);
                redirect('adminGaleri/editVideo/'.$this->input->post('video_id'));

            } else {
                
				$this->galeri->editVideo();
				redirect('adminGaleri/video');
            }

		} else {
			$data['errors'] = get_errors();
			$data['video'] = $this->galeri->getOneVideo();
			$this->template->load('templateAdmin','admin/video/editVideo',$data);
		}
	}

	public function deleteVideo() {
		$this->galeri->deleteVideo();
		redirect('adminGaleri/video');
	}
}