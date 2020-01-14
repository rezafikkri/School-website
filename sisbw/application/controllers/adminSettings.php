<?php

/**
* 
*/
class adminSettings extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if(cek_login() === 'noLogin') {
            redirect('auth/login');
            return false;

        } elseif($this->session->userdata('SISBW')['level'] != 'admin' && $this->session->userdata('SISBW')['level'] != 'superAdmin') {
            redirect('adminHome');
            return false;
        }

        $this->load->model('Model_settings','settings');
    }

    public function index() {
        openingWord();
    }
	
	public function logoSekolah() {
        $data['logo'] = $this->settings->tampilLogoSekolah()->row_array();
		$this->template->load('templateAdmin','admin/logoSekolah/logoSekolah',$data);
	}

	public function insertLogo() {
	    
	    if(isset($_POST['submit'])) {

	    	$config['upload_path']          = './assets/img/logo sekolah';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1080;
            $config['max_height']           = 1080;
            $config['encrypt_name']			= TRUE;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('logoSekolah')) {
                
               generateFileUploadErrors();
               redirect('adminSettings/insertLogo');
               return false;
            }
            else {
                $upload_data = [$this->upload->data()];

                // cek apakah file sudah ada
                $data_logo = $this->settings->tampilLogoSekolah();
                $logo = $data_logo->row_array();
                $cek = $data_logo->num_rows();
                if($cek >= 1) {
                    if(file_exists('assets/img/logo sekolah/'.$logo['file_name'])) {
                        unlink('assets/img/logo sekolah/'.$logo['file_name']);
                    }

                    $this->settings->updateLogoSekolah($upload_data,$logo['logo_sekolah_id']);
                    redirect('adminSettings/logoSekolah');

                } else {

                    $this->settings->insertLogoSekolah($upload_data);
                    redirect('adminSettings/logoSekolah');
                }

                return true;
            }

	    } else {
            $data['error'] = getFileUploadErrors();
	    	$this->template->load('templateAdmin','admin/logoSekolah/insertLogo',$data);
	    }
	}

    /* opening word */

    public function openingWord() {

        $openingWord = $this->settings->tampilOpeningWord();
        $data['jmlOpeningWord'] = $openingWord->num_rows();
        $data['openingWord'] = $openingWord->row_array();
        $this->template->load('templateAdmin','admin/openingWord/openingWord',$data);
    }

    public function insertOpeningWord() {
        
        if(isset($_POST['submit'])) {

            $this->form_validation->set_rules('nama_sekolah', 'Nama sekolah', 'required|max_length[50]',message_id());
            $this->form_validation->set_rules('url_background', 'Url background', 'max_length[100]',message_id());
            $this->form_validation->set_rules('word', 'Word', 'required|max_length[255]',message_id());
            $this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

            if(!$this->form_validation->run()) {
                generate_errors(['nama_sekolah','url_background','word']);
                redirect('adminSettings/insertOpeningWord/'.$this->input->post('opening_word_id'));
                return false;

            } else {
                $this->settings->insertOpeningWord();
                redirect('adminSettings/openingWord');
                return true;
            }

        } else {
            $data['errors'] = get_errors();
            $data['old_value'] = get_old_value();
            $this->template->load('templateAdmin','admin/openingWord/insertOpeningWord',$data);
        }
    }

    public function editOpeningWord() {
        
        if(isset($_POST['submit'])) {

            $this->form_validation->set_rules('nama_sekolah', 'Nama sekolah', 'required|max_length[50]',message_id());
            $this->form_validation->set_rules('url_background', 'Url background', 'max_length[150]',message_id());
            $this->form_validation->set_rules('word', 'Word', 'required|max_length[255]',message_id());
            $this->form_validation->set_error_delimiters('<p class="warning">', '</p>');

            if(!$this->form_validation->run()) {
                generate_errors(['nama_sekolah','url_background','word'],false);
                redirect('adminSettings/editOpeningWord');
                return false;

            } else {
                $this->settings->editOpeningWord();
                redirect('adminSettings/openingWord');
                return true;
            }

        } else {
            $data['errors'] = get_errors();
            $data['openingWord'] = $this->settings->tampilOpeningWord()->row_array();
            $this->template->load('templateAdmin','admin/openingWord/editOpeningWord',$data);
        }
    }
}