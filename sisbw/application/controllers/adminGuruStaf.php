<?php

/**
* 
*/
class adminGuruStaf extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(cek_login() === 'noLogin') {
			redirect('auth/login');
			return false;

		} elseif($this->session->userdata('SISBW')['level'] != 'admin' && $this->session->userdata('SISBW')['level'] != 'superAdmin') {
			redirect('adminHome');
			return false;
		}

		$this->load->model('Model_guru_staf','guruStaf');
	}

	public function index() {
		$this->guru();
	}
	
	public function guru () {

		$guru = $this->guruStaf->getGuru()->result();
		$hasil = generateWakilandGuru($guru);

		$data['guru'] = $hasil[1];
		$data['wakil'] = $hasil[0];

		$this->template->load('templateAdmin','admin/guru/guru',$data);
	}

	public function insertGuru() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('nama_guru','Nama guru','required|max_length[50]',message_id());
			$this->form_validation->set_rules('jabatan','Jabatan','required|max_length[32]',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {
                generate_errors(['nama_guru','jabatan','keterangan']);
                redirect('adminGuruStaf/insertGuru');
                return false;

            } else {
                
				$this->guruStaf->insertGuru();
				redirect('adminGuruStaf/guru');
				return true;
            }

		} else {
			$data['errors'] = get_errors();
			$data['old_value'] = get_old_value();
			$this->template->load('templateAdmin','admin/guru/insertGuru',$data);
		}
	}

	public function editGuru() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('nama_guru','Nama guru','required|max_length[50]',message_id());
			$this->form_validation->set_rules('jabatan','Jabatan','required|max_length[32]',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {
                generate_errors(['nama_guru','jabatan'],false);
                redirect('adminGuruStaf/editGuru/'.$this->input->post('guru_staf_id'));
                return false;

            } else {
                
				$this->guruStaf->editGuru();
				redirect('adminGuruStaf/guru');
				return true;
            }

		} else {
			$data['errors'] = get_errors();
			$data['guru'] = $this->guruStaf->getOneGuru()->row();
			$this->template->load('templateAdmin','admin/guru/editGuru',$data);
		}
	}

	public function deleteGuru() {
		$this->guruStaf->deleteGuru();
		redirect('adminGuruStaf/guru');
		return true;
	}

	// staf
	public function staf() {
		$data['staf'] = $this->guruStaf->getStaf()->result();
		$this->template->load('templateAdmin','admin/staf/staf',$data);
	}

	public function insertStaf() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('nama_staf','Nama staf','required|max_length[50]',message_id());
			$this->form_validation->set_rules('jabatan','Jabatan','required|max_length[32]',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {
                generate_errors(['nama_staf','jabatan']);
                redirect('adminGuruStaf/insertStaf');
                return false;

            } else {
                
				$this->guruStaf->insertStaf();
				redirect('adminGuruStaf/staf');
				return true;
            }

		} else {
			$data['errors'] = get_errors();
			$data['old_value'] = get_old_value();
			$this->template->load('templateAdmin','admin/staf/insertStaf',$data);
		}
	}

	public function editStaf() {
		
		if(isset($_POST['submit'])) {

			$this->form_validation->set_rules('nama_staf','Nama staf','required|max_length[50]',message_id());
			$this->form_validation->set_rules('jabatan','Jabatan','required|max_length[32]',message_id());
			$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

			if(!$this->form_validation->run()) {
                generate_errors(['nama_staf','jabatan'],false);
                redirect('adminGuruStaf/editStaf/'.$this->input->post('guru_staf_id'));
                return false;

            } else {
                
				$this->guruStaf->editStaf();
				redirect('adminGuruStaf/staf');
				return true;
            }

		} else {
			$data['errors'] = get_errors();
			$data['staf'] = $this->guruStaf->getOneStaf()->row();
			$this->template->load('templateAdmin','admin/staf/editStaf',$data);
		}
	}

	public function deleteStaf() {
		$this->guruStaf->deleteStaf();
		redirect('adminGuruStaf/staf');
		return true;
	}
}