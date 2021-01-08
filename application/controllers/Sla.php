<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sla extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('status') != "login"){
		// 	echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		// }
		$this->load->model('Sla_model', 'Sla');
		$this->load->model('Admin_model', 'admin');
    }
	
	
	//GET DATA
    function getSla(){
	if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
        }
        else {
            $data['Sla'] = $this->Sla->getData();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('Sla/Sla_view', $data);
			$this->load->view('footer');
        }

	}



	//TAMBAH DATA
	public function addData()
	{
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
	} else {
	
	$data['list_merek_printer'] = $this->admin->list_merek_printer();
	
	$this->load->view('header');
	$this->load->view('sidebar');
	$this->load->view('Sla/add',$data);
	$this->load->view('footer');
	}
}

	public function action_addData() {
		//print_r($_POST); exit;
		if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$nama_item = $this->input->post('nama_item');
			$merek_item = $this->input->post('merek_item');
			$kondisi_item = $this->input->post('kondisi_item');
			$tanggal_peSla = $this->input->post('tanggal_peSla');
			$pengguna = $this->input->post('pengguna');
			$data = array(
			'nama_item' => $nama_item
			,'merek_item' => $merek_item
			,'kondisi_item' => $kondisi_item
			,'tanggal_peSla' => $tanggal_peSla,
			'pengguna' => $pengguna,);
			$insert = $this->Sla->addData($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "Sla/getSla>";
			}
		}
	}




	
	//EDIT DATA
	public function editData($id) {
		if($this->session->userdata('status') != "login"){
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
			} else {

		
			$data['Sla'] = $this->Sla->getDataEdit($id);
			$data['list_merek_printer'] = $this->admin->list_merek_printer();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('Sla/edit',$data);
			$this->load->view('footer');
		}
	}

	public function action_editData() {
		if($this->session->userdata('status') != "login"){
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
			} else {

		
			$data['edit'] = $this->Sla->editData();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible text-center " role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			</button>
			Data diperbarui!
		  </div>');
			redirect('Sla/getSla');
			
		}
	}
	

	


	//DELETE DATA
    function deleteData($id){
	if($this->session->userdata('status') != "login"){
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
        }
        else {
        $this->Sla->deleteData($id);
        redirect(site_url('Sla/getSla'));
        }

    }
}

?>