<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salam extends CI_Controller {
	private $testText = 'Sebuah Testing';
	
	public function index($nama = 'Manusia', $alamat = 'Jakarta') {
		$this->tambahProperty = 'Tambahan';
		
		$data['title'] = 'Home';
		$data['nama'] = $nama;
		$data['alamat'] = $alamat;
		$data['daftarPendidikan'] = ['SD', 'SMP', 'SMA', $this->testText, $this->tambahProperty];

		$this->load->view('templates/header', $data);
		$this->load->view('salam/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($pages = 'view') {
		if (!file_exists(APPPATH . 'views/salam/' . $pages . '.php')) {
			show_404();
		}

		$this->load->view('templates/header');
		$this->load->view('salam/' . $pages);
		$this->load->view('templates/footer');
	}

	public function show() {
		$this->load->view('templates/header');
		$this->load->view('salam/show');
		$this->load->view('templates/footer');
	}
}
