<?php

/**
* 
*/
class adminKontak extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(cek_login() === 'noLogin') {
			redirect('auth/login');
			return false;

		} elseif($this->session->userdata('SISBW')['level'] != 'admin' && $this->session->userdata('SISBW')['level'] != 'superAdmin') {
			redirect('adminHome');
			return false;
		}
		
		$this->load->model('Model_kontak','kontak');
	}
	
	public function index() {
		$kontak = $this->kontak->getKontak();
		$data['jmlKontak'] = $kontak->num_rows();
		$data['kontak'] = $kontak->row();
		$this->template->load('templateAdmin','admin/kontak/kontak',$data);
	}

	public function insertKontak() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('no_telp','No telp','required|max_length[32]',message_id());
			$this->form_validation->set_rules('email','Email','required|max_length[32]',message_id());
			$this->form_validation->set_rules('facebook','Facebook','required|max_length[32]',message_id());
			$this->form_validation->set_rules('alamat','Alamat','required',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {
                generate_errors(['no_telp','email','facebook','alamat']);
                redirect('adminKontak/insertKontak');
                return false;

            } else {
                
				$this->kontak->insertKontak();
				redirect('adminKontak');
				return true;
            }

		} else {
			$data['errors'] = get_errors();
			$data['old_value'] = get_old_value();
			$this->template->load('templateAdmin','admin/kontak/insertKontak',$data);
		}
	}

	public function editKontak() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('no_telp','No telp','required|max_length[32]',message_id());
			$this->form_validation->set_rules('email','Email','required|max_length[32]',message_id());
			$this->form_validation->set_rules('facebook','Facebook','required|max_length[32]',message_id());
			$this->form_validation->set_rules('alamat','Alamat','required',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {
                generate_errors(['no_telp','email','facebook','alamat'],false);
                redirect('adminKontak/editKontak');
                return false;

            } else {
                
				$this->kontak->editKontak();
				redirect('adminKontak');
				return true;
            }

		} else {
			$data['errors'] = get_errors();
			$data['kontak'] = $this->kontak->getKontak()->row();
			$this->template->load('templateAdmin','admin/kontak/editKontak',$data);
		}
	}
}