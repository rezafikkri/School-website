<?php

/**
* 
*/
class AdminDownloadFile extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    if(cek_login() === 'noLogin') {
			redirect('auth/login');
			return false;
		}

		date_default_timezone_set("Asia/Jakarta");
	    $this->load->model('Model_download_file','file');
	}
	
	public function index() {
		$data['file'] = $this->file->tampilFile();
		$this->template->load('templateAdmin','admin/downloadFile/downloadFile',$data);
	}

	public function insertFile() {

	    if(isset($_POST['submit'])) {

	    	$this->form_validation->set_rules('name','Nama file','required|max_length[50]',message_id());
	    	$this->form_validation->set_rules('url','Url file','required|max_length[100]',message_id());
	    	$this->form_validation->set_error_delimiters('<p class="warning">','<p>');

	    	if($this->form_validation->run() == FALSE) {
	    		generate_errors(['name','url']);
	    		redirect('adminDownloadFile/insertFile/'.$this->input->post('file_download_id'));
	    		return false;

	    	} else {
	    		$this->file->insertFile();
	    		redirect('adminDownloadFile');
	    		return true;
	    	}

	    } else {
	    	$data['errors'] = get_errors();
	    	$data['old_value'] = get_old_value();
	    	$this->template->load('templateAdmin','admin/downloadFile/insertFile',$data);
	    }
	}

	public function editFile() {

	    if(isset($_POST['submit'])) {

	    	$this->form_validation->set_rules('name','Nama file','required|max_length[50]',message_id());
	    	$this->form_validation->set_rules('url','Url file','required|max_length[100]',message_id());
	    	$this->form_validation->set_error_delimiters('<p class="warning">','<p>');

	    	if($this->form_validation->run() == FALSE) {
	    		generate_errors(['name','url'],false);
	    		redirect('adminDownloadFile/editFile/'.$this->input->post('file_download_id'));
	    		return false;

	    	} else {
	    		$this->file->editFile();
	    		redirect('adminDownloadFile');
	    		return true;
	    	}

	    } else {
	    	$data['errors'] = get_errors();
	    	$data['file'] = $this->file->getOneFile();
	    	$this->template->load('templateAdmin','admin/downloadFile/editFile',$data);
	    }
	}

	public function deleteFile() {
	    $this->file->deleteFile();
	    redirect('adminDownloadFile');
	    return true;
	}
}