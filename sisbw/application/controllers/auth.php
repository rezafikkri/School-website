<?php

/**
* 
*/
class auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Model_user','user');
		$this->load->model('Model_settings','settings');
	}
	
	public function login() {

		// cek apakah login atau tidak
		cek_login_for_page_login();

		if(isset($_POST['submit'])) {
			$response = $this->user->login();
			if($response === 'noUsername') {
				redirect('auth/login/noUsername');
			} elseif($response == 'noPassword') {
				redirect('auth/login/noPassword');
			} elseif($response == 'loginYes') {
				redirect('adminHome');
			} else {
				redirect('auth/login/invalidLogin');
			}

		} else {
			$data['logo'] = $this->settings->tampilLogoSekolah()->row_array();
			$this->template->load('templateLogin','admin/auth/login',$data);
		}
	}

	public function logout() {
		unset($_SESSION['SISBW']);
		redirect('auth/login');
		return false;
	}
}