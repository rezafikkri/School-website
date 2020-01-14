<?php

/**
* 
*/
class adminUser extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(cek_login() === 'noLogin') {
			redirect('auth/login');
			return false;
		}

		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('Model_user','user');
	}
	
	public function index() {
		$data['user'] = $this->user->getUser();
		$data['oneUser'] = $this->user->getOneUser($this->session->userdata('SISBW')['user_id']);
		$this->template->load('templateAdmin','admin/user/user',$data);
	}

	public function insertUser() {

		/* jika level user superAdmin */
		if($this->session->userdata('SISBW')['level'] === 'superAdmin') {

			if(isset($_POST['submit'])) {

				$level = $this->input->post('level');

				$this->form_validation->set_rules('nama','Nama','required|max_length[30]|is_unique[user.nama]',message_id());
				$this->form_validation->set_rules('username','Username','required|max_length[32]|is_unique[user.username]',message_id());
				$this->form_validation->set_rules('password','Password','required|min_length[4]',message_id());
				$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

				if($level === null) {
					$level = 'operator';
				}

				if(!$this->form_validation->run()) {
	                generate_errors(['nama','username','password']);
	                redirect('adminUser/insertUser');
	                return false;

	            } else {
					$password = password_hash($password,PASSWORD_DEFAULT);
					$this->user->insertUser($level);
					redirect('adminUser');
					return true;
				}
			} else {
				$data['errors'] = get_errors();
				$data['old_value'] = get_old_value();
				$this->template->load('templateAdmin','admin/user/insertUser',$data);
			}
		} else {
			redirect("adminUser");
		}
	}

	public function editUser() {

		$user_id_input = $this->uri->segment(3);
		if($user_id_input == null) $user_id_input = $this->input->post('user_id');

		/* jika level user superAdmin */
		if($this->session->userdata('SISBW')['level'] === 'superAdmin' || $user_id_input == $this->session->userdata('SISBW')['user_id']) {

			if(isset($_POST['submit'])) {

				$this->form_validation->set_rules('nama','Nama','required|max_length[30]|is_unique[user.nama]',message_id());
				$this->form_validation->set_rules('username','Username','required|max_length[32]|is_unique[user.username]',message_id());
				$this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

				$level = generate_level_user($this->input->post('level'));

				if(!$this->form_validation->run()) {
	                generate_errors(['nama','username'],false);
	                redirect('adminUser/editUser/'.$this->input->post('user_id'));
	                return false;

	            } else {
					$this->user->editUser($level);
					redirect('adminUser');
					return true;
				}
			} else {
				$data['errors'] = get_errors();
				$data['user'] = $this->user->getOneUser($user_id_input);
				$this->template->load('templateAdmin','admin/user/editUser',$data);
			}

		} else {
			redirect('adminUser');
		}
	}

	public function deleteUser() {

		/* jika level user superAdmin */
		if($this->session->userdata('SISBW')['level'] === 'superAdmin') {
			$this->user->deleteUser();
			redirect('adminUser');
		} else {
			redirect('adminUser');
		}

		return true;
	}
}