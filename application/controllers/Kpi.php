<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kpi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('status') != "login"){
		// 	echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		// }
		$this->load->model('Kpi_model', 'kpi');
	}

	public function index()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['kpi'] = $this->kpi->getData();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('kpi/index', $data);
			$this->load->view('footer');
		}
	}

	public function kpi_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['list_pegawai'] = $this->kpi->list_pegawai();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('kpi/add', $data);
			$this->load->view('footer');
		}
	}

	public function action_kpi_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$this->form_validation->set_rules('indikator_kpi', 'Indikator KPI', 'required', [
				'required' => 'Indikator KPI harus di isi!'
			]);
			$this->form_validation->set_rules('pic', 'PIC', 'required', [
				'required' => 'PIC KPI harus di isi!'
			]);
			$this->form_validation->set_rules('satuan', 'Satuan', 'required', [
				'required' => 'Satuan KPI harus di isi!'
			]);
			$this->form_validation->set_rules('bobot', 'Bobot', 'required|numeric', [
				'required' => 'Bobot KPI harus di isi!',
				'required' => 'Bobot KPI harus di isi dengan angka!'
			]);
			$this->form_validation->set_rules('target', 'Target', 'required|numeric', [
				'required' => 'Target KPI harus di isi!',
				'required' => 'Target KPI harus di isi dengan angka!'
			]);
			$this->form_validation->set_rules('realisasi', 'Realisasi', 'required|numeric', [
				'required' => 'Realisasi KPI harus di isi!',
				'required' => 'Realisasi KPI harus di isi dengan angka!'
			]);
			$this->form_validation->set_rules('skor', 'Skor', 'required|numeric', [
				'required' => 'Skor KPI harus di isi!',
				'required' => 'Skor KPI harus di isi dengan angka!'
			]);
			$this->form_validation->set_rules('waktu', 'Waktu Penilaian KPI', 'required|date', [
				'required' => 'Waktu Penilaian KPI harus di isi!',
				'required' => 'Waktu Penilaian KPI harus di isi dengan tanggal, bulan, dan tahun!'
			]);
			$this->form_validation->set_rules('status', 'status', 'required', [
				'required' => 'Status KPI harus di isi!'
			]);

			if ($this->form_validation->run() == false) {
				$this->load->view('header');
				$this->load->view('sidebar');
				$this->load->view('kpi/add');
				$this->load->view('footer');
			} else {
				$this->kpi->addData();
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible text-center " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Data ditambahkan!
                  </div>');
				redirect('kpi');
			}
		}
	}

	public function kpi_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$kpi_id = $this->input->get('kpi_id');
			$data['list_pegawai'] = $this->kpi->list_pegawai();
            $data['kpinya'] = $this->kpi->getDataById($kpi_id);
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('kpi/edit', $data);
			$this->load->view('footer');
		}
	}

	public function action_kpi_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$kpi_id = $this->input->post("kpi_id");
			$this->form_validation->set_rules('indikator_kpi', 'Nama KPI', 'required', [
				'required' => 'Indikator KPI harus di isi!'
			]);
			$this->form_validation->set_rules('pic', 'PIC', 'required', [
				'required' => 'PIC KPI harus di isi!'
			]);
			$this->form_validation->set_rules('satuan', 'Satuan', 'required', [
				'required' => 'Satuan KPI harus di isi!'
			]);
			$this->form_validation->set_rules('bobot', 'Bobot', 'required|numeric', [
				'required' => 'Bobot KPI harus di isi!',
				'required' => 'Bobot KPI harus di isi dengan angka!'
			]);
			$this->form_validation->set_rules('target', 'Target', 'required|numeric', [
				'required' => 'Target KPI harus di isi!',
				'required' => 'Target KPI harus di isi dengan angka!'
			]);
			$this->form_validation->set_rules('realisasi', 'Realisasi', 'required|numeric', [
				'required' => 'Realisasi KPI harus di isi!',
				'required' => 'Realisasi KPI harus di isi dengan angka!'
			]);
			$this->form_validation->set_rules('skor', 'Skor', 'required|numeric', [
				'required' => 'Skor KPI harus di isi!',
				'required' => 'Skor KPI harus di isi dengan angka!'
			]);
			$this->form_validation->set_rules('waktu', 'Waktu Penilaian KPI', 'required|date', [
				'required' => 'Waktu Penilaian KPI harus di isi!',
				'required' => 'Waktu Penilaian KPI harus di isi dengan tanggal, bulan, dan tahun!'
			]);
			$this->form_validation->set_rules('status', 'status', 'required', [
				'required' => 'Status KPI harus di isi!'
			]);

			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible text-center " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Pastikan seluruh data terisi
                  </div>');
				redirect(base_url() . "kpi/kpi_edit?kpi_id=".$kpi_id);
			} else {
				$this->kpi->editData();
				$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible text-center " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Data diperbarui!
                  </div>');
				redirect('kpi');
			}
		}
	}

	public function deleteData($id)
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$this->kpi->deleteData($id);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible text-center " role="alert">
	                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
	                    </button>
	                    Data dihapus!
	                  </div>');
			redirect('kpi');
		}
	}
}
