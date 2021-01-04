<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public $data = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation', 'session', 'enkripsi'));
		$this->load->model(array('admin_model'));
		$this->load->model('Kpi_model', 'kpi');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['menghitung_jumlah_perangkat'] = $this->admin_model->menghitung_jumlah_perangkat();
			$data['dashboard_merek_laptop_dell'] = $this->admin_model->dashboard_merek_laptop_dell();
			$data['dashboard_merek_laptop_hp'] = $this->admin_model->dashboard_merek_laptop_hp();
			$data['dashboard_merek_laptop_asus'] = $this->admin_model->dashboard_merek_laptop_asus();
			$data['dashboard_merek_laptop_toshiba'] = $this->admin_model->dashboard_merek_laptop_toshiba();
			$data['dashboard_merek_laptop_apple'] = $this->admin_model->dashboard_merek_laptop_apple();
			$data['dashboard_merek_laptop_lenovo'] = $this->admin_model->dashboard_merek_laptop_lenovo();
			$data['dashboard_merek_pc'] = $this->admin_model->dashboard_merek_pc();
			$data['dashboard_merek_printer'] = $this->admin_model->dashboard_merek_printer();
			$data['dashboard_merek_network_device'] = $this->admin_model->dashboard_merek_network_device();
			$data['dashboard_merek_server'] = $this->admin_model->dashboard_merek_server();
			$data['dashboard_merek_vicon'] = $this->admin_model->dashboard_merek_vicon();
			$data['dashboard_status_kepemilikan_sewa'] = $this->admin_model->dashboard_status_kepemilikan_sewa();
			$data['dashboard_status_kepemilikan_pln'] = $this->admin_model->dashboard_status_kepemilikan_pln();
			$data['kpi_open'] = $this->kpi->get_kpi_open();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/index', $data);
			$this->load->view('footer', $data);
		}
	}

	// Logout
	public function login()
	{
		$this->load->view('admin/login');
	}

	public function do_login()
	{
		//print_r($_POST); exit;
		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);
		$cek = $this->admin_model->search_users($username);
		$role = $cek['id_role'];
		$passwordnya = $cek['password'];
		$decrypted_txt = $this->enkripsi->encrypt_decrypt('decrypt', $passwordnya);
		if ($decrypted_txt == $password) {
			if (($role == 1)) {
				//echo "<script>alert('Anda Berhasil Login dengan Hak Akses Admin')</script>";
				$data_session = array(
					'nama' => $username,
					'status' => "login"
				);

				$this->session->set_userdata($data_session);
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/index>";
			} elseif (($role == 2)) {
				//echo "<script>alert('Anda Berhasil Login dengan Hak Akses User')</script>";
				$data_session = array(
					'nama' => $username,
					'status' => "login"
				);

				$this->session->set_userdata($data_session);
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "user/index>";
			} else {
				echo "<script>alert('Gagal Login, Periksa Username dan Password Anda')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
			}
		} else {
			echo "<script>alert('Wrong Password!')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		}
	}

	// Logout
	function logout()
	{
		$data = array(
			'username' => NULL,
			'password' => NULL,
			'status' => NULL,
			'role' => NULL
		);
		$this->session->unset_userdata($data);
		$this->session->sess_destroy();
		echo "<script>alert('Anda Berhasil Keluar dari Aplikasi')</script>";
		echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
	}
	//HI
	public function hi()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['hi'] = $this->admin_model->tampil_hi();
			$data['non_hi'] = $this->admin_model->tampil_non_hi();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/hi', $data);
			$this->load->view('footer');
		}
	}

	public function hi_view()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_unit = $this->input->get('id_unit');
			$data['detail_hi'] = $this->admin_model->get_hi_unit($id_unit);
			$data['list_unit'] = $this->admin_model->list_unit_hi($id_unit);
			$this->data['title'] = 'Detail Health Index';
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $data);
			$this->load->view('admin/hi_view', $data);
			$this->load->view('footer');
		}
	}

	public function hi_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_unit = $this->input->get('id_unit');
			$data['list_network_device'] = $this->admin_model->list_network_device($id_unit);
			$data['list_unit_hi'] = $this->admin_model->list_unit_hi($id_unit);
			$data['get_max_id_hi'] = $this->admin_model->get_max_id_hi();
			$data['get_max_id_hi_standard'] = $this->admin_model->get_max_id_hi_standard();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/hi_add', $data);
			$this->load->view('footer');
		}
	}

	public function action_hi_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_unit = $this->input->post('id_unit');
			$id_network_device = $this->input->post('id_network_device');
			$id_hi = $this->input->post('id_hi');
			$id_hi_standard = $this->input->post('id_hi_standard');
			$kondisi = $this->input->post('kondisi');
			$bobot_kondisi = $this->input->post('bobot_kondisi');
			$jml_port = $this->input->post('jml_port');
			$bobot_urgensi = $this->input->post('bobot_urgensi');
			$standard = $this->input->post('standard');
			$bobot_standard = $this->input->post('bobot_standard');
			$lifetime = $this->input->post('lifetime');
			$bobot_lifetime = $this->input->post('bobot_lifetime');
			$gangguan = $this->input->post('gangguan');
			$bobot_gangguan = $this->input->post('bobot_gangguan');
			$updated_at = date('Y-m-d h:i:s');
			$latest_db = $this->db->insert_id();
			$status = '1';
			$data1 = array(
				'id_hi_standard' => $id_hi_standard + 1,
				'bobot_kondisi' => $kondisi * $bobot_kondisi,
				'bobot_port' => $kondisi * $jml_port,
				'bobot_urgensi' => $kondisi * $bobot_urgensi,
				'bobot_standard' => $standard * $bobot_standard,
				'bobot_lifetime' => $lifetime * $bobot_lifetime,
				'bobot_gangguan' => $gangguan * $bobot_gangguan,
				'updated_at' => $updated_at,
				'status' => $status
			);
			$data2 = array(
				'bobot_kondisi' => $bobot_kondisi,
				'bobot_port' => $jml_port,
				'bobot_urgensi' => $bobot_urgensi,
				'bobot_standard' => $bobot_standard,
				'bobot_lifetime' => $bobot_lifetime,
				'bobot_gangguan' => $bobot_gangguan
			);
			$data3 = array(
				'id_hi'		=> $id_hi + 1
			);
			// echo'<pre>';print_r($data2);die();
			$insert1 = $this->admin_model->add_hi($data1);
			$insert2 = $this->admin_model->add_hi_standard($data2);
			$update  = $this->admin_model->update_network_device($data3, $id_network_device);
			if ($insert1 && $insert2 && $update) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/hi_view?id_unit=" . $id_unit . ">";
			}
		}
	}

	public function hi_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_hi = $this->input->get('id_hi');
			$id_unit = $this->input->get('id_unit');
			$data['list_network_device'] = $this->admin_model->list_network_device($id_unit);
			$data['list_unit_hi'] = $this->admin_model->list_unit_hi($id_unit);
			$data['get_id_hi'] = $this->admin_model->get_id_hi($id_hi);
			$data['get_id_hi_standard'] = $this->admin_model->get_id_hi_standard($id_hi);
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/hi_edit', $data);
			$this->load->view('footer');
		}
	}

	public function action_hi_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_unit = $this->input->post('id_unit');
			$id_network_device = $this->input->post('id_network_device');
			$id_hi = $this->input->post('id_hi');
			$kondisi = $this->input->post('kondisi');
			$bobot_kondisi = $this->input->post('bobot_kondisi');
			$bobot_port = $this->input->post('bobot_port');
			$bobot_urgensi = $this->input->post('bobot_urgensi');
			$standard = $this->input->post('standard');
			$bobot_standard = $this->input->post('bobot_standard');
			$lifetime = $this->input->post('lifetime');
			$bobot_lifetime = $this->input->post('bobot_lifetime');
			$gangguan = $this->input->post('gangguan');
			$bobot_gangguan = $this->input->post('bobot_gangguan');
			$updated_at = date('Y-m-d h:i:s');
			$data = array(
				'bobot_kondisi' => $kondisi * $bobot_kondisi,
				'bobot_port' => $kondisi * $bobot_port,
				'bobot_urgensi' => $kondisi * $bobot_urgensi,
				'bobot_standard' => $standard * $bobot_standard,
				'bobot_lifetime' => $lifetime * $bobot_lifetime,
				'bobot_gangguan' => $gangguan * $bobot_gangguan,
				'updated_at' => $updated_at,
			);
			// echo'<pre>';print_r($data);die();
			$update  = $this->admin_model->update_hi($data, $id_hi);
			if ($update) {
				echo "<script>alert('Berhasil Mengubah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/hi_view?id_unit=" . $id_unit . ">";
			}
		}
	}

	public function hi_delete()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_unit = $this->input->get('id_unit');
			$id_network_device = $this->input->get('id_network_device');
			$id_hi = $this->input->get('id_hi');
			$status = '0';
			$id_hi_default = '0';
			$data1 = array(
				'status' => $status
			);
			$data2 = array(
				'id_hi' => $id_hi_default
			);
			// echo'<pre>';print_r($data1);print_r($data2);die();
			$update1  = $this->admin_model->update_hi($data1, $id_hi);
			$update2  = $this->admin_model->update_network_device($data2, $id_network_device);
			if ($update1 & $update2) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/hi_view?id_unit=" . $id_unit . ">";
			}
		}
	}


	//Merek
	public function merek_view()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['merek_view'] = $this->admin_model->tampil_merek();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/merek_view', $data);
			$this->load->view('footer');
		}
	}

	public function merek_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/merek_add');
			$this->load->view('footer');
		}
	}

	public function action_merek_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$merek = $this->input->post('merek');
			$kategori = $this->input->post('kategori');
			$data = array('merek' => $merek, 'kategori' => $kategori);
			$insert = $this->admin_model->add_merek_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/merek_view>";
			}
		}
	}

	public function merek_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_merek = $this->input->get('id_merek');
			$data['mereknya'] = $this->admin_model->get_merek($id_merek);
			$this->data['title'] = 'Update Vendor :: ';
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $data);
			$this->load->view('admin/merek_edit', $data);
			$this->load->view('footer');
		}
	}

	public function action_merek_edit()
	{
		//print_r ($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_merek = $this->input->post('id_merek');
			$merek = $this->input->post('merek');
			$kategori = $this->input->post('kategori');
			$data = array('merek' => $merek, 'kategori' => $kategori);
			$update = $this->admin_model->update_merek($data, $id_merek);
			if ($update) {
				echo "<script>alert('Berhasil Mengubah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/merek_view?id_merek=" . $id_merek . ">";
			}
		}
	}

	public function merek_delete()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_merek = $this->input->get('id_merek');
			$delete = $this->admin_model->merek_delete($id_merek);
			if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/merek_view>";
			}
		}
	}



	//Laptop
	public function laptop_view()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['laptop_view'] = $this->admin_model->tampil_laptop();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/laptop_view', $data);
			$this->load->view('footer');
		}
	}

	public function laptop_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {			
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['list_merek_laptop'] = $this->admin_model->list_merek_laptop();
			$data['list_vendor'] = $this->admin_model->list_vendor();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/laptop_add', $data);
			$this->load->view('footer');
		}
	}

	public function action_laptop_add()
	{
		//	print_r($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			
			$this->form_validation->set_rules('serial_number','serial_number','required|is_unique[laptop.serial_number]');

			if ($this->form_validation->run() == false){
				echo "<script>alert('Serial Number sudah terdaftar')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/laptop_add>";
			}
			else {
			$id_merek = $this->input->post('id_merek');
			$spesifikasi = $this->input->post('spesifikasi');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$laptop_name = $this->input->post('laptop_name');
			$serial_number = $this->input->post('serial_number');
			$ip_address = $this->input->post('ip_address');
			$id_unit = $this->input->post('id_unit');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			$tahun = $this->input->post('tahun');
			$id_vendor = $this->input->post('id_vendor');

			$data = array(
				'id_merek' => $id_merek,
				'spesifikasi' => $spesifikasi, 'nama_pengguna' => $nama_pengguna, 'ip_address' => $ip_address,
				'id_unit' => $id_unit,
				'tahun' => $tahun,
				'id_vendor' => $id_vendor,
				'laptop_name' => $laptop_name,
				'serial_number' => $serial_number,
			);
			$insert = $this->admin_model->add_laptop_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/laptop_view>";
			}
				
			}
			
		}
	}

	public function laptop_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_laptop = $this->input->get('id_laptop');
			$data['list_merek_laptop'] = $this->admin_model->list_merek_laptop();
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['list_vendor'] = $this->admin_model->list_vendor();
			$data['laptopnya'] = $this->admin_model->get_laptop($id_laptop);
			$this->data['title'] = 'Update Laptop :: ';
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $data);
			$this->load->view('admin/laptop_edit', $data);
			$this->load->view('footer');
		}
	}

	public function action_laptop_edit()
	{
		//print_r ($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_laptop = $this->input->get('id_laptop');
			$current_laptop = $this->admin_model->get_laptop($id_laptop);
			$this->form_validation->set_rules('serial_number','Serial_number','required|is_unique[laptop.serial_number]');
			

			 if ($this->form_validation->run() == false && $this->input->post('serial_number') == $current_laptop['serial_number'] ) {

				$id_laptop = $this->input->post('id_laptop');
				$id_merek = $this->input->post('id_merek');
				$spesifikasi = $this->input->post('spesifikasi');
				$nama_pengguna = $this->input->post('nama_pengguna');
				$ip_address = $this->input->post('ip_address');
				$id_unit = $this->input->post('id_unit');
				$tahun = $this->input->post('tahun');
				$laptop_name = $this->input->post('laptop_name');
				$serial_number = $this->input->post('serial_number');
				$status_kepemilikan = $this->input->post('status_kepemilikan');
				if ($status_kepemilikan == 'Aset PLN') {
					$id_vendor = '0';
				} else {
					$id_vendor = $this->input->post('id_vendor');
				}
				$data = array(
					'id_merek' => $id_merek,
					'spesifikasi' => $spesifikasi, 'nama_pengguna' => $nama_pengguna, 'ip_address' => $ip_address,
					'id_unit' => $id_unit,
					'id_vendor' => $id_vendor,
					'tahun' => $tahun,
					'status_kepemilikan' => $status_kepemilikan,
					'laptop_name' => $laptop_name,
					'serial_number' => $serial_number,
				);
				$update = $this->admin_model->update_laptop($data, $id_laptop);
				if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/laptop_view?id_laptop=" . $id_laptop . ">";
				}
			}
			elseif ($this->form_validation->run() == false){
				echo "<script>alert('Serial Number sudah terdaftar')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/laptop_edit?id_laptop=" . $id_laptop . ">";
			}
			else {
				$id_laptop = $this->input->post('id_laptop');
				$id_merek = $this->input->post('id_merek');
				$spesifikasi = $this->input->post('spesifikasi');
				$nama_pengguna = $this->input->post('nama_pengguna');
				$ip_address = $this->input->post('ip_address');
				$id_unit = $this->input->post('id_unit');
				$tahun = $this->input->post('tahun');
				$laptop_name = $this->input->post('laptop_name');
				$serial_number = $this->input->post('serial_number');
				$status_kepemilikan = $this->input->post('status_kepemilikan');
				if ($status_kepemilikan == 'Aset PLN') {
					$id_vendor = '0';
				} else {
					$id_vendor = $this->input->post('id_vendor');
				}
				$data = array(
					'id_merek' => $id_merek,
					'spesifikasi' => $spesifikasi, 'nama_pengguna' => $nama_pengguna, 'ip_address' => $ip_address,
					'id_unit' => $id_unit,
					'id_vendor' => $id_vendor,
					'tahun' => $tahun,
					'status_kepemilikan' => $status_kepemilikan,
					'laptop_name' => $laptop_name,
					'serial_number' => $serial_number,
				);
				$update = $this->admin_model->update_laptop($data, $id_laptop);
				if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/laptop_view?id_laptop=" . $id_laptop . ">";
				}
			}
			
		}
	}


	public function serial_number($sr){
	
	
		
	
	}
	public function laptop_delete()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_laptop = $this->input->get('id_laptop');
			$delete = $this->admin_model->laptop_delete($id_laptop);
			if ($delete) {
				echo "<>alert('Berhasil Menghapus Data')</>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/laptop_view>";
			}
		}
	}


	//Vendor
	public function vendor_view()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$data['vendor_view'] = $this->admin_model->tampil_vendor();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/vendor_view', $data);
			$this->load->view('footer');
		}
	}

	public function vendor_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/vendor_add');
			$this->load->view('footer');
		}
	}

	public function action_vendor_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$nama_vendor = $this->input->post('nama_vendor');
			$alamat_vendor = $this->input->post('alamat_vendor');
			$telepon = $this->input->post('telepon');
			$data = array('nama_vendor' => $nama_vendor, 'alamat_vendor' => $alamat_vendor, 'telepon' => $telepon,);
			$insert = $this->admin_model->add_vendor_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/vendor_view>";
			}
		}
	}

	public function vendor_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_vendor = $this->input->get('id_vendor');
			$data['vendornya'] = $this->admin_model->get_vendor($id_vendor);
			$this->data['title'] = 'Update Vendor :: ';
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $data);
			$this->load->view('admin/vendor_edit', $data);
			$this->load->view('footer');
		}
	}

	public function action_vendor_edit()
	{
		//print_r ($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_vendor = $this->input->post('id_vendor');
			$nama_vendor = $this->input->post('nama_vendor');
			$alamat_vendor = $this->input->post('alamat_vendor');
			$telepon = $this->input->post('telepon');
			$data = array('nama_vendor' => $nama_vendor, 'alamat_vendor' => $alamat_vendor, 'telepon' => $telepon,);
			$update = $this->admin_model->update_vendor($data, $id_vendor);
			if ($update) {
				echo "<script>alert('Berhasil Mengubah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/vendor_view?id_vendor=" . $id_vendor . ">";
			}
		}
	}

	public function vendor_delete()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_vendor = $this->input->get('id_vendor');
			$delete = $this->admin_model->vendor_delete($id_vendor);
			if ($delete) {

				$this->session->set_flashdata('msg', 'User-deleted');
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/vendor_view>";
				//echo "<script>alert('Berhasil Menghapus Data')</script>";
			}
		}
	}


	//USERS
	public function users_view()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$data['users_view'] = $this->admin_model->tampil_user();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/users_view', $data);
			$this->load->view('footer');
		}
	}

	public function users_add()
	{

		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/users_add');
			$this->load->view('footer');
		}
	}

	public function action_users_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$password_baru = $this->enkripsi->encrypt_decrypt('encrypt', $password);
			//$password = hash("sha256",$this->input->post('password'));
			$role = $this->input->post('role');
			$data = array('username' => $username, 'password' => $password_baru, 'id_role' => $role,);
			$insert = $this->admin_model->add_users_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/users_view>";
			}
		}
	}

	public function users_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_users = $this->input->get('id_users');
			$data['usernya'] = $this->admin_model->get_users($id_users);
			$this->data['title'] = 'Update Users :: ';
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $data);
			$this->load->view('admin/users_edit', $data);
			$this->load->view('footer');
		}
	}

	public function action_users_edit()
	{
		//print_r ($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_users = $this->input->post('id_users');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$password_baru = $this->enkripsi->encrypt_decrypt('encrypt', $password);
			$role = $this->input->post('role');
			$data = array('username' => $username, 'password' => $password_baru, 'id_role' => $role,);

			$update = $this->admin_model->update_users($data, $id_users);
			if ($update) {
				echo "<script>alert('Berhasil Mengubah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/users_view?id_users=" . $id_users . ">";
			}
		}
	}

	public function users_delete()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_users = $this->input->get('id_users');
			$delete = $this->admin_model->users_delete($id_users);
			if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/users_view>";
			}
		}
	}



	//UNIT SUMUT 1
	public function unit_sumut1_view()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$data['unit_sumut1_view'] = $this->admin_model->tampil_unit_sumut1();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/unit_sumut1_view', $data);
			$this->load->view('footer');
		}
	}

	public function unit_sumut1_add()
	{

		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/unit_sumut1_add');
			$this->load->view('footer');
		}
	}

	public function action_unit_sumut1_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$nama_unit = $this->input->post('nama_unit');
			$alamat_unit = $this->input->post('alamat_unit');
			$wilayah_kerja = 'Sumut 1';
			$data = array('nama_unit' => $nama_unit, 'alamat_unit' => $alamat_unit, 'wilayah_kerja' => $wilayah_kerja);
			$insert = $this->admin_model->add_unit_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/unit_sumut1_view>";
			}
		}
	}

	public function unit_sumut1_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_unit = $this->input->get('id_unit');
			$data['unitnya'] = $this->admin_model->get_unit($id_unit);
			$this->data['title'] = 'Update Unit Sumut 1 :: ';
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $data);
			$this->load->view('admin/unit_sumut1_edit', $data);
			$this->load->view('footer');
		}
	}

	public function action_unit_sumut1_edit()
	{
		//print_r ($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_unit = $this->input->post('id_unit');
			$nama_unit = $this->input->post('nama_unit');
			$alamat_unit = $this->input->post('alamat_unit');
			$data = array('nama_unit' => $nama_unit, 'alamat_unit' => $alamat_unit,);
			$update = $this->admin_model->update_unit($data, $id_unit);
			if ($update) {
				echo "<script>alert('Berhasil Mengubah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/unit_sumut1_view?id_unit=" . $id_unit . ">";
			}
		}
	}

	public function unit_delete()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_unit = $this->input->get('id_unit');
			$delete = $this->admin_model->unit_delete($id_unit);
			if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/unit_sumut1_view>";
			}
		}
	}



	//UNIT SUMUT 2
	public function unit_sumut2_view()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$data['unit_sumut2_view'] = $this->admin_model->tampil_unit_sumut2();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/unit_sumut2_view', $data);
			$this->load->view('footer');
		}
	}

	public function unit_sumut2_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/unit_sumut2_add');
			$this->load->view('footer');
		}
	}

	public function action_unit_sumut2_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$nama_unit = $this->input->post('nama_unit');
			$alamat_unit = $this->input->post('alamat_unit');
			$wilayah_kerja = 'Sumut 2';
			$data = array('nama_unit' => $nama_unit, 'alamat_unit' => $alamat_unit, 'wilayah_kerja' => $wilayah_kerja);
			$insert = $this->admin_model->add_unit_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/unit_sumut2_view>";
			}
		}
	}

	public function unit_sumut2_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_unit = $this->input->get('id_unit');
			$data['unitnya'] = $this->admin_model->get_unit($id_unit);
			$this->data['title'] = 'Update Unit Sumut 1 :: ';
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $data);
			$this->load->view('admin/unit_sumut2_edit', $data);
			$this->load->view('footer');
		}
	}

	public function action_unit_sumut2_edit()
	{
		//print_r ($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_unit = $this->input->post('id_unit');
			$nama_unit = $this->input->post('nama_unit');
			$alamat_unit = $this->input->post('alamat_unit');
			$data = array('nama_unit' => $nama_unit, 'alamat_unit' => $alamat_unit,);
			$update = $this->admin_model->update_unit($data, $id_unit);
			if ($update) {
				echo "<script>alert('Berhasil Mengubah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/unit_sumut2_view?id_unit=" . $id_unit . ">";
			}
		}
	}

	public function unit_sumut2_delete()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_unit = $this->input->get('id_unit');
			$delete = $this->admin_model->unit_delete($id_unit);
			if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/unit_sumut2_view>";
			}
		}
	}



	//PC / Komputer
	public function komputer_view()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$data['komputer_view'] = $this->admin_model->tampil_komputer();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/komputer_view', $data);
			$this->load->view('footer');
		}
	}

	public function komputer_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['list_merek_komputer'] = $this->admin_model->list_merek_komputer();
			$data['list_vendor'] = $this->admin_model->list_vendor();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/komputer_add', $data);
			$this->load->view('footer');
		}
	}

	public function action_komputer_add()
	{
		//print_r($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_merek = $this->input->post('id_merek');
			$spesifikasi = $this->input->post('spesifikasi');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$ip_address = $this->input->post('ip_address');
			$id_unit = $this->input->post('id_unit');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			$tahun = $this->input->post('tahun');
			$id_vendor = $this->input->post('id_vendor');
			$data = array(
				'id_merek' => $id_merek,
				'spesifikasi' => $spesifikasi, 'nama_pengguna' => $nama_pengguna, 'ip_address' => $ip_address,
				'id_unit' => $id_unit,
				'id_vendor' => $id_vendor,
				'tahun' => $tahun,
				'status_kepemilikan' => $status_kepemilikan,
			);
			$insert = $this->admin_model->add_komputer_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/komputer_view>";
			}
		}
	}

	public function komputer_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_komputer = $this->input->get('id_komputer');
			$data['list_merek_komputer'] = $this->admin_model->list_merek_komputer();
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['komputernya'] = $this->admin_model->get_komputer($id_komputer);
			$data['list_vendor'] = $this->admin_model->list_vendor();
			$this->data['title'] = 'Update Laptop :: ';
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $data);
			$this->load->view('admin/komputer_edit', $data);
			$this->load->view('footer');
		}
	}

	public function action_komputer_edit()
	{
		//print_r ($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_komputer = $this->input->post('id_komputer');
			$id_merek = $this->input->post('id_merek');
			$spesifikasi = $this->input->post('spesifikasi');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$ip_address = $this->input->post('ip_address');
			$id_unit = $this->input->post('id_unit');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			if ($status_kepemilikan == 'Aset PLN') {
				$id_vendor = '0';
			} else {
				$id_vendor = $this->input->post('id_vendor');
			}
			$tahun = $this->input->post('tahun');
			$data = array(
				'id_merek' => $id_merek,
				'spesifikasi' => $spesifikasi,
				'tahun' => $tahun,
				'id_vendor' => $id_vendor,
				'nama_pengguna' => $nama_pengguna, 'ip_address' => $ip_address, 'id_unit' => $id_unit,
				'status_kepemilikan' => $status_kepemilikan,
			);
			$update = $this->admin_model->update_komputer($data, $id_komputer);
			if ($update) {
				echo "<script>alert('Berhasil Mengubah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/komputer_view?id_komputer=" . $id_komputer . ">";
			}
		}
	}

	public function komputer_delete()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_komputer = $this->input->get('id_komputer');
			$delete = $this->admin_model->komputer_delete($id_komputer);
			if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/komputer_view>";
			}
		}
	}




	//Monitor
	public function monitor_view()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$data['monitor_view'] = $this->admin_model->tampil_monitor();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/monitor_view', $data);
			$this->load->view('footer');
		}
	}

	public function monitor_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['list_merek_monitor'] = $this->admin_model->list_merek_monitor();
			$data['list_vendor'] = $this->admin_model->list_vendor();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/monitor_add', $data);
			$this->load->view('footer');
		}
	}

	public function action_monitor_add()
	{
		//print_r($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_merek = $this->input->post('id_merek');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$id_unit = $this->input->post('id_unit');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			$tahun = $this->input->post('tahun');
			$id_vendor = $this->input->post('id_vendor');
			$data = array(
				'id_merek' => $id_merek,
				'nama_pengguna' => $nama_pengguna, 'id_unit' => $id_unit, 'tahun' => $tahun,
				'id_vendor' => $id_vendor,
				'status_kepemilikan' => $status_kepemilikan,
			);
			$insert = $this->admin_model->add_monitor_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/monitor_view>";
			}
		}
	}

	public function monitor_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_monitor = $this->input->get('id_monitor');
			$data['list_merek_monitor'] = $this->admin_model->list_merek_monitor();
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['list_vendor'] = $this->admin_model->list_vendor();
			$data['monitornya'] = $this->admin_model->get_monitor($id_monitor);
			$this->data['title'] = 'Update Laptop :: ';
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $data);
			$this->load->view('admin/monitor_edit', $data);
			$this->load->view('footer');
		}
	}

	public function action_monitor_edit()
	{
		//print_r ($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_monitor = $this->input->post('id_monitor');
			$id_merek = $this->input->post('id_merek');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$id_unit = $this->input->post('id_unit');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			if ($status_kepemilikan == 'Aset PLN') {
				$id_vendor = '0';
			} else {
				$id_vendor = $this->input->post('id_vendor');
			}
			$tahun = $this->input->post('tahun');
			$data = array(
				'id_merek' => $id_merek,
				'nama_pengguna' => $nama_pengguna, 'id_unit' => $id_unit, 'tahun' => $tahun,
				'id_vendor' => $id_vendor,
				'status_kepemilikan' => $status_kepemilikan,
			);
			$update = $this->admin_model->update_monitor($data, $id_monitor);
			if ($update) {
				echo "<script>alert('Berhasil Mengubah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/monitor_view?id_monitor=" . $id_monitor . ">";
			}
		}
	}

	public function monitor_delete()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_monitor = $this->input->get('id_monitor');
			$delete = $this->admin_model->monitor_delete($id_monitor);
			if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/monitor_view>";
			}
		}
	}


	//Printer
	public function printer_view()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$data['printer_view'] = $this->admin_model->tampil_printer();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/printer_view', $data);
			$this->load->view('footer');
		}
	}

	public function printer_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['list_merek_printer'] = $this->admin_model->list_merek_printer();
			$data['list_vendor'] = $this->admin_model->list_vendor();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/printer_add', $data);
			$this->load->view('footer');
		}
	}

	public function action_printer_add()
	{
		//print_r($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_merek = $this->input->post('id_merek');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$id_unit = $this->input->post('id_unit');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			$id_vendor = $this->input->post('id_vendor');
			$tahun = $this->input->post('tahun');
			$data = array(
				'id_merek' => $id_merek,
				'nama_pengguna' => $nama_pengguna, 'id_unit' => $id_unit, 'id_vendor' => $id_vendor, 'tahun' => $tahun,
				'status_kepemilikan' => $status_kepemilikan,
			);
			$insert = $this->admin_model->add_printer_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/printer_view>";
			}
		}
	}

	public function printer_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_printer = $this->input->get('id_printer');
			$data['list_merek_printer'] = $this->admin_model->list_merek_printer();
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['list_vendor'] = $this->admin_model->list_vendor();
			$data['printernya'] = $this->admin_model->get_printer($id_printer);
			$this->data['title'] = 'Update Laptop :: ';
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $data);
			$this->load->view('admin/printer_edit', $data);
			$this->load->view('footer');
		}
	}

	public function action_printer_edit()
	{
		//print_r ($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_printer = $this->input->post('id_printer');
			$id_merek = $this->input->post('id_merek');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$id_unit = $this->input->post('id_unit');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			if ($status_kepemilikan == 'Aset PLN') {
				$id_vendor = '0';
			} else {
				$id_vendor = $this->input->post('id_vendor');
			}
			$tahun = $this->input->post('tahun');
			$data = array(
				'id_merek' => $id_merek,
				'nama_pengguna' => $nama_pengguna, 'id_unit' => $id_unit, 'id_vendor' => $id_vendor, 'tahun' => $tahun,
				'status_kepemilikan' => $status_kepemilikan,
			);
			$update = $this->admin_model->update_printer($data, $id_printer);
			if ($update) {
				echo "<script>alert('Berhasil Mengubah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/printer_view?id_printer=" . $id_printer . ">";
			}
		}
	}

	public function printer_delete()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_printer = $this->input->get('id_printer');
			$delete = $this->admin_model->printer_delete($id_printer);
			if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/printer_view>";
			}
		}
	}



	//Aplikasi Lokal
	public function aplikasi_lokal_view()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$data['aplikasi_lokal_view'] = $this->admin_model->tampil_aplikasi_lokal();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/aplikasi_lokal_view', $data);
			$this->load->view('footer');
		}
	}

	public function aplikasi_lokal_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['list_unit'] = $this->admin_model->list_unit();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/aplikasi_lokal_add', $data);
			$this->load->view('footer');
		}
	}

	public function action_aplikasi_lokal_add()
	{
		//print_r($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_aplikasi_lokal = $this->input->post('id_aplikasi_lokal');
			$nama_aplikasi = $this->input->post('nama_aplikasi');
			$link_aplikasi = $this->input->post('link_aplikasi');
			$id_unit = $this->input->post('id_unit');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$jenis_database = $this->input->post('jenis_database');
			$data = array(
				'id_aplikasi_lokal' => $id_aplikasi_lokal,
				'nama_aplikasi' => $nama_aplikasi,
				'link_aplikasi' => $link_aplikasi, 'id_unit' => $id_unit, 'username' => $username, 'password' => $password,
				'jenis_database' => $jenis_database,
			);
			$insert = $this->admin_model->add_aplikasi_lokal_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/aplikasi_lokal_view>";
			}
		}
	}

	public function aplikasi_lokal_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_aplikasi_lokal = $this->input->get('id_aplikasi_lokal');
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['aplikasi_lokalnya'] = $this->admin_model->get_aplikasi_lokal($id_aplikasi_lokal);
			$this->data['title'] = 'Update Laptop :: ';
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $data);
			$this->load->view('admin/aplikasi_lokal_edit', $data);
			$this->load->view('footer');
		}
	}

	public function action_aplikasi_lokal_edit()
	{
		//print_r ($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_aplikasi_lokal = $this->input->post('id_aplikasi_lokal');
			$nama_aplikasi = $this->input->post('nama_aplikasi');
			$link_aplikasi = $this->input->post('link_aplikasi');
			$id_unit = $this->input->post('id_unit');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$jenis_database = $this->input->post('jenis_database');
			$data = array(
				'id_aplikasi_lokal' => $id_aplikasi_lokal,
				'nama_aplikasi' => $nama_aplikasi,
				'link_aplikasi' => $link_aplikasi, 'id_unit' => $id_unit, 'username' => $username, 'jenis_database' => $jenis_database, 'password' => $password,
			);
			$update = $this->admin_model->update_aplikasi_lokal($data, $id_aplikasi_lokal);
			if ($update) {
				echo "<script>alert('Berhasil Mengubah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/aplikasi_lokal_view?id_aplikasi_lokal=" . $id_aplikasi_lokal . ">";
			}
		}
	}

	public function aplikasi_lokal_delete()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_aplikasi_lokal = $this->input->get('id_aplikasi_lokal');
			$delete = $this->admin_model->aplikasi_lokal_delete($id_aplikasi_lokal);
			if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/aplikasi_lokal_view>";
			}
		}
	}


	//Network Device 
	public function network_device_view()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$data['network_device_view'] = $this->admin_model->tampil_network_device();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/network_device_view', $data);
			$this->load->view('footer');
		}
	}

	public function network_device_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['list_merek_network_device'] = $this->admin_model->list_merek_network_device();
			$data['list_vendor'] = $this->admin_model->list_vendor();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/network_device_add', $data);
			$this->load->view('footer');
		}
	}

	public function action_network_device_add()
	{
		//print_r($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_merek = $this->input->post('id_merek');
			$device_type = $this->input->post('device_type');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$id_unit = $this->input->post('id_unit');
			$id_vendor = $this->input->post('id_vendor');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			$ip_address = $this->input->post('ip_address');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$tahun = $this->input->post('tahun');
			$id_hi = '0';
			$data = array(
				'id_merek' => $id_merek,
				'device_type' => $device_type,
				'ip_address' => $ip_address,
				'username' => $username,
				'password' => $password,
				'nama_pengguna' => $nama_pengguna, 'id_unit' => $id_unit, 'id_vendor' => $id_vendor, 'tahun' => $tahun,
				'status_kepemilikan' => $status_kepemilikan,
				'id_hi' => $id_hi
			);
			$insert = $this->admin_model->add_network_device_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/network_device_view>";
			}
		}
	}

	public function network_device_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_network_device = $this->input->get('id_network_device');
			$data['list_merek_network_device'] = $this->admin_model->list_merek_network_device();
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['list_vendor'] = $this->admin_model->list_vendor();
			$data['network_devicenya'] = $this->admin_model->get_network_device($id_network_device);
			$this->data['title'] = 'Update Laptop :: ';
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $data);
			$this->load->view('admin/network_device_edit', $data);
			$this->load->view('footer');
		}
	}

	public function action_network_device_edit()
	{
		//print_r ($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_network_device = $this->input->post('id_network_device');
			$id_merek = $this->input->post('id_merek');
			$device_type = $this->input->post('device_type');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$id_unit = $this->input->post('id_unit');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			if ($status_kepemilikan == 'Aset PLN') {
				$id_vendor = '0';
			} else {
				$id_vendor = $this->input->post('id_vendor');
			}
			$ip_address = $this->input->post('ip_address');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$tahun = $this->input->post('tahun');
			$data = array(
				'id_merek' => $id_merek,
				'device_type' => $device_type,
				'ip_address' => $ip_address,
				'username' => $username,
				'password' => $password,
				'nama_pengguna' => $nama_pengguna, 'id_unit' => $id_unit, 'id_vendor' => $id_vendor, 'tahun' => $tahun,
				'status_kepemilikan' => $status_kepemilikan,
			);
			$update = $this->admin_model->update_network_device($data, $id_network_device);
			if ($update) {
				echo "<script>alert('Berhasil Mengubah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/network_device_view?id_network_device=" . $id_network_device . ">";
			}
		}
	}

	public function network_device_delete()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_network_device = $this->input->get('id_network_device');
			$delete = $this->admin_model->network_device_delete($id_network_device);
			if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/network_device_view>";
			}
		}
	}


	//SERVER 
	public function server_view()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$data['server_view'] = $this->admin_model->tampil_server();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/server_view', $data);
			$this->load->view('footer');
		}
	}

	public function server_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['list_merek_server'] = $this->admin_model->list_merek_server();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/server_add', $data);
			$this->load->view('footer');
		}
	}

	public function action_server_add()
	{
		//print_r($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_merek = $this->input->post('id_merek');
			$keterangan = $this->input->post('keterangan');
			$ip_address = $this->input->post('ip_address');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$id_unit = $this->input->post('id_unit');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$tahun = $this->input->post('tahun');
			$data = array(
				'id_merek' => $id_merek,
				'keterangan' => $keterangan,
				'ip_address' => $ip_address,
				'username' => $username,
				'password' => $password,
				'tahun' => $tahun,
				'nama_pengguna' => $nama_pengguna, 'id_unit' => $id_unit,
			);
			$insert = $this->admin_model->add_server_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/server_view>";
			}
		}
	}

	public function server_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_server = $this->input->get('id_server');
			$data['list_merek_server'] = $this->admin_model->list_merek_server();
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['servernya'] = $this->admin_model->get_server($id_server);
			$this->data['title'] = 'Update Laptop :: ';
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $data);
			$this->load->view('admin/server_edit', $data);
			$this->load->view('footer');
		}
	}

	public function action_server_edit()
	{
		//print_r ($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_server = $this->input->post('id_server');
			$id_merek = $this->input->post('id_merek');
			$keterangan = $this->input->post('keterangan');
			$ip_address = $this->input->post('ip_address');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$id_unit = $this->input->post('id_unit');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$tahun = $this->input->post('tahun');
			$data = array(
				'id_merek' => $id_merek,
				'keterangan' => $keterangan,
				'ip_address' => $ip_address,
				'username' => $username,
				'password' => $password,
				'tahun' => $tahun,
				'nama_pengguna' => $nama_pengguna, 'id_unit' => $id_unit,
			);
			$update = $this->admin_model->update_server($data, $id_server);
			if ($update) {
				echo "<script>alert('Berhasil Mengubah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/server_view?id_server=" . $id_server . ">";
			}
		}
	}

	public function server_delete()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_server = $this->input->get('id_server');
			$delete = $this->admin_model->server_delete($id_server);
			if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/server_view>";
			}
		}
	}



	//Vicon
	public function vicon_view()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$data['vicon_view'] = $this->admin_model->tampil_vicon();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/vicon_view', $data);
			$this->load->view('footer');
		}
	}

	public function vicon_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['list_merek_vicon'] = $this->admin_model->list_merek_vicon();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/vicon_add', $data);
			$this->load->view('footer');
		}
	}

	public function action_vicon_add()
	{
		//print_r($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_merek = $this->input->post('id_merek');
			$type = $this->input->post('type');
			$tahun = $this->input->post('tahun');
			$no_seri = $this->input->post('no_seri');
			$ip_address = $this->input->post('ip_address');
			$mac_address = $this->input->post('mac_address');
			$id_unit = $this->input->post('id_unit');
			$data = array(
				'id_merek' => $id_merek,
				'type' => $type, 'mac_address' => $mac_address, 'tahun' => $tahun, 'no_seri' => $no_seri, 'ip_address' => $ip_address, 'id_unit' => $id_unit
			);
			$insert = $this->admin_model->add_vicon_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/vicon_view>";
			}
		}
	}

	public function vicon_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {

			$id_vicon = $this->input->get('id_vicon');
			$data['list_merek_vicon'] = $this->admin_model->list_merek_vicon();
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['viconnya'] = $this->admin_model->get_vicon($id_vicon);
			$this->data['title'] = 'Update Laptop :: ';
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $data);
			$this->load->view('admin/vicon_edit', $data);
			$this->load->view('footer');
		}
	}

	public function action_vicon_edit()
	{
		//print_r ($_POST); exit;
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_vicon = $this->input->post('id_vicon');
			$id_merek = $this->input->post('id_merek');
			$type = $this->input->post('type');
			$tahun = $this->input->post('tahun');
			$no_seri = $this->input->post('no_seri');
			$ip_address = $this->input->post('ip_address');
			$mac_address = $this->input->post('mac_address');
			$id_unit = $this->input->post('id_unit');
			$data = array(
				'id_merek' => $id_merek,
				'type' => $type, 'mac_address' => $mac_address, 'tahun' => $tahun, 'no_seri' => $no_seri, 'ip_address' => $ip_address, 'id_unit' => $id_unit
			);
			$update = $this->admin_model->update_vicon($data, $id_vicon);
			if ($update) {
				echo "<script>alert('Berhasil Mengubah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/vicon_view?id_vicon=" . $id_vicon . ">";
			}
		}
	}

	public function vicon_delete()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_vicon = $this->input->get('id_vicon');
			$delete = $this->admin_model->vicon_delete($id_vicon);
			if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/vicon_view>";
			}
		}
	}

	//LOG GANGGUAN
	public function lgangguan_view()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['lgangguan_view'] = $this->admin_model->tampil_lgangguan();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/lgangguan_view', $data);
			$this->load->view('footer');
		}
	}

	public function lgangguan_filter()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$no_tiket = $this->input->post('no_tiket');
			$year = $this->input->post('year');
			$month = $this->input->post('month');
			$monthstr = sprintf("%02d", $month);
			switch ($monthstr) {
				case "01":
					$data['monthName'] = "Januari";
					break;
				case "02":
					$data['monthName'] = "Februari";
					break;
				case "03":
					$data['monthName'] = "Maret";
					break;
				case "04":
					$data['monthName'] = "April";
					break;
				case "05":
					$data['monthName'] = "Mei";
					break;
				case "06":
					$data['monthName'] = "Juni";
					break;
				case "07":
					$data['monthName'] = "Juli";
					break;
				case "08":
					$data['monthName'] = "Agustus";
					break;
				case "09":
					$data['monthName'] = "September";
					break;
				case "10":
					$data['monthName'] = "Oktober";
					break;
				case "11":
					$data['monthName'] = "November";
					break;
				case "12":
					$data['monthName'] = "Desember";
					break;
			}
			if (empty($no_tiket) && empty($year) && empty($month)) {
				echo "<script>alert('Harap masukkan nomor tiket, tahun, atau bulan untuk melakukan filter data log gangguan')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/lgangguan_view>";
			} else {
				$data['lgangguan_view'] = $this->admin_model->lgangguan_filter($no_tiket, $year, $month);
				$data['no_tiket'] = $no_tiket;
				$data['year'] = $year;
				$data['month'] = $month;
				$this->load->view('header');
				$this->load->view('sidebar');
				$this->load->view('admin/lgangguan_view', $data);
				$this->load->view('footer');
			}
		}
	}

	public function lgangguan_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/lgangguan_add');
			$this->load->view('footer');
		}
	}

	public function action_lgangguan_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$this->form_validation->set_rules('no_tiket', 'Nomor Tiket', 'required', [
				'required' => 'Nomor tiket harus di isi!'
			]);
			$this->form_validation->set_rules('nama_service', 'Nama Service', 'required', [
				'required' => 'Nama service harus di isi!'
			]);
			$this->form_validation->set_rules('sid', 'SID', 'required|numeric', [
				'required' => 'SID harus di isi!'
			]);
			$this->form_validation->set_rules('layanan', 'Layanan', 'required', [
				'required' => 'Layanan harus di isi dengan angka!'
			]);
			$this->form_validation->set_rules('status_log', 'Status Tiket', 'required', [
				'required' => 'Status tiket harus di isi!'
			]);
			$this->form_validation->set_rules('penyebab', 'penyebab', 'required', [
				'required' => 'Penyebab harus di isi!'
			]);

			$this->form_validation->set_rules('action', 'action', 'required', [
				'required' => 'Action harus di isi!'
			]);

			if ($this->form_validation->run() == false) {
				$this->load->view('header');
				$this->load->view('sidebar');
				$this->load->view('admin/lgangguan_add');
				$this->load->view('footer');
			} else {
				$no_tiket = $this->input->post('no_tiket');
				$nama_service = $this->input->post('nama_service');
				$sid = $this->input->post('sid');
				$layanan = $this->input->post('layanan');
				$status_log = $this->input->post('status_log');
				$penyebab = $this->input->post('penyebab');
				$action = $this->input->post('action');

				date_default_timezone_set('Asia/Jakarta');
				$now = date('Y-m-d H:i:s');
				$tiket_open = $now;
				$tiket_close = $now;
				$before = date_create($now);
				$after = date_create($now);
				$diff = date_diff($before, $after, FALSE);
				$durasi = $diff->format("%H:%i:%s");

				$data = array(
					'no_tiket' => $no_tiket,
					'nama_service' => $nama_service,
					'sid' => $sid,
					'layanan' => $layanan,
					'status_log' => $status_log,
					'tiket_open' => $tiket_open,
					'tiket_close' => $tiket_close,
					'durasi' => $durasi,
					'penyebab' => $penyebab,
					'action' => $action
				);

				$insert = $this->admin_model->add_lgangguan_data($data);
				if ($insert) {
					echo "<script>alert('Berhasil Menambah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/lgangguan_view>";
				} else {
					echo "<script>alert('Gagal Menambah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/lgangguan_view>";
				}
			}
		}
	}

	public function lgangguan_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$log_id = $this->input->get('log_id');
			$data['lgangguannya'] = $this->admin_model->get_lgangguan($log_id, "log_id");
			$this->data['title'] = 'Update Log Gangguan :: ';
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $data);
			$this->load->view('admin/lgangguan_edit', $data);
			$this->load->view('footer');
		}
	}

	public function action_lgangguan_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$log_id = $this->input->post('log_id');
			$this->form_validation->set_rules('no_tiket', 'Nomor Tiket', 'required', [
				'required' => 'Nomor tiket harus di isi!'
			]);
			$this->form_validation->set_rules('nama_service', 'Nama Service', 'required', [
				'required' => 'Nama service harus di isi!'
			]);
			$this->form_validation->set_rules('sid', 'SID', 'required|numeric', [
				'required' => 'SID harus di isi!'
			]);
			$this->form_validation->set_rules('layanan', 'Layanan', 'required', [
				'required' => 'Layanan harus di isi dengan angka!'
			]);
			$this->form_validation->set_rules('status_log', 'Status Tiket', 'required', [
				'required' => 'Status tiket harus di isi!'
			]);
			$this->form_validation->set_rules('penyebab', 'penyebab', 'required', [
				'required' => 'Penyebab harus di isi!'
			]);

			$this->form_validation->set_rules('action', 'action', 'required', [
				'required' => 'Action harus di isi!'
			]);

			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible text-center " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Pastikan seluruh data terisi
                  </div>');
				redirect(base_url() . "admin/lgangguan_edit?log_id=" . $log_id);
			} else {
				$no_tiket = $this->input->post('no_tiket');
				$nama_service = $this->input->post('nama_service');
				$sid = $this->input->post('sid');
				$layanan = $this->input->post('layanan');
				$status_log = $this->input->post('status_log');
				$penyebab = $this->input->post('penyebab');
				$action = $this->input->post('action');

				date_default_timezone_set('Asia/Jakarta');
				$now = date('Y-m-d H:i:s');

				if ($status_log == "Open") {
					$tiket_open = $now;
					$tiket_close = $this->input->post('tiket_close');
					$before = date_create($now);
					$after = date_create($tiket_close);
				} else {
					$tiket_open = $this->input->post('tiket_open');
					$tiket_close = $now;
					$before =  date_create($tiket_open);
					$after = date_create($now);
				}

				$diff = date_diff($before, $after, FALSE);
				$durasi = $diff->format("%H:%i:%s");

				$data = array(
					'no_tiket' => $no_tiket,
					'nama_service' => $nama_service,
					'sid' => $sid,
					'layanan' => $layanan,
					'status_log' => $status_log,
					'tiket_open' => $tiket_open,
					'tiket_close' => $tiket_close,
					'durasi' => $durasi,
					'penyebab' => $penyebab,
					'action' => $action
				);

				$update = $this->admin_model->update_lgangguan($data, $log_id);
				if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/lgangguan_view?log_id=" . $log_id . ">";
				}
			}
		}
	}

	public function lgangguan_delete()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$log_id = $this->input->get('log_id');
			$delete = $this->admin_model->lgangguan_delete($log_id);
			if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/lgangguan_view>";
			}
		}
	}
}
