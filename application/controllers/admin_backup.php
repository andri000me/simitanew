<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
	public $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation', 'session','enkripsi'));
        $this->load->model(array('admin_model'));
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
			$data['menghitung_jumlah_perangkat'] = $this->admin_model->menghitung_jumlah_perangkat();
			$data['dashboard_merek_laptop_dell'] = $this->admin_model->dashboard_merek_laptop_dell();
			$data['dashboard_merek_laptop_hp'] = $this->admin_model->dashboard_merek_laptop_hp();
			$data['dashboard_merek_laptop_asus'] = $this->admin_model->dashboard_merek_laptop_asus();
			$data['dashboard_merek_laptop_toshiba'] = $this->admin_model->dashboard_merek_laptop_toshiba();
			$data['dashboard_merek_laptop_apple'] = $this->admin_model->dashboard_merek_laptop_apple();
			$data['dashboard_merek_laptop_lenovo'] = $this->admin_model->dashboard_merek_laptop_lenovo();
		    $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/index',$data);
            $this->load->view('footer',$data);
	}
	 
	// Logout
	public function login() {
        $this->load->view('admin/login');
    }
	
	public function do_login() {
		//print_r($_POST); exit;
		$username = $this->input->post('username');
        $password = $this->input->post('password');
        $cek = $this->admin_model->search_users($username);
		$role = $cek['id_role'];
		$passwordnya = $cek['password'];
		$decrypted_txt = $this->enkripsi->encrypt_decrypt('decrypt', $passwordnya);
		if ($decrypted_txt == $password) {
			 if (($role == 1)) {
					//echo "<script>alert('Anda Berhasil Login dengan Hak Akses Admin')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/index>";
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
    function logout() {
        $data = array('username' => NULL,
            'password' => NULL,
            'role' => NULL);
        $this->session->unset_userdata($data);
        echo "<script>alert('Anda Berhasil Keluar dari Aplikasi')</script>";
		echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
    }
	
	//Merek
	public function merek_view() {
        
			$data['merek_view'] = $this->admin_model->tampil_merek();
			$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/merek_view',$data);
            $this->load->view('footer');
    }
	
	public function merek_add() {
		
        	$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/merek_add');
            $this->load->view('footer');
    }
	
	public function action_merek_add() {
		
			$merek = $this->input->post('merek');
			$kategori = $this->input->post('kategori');
			$data = array('merek' => $merek,'kategori' => $kategori);
			$insert = $this->admin_model->add_merek_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/merek_view>";
			}
    }
	
	public function merek_edit() {
		
			$id_merek = $this->input->get('id_merek');
            $data['mereknya'] = $this->admin_model->get_merek($id_merek);
            $this->data['title'] = 'Update Vendor :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('admin/merek_edit', $data);
            $this->load->view('footer');
	}
	
	public function action_merek_edit(){
	//print_r ($_POST); exit;
			$id_merek = $this->input->post('id_merek');
		   	$merek = $this->input->post('merek');
			$kategori = $this->input->post('kategori');
			$data = array('merek' => $merek,'kategori' => $kategori);
			$update = $this->admin_model->update_merek($data, $id_merek);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/merek_view?id_merek=".$id_merek.">";
					} 
			}
	
	public function merek_delete() {
			$id_merek = $this->input->get('id_merek');
            $delete = $this->admin_model->merek_delete($id_merek);
            if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/merek_view>";
            }
        }
	
	
	
	//Laptop
	public function laptop_view() {
        
			$data['laptop_view'] = $this->admin_model->tampil_laptop();
			$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/laptop_view',$data);
            $this->load->view('footer');
    }
	
	public function laptop_add() {
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['list_merek_laptop'] = $this->admin_model->list_merek_laptop();
			$data['list_vendor'] = $this->admin_model->list_vendor();
        	$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/laptop_add',$data);
            $this->load->view('footer');
    }
	
	public function action_laptop_add() {
		//	print_r($_POST); exit;
			$id_merek = $this->input->post('id_merek');
			$spesifikasi = $this->input->post('spesifikasi');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$ip_address = $this->input->post('ip_address');
			$id_unit = $this->input->post('id_unit');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			$tahun = $this->input->post('tahun');
			$id_vendor = $this->input->post('id_vendor');
			$data = array('id_merek' => $id_merek,
			'spesifikasi' => $spesifikasi,'nama_pengguna' => $nama_pengguna
			,'ip_address' => $ip_address,
			'id_unit' => $id_unit,
			'tahun' => $tahun,
			'id_vendor' => $id_vendor,
			'status_kepemilikan' => $status_kepemilikan,);
			$insert = $this->admin_model->add_laptop_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/laptop_view>";
			}
    }
	
	public function laptop_edit() {
		
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
	
	public function action_laptop_edit(){
			//print_r ($_POST); exit;
			$id_laptop = $this->input->post('id_laptop');
		   	$id_merek = $this->input->post('id_merek');
			$spesifikasi = $this->input->post('spesifikasi');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$ip_address = $this->input->post('ip_address');
			$id_unit = $this->input->post('id_unit');
			$tahun = $this->input->post('tahun');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			if($status_kepemilikan =='Aset PLN'){
				$id_vendor = '0';
			} else {
				$id_vendor = $this->input->post('id_vendor');
			}
			$data = array('id_merek' => $id_merek,
			'spesifikasi' => $spesifikasi,'nama_pengguna' => $nama_pengguna
			,'ip_address' => $ip_address,
			'id_unit' => $id_unit,
			'id_vendor' => $id_vendor,
			'tahun' => $tahun,
			'status_kepemilikan' => $status_kepemilikan,);
			$update = $this->admin_model->update_laptop($data, $id_laptop);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/laptop_view?id_laptop=".$id_laptop.">";
					} 
			}
	
	public function laptop_delete() {
			$id_laptop = $this->input->get('id_laptop');
            $delete = $this->admin_model->laptop_delete($id_laptop);
            if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/laptop_view>";
            }
        }
	
	
	//Vendor
	public function vendor_view() {
        
			$data['vendor_view'] = $this->admin_model->tampil_vendor();
			$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/vendor_view',$data);
            $this->load->view('footer');
    }
	
	public function vendor_add() {
        	$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/vendor_add');
            $this->load->view('footer');
    }
	
	public function action_vendor_add() {
		
			$nama_vendor = $this->input->post('nama_vendor');
			$alamat_vendor = $this->input->post('alamat_vendor');
			$telepon = $this->input->post('telepon');
			$data = array('nama_vendor' => $nama_vendor,'alamat_vendor' => $alamat_vendor,'telepon' => $telepon,);
			$insert = $this->admin_model->add_vendor_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/vendor_view>";
			}
    }
	
	public function vendor_edit() {
		
			$id_vendor = $this->input->get('id_vendor');
            $data['vendornya'] = $this->admin_model->get_vendor($id_vendor);
            $this->data['title'] = 'Update Vendor :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('admin/vendor_edit', $data);
            $this->load->view('footer');
	}
	
	public function action_vendor_edit(){
	//print_r ($_POST); exit;
			$id_vendor = $this->input->post('id_vendor');
		   	$nama_vendor = $this->input->post('nama_vendor');
			$alamat_vendor = $this->input->post('alamat_vendor');
			$telepon = $this->input->post('telepon');
			$data = array('nama_vendor' => $nama_vendor,'alamat_vendor' => $alamat_vendor,'telepon' => $telepon,);
			$update = $this->admin_model->update_vendor($data, $id_vendor);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/vendor_view?id_vendor=".$id_vendor.">";
					} 
			}
	
	public function vendor_delete() {
			$id_vendor = $this->input->get('id_vendor');
            $delete = $this->admin_model->vendor_delete($id_vendor);
            if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/vendor_view>";
            }
        }
	
	
//USERS
	public function users_view() {
        
			$data['users_view'] = $this->admin_model->tampil_user();
			$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/users_view',$data);
            $this->load->view('footer');
    }
	
	public function users_add() {
        	$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/users_add');
            $this->load->view('footer');
    }
	
	public function action_users_add() {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$password_baru = $this->enkripsi->encrypt_decrypt('encrypt', $password);
			//$password = hash("sha256",$this->input->post('password'));
			$role = $this->input->post('role');
			$data = array('username' => $username,'password' => $password_baru,'id_role' => $role,);
			$insert = $this->admin_model->add_users_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/users_view>";
			}
    }
	
	public function users_edit() {
		
			$id_users = $this->input->get('id_users');
            $data['usernya'] = $this->admin_model->get_users($id_users);
            $this->data['title'] = 'Update Users :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('admin/users_edit', $data);
            $this->load->view('footer');
	}
	
	public function action_users_edit(){
		//print_r ($_POST); exit;
		$id_users = $this->input->post('id_users');
		   $username = $this->input->post('username');
		   $password = $this->input->post('password');
		   $password_baru = $this->enkripsi->encrypt_decrypt('encrypt', $password);
		   $role = $this->input->post('role');
		   $data = array('username' => $username,'password' => $password_baru,'id_role' => $role,);
            
			$update = $this->admin_model->update_users($data, $id_users);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/users_view?id_users=".$id_users.">";
						 
					} 
		
	}
	
    public function users_delete() {
			$id_users = $this->input->get('id_users');
            $delete = $this->admin_model->users_delete($id_users);
            if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/users_view>";
            }
        }
		
		
	
	//UNIT SUMUT 1
	public function unit_sumut1_view() {
        
			$data['unit_sumut1_view'] = $this->admin_model->tampil_unit_sumut1();
			$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/unit_sumut1_view',$data);
            $this->load->view('footer');
    }
	
	public function unit_sumut1_add() {
        	$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/unit_sumut1_add');
            $this->load->view('footer');
    }
	
	public function action_unit_sumut1_add() {
		
			$nama_unit = $this->input->post('nama_unit');
			$alamat_unit = $this->input->post('alamat_unit');
			$wilayah_kerja = 'Sumut 1';
			$data = array('nama_unit' => $nama_unit,'alamat_unit' => $alamat_unit,'wilayah_kerja' => $wilayah_kerja);
			$insert = $this->admin_model->add_unit_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/unit_sumut1_view>";
			}
    }
	
	public function unit_sumut1_edit() {
		
			$id_unit = $this->input->get('id_unit');
            $data['unitnya'] = $this->admin_model->get_unit($id_unit);
            $this->data['title'] = 'Update Unit Sumut 1 :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('admin/unit_sumut1_edit', $data);
            $this->load->view('footer');
	}
	
	public function action_unit_sumut1_edit(){
	//print_r ($_POST); exit;
			$id_unit = $this->input->post('id_unit');
		   	$nama_unit = $this->input->post('nama_unit');
			$alamat_unit = $this->input->post('alamat_unit');
			$data = array('nama_unit' => $nama_unit,'alamat_unit' => $alamat_unit,);
			$update = $this->admin_model->update_unit($data, $id_unit);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/unit_sumut1_view?id_unit=".$id_unit.">";
					} 
			}
	
	public function unit_delete() {
			$id_unit = $this->input->get('id_unit');
            $delete = $this->admin_model->unit_delete($id_unit);
            if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/unit_sumut1_view>";
            }
        }
	
	
	
	//UNIT SUMUT 2
	public function unit_sumut2_view() {
        
			$data['unit_sumut2_view'] = $this->admin_model->tampil_unit_sumut2();
			$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/unit_sumut2_view',$data);
            $this->load->view('footer');
    }
	
	public function unit_sumut2_add() {
        	$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/unit_sumut2_add');
            $this->load->view('footer');
    }
	
	public function action_unit_sumut2_add() {
		
			$nama_unit = $this->input->post('nama_unit');
			$alamat_unit = $this->input->post('alamat_unit');
			$wilayah_kerja = 'Sumut 2';
			$data = array('nama_unit' => $nama_unit,'alamat_unit' => $alamat_unit,'wilayah_kerja' => $wilayah_kerja);
			$insert = $this->admin_model->add_unit_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/unit_sumut2_view>";
			}
    }
	
	public function unit_sumut2_edit() {
		
			$id_unit = $this->input->get('id_unit');
            $data['unitnya'] = $this->admin_model->get_unit($id_unit);
            $this->data['title'] = 'Update Unit Sumut 1 :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('admin/unit_sumut2_edit', $data);
            $this->load->view('footer');
	}
	
	public function action_unit_sumut2_edit(){
	//print_r ($_POST); exit;
			$id_unit = $this->input->post('id_unit');
		   	$nama_unit = $this->input->post('nama_unit');
			$alamat_unit = $this->input->post('alamat_unit');
			$data = array('nama_unit' => $nama_unit,'alamat_unit' => $alamat_unit,);
			$update = $this->admin_model->update_unit($data, $id_unit);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/unit_sumut2_view?id_unit=".$id_unit.">";
					} 
			}
			
	public function unit_sumut2_delete() {
			$id_unit = $this->input->get('id_unit');
            $delete = $this->admin_model->unit_delete($id_unit);
            if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/unit_sumut2_view>";
            }
        }
	
	
    	
	//PC / Komputer
	public function komputer_view() {
        
			$data['komputer_view'] = $this->admin_model->tampil_komputer();
			$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/komputer_view',$data);
            $this->load->view('footer');
    }
	
	public function komputer_add() {
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['list_merek_komputer'] = $this->admin_model->list_merek_komputer();
			$data['list_vendor'] = $this->admin_model->list_vendor();
        	$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/komputer_add',$data);
            $this->load->view('footer');
    }
	
	public function action_komputer_add() {
		//print_r($_POST); exit;
			$id_merek = $this->input->post('id_merek');
			$spesifikasi = $this->input->post('spesifikasi');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$ip_address = $this->input->post('ip_address');
			$id_unit = $this->input->post('id_unit');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			$tahun = $this->input->post('tahun');
			$id_vendor = $this->input->post('id_vendor');
			$data = array('id_merek' => $id_merek,
			'spesifikasi' => $spesifikasi,'nama_pengguna' => $nama_pengguna
			,'ip_address' => $ip_address,
			'id_unit' => $id_unit,
			'id_vendor' => $id_vendor,
			'tahun' => $tahun,
			'status_kepemilikan' => $status_kepemilikan,);
			$insert = $this->admin_model->add_komputer_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/komputer_view>";
			}
    }
	
	public function komputer_edit() {
		
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
	
	public function action_komputer_edit(){
	//print_r ($_POST); exit;
			$id_komputer = $this->input->post('id_komputer');
		   	$id_merek = $this->input->post('id_merek');
			$spesifikasi = $this->input->post('spesifikasi');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$ip_address = $this->input->post('ip_address');
			$id_unit = $this->input->post('id_unit');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			if($status_kepemilikan =='Aset PLN'){
				$id_vendor = '0';
			} else {
				$id_vendor = $this->input->post('id_vendor');
			}
			$tahun = $this->input->post('tahun');
			$data = array('id_merek' => $id_merek,
			'spesifikasi' => $spesifikasi,
			'tahun' => $tahun,
			'id_vendor' => $id_vendor,
			'nama_pengguna' => $nama_pengguna
			,'ip_address' => $ip_address,'id_unit' => $id_unit,
			'status_kepemilikan' => $status_kepemilikan,);
			$update = $this->admin_model->update_komputer($data, $id_komputer);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/komputer_view?id_komputer=".$id_komputer.">";
					} 
			}
	
	public function komputer_delete() {
			$id_komputer = $this->input->get('id_komputer');
            $delete = $this->admin_model->komputer_delete($id_komputer);
            if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/komputer_view>";
            }
        }
	
	
	
	
	//Monitor
	public function monitor_view() {
        
			$data['monitor_view'] = $this->admin_model->tampil_monitor();
			$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/monitor_view',$data);
            $this->load->view('footer');
    }
	
	public function monitor_add() {
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['list_merek_monitor'] = $this->admin_model->list_merek_monitor();
			$data['list_vendor'] = $this->admin_model->list_vendor();
        	$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/monitor_add',$data);
            $this->load->view('footer');
    }
	
	public function action_monitor_add() {
		//print_r($_POST); exit;
			$id_merek = $this->input->post('id_merek');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$id_unit = $this->input->post('id_unit');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			$tahun = $this->input->post('tahun');
			$id_vendor = $this->input->post('id_vendor');
			$data = array('id_merek' => $id_merek,
			'nama_pengguna' => $nama_pengguna
			,'id_unit' => $id_unit
			,'tahun' => $tahun,
			'id_vendor' => $id_vendor,
			'status_kepemilikan' => $status_kepemilikan,);
			$insert = $this->admin_model->add_monitor_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/monitor_view>";
			}
    }
	
	public function monitor_edit() {
		
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
	
	public function action_monitor_edit(){
	//print_r ($_POST); exit;
			$id_monitor = $this->input->post('id_monitor');
		   	$id_merek = $this->input->post('id_merek');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$id_unit = $this->input->post('id_unit');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			if($status_kepemilikan =='Aset PLN'){
				$id_vendor = '0';
			} else {
				$id_vendor = $this->input->post('id_vendor');
			}
			$tahun = $this->input->post('tahun');
			$data = array('id_merek' => $id_merek,
			'nama_pengguna' => $nama_pengguna
			,'id_unit' => $id_unit
			,'tahun' => $tahun,
			'id_vendor' => $id_vendor,
			'status_kepemilikan' => $status_kepemilikan,);
			$update = $this->admin_model->update_monitor($data, $id_monitor);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/monitor_view?id_monitor=".$id_monitor.">";
					} 
			}
	
	public function monitor_delete() {
			$id_monitor = $this->input->get('id_monitor');
            $delete = $this->admin_model->monitor_delete($id_monitor);
            if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/monitor_view>";
            }
        }
	
	
	//Printer
	public function printer_view() {
        
			$data['printer_view'] = $this->admin_model->tampil_printer();
			$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/printer_view',$data);
            $this->load->view('footer');
    }
	
	public function printer_add() {
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['list_merek_printer'] = $this->admin_model->list_merek_printer();
			$data['list_vendor'] = $this->admin_model->list_vendor();
        	$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/printer_add',$data);
            $this->load->view('footer');
    }
	
	public function action_printer_add() {
		//print_r($_POST); exit;
			$id_merek = $this->input->post('id_merek');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$id_unit = $this->input->post('id_unit');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			$id_vendor = $this->input->post('id_vendor');
			$tahun = $this->input->post('tahun');
			$data = array('id_merek' => $id_merek,
			'nama_pengguna' => $nama_pengguna
			,'id_unit' => $id_unit
			,'id_vendor' => $id_vendor
			,'tahun' => $tahun,
			'status_kepemilikan' => $status_kepemilikan,);
			$insert = $this->admin_model->add_printer_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/printer_view>";
			}
    }
	
	public function printer_edit() {
		
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
	
	public function action_printer_edit(){
	//print_r ($_POST); exit;
			$id_printer = $this->input->post('id_printer');
		   	$id_merek = $this->input->post('id_merek');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$id_unit = $this->input->post('id_unit');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			if($status_kepemilikan =='Aset PLN'){
				$id_vendor = '0';
			} else {
				$id_vendor = $this->input->post('id_vendor');
			}
			$tahun = $this->input->post('tahun');
			$data = array('id_merek' => $id_merek,
			'nama_pengguna' => $nama_pengguna
			,'id_unit' => $id_unit
			,'id_vendor' => $id_vendor
			,'tahun' => $tahun,
			'status_kepemilikan' => $status_kepemilikan,);
			$update = $this->admin_model->update_printer($data, $id_printer);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/printer_view?id_printer=".$id_printer.">";
					} 
			}
	
	public function printer_delete() {
			$id_printer = $this->input->get('id_printer');
            $delete = $this->admin_model->printer_delete($id_printer);
            if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/printer_view>";
            }
        }
	
	
	
	//Aplikasi Lokal
	public function aplikasi_lokal_view() {
        
			$data['aplikasi_lokal_view'] = $this->admin_model->tampil_aplikasi_lokal();
			$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/aplikasi_lokal_view',$data);
            $this->load->view('footer');
    }
	
	public function aplikasi_lokal_add() {
			$data['list_unit'] = $this->admin_model->list_unit();
        	$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/aplikasi_lokal_add',$data);
            $this->load->view('footer');
    }
	
	public function action_aplikasi_lokal_add() {
		//print_r($_POST); exit;
			$id_aplikasi_lokal = $this->input->post('id_aplikasi_lokal');
			$nama_aplikasi = $this->input->post('nama_aplikasi');
			$link_aplikasi = $this->input->post('link_aplikasi');
			$id_unit = $this->input->post('id_unit');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$jenis_database = $this->input->post('jenis_database');
			$data = array('id_aplikasi_lokal' => $id_aplikasi_lokal,
			'nama_aplikasi' => $nama_aplikasi,
			'link_aplikasi' => $link_aplikasi
			,'id_unit' => $id_unit
			,'username' => $username
			,'password' => $password,
			'jenis_database' => $jenis_database,);
			$insert = $this->admin_model->add_aplikasi_lokal_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/aplikasi_lokal_view>";
			}
    }
	
	public function aplikasi_lokal_edit() {
		
			$id_aplikasi_lokal = $this->input->get('id_aplikasi_lokal');
			$data['list_unit'] = $this->admin_model->list_unit();
            $data['aplikasi_lokalnya'] = $this->admin_model->get_aplikasi_lokal($id_aplikasi_lokal);
            $this->data['title'] = 'Update Laptop :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('admin/aplikasi_lokal_edit', $data);
            $this->load->view('footer');
	}
	
	public function action_aplikasi_lokal_edit(){
	//print_r ($_POST); exit;
			$id_aplikasi_lokal = $this->input->post('id_aplikasi_lokal');
		   	$nama_aplikasi = $this->input->post('nama_aplikasi');
			$link_aplikasi = $this->input->post('link_aplikasi');
			$id_unit = $this->input->post('id_unit');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$jenis_database = $this->input->post('jenis_database');
			$data = array('id_aplikasi_lokal' => $id_aplikasi_lokal,
			'nama_aplikasi' => $nama_aplikasi,
			'link_aplikasi' => $link_aplikasi
			,'id_unit' => $id_unit
			,'username' => $username
			,'jenis_database' => $jenis_database
			,'password' => $password,);
			$update = $this->admin_model->update_aplikasi_lokal($data, $id_aplikasi_lokal);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/aplikasi_lokal_view?id_aplikasi_lokal=".$id_aplikasi_lokal.">";
					} 
			}
	
	public function aplikasi_lokal_delete() {
			$id_aplikasi_lokal = $this->input->get('id_aplikasi_lokal');
            $delete = $this->admin_model->aplikasi_lokal_delete($id_aplikasi_lokal);
            if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/aplikasi_lokal_view>";
            }
        }
	
	
	//Network Device 
	public function network_device_view() {
        
			$data['network_device_view'] = $this->admin_model->tampil_network_device();
			$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/network_device_view',$data);
            $this->load->view('footer');
    }
	
	public function network_device_add() {
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['list_merek_network_device'] = $this->admin_model->list_merek_network_device();
			$data['list_vendor'] = $this->admin_model->list_vendor();
        	$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/network_device_add',$data);
            $this->load->view('footer');
    }
	
	public function action_network_device_add() {
		//print_r($_POST); exit;
			$id_merek = $this->input->post('id_merek');
			$device_type = $this->input->post('device_type');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$id_unit = $this->input->post('id_unit');
			$id_vendor = $this->input->post('id_vendor');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$tahun = $this->input->post('tahun');
			$data = array('id_merek' => $id_merek,
			'device_type' => $device_type,
			'username' => $username,
			'password' => $password,
			'nama_pengguna' => $nama_pengguna
			,'id_unit' => $id_unit
			,'id_vendor' => $id_vendor
			,'tahun' => $tahun,
			'status_kepemilikan' => $status_kepemilikan,);
			$insert = $this->admin_model->add_network_device_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/network_device_view>";
			}
    }
	
	public function network_device_edit() {
		
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
	
	public function action_network_device_edit(){
	//print_r ($_POST); exit;
			$id_network_device = $this->input->post('id_network_device');
		   	$id_merek = $this->input->post('id_merek');
			$device_type = $this->input->post('device_type');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$id_unit = $this->input->post('id_unit');
			$status_kepemilikan = $this->input->post('status_kepemilikan');
			if($status_kepemilikan =='Aset PLN'){
				$id_vendor = '0';
			} else {
				$id_vendor = $this->input->post('id_vendor');
			}
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$tahun = $this->input->post('tahun');
			$data = array('id_merek' => $id_merek,
			'device_type' => $device_type,
			'username' => $username,
			'password' => $password,
			'nama_pengguna' => $nama_pengguna
			,'id_unit' => $id_unit
			,'id_vendor' => $id_vendor
			,'tahun' => $tahun,
			'status_kepemilikan' => $status_kepemilikan,);
			$update = $this->admin_model->update_network_device($data, $id_network_device);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/network_device_view?id_network_device=".$id_network_device.">";
					} 
			}
	
	public function network_device_delete() {
			$id_network_device = $this->input->get('id_network_device');
            $delete = $this->admin_model->network_device_delete($id_network_device);
            if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/network_device_view>";
            }
        }
	
	
	//SERVER 
	public function server_view() {
        
			$data['server_view'] = $this->admin_model->tampil_server();
			$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/server_view',$data);
            $this->load->view('footer');
    }
	
	public function server_add() {
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['list_merek_server'] = $this->admin_model->list_merek_server();
        	$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/server_add',$data);
            $this->load->view('footer');
    }
	
	public function action_server_add() {
		//print_r($_POST); exit;
			$id_merek = $this->input->post('id_merek');
			$keterangan = $this->input->post('keterangan');
			$ip_address = $this->input->post('ip_address');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$id_unit = $this->input->post('id_unit');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$tahun = $this->input->post('tahun');
			$data = array('id_merek' => $id_merek,
			'keterangan' => $keterangan,
			'ip_address' => $ip_address,
			'username' => $username,
			'password' => $password,
			'tahun' => $tahun,
			'nama_pengguna' => $nama_pengguna
			,'id_unit' => $id_unit,);
			$insert = $this->admin_model->add_server_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/server_view>";
			}
    }
	
	public function server_edit() {
		
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
	
	public function action_server_edit(){
	//print_r ($_POST); exit;
			$id_server = $this->input->post('id_server');
		   	$id_merek = $this->input->post('id_merek');
			$keterangan = $this->input->post('keterangan');
			$ip_address = $this->input->post('ip_address');
			$nama_pengguna = $this->input->post('nama_pengguna');
			$id_unit = $this->input->post('id_unit');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$tahun = $this->input->post('tahun');
			$data = array('id_merek' => $id_merek,
			'keterangan' => $keterangan,
			'ip_address' => $ip_address,
			'username' => $username,
			'password' => $password,
			'tahun' => $tahun,
			'nama_pengguna' => $nama_pengguna
			,'id_unit' => $id_unit,);
			$update = $this->admin_model->update_server($data, $id_server);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/server_view?id_server=".$id_server.">";
					} 
			}
	
	public function server_delete() {
			$id_server = $this->input->get('id_server');
            $delete = $this->admin_model->server_delete($id_server);
            if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/server_view>";
            }
        }
		
		
	
	//Vicon
	public function vicon_view() {
        
			$data['vicon_view'] = $this->admin_model->tampil_vicon();
			$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/vicon_view',$data);
            $this->load->view('footer');
    }
	
	public function vicon_add() {
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['list_merek_vicon'] = $this->admin_model->list_merek_vicon();
        	$this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('admin/vicon_add',$data);
            $this->load->view('footer');
    }
	
	public function action_vicon_add() {
		//print_r($_POST); exit;
			$id_merek = $this->input->post('id_merek');
			$type = $this->input->post('type');
			$tahun = $this->input->post('tahun');
			$no_seri = $this->input->post('no_seri');
			$ip_address = $this->input->post('ip_address');
			$mac_address = $this->input->post('mac_address');
			$id_unit = $this->input->post('id_unit');
			$data = array('id_merek' => $id_merek,
			'type' => $type,'mac_address' => $mac_address,'tahun' => $tahun,'no_seri' => $no_seri
			,'ip_address' => $ip_address,'id_unit' => $id_unit);
			$insert = $this->admin_model->add_vicon_data($data);
			if ($insert) {
				echo "<script>alert('Berhasil Menambah Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/vicon_view>";
			}
    }
	
	public function vicon_edit() {
		
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
	
	public function action_vicon_edit(){
	//print_r ($_POST); exit;
			$id_vicon = $this->input->post('id_vicon');
		   	$id_merek = $this->input->post('id_merek');
			$type = $this->input->post('type');
			$tahun = $this->input->post('tahun');
			$no_seri = $this->input->post('no_seri');
			$ip_address = $this->input->post('ip_address');
			$mac_address = $this->input->post('mac_address');
			$id_unit = $this->input->post('id_unit');
			$data = array('id_merek' => $id_merek,
			'type' => $type,'mac_address' => $mac_address,'tahun' => $tahun,'no_seri' => $no_seri
			,'ip_address' => $ip_address,'id_unit' => $id_unit);
			$update = $this->admin_model->update_vicon($data, $id_vicon);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/vicon_view?id_vicon=".$id_vicon.">";
					} 
			}
	
	public function vicon_delete() {
			$id_vicon = $this->input->get('id_vicon');
            $delete = $this->admin_model->vicon_delete($id_vicon);
            if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/vicon_view>";
            }
        }
	
	
	
	
	
	
	
}
