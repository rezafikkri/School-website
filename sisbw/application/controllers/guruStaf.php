<?php

/**
* 
*/
class guruStaf extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Model_guru_staf','guruStaf');
	}

	public function index() {
		$this->tenagaPendidik();
	}
	
	public function tenagaPendidik() {
		
		$guru = $this->guruStaf->getGuru()->result();
		$hasil = generateWakilandGuru($guru);

		$data['guru'] = $hasil[1];
		$data['wakil'] = $hasil[0];

		$this->template->load('template','guruStaf/tenagaPendidik',$data);
	}

	public function stafKaryawan() {
		$data['staf'] = $this->guruStaf->getStaf()->result();
		$this->template->load('template','guruStaf/stafKaryawan',$data);
	}
}