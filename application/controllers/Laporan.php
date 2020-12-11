<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('status') != "login"){
		// 	echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		// }
		$this->load->model('Laporan_model', 'laporan');
		$this->load->model('Admin_model', 'admin');
    }
    
    function getLaporan(){
	if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
        }
        else {
            $data['laporan'] = $this->laporan->getData();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('laporan/laporan_view', $data);
			$this->load->view('footer');
        }

	}

	public function addData()
	{
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
	} else {
	
	$data['list_merek_printer'] = $this->admin->list_merek_printer();
	
	$this->load->view('header');
	$this->load->view('sidebar');
	$this->load->view('laporan/add',$data);
	$this->load->view('footer');
	}
}

	public function action_addData() {
		//print_r($_POST); exit;
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_report = $this->input->post('id_report');
			$nama_item = $this->input->post('nama_item');
			$merek_item = $this->input->post('merek_item');
			$kondisi_item = $this->input->post('kondisi_item');
			$tanggal_pelaporan = $this->input->post('tanggal_pelaporan');
			$pengguna = $this->input->post('pengguna');
			$data = array('id_report' => $id_report,
			'nama_item' => $nama_item
			,'merek_item' => $merek_item
			,'kondisi_item' => $kondisi_item
			,'tanggal_pelaporan' => $tanggal_pelaporan,
			'pengguna' => $pengguna,);
			$insert = $this->laporan->addData($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "laporan/getLaporan>";
			}
		}
	}

	public function editData($id) {
		if($this->session->userdata('status') != "login"){
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
			} else {

		
			$data['laporan'] = $this->laporan->getDataEdit($id);
			$data['list_merek_printer'] = $this->admin->list_merek_printer();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('laporan/edit',$data);
			$this->load->view('footer');
		}
	}

	public function action_editData() {
		if($this->session->userdata('status') != "login"){
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
			} else {

		
			$data['edit'] = $this->laporan->editData();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible text-center " role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			</button>
			Data diperbarui!
		  </div>');
			redirect('laporan/getLaporan');
			
		}
	}
	

	

    function deleteData($id){
	if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
        }
        else {
        $this->laporan->deleteData($id);
        redirect(site_url('laporan/getLaporan'));
        }

    }
}

?>