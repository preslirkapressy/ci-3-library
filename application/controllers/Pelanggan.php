<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('pelanggan_model');
    }

    public function index() {
        $data['title'] = 'Daftar Pelanggan';        
        $data['pelanggan'] = $this->pelanggan_model->getAll();       
        
        $this->load->view('templates/header', $data);
        $this->load->view('pelanggan/index', $data);
        $this->load->view('templates/footer');
    }

    public function add() {
        $data['title'] = 'Daftar Pelanggan';        
        
        //Load Library untuk Form Validation
		$this->load->library('form_validation');
        
		//Menentukan Rules dari Form Validation untuk setiap elemen form sesuai kebutuhan
		$this->form_validation->set_rules('kodepel', 'Kode Pelanggan', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('telp', 'Telpon', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Tambah Data Pelanggan';        
            
            $this->load->view('templates/header', $data);
            $this->load->view('pelanggan/add', $data);
            $this->load->view('templates/footer');
        }
        else {
            $result = $this->pelanggan_model->add();

            $this->session->set_flashdata(
				($result->status==200) ? 'success' : 'error',
				"<strong>Respond Status:</strong> $result->status<br />
				<strong>Respond Error:</strong> $result->error<br />
				<strong>Message:</strong> $result->message"
			);

            redirect(($result->status==200) ? "pelanggan/index" : "pelanggan/index");	//Jika Sukses kembali ke Index Buku, jika Tidak kembali ke Form
        }
    }

    public function edit($pelangganId) {
        $data['title'] = 'Edit Data Pelanggan';
        $data['pelanggan'] = $this->pelanggan_model->getByID($pelangganId);

        $this->load->view('templates/header', $data);
		$this->load->view('pelanggan/edit', $data);
		$this->load->view('templates/footer');     
    }

    public function update($pelangganId) {
        $data['buku'] = $this->pelanggan_model->getById($pelangganId);
        
		//Load Library untuk Form Validation
		$this->load->library('form_validation');
        
		//Menentukan Rules dari Form Validation untuk setiap elemen form sesuai kebutuhan
		$this->form_validation->set_rules('kodepel', 'Kode Pelanggan', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('telp', 'Telpon', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
        
        if ($this->form_validation->run() === FALSE){
            $data['title'] = 'Edit Buku';

            $this->load->view('templates/header', $data);
            $this->load->view('pelanggan/edit', $data);
            $this->load->view('templates/footer');    
        }
        else {
			//Simpan data baru
			$result = $this->pelanggan_model->update($pelangganId);

			$this->session->set_flashdata(
				($result->status==200) ? 'success' : 'error',
				"<strong>Respond Status:</strong> $result->status<br />
				<strong>Respond Error:</strong> $result->error<br />
				<strong>Message:</strong> $result->message"
			);

			redirect(($result->status==200) ? "pelanggan/index" : "pelanggan/edit/$pelangganId");	//Jika Sukses kembali ke Index Buku, jika Tidak kembali ke Form
        }
    }

    public function delete($pelangganId) {
        $result = $this->pelanggan_model->delete($pelangganId);

        $this->session->set_flashdata(
			($result->status==200) ? 'success' : 'error',
			"<strong>Respond Status:</strong> $result->status<br />
			<strong>Respond Error:</strong> $result->error<br />
			<strong>Message:</strong> $result->message"
		);

        redirect('pelanggan/index');
    }
}