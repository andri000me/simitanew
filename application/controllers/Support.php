<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Support extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('status') != "login"){
		// 	echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		// }
		$this->load->model('Support_model', 'support');
	}

	public function index_dashboard()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('support/dashboard');			
			$this->load->view('footer');
		}
	}

	public function index()
	{
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['support'] = $this->support->getData();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('support/index', $data);
			$this->load->view('footer');
		}
	}

	public function addData()
	{
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$this->form_validation->set_rules('nama', 'Nama', 'required', [
			'required' => 'Nama harus di isi!'
		]);
		$this->form_validation->set_rules('no_hp', 'Nomor Handphone', 'required|numeric', [
			'required' => 'Nomor Handphone harus di isi!',
			'required' => 'Nomor Handphone harus di isi dengan angka!'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
			'required' => 'Email harus di isi!',
			'required' => 'Email tidak valid!'
		]);
		$this->form_validation->set_rules('penempatan', 'Lokasi Penempatan', 'required', [
			'required' => 'Lokasi Penempatan harus di isi!'
		]);

		if($this->form_validation->run() == false) {
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('support/add');
			$this->load->view('footer');
		} else {
			 $this->support->addData();
			 $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible text-center " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Data ditambahkan!
                  </div>');
            redirect('support');
		}
		}
	}

	public function editData($id)
	{
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$this->form_validation->set_rules('nama', 'Nama', 'required', [
			'required' => 'Nama harus di isi!'
		]);
		$this->form_validation->set_rules('no_hp', 'Nomor Handphone', 'required|numeric', [
			'required' => 'Nomor Handphone harus di isi!',
			'required' => 'Nomor Handphone harus di isi dengan angka!'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email', [
			'required' => 'Email harus di isi!',
			'required' => 'Email tidak valid!'
		]);
		$this->form_validation->set_rules('penempatan', 'Lokasi Penempatan', 'required', [
			'required' => 'Lokasi Penempatan harus di isi!'
		]);

		if($this->form_validation->run() == false) {
			$data['support'] = $this->support->getDataById($id);
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('support/edit', $data);
			$this->load->view('footer');
		} else {
			 $this->support->editData();
			 $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible text-center " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Data diperbarui!
                  </div>');
            redirect('support');
		}
		}
	}

	public function deleteData($id)
    {
    	if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$this->support->deleteData($id);
	        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible text-center " role="alert">
	                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
	                    </button>
	                    Data dihapus!
	                  </div>');
	        redirect('support');
		}
    }
}