<?php

class admin_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
  }

  //HI
  function tampil_hi()
  {
    $get = $this->db->query("SELECT 
          a.id_hi,a.id_unit,hi.updated_at,(SELECT nama_unit FROM unit WHERE id_unit = a.`id_unit`) AS nama_unitnya, 
          ROUND((SUM(hi.bobot_kondisi) + SUM(hi.bobot_urgensi) + SUM(hi.bobot_urgensi) - SUM(hi.bobot_standard) - SUM(hi.bobot_lifetime) - SUM(hi.bobot_gangguan)) / (SUM(hi_standard.bobot_kondisi) + SUM(hi_standard.bobot_urgensi) + SUM(hi_standard.bobot_urgensi))*100) AS total_hi
          FROM network_device a
          JOIN hi ON a.id_hi = hi.id_hi
          JOIN hi_standard ON hi.id_hi_standard = hi_standard.id_hi_standard
          WHERE hi.status = '1'
          GROUP BY a.id_unit DESC ");
    return $get;
  }
  function tampil_non_hi()
  {
    $get = $this->db->query("SELECT a.id_hi,a.id_unit,(SELECT nama_unit FROM unit WHERE id_unit = a.`id_unit`) AS nama_unitnya FROM network_device a GROUP BY a.id_unit DESC");
    return $get;
  }
  function get_hi_unit($id_unit)
  {
    $get = $this->db->query("SELECT 
          a.id_network_device,a.id_hi,a.id_unit,a.device_type,hi.*,merek.merek,(SELECT nama_unit FROM unit WHERE id_unit = a.`id_unit`) AS nama_unitnya,
          ROUND((hi.bobot_kondisi + hi.bobot_urgensi + hi.bobot_urgensi - hi.bobot_standard - hi.bobot_lifetime - hi.bobot_gangguan) /( hi_standard.bobot_kondisi + hi_standard.bobot_urgensi + hi_standard.bobot_urgensi)*100) AS hi_device
          FROM network_device a
          JOIN merek ON a.id_merek = merek.id_merek
          JOIN hi ON a.id_hi = hi.id_hi
          JOIN hi_standard ON hi.id_hi_standard = hi_standard.id_hi_standard
          WHERE id_unit = $id_unit 
          AND hi.status = '1'");
    return $get;
  }
  function list_network_device($id_unit)
  {
    $get = $this->db->query("SELECT a.*,merek.merek FROM network_device a 
          JOIN merek ON a.id_merek = merek.id_merek
          WHERE id_unit = $id_unit AND id_hi = '0'");
    return $get;
  }
  function list_unit_hi($id_unit)
  {
    $get = $this->db->query("SELECT * FROM unit WHERE id_unit = $id_unit");
    return $get;
  }
  function get_id_hi($id_hi)
  {
    $get = $this->db->query("SELECT a.*,network_device.*,merek.* FROM hi a JOIN network_device ON a.id_hi = network_device.id_hi JOIN merek ON network_device.id_merek = merek.id_merek WHERE a.id_hi = $id_hi");
    return $get;
  }
  function get_id_hi_standard($id_hi)
  {
    $get = $this->db->query("SELECT * FROM hi_standard WHERE id_hi_standard = $id_hi");
    return $get;
  }
  function get_max_id_hi()
  {
    $get = $this->db->query("SELECT MAX(id_hi) AS maxid FROM hi");
    return $get;
  }
  function get_max_id_hi_standard()
  {
    $get = $this->db->query("SELECT MAX(id_hi_standard) AS maxidstnd FROM hi_standard");
    return $get;
  }
  public function add_hi($data)
  {
    $input = $this->db->insert('hi', $data);
    return $input;
  }
  public function add_hi_standard($data)
  {
    $input = $this->db->insert('hi_standard', $data);
    return $input;
  }
  function update_hi($data, $id_hi)
  {
    $update = $this->db->update('hi', $data, array('id_hi' => $id_hi));
    return $update;
  }

  //USER
  function search_users($username)
  {
    $get = $this->db->query("SELECT password,id_role
                               FROM users where username = '$username' ");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }


  function tampil_user()
  {
    $get = $this->db->query("SELECT 
		  a.id_users,
		  a.username,
		  a.password,
		  a.id_role,
		  (SELECT 
			b.nama_role 
		  FROM
			role b 
		  WHERE a.id_role = b.id_role) AS nama_role 
		FROM
		  users a 
		ORDER BY id_users DESC ");
    return $get;
  }


  public function add_users_data($data)
  {
    $input = $this->db->insert('users', $data);
    return $input;
  }

  function update_users($data, $id_users)
  {
    $update = $this->db->update('users', $data, array('id_users' => $id_users));

    return $update;
  }

  function users_delete($id)
  {
    $delete = $this->db->delete('users', array('id_users' => $id));
    return $delete;
  }

  function get_users($id_users)
  {
    $get = $this->db->query("SELECT *
                               FROM users a
                               WHERE a.id_users =$id_users");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }



  //Vendor
  function tampil_vendor()
  {
    $get = $this->db->query("SELECT 
		  *
		FROM
		  vendor
		ORDER BY id_vendor DESC ");
    return $get;
  }


  public function add_vendor_data($data)
  {
    $input = $this->db->insert('vendor', $data);
    return $input;
  }

  function update_vendor($data, $id_vendor)
  {
    $update = $this->db->update('vendor', $data, array('id_vendor' => $id_vendor));

    return $update;
  }

  function vendor_delete($id)
  {
    $delete = $this->db->delete('vendor', array('id_vendor' => $id));
    return $delete;
  }

  function get_vendor($id_vendor)
  {
    $get = $this->db->query("SELECT *
                               FROM vendor a
                               WHERE a.id_vendor =$id_vendor");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }

  function list_unit()
  {
    $get = $this->db->query("SELECT 
		  id_unit, nama_unit
		FROM
		  unit
		ORDER BY id_unit DESC ");
    return $get;
  }

  //UNIT Sumut 1
  function tampil_unit_sumut1()
  {
    $get = $this->db->query("SELECT 
		  *
		FROM
		  unit where wilayah_kerja = 'Sumut 1'
		ORDER BY id_unit DESC ");
    return $get;
  }

  //UNIT Sumut 2
  function tampil_unit_sumut2()
  {
    $get = $this->db->query("SELECT 
		  *
		FROM
		  unit where wilayah_kerja = 'Sumut 2'
		ORDER BY id_unit DESC ");
    return $get;
  }


  public function add_unit_data($data)
  {
    $input = $this->db->insert('unit', $data);
    return $input;
  }

  function update_unit($data, $id_unit)
  {
    $update = $this->db->update('unit', $data, array('id_unit' => $id_unit));

    return $update;
  }

  function unit_delete($id)
  {
    $delete = $this->db->delete('unit', array('id_unit' => $id));
    return $delete;
  }

  function get_unit($id_unit)
  {
    $get = $this->db->query("SELECT *
                               FROM unit a
                               WHERE a.id_unit =$id_unit");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }


  //Laptop
  function tampil_laptop()
  {
    $get = $this->db->query("SELECT 
  a.*,
  (SELECT 
    nama_unit 
  FROM
    unit 
  WHERE id_unit = a.`id_unit`) AS nama_unitnya,
  (SELECT 
    merek 
  FROM
    merek 
  WHERE id_merek = a.id_merek) AS nama_mereknya, 
  (SELECT 
    nama_vendor 
  FROM
    vendor 
  WHERE id_vendor = a.id_vendor) AS nama_vendornya  
FROM
  laptop a 
ORDER BY a.id_laptop DESC ");
    return $get;
  }

  public function add_laptop_data($data)
  {
    $input = $this->db->insert('laptop', $data);
    return $input;
  }

  function update_laptop($data, $id_laptop)
  {
    $update = $this->db->update('laptop', $data, array('id_laptop' => $id_laptop));

    return $update;
  }

  function laptop_delete($id)
  {
    $delete = $this->db->delete('laptop', array('id_laptop' => $id));
    return $delete;
  }

  function get_laptop($id_laptop)
  {
    $get = $this->db->query("SELECT 
  a.*,
  (SELECT 
    nama_unit 
  FROM
    unit 
  WHERE id_unit = a.`id_unit`) AS nama_unitnya,
  (SELECT 
    merek 
  FROM
    merek 
  WHERE id_merek = a.id_merek) AS nama_mereknya,
  (SELECT 
    nama_vendor 
  FROM
    vendor 
  WHERE id_vendor = a.id_vendor) AS nama_vendornya  
FROM
  laptop a
                               WHERE a.id_laptop =$id_laptop");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }

  function list_merek_laptop()
  {
    $get = $this->db->query("SELECT 
		  * 
		FROM
		  merek 
		WHERE kategori = 'Laptop' 
		ORDER BY id_merek DESC");
    return $get;
  }

  function list_vendor()
  {
    $get = $this->db->query("SELECT 
		  * 
		FROM
		  vendor 
		ORDER BY id_vendor DESC");
    return $get;
  }

  //Merek
  function tampil_merek()
  {
    $get = $this->db->query("SELECT 
		  a.* 
		FROM
		  merek a
		  
		ORDER BY a.id_merek DESC ");
    return $get;
  }


  public function add_merek_data($data)
  {
    $input = $this->db->insert('merek', $data);
    return $input;
  }

  function update_merek($data, $id_merek)
  {
    $update = $this->db->update('merek', $data, array('id_merek' => $id_merek));

    return $update;
  }

  function merek_delete($id)
  {
    $delete = $this->db->delete('merek', array('id_merek' => $id));
    return $delete;
  }

  function get_merek($id_merek)
  {
    $get = $this->db->query("SELECT *
                               FROM merek a
                               WHERE a.id_merek =$id_merek");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }




  //PC & KOMPUTER
  function tampil_komputer()
  {
    $get = $this->db->query("SELECT 
  a.*,
  (SELECT 
    nama_unit 
  FROM
    unit 
  WHERE id_unit = a.`id_unit`) AS nama_unitnya,
  (SELECT 
    merek 
  FROM
    merek 
  WHERE id_merek = a.id_merek) AS nama_mereknya, 
  (SELECT 
    nama_vendor 
  FROM
    vendor 
  WHERE id_vendor = a.id_vendor) AS nama_vendornya  
FROM
  komputer a 
ORDER BY a.id_komputer DESC ");
    return $get;
  }

  public function add_komputer_data($data)
  {
    $input = $this->db->insert('komputer', $data);
    return $input;
  }

  function update_komputer($data, $id_komputer)
  {
    $update = $this->db->update('komputer', $data, array('id_komputer' => $id_komputer));

    return $update;
  }

  function komputer_delete($id)
  {
    $delete = $this->db->delete('komputer', array('id_komputer' => $id));
    return $delete;
  }

  function get_komputer($id_komputer)
  {
    $get = $this->db->query("SELECT 
  a.*,
  (SELECT 
    nama_unit 
  FROM
    unit 
  WHERE id_unit = a.`id_unit`) AS nama_unitnya,
  (SELECT 
    merek 
  FROM
    merek 
  WHERE id_merek = a.id_merek) AS nama_mereknya, 
  (SELECT 
    nama_vendor 
  FROM
    vendor 
  WHERE id_vendor = a.id_vendor) AS nama_vendornya  
FROM
  komputer a
                               WHERE a.id_komputer =$id_komputer");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }

  function list_merek_komputer()
  {
    $get = $this->db->query("SELECT 
		  * 
		FROM
		  merek 
		WHERE kategori = 'PC' 
		ORDER BY id_merek DESC");
    return $get;
  }


  //Monitor
  function tampil_monitor()
  {
    $get = $this->db->query("SELECT 
  a.*,
  (SELECT 
    nama_unit 
  FROM
    unit 
  WHERE id_unit = a.`id_unit`) AS nama_unitnya,
  (SELECT 
    merek 
  FROM
    merek 
  WHERE id_merek = a.id_merek) AS nama_mereknya, 
  (SELECT 
    nama_vendor 
  FROM
    vendor 
  WHERE id_vendor = a.id_vendor) AS nama_vendornya
FROM
  monitor a 
ORDER BY a.id_monitor DESC ");
    return $get;
  }

  public function add_monitor_data($data)
  {
    $input = $this->db->insert('monitor', $data);
    return $input;
  }

  function update_monitor($data, $id_monitor)
  {
    $update = $this->db->update('monitor', $data, array('id_monitor' => $id_monitor));

    return $update;
  }

  function monitor_delete($id)
  {
    $delete = $this->db->delete('monitor', array('id_monitor' => $id));
    return $delete;
  }

  function get_monitor($id_monitor)
  {
    $get = $this->db->query("SELECT 
  a.*,
  (SELECT 
    nama_unit 
  FROM
    unit 
  WHERE id_unit = a.`id_unit`) AS nama_unitnya,
  (SELECT 
    merek 
  FROM
    merek 
  WHERE id_merek = a.id_merek) AS nama_mereknya, 
  (SELECT 
    nama_vendor 
  FROM
    vendor 
  WHERE id_vendor = a.id_vendor) AS nama_vendornya  
FROM
  monitor a
                               WHERE a.id_monitor =$id_monitor");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }

  function list_merek_monitor()
  {
    $get = $this->db->query("SELECT 
		  * 
		FROM
		  merek 
		WHERE kategori = 'Monitor' 
		ORDER BY id_merek DESC");
    return $get;
  }

  //Printer
  function tampil_printer()
  {
    $get = $this->db->query("SELECT 
  a.*,
  (SELECT 
    nama_unit 
  FROM
    unit 
  WHERE id_unit = a.`id_unit`) AS nama_unitnya,
  (SELECT 
    merek 
  FROM
    merek 
  WHERE id_merek = a.id_merek) AS nama_mereknya, 
  (SELECT 
    nama_vendor 
  FROM
    vendor 
  WHERE id_vendor = a.id_vendor) AS nama_vendornya 
FROM
  printer a 
ORDER BY a.id_printer DESC ");
    return $get;
  }

  public function add_printer_data($data)
  {
    $input = $this->db->insert('printer', $data);
    return $input;
  }

  function update_printer($data, $id_printer)
  {
    $update = $this->db->update('printer', $data, array('id_printer' => $id_printer));

    return $update;
  }

  function printer_delete($id)
  {
    $delete = $this->db->delete('printer', array('id_printer' => $id));
    return $delete;
  }

  function get_printer($id_printer)
  {
    $get = $this->db->query("SELECT 
  a.*,
  (SELECT 
    nama_unit 
  FROM
    unit 
  WHERE id_unit = a.`id_unit`) AS nama_unitnya,
  (SELECT 
    merek 
  FROM
    merek 
  WHERE id_merek = a.id_merek) AS nama_mereknya, 
  (SELECT 
    nama_vendor 
  FROM
    vendor 
  WHERE id_vendor = a.id_vendor) AS nama_vendornya  
FROM
  printer a
                               WHERE a.id_printer =$id_printer");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }

  function list_merek_printer()
  {
    $get = $this->db->query("SELECT 
		  * 
		FROM
		  merek 
		WHERE kategori = 'Printer' 
		ORDER BY id_merek DESC");
    return $get;
  }

  //Aplikasi Lokal
  function tampil_aplikasi_lokal()
  {
    $get = $this->db->query("SELECT 
  a.*,
  (SELECT 
    nama_unit 
  FROM
    unit 
  WHERE id_unit = a.`id_unit`) AS nama_unitnya
FROM
  aplikasi_lokal a 
ORDER BY a.id_aplikasi_lokal DESC ");
    return $get;
  }

  public function add_aplikasi_lokal_data($data)
  {
    $input = $this->db->insert('aplikasi_lokal', $data);
    return $input;
  }

  function update_aplikasi_lokal($data, $id_aplikasi_lokal)
  {
    $update = $this->db->update('aplikasi_lokal', $data, array('id_aplikasi_lokal' => $id_aplikasi_lokal));

    return $update;
  }

  function aplikasi_lokal_delete($id)
  {
    $delete = $this->db->delete('aplikasi_lokal', array('id_aplikasi_lokal' => $id));
    return $delete;
  }

  function get_aplikasi_lokal($id_aplikasi_lokal)
  {
    $get = $this->db->query("SELECT 
  a.*,
  (SELECT 
    nama_unit 
  FROM
    unit 
  WHERE id_unit = a.`id_unit`) AS nama_unitnya
FROM
  aplikasi_lokal a
                               WHERE a.id_aplikasi_lokal =$id_aplikasi_lokal");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }

  //Network Device 
  function tampil_network_device()
  {
    $get = $this->db->query("SELECT 
  a.*,
  (SELECT 
    nama_unit 
  FROM
    unit 
  WHERE id_unit = a.`id_unit`) AS nama_unitnya,
  (SELECT 
    merek 
  FROM
    merek 
  WHERE id_merek = a.id_merek) AS nama_mereknya, 
  (SELECT 
    nama_vendor 
  FROM
    vendor 
  WHERE id_vendor = a.id_vendor) AS nama_vendornya 
FROM
  network_device a 
ORDER BY a.id_network_device DESC ");
    return $get;
  }

  public function add_network_device_data($data)
  {
    $input = $this->db->insert('network_device', $data);
    return $input;
  }

  function update_network_device($data, $id_network_device)
  {
    $update = $this->db->update('network_device', $data, array('id_network_device' => $id_network_device));

    return $update;
  }

  function network_device_delete($id)
  {
    $delete = $this->db->delete('network_device', array('id_network_device' => $id));
    return $delete;
  }

  function get_network_device($id_network_device)
  {
    $get = $this->db->query("SELECT 
  a.*,
  (SELECT 
    nama_unit 
  FROM
    unit 
  WHERE id_unit = a.`id_unit`) AS nama_unitnya,
  (SELECT 
    merek 
  FROM
    merek 
  WHERE id_merek = a.id_merek) AS nama_mereknya, 
  (SELECT 
    nama_vendor 
  FROM
    vendor 
  WHERE id_vendor = a.id_vendor) AS nama_vendornya  
FROM
  network_device a
                               WHERE a.id_network_device =$id_network_device");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }

  function list_merek_network_device()
  {
    $get = $this->db->query("SELECT 
		  * 
		FROM
		  merek 
		WHERE kategori = 'Network Device' 
		ORDER BY id_merek DESC");
    return $get;
  }

  //Server 
  function tampil_server()
  {
    $get = $this->db->query("SELECT 
  a.*,
  (SELECT 
    nama_unit 
  FROM
    unit 
  WHERE id_unit = a.`id_unit`) AS nama_unitnya,
  (SELECT 
    merek 
  FROM
    merek 
  WHERE id_merek = a.id_merek) AS nama_mereknya
FROM
  server a 
ORDER BY a.id_server DESC ");
    return $get;
  }

  public function add_server_data($data)
  {
    $input = $this->db->insert('server', $data);
    return $input;
  }

  function update_server($data, $id_server)
  {
    $update = $this->db->update('server', $data, array('id_server' => $id_server));

    return $update;
  }

  function server_delete($id)
  {
    $delete = $this->db->delete('server', array('id_server' => $id));
    return $delete;
  }

  function get_server($id_server)
  {
    $get = $this->db->query("SELECT 
  a.*,
  (SELECT 
    nama_unit 
  FROM
    unit 
  WHERE id_unit = a.`id_unit`) AS nama_unitnya,
  (SELECT 
    merek 
  FROM
    merek 
  WHERE id_merek = a.id_merek) AS nama_mereknya 
FROM
  server a
                               WHERE a.id_server =$id_server");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }

  function list_merek_server()
  {
    $get = $this->db->query("SELECT 
		  * 
		FROM
		  merek 
		WHERE kategori = 'Server' 
		ORDER BY id_merek DESC");
    return $get;
  }

  function menghitung_jumlah_perangkat()
  {
    $get = $this->db->query("SELECT 
						  COUNT(a.id_laptop)AS jumlah_laptop,
						  (SELECT 
							COUNT(id_komputer) 
						  FROM
							komputer) AS jumlah_komputer,
						  (SELECT 
							COUNT(id_server) 
						  FROM
							SERVER) AS jumlah_server,
						  (SELECT 
							COUNT(id_network_device) 
						  FROM
							network_device) AS jumlah_network_device 
						FROM
						  laptop a");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }


  //Vicon
  function tampil_vicon()
  {
    $get = $this->db->query("SELECT 
  a.*,
  (SELECT 
    nama_unit 
  FROM
    unit 
  WHERE id_unit = a.`id_unit`) AS nama_unitnya,
  (SELECT 
    merek 
  FROM
    merek 
  WHERE id_merek = a.id_merek) AS nama_mereknya 
FROM
  vicon a 
ORDER BY a.id_vicon DESC ");
    return $get;
  }

  public function add_vicon_data($data)
  {
    $input = $this->db->insert('vicon', $data);
    return $input;
  }

  function update_vicon($data, $id_vicon)
  {
    $update = $this->db->update('vicon', $data, array('id_vicon' => $id_vicon));

    return $update;
  }

  function vicon_delete($id)
  {
    $delete = $this->db->delete('vicon', array('id_vicon' => $id));
    return $delete;
  }

  function get_vicon($id_vicon)
  {
    $get = $this->db->query("SELECT 
  a.*,
  (SELECT 
    nama_unit 
  FROM
    unit 
  WHERE id_unit = a.`id_unit`) AS nama_unitnya,
  (SELECT 
    merek 
  FROM
    merek 
  WHERE id_merek = a.id_merek) AS nama_mereknya 
FROM
  vicon a
                               WHERE a.id_vicon =$id_vicon");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }

  function list_merek_vicon()
  {
    $get = $this->db->query("SELECT 
		  * 
		FROM
		  merek 
		WHERE kategori = 'Vicon' 
		ORDER BY id_merek DESC");
    return $get;
  }

  function dashboard_merek_laptop_dell()
  {
    $get = $this->db->query("SELECT 
					  COUNT(*) AS jumlahnya,
					  (SELECT 
						merek 
					  FROM
						merek 
					  WHERE id_merek = laptop.`id_merek`) AS nama_merek 
					FROM
					  laptop 
					WHERE id_merek = 3");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }

  function dashboard_merek_laptop_hp()
  {
    $get = $this->db->query("SELECT 
					  COUNT(*) AS jumlahnya,
					  (SELECT 
						merek 
					  FROM
						merek 
					  WHERE id_merek = laptop.`id_merek`) AS nama_merek 
					FROM
					  laptop 
					WHERE id_merek = 1");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }

  function dashboard_merek_laptop_toshiba()
  {
    $get = $this->db->query("SELECT 
					  COUNT(*) AS jumlahnya,
					  (SELECT 
						merek 
					  FROM
						merek 
					  WHERE id_merek = laptop.`id_merek`) AS nama_merek 
					FROM
					  laptop 
					WHERE id_merek = 5");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }

  function dashboard_merek_laptop_lenovo()
  {
    $get = $this->db->query("SELECT 
					  COUNT(*) AS jumlahnya,
					  (SELECT 
						merek 
					  FROM
						merek 
					  WHERE id_merek = laptop.`id_merek`) AS nama_merek 
					FROM
					  laptop 
					WHERE id_merek = 7");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }

  function dashboard_merek_laptop_asus()
  {
    $get = $this->db->query("SELECT 
					  COUNT(*) AS jumlahnya,
					  (SELECT 
						merek 
					  FROM
						merek 
					  WHERE id_merek = laptop.`id_merek`) AS nama_merek 
					FROM
					  laptop 
					WHERE id_merek = 9");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }

  function dashboard_merek_laptop_apple()
  {
    $get = $this->db->query("SELECT 
					  COUNT(*) AS jumlahnya,
					  (SELECT 
						merek 
					  FROM
						merek 
					  WHERE id_merek = laptop.`id_merek`) AS nama_merek 
					FROM
					  laptop 
					WHERE id_merek = 11");
    if ($get->num_rows() == 1) {
      return $get->row_array();
    }
  }

  function dashboard_merek_pc()
  {
    $get = $this->db->query("SELECT COUNT(komputer.id_merek) AS jumlahnya, merek.merek as nama_merek FROM merek LEFT JOIN komputer ON komputer.id_merek = merek.id_merek GROUP BY nama_merek");
    return $get;
  }

  function dashboard_merek_printer()
  {
    $get = $this->db->query("SELECT COUNT(printer.id_merek) AS jumlahnya, merek.merek as nama_merek FROM merek LEFT JOIN printer ON printer.id_merek = merek.id_merek GROUP BY nama_merek");
    return $get;
  }

  function dashboard_merek_network_device()
  {
    $get = $this->db->query("SELECT COUNT(network_device.id_merek) AS jumlahnya, merek.merek as nama_merek FROM merek LEFT JOIN network_device ON network_device.id_merek = merek.id_merek GROUP BY nama_merek");
    return $get;
  }

  function dashboard_merek_server()
  {
    $get = $this->db->query("SELECT COUNT(server.id_merek) AS jumlahnya, merek.merek as nama_merek FROM merek LEFT JOIN server ON server.id_merek = merek.id_merek GROUP BY nama_merek");
    return $get;
  }

  function dashboard_merek_vicon()
  {
    $get = $this->db->query("SELECT COUNT(vicon.id_merek) AS jumlahnya, merek.merek as nama_merek FROM merek LEFT JOIN vicon ON vicon.id_merek = merek.id_merek GROUP BY nama_merek");
    return $get;
  }

  function dashboard_status_kepemilikan_sewa()
  {
    $laptop = $this->db->query("SELECT COUNT(*) as jumlah FROM laptop WHERE status_kepemilikan = 'Sewa'"); 
    $komputer = $this->db->query("SELECT COUNT(*) as jumlah FROM komputer WHERE status_kepemilikan = 'Sewa'");
    $printer = $this->db->query("SELECT COUNT(*) as jumlah FROM printer WHERE status_kepemilikan = 'Sewa'");
    $monitor = $this->db->query("SELECT COUNT(*) as jumlah FROM monitor WHERE status_kepemilikan = 'Sewa'");
    $networkDevice = $this->db->query("SELECT COUNT(*) as jumlah FROM network_device WHERE status_kepemilikan = 'Sewa'");

    $combine = array_merge_recursive($laptop->row_array(), $komputer->row_array(), $printer->row_array(), $monitor->row_array(), $networkDevice->row_array());
    foreach($combine as $c){
      $tes = "[ ".$c[0].", ".$c[1].", ".$c[2].", ".$c[3].", ".$c[4]." ]";
    }
    return $tes;
  }

  function dashboard_status_kepemilikan_pln()
  {
    $laptop = $this->db->query("SELECT COUNT(*) as jumlah FROM laptop WHERE status_kepemilikan = 'Aset PLN'"); 
    $komputer = $this->db->query("SELECT COUNT(*) as jumlah FROM komputer WHERE status_kepemilikan = 'Aset PLN'");
    $printer = $this->db->query("SELECT COUNT(*) as jumlah FROM printer WHERE status_kepemilikan = 'Aset PLN'");
    $monitor = $this->db->query("SELECT COUNT(*) as jumlah FROM monitor WHERE status_kepemilikan = 'Aset PLN'");
    $networkDevice = $this->db->query("SELECT COUNT(*) as jumlah FROM network_device WHERE status_kepemilikan = 'Aset PLN'");

    $combine = array_merge_recursive($laptop->row_array(), $komputer->row_array(), $printer->row_array(), $monitor->row_array(), $networkDevice->row_array());
    foreach($combine as $c){
      $tes = "[ ".$c[0].", ".$c[1].", ".$c[2].", ".$c[3].", ".$c[4]." ]";
    }
    return $tes;
  }
}
