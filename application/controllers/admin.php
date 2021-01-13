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
		$this->load->model(array('admin_model','Sla_model'));
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
			$data['menghitung_jumlah_service_wilayah'] = $this->admin_model->menghitung_jumlah_service_wilayah();
			
			//internet_UIWSU
			$data['januari_internet_uiwsu'] = $this->Sla_model->januari_internet_uiwsu();
			$data['januari_internet_uiwsu_sukses'] = $data['januari_internet_uiwsu'][0]['persentasi_sla'];
			$data['januari_internet_uiwsu_ok'] = number_format($data['januari_internet_uiwsu_sukses'],2,",",".");
			if(($data['januari_internet_uiwsu_ok'])==0){ $data['januari_internet_uiwsu_ok']=100;}	
			
			$data['februari_internet_uiwsu'] = $this->Sla_model->februari_internet_uiwsu();
			$data['februari_internet_uiwsu_sukses'] = $data['februari_internet_uiwsu'][0]['persentasi_sla'];
			$data['februari_internet_uiwsu_ok'] = number_format($data['februari_internet_uiwsu_sukses'],2,",",".");
			if(($data['februari_internet_uiwsu_ok'])==0){ $data['februari_internet_uiwsu_ok']=100;}	
			
			$data['maret_internet_uiwsu'] = $this->Sla_model->maret_internet_uiwsu();
			$data['maret_internet_uiwsu_sukses'] = $data['maret_internet_uiwsu'][0]['persentasi_sla'];
			$data['maret_internet_uiwsu_ok'] = number_format($data['maret_internet_uiwsu_sukses'],2,",",".");
			if(($data['maret_internet_uiwsu_ok'])==0){ $data['maret_internet_uiwsu_ok']=100;}	
			
			$data['april_internet_uiwsu'] = $this->Sla_model->april_internet_uiwsu();
			$data['april_internet_uiwsu_sukses'] = $data['april_internet_uiwsu'][0]['persentasi_sla'];
			$data['april_internet_uiwsu_ok'] = number_format($data['april_internet_uiwsu_sukses'],2,",",".");
			if(($data['april_internet_uiwsu_ok'])==0){ $data['april_internet_uiwsu_ok']=100;}	
			
			$data['mei_internet_uiwsu'] = $this->Sla_model->mei_internet_uiwsu();
			$data['mei_internet_uiwsu_sukses'] = $data['mei_internet_uiwsu'][0]['persentasi_sla'];
			$data['mei_internet_uiwsu_ok'] = number_format($data['mei_internet_uiwsu_sukses'],2,",",".");
			if(($data['mei_internet_uiwsu_ok'])==0){ $data['mei_internet_uiwsu_ok']=100;}	
			
			$data['juni_internet_uiwsu'] = $this->Sla_model->juni_internet_uiwsu();
			$data['juni_internet_uiwsu_sukses'] = $data['juni_internet_uiwsu'][0]['persentasi_sla'];
			$data['juni_internet_uiwsu_ok'] = number_format($data['juni_internet_uiwsu_sukses'],2,",",".");
			if(($data['juni_internet_uiwsu_ok'])==0){ $data['juni_internet_uiwsu_ok']=100;}	
			
			$data['juli_internet_uiwsu'] = $this->Sla_model->juli_internet_uiwsu();
			$data['juli_internet_uiwsu_sukses'] = $data['juli_internet_uiwsu'][0]['persentasi_sla'];
			$data['juli_internet_uiwsu_ok'] = number_format($data['juli_internet_uiwsu_sukses'],2,",",".");
			if(($data['juli_internet_uiwsu_ok'])==0){ $data['juli_internet_uiwsu_ok']=100;}	
			
			$data['agustus_internet_uiwsu'] = $this->Sla_model->agustus_internet_uiwsu();
			$data['agustus_internet_uiwsu_sukses'] = $data['agustus_internet_uiwsu'][0]['persentasi_sla'];
			$data['agustus_internet_uiwsu_ok'] = number_format($data['agustus_internet_uiwsu_sukses'],2,",",".");
			if(($data['agustus_internet_uiwsu_ok'])==0){ $data['agustus_internet_uiwsu_ok']=100;}	
			
			$data['september_internet_uiwsu'] = $this->Sla_model->september_internet_uiwsu();
			$data['september_internet_uiwsu_sukses'] = $data['september_internet_uiwsu'][0]['persentasi_sla'];
			$data['september_internet_uiwsu_ok'] = number_format($data['september_internet_uiwsu_sukses'],2,",",".");
			if(($data['september_internet_uiwsu_ok'])==0){ $data['september_internet_uiwsu_ok']=100;}	
			
			$data['oktober_internet_uiwsu'] = $this->Sla_model->oktober_internet_uiwsu();
			$data['oktober_internet_uiwsu_sukses'] = $data['oktober_internet_uiwsu'][0]['persentasi_sla'];
			$data['oktober_internet_uiwsu_ok'] = number_format($data['oktober_internet_uiwsu_sukses'],2,",",".");
			if(($data['oktober_internet_uiwsu_ok'])==0){ $data['oktober_internet_uiwsu_ok']=100;}	
			
			$data['november_internet_uiwsu'] = $this->Sla_model->november_internet_uiwsu();
			$data['november_internet_uiwsu_sukses'] = $data['november_internet_uiwsu'][0]['persentasi_sla'];
			$data['november_internet_uiwsu_ok'] = number_format($data['november_internet_uiwsu_sukses'],2,",",".");
			if(($data['november_internet_uiwsu_ok'])==0){ $data['november_internet_uiwsu_ok']=100;}	
			
			$data['desember_internet_uiwsu'] = $this->Sla_model->desember_internet_uiwsu();
			$data['desember_internet_uiwsu_sukses'] = $data['desember_internet_uiwsu'][0]['persentasi_sla'];
			$data['desember_internet_uiwsu_ok'] = number_format($data['desember_internet_uiwsu_sukses'],2,",",".");
			if(($data['desember_internet_uiwsu_ok'])==0){ $data['desember_internet_uiwsu_ok']=100;}	
			
			//ipvpn_UIWSU
			$data['januari_ipvpn_uiwsu'] = $this->Sla_model->januari_ipvpn_uiwsu();
			$data['januari_ipvpn_uiwsu_sukses'] = $data['januari_ipvpn_uiwsu'][0]['persentasi_sla'];
			$data['januari_ipvpn_uiwsu_ok'] = number_format($data['januari_ipvpn_uiwsu_sukses'],2,",",".");
			if(($data['januari_ipvpn_uiwsu_ok'])==0){ $data['januari_ipvpn_uiwsu_ok']=100;}	
			
			$data['februari_ipvpn_uiwsu'] = $this->Sla_model->februari_ipvpn_uiwsu();
			$data['februari_ipvpn_uiwsu_sukses'] = $data['februari_ipvpn_uiwsu'][0]['persentasi_sla'];
			$data['februari_ipvpn_uiwsu_ok'] = number_format($data['februari_ipvpn_uiwsu_sukses'],2,",",".");
			if(($data['februari_ipvpn_uiwsu_ok'])==0){ $data['februari_ipvpn_uiwsu_ok']=100;}	
			
			$data['maret_ipvpn_uiwsu'] = $this->Sla_model->maret_ipvpn_uiwsu();
			$data['maret_ipvpn_uiwsu_sukses'] = $data['maret_ipvpn_uiwsu'][0]['persentasi_sla'];
			$data['maret_ipvpn_uiwsu_ok'] = number_format($data['maret_ipvpn_uiwsu_sukses'],2,",",".");
			if(($data['maret_ipvpn_uiwsu_ok'])==0){ $data['maret_ipvpn_uiwsu_ok']=100;}	
			
			$data['april_ipvpn_uiwsu'] = $this->Sla_model->april_ipvpn_uiwsu();
			$data['april_ipvpn_uiwsu_sukses'] = $data['april_ipvpn_uiwsu'][0]['persentasi_sla'];
			$data['april_ipvpn_uiwsu_ok'] = number_format($data['april_ipvpn_uiwsu_sukses'],2,",",".");
			if(($data['april_ipvpn_uiwsu_ok'])==0){ $data['april_ipvpn_uiwsu_ok']=100;}	
			
			$data['mei_ipvpn_uiwsu'] = $this->Sla_model->mei_ipvpn_uiwsu();
			$data['mei_ipvpn_uiwsu_sukses'] = $data['mei_ipvpn_uiwsu'][0]['persentasi_sla'];
			$data['mei_ipvpn_uiwsu_ok'] = number_format($data['mei_ipvpn_uiwsu_sukses'],2,",",".");
			if(($data['mei_ipvpn_uiwsu_ok'])==0){ $data['mei_ipvpn_uiwsu_ok']=100;}	
			
			$data['juni_ipvpn_uiwsu'] = $this->Sla_model->juni_ipvpn_uiwsu();
			$data['juni_ipvpn_uiwsu_sukses'] = $data['juni_ipvpn_uiwsu'][0]['persentasi_sla'];
			$data['juni_ipvpn_uiwsu_ok'] = number_format($data['juni_ipvpn_uiwsu_sukses'],2,",",".");
			if(($data['juni_ipvpn_uiwsu_ok'])==0){ $data['juni_ipvpn_uiwsu_ok']=100;}	
			
			$data['juli_ipvpn_uiwsu'] = $this->Sla_model->juli_ipvpn_uiwsu();
			$data['juli_ipvpn_uiwsu_sukses'] = $data['juli_ipvpn_uiwsu'][0]['persentasi_sla'];
			$data['juli_ipvpn_uiwsu_ok'] = number_format($data['juli_ipvpn_uiwsu_sukses'],2,",",".");
			if(($data['juli_ipvpn_uiwsu_ok'])==0){ $data['juli_ipvpn_uiwsu_ok']=100;}	
			
			$data['agustus_ipvpn_uiwsu'] = $this->Sla_model->agustus_ipvpn_uiwsu();
			$data['agustus_ipvpn_uiwsu_sukses'] = $data['agustus_ipvpn_uiwsu'][0]['persentasi_sla'];
			$data['agustus_ipvpn_uiwsu_ok'] = number_format($data['agustus_ipvpn_uiwsu_sukses'],2,",",".");
			if(($data['agustus_ipvpn_uiwsu_ok'])==0){ $data['agustus_ipvpn_uiwsu_ok']=100;}	
			
			$data['september_ipvpn_uiwsu'] = $this->Sla_model->september_ipvpn_uiwsu();
			$data['september_ipvpn_uiwsu_sukses'] = $data['september_ipvpn_uiwsu'][0]['persentasi_sla'];
			$data['september_ipvpn_uiwsu_ok'] = number_format($data['september_ipvpn_uiwsu_sukses'],2,",",".");
			if(($data['september_ipvpn_uiwsu_ok'])==0){ $data['september_ipvpn_uiwsu_ok']=100;}	
			
			$data['oktober_ipvpn_uiwsu'] = $this->Sla_model->oktober_ipvpn_uiwsu();
			$data['oktober_ipvpn_uiwsu_sukses'] = $data['oktober_ipvpn_uiwsu'][0]['persentasi_sla'];
			$data['oktober_ipvpn_uiwsu_ok'] = number_format($data['oktober_ipvpn_uiwsu_sukses'],2,",",".");
			if(($data['oktober_ipvpn_uiwsu_ok'])==0){ $data['oktober_ipvpn_uiwsu_ok']=100;}	
			
			$data['november_ipvpn_uiwsu'] = $this->Sla_model->november_ipvpn_uiwsu();
			$data['november_ipvpn_uiwsu_sukses'] = $data['november_ipvpn_uiwsu'][0]['persentasi_sla'];
			$data['november_ipvpn_uiwsu_ok'] = number_format($data['november_ipvpn_uiwsu_sukses'],2,",",".");
			if(($data['november_ipvpn_uiwsu_ok'])==0){ $data['november_ipvpn_uiwsu_ok']=100;}	
			
			$data['desember_ipvpn_uiwsu'] = $this->Sla_model->desember_ipvpn_uiwsu();
			$data['desember_ipvpn_uiwsu_sukses'] = $data['desember_ipvpn_uiwsu'][0]['persentasi_sla'];
			$data['desember_ipvpn_uiwsu_ok'] = number_format($data['desember_ipvpn_uiwsu_sukses'],2,",",".");
			if(($data['desember_ipvpn_uiwsu_ok'])==0){ $data['desember_ipvpn_uiwsu_ok']=100;}	
			
			//metronet_UIWSU
			$data['januari_metronet_uiwsu'] = $this->Sla_model->januari_metronet_uiwsu();
			$data['januari_metronet_uiwsu_sukses'] = $data['januari_metronet_uiwsu'][0]['persentasi_sla'];
			$data['januari_metronet_uiwsu_ok'] = number_format($data['januari_metronet_uiwsu_sukses'],2,",",".");
			if(($data['januari_metronet_uiwsu_ok'])==0){ $data['januari_metronet_uiwsu_ok']=100;}	
			
			$data['februari_metronet_uiwsu'] = $this->Sla_model->februari_metronet_uiwsu();
			$data['februari_metronet_uiwsu_sukses'] = $data['februari_metronet_uiwsu'][0]['persentasi_sla'];
			$data['februari_metronet_uiwsu_ok'] = number_format($data['februari_metronet_uiwsu_sukses'],2,",",".");
			if(($data['februari_metronet_uiwsu_ok'])==0){ $data['februari_metronet_uiwsu_ok']=100;}	
			
			$data['maret_metronet_uiwsu'] = $this->Sla_model->maret_metronet_uiwsu();
			$data['maret_metronet_uiwsu_sukses'] = $data['maret_metronet_uiwsu'][0]['persentasi_sla'];
			$data['maret_metronet_uiwsu_ok'] = number_format($data['maret_metronet_uiwsu_sukses'],2,",",".");
			if(($data['maret_metronet_uiwsu_ok'])==0){ $data['maret_metronet_uiwsu_ok']=100;}	
			
			$data['april_metronet_uiwsu'] = $this->Sla_model->april_metronet_uiwsu();
			$data['april_metronet_uiwsu_sukses'] = $data['april_metronet_uiwsu'][0]['persentasi_sla'];
			$data['april_metronet_uiwsu_ok'] = number_format($data['april_metronet_uiwsu_sukses'],2,",",".");
			if(($data['april_metronet_uiwsu_ok'])==0){ $data['april_metronet_uiwsu_ok']=100;}	
			
			$data['mei_metronet_uiwsu'] = $this->Sla_model->mei_metronet_uiwsu();
			$data['mei_metronet_uiwsu_sukses'] = $data['mei_metronet_uiwsu'][0]['persentasi_sla'];
			$data['mei_metronet_uiwsu_ok'] = number_format($data['mei_metronet_uiwsu_sukses'],2,",",".");
			if(($data['mei_metronet_uiwsu_ok'])==0){ $data['mei_metronet_uiwsu_ok']=100;}	
			
			$data['juni_metronet_uiwsu'] = $this->Sla_model->juni_metronet_uiwsu();
			$data['juni_metronet_uiwsu_sukses'] = $data['juni_metronet_uiwsu'][0]['persentasi_sla'];
			$data['juni_metronet_uiwsu_ok'] = number_format($data['juni_metronet_uiwsu_sukses'],2,",",".");
			if(($data['juni_metronet_uiwsu_ok'])==0){ $data['juni_metronet_uiwsu_ok']=100;}	
			
			$data['juli_metronet_uiwsu'] = $this->Sla_model->juli_metronet_uiwsu();
			$data['juli_metronet_uiwsu_sukses'] = $data['juli_metronet_uiwsu'][0]['persentasi_sla'];
			$data['juli_metronet_uiwsu_ok'] = number_format($data['juli_metronet_uiwsu_sukses'],2,",",".");
			if(($data['juli_metronet_uiwsu_ok'])==0){ $data['juli_metronet_uiwsu_ok']=100;}	
			
			$data['agustus_metronet_uiwsu'] = $this->Sla_model->agustus_metronet_uiwsu();
			$data['agustus_metronet_uiwsu_sukses'] = $data['agustus_metronet_uiwsu'][0]['persentasi_sla'];
			$data['agustus_metronet_uiwsu_ok'] = number_format($data['agustus_metronet_uiwsu_sukses'],2,",",".");
			if(($data['agustus_metronet_uiwsu_ok'])==0){ $data['agustus_metronet_uiwsu_ok']=100;}	
			
			$data['september_metronet_uiwsu'] = $this->Sla_model->september_metronet_uiwsu();
			$data['september_metronet_uiwsu_sukses'] = $data['september_metronet_uiwsu'][0]['persentasi_sla'];
			$data['september_metronet_uiwsu_ok'] = number_format($data['september_metronet_uiwsu_sukses'],2,",",".");
			if(($data['september_metronet_uiwsu_ok'])==0){ $data['september_metronet_uiwsu_ok']=100;}	
			
			$data['oktober_metronet_uiwsu'] = $this->Sla_model->oktober_metronet_uiwsu();
			$data['oktober_metronet_uiwsu_sukses'] = $data['oktober_metronet_uiwsu'][0]['persentasi_sla'];
			$data['oktober_metronet_uiwsu_ok'] = number_format($data['oktober_metronet_uiwsu_sukses'],2,",",".");
			if(($data['oktober_metronet_uiwsu_ok'])==0){ $data['oktober_metronet_uiwsu_ok']=100;}	
			
			$data['november_metronet_uiwsu'] = $this->Sla_model->november_metronet_uiwsu();
			$data['november_metronet_uiwsu_sukses'] = $data['november_metronet_uiwsu'][0]['persentasi_sla'];
			$data['november_metronet_uiwsu_ok'] = number_format($data['november_metronet_uiwsu_sukses'],2,",",".");
			if(($data['november_metronet_uiwsu_ok'])==0){ $data['november_metronet_uiwsu_ok']=100;}	
			
			$data['desember_metronet_uiwsu'] = $this->Sla_model->desember_metronet_uiwsu();
			$data['desember_metronet_uiwsu_sukses'] = $data['desember_metronet_uiwsu'][0]['persentasi_sla'];
			$data['desember_metronet_uiwsu_ok'] = number_format($data['desember_metronet_uiwsu_sukses'],2,",",".");
			if(($data['desember_metronet_uiwsu_ok'])==0){ $data['desember_metronet_uiwsu_ok']=100;}	
			
			//vsat_UIWSU
			$data['januari_vsat_uiwsu'] = $this->Sla_model->januari_vsat_uiwsu();
			$data['januari_vsat_uiwsu_sukses'] = $data['januari_vsat_uiwsu'][0]['persentasi_sla'];
			$data['januari_vsat_uiwsu_ok'] = number_format($data['januari_vsat_uiwsu_sukses'],2,",",".");
			if(($data['januari_vsat_uiwsu_ok'])==0){ $data['januari_vsat_uiwsu_ok']=100;}	
			
			$data['februari_vsat_uiwsu'] = $this->Sla_model->februari_vsat_uiwsu();
			$data['februari_vsat_uiwsu_sukses'] = $data['februari_vsat_uiwsu'][0]['persentasi_sla'];
			$data['februari_vsat_uiwsu_ok'] = number_format($data['februari_vsat_uiwsu_sukses'],2,",",".");
			if(($data['februari_vsat_uiwsu_ok'])==0){ $data['februari_vsat_uiwsu_ok']=100;}	
			
			$data['maret_vsat_uiwsu'] = $this->Sla_model->maret_vsat_uiwsu();
			$data['maret_vsat_uiwsu_sukses'] = $data['maret_vsat_uiwsu'][0]['persentasi_sla'];
			$data['maret_vsat_uiwsu_ok'] = number_format($data['maret_vsat_uiwsu_sukses'],2,",",".");
			if(($data['maret_vsat_uiwsu_ok'])==0){ $data['maret_vsat_uiwsu_ok']=100;}	
			
			$data['april_vsat_uiwsu'] = $this->Sla_model->april_vsat_uiwsu();
			$data['april_vsat_uiwsu_sukses'] = $data['april_vsat_uiwsu'][0]['persentasi_sla'];
			$data['april_vsat_uiwsu_ok'] = number_format($data['april_vsat_uiwsu_sukses'],2,",",".");
			if(($data['april_vsat_uiwsu_ok'])==0){ $data['april_vsat_uiwsu_ok']=100;}	
			
			$data['mei_vsat_uiwsu'] = $this->Sla_model->mei_vsat_uiwsu();
			$data['mei_vsat_uiwsu_sukses'] = $data['mei_vsat_uiwsu'][0]['persentasi_sla'];
			$data['mei_vsat_uiwsu_ok'] = number_format($data['mei_vsat_uiwsu_sukses'],2,",",".");
			if(($data['mei_vsat_uiwsu_ok'])==0){ $data['mei_vsat_uiwsu_ok']=100;}	
			
			$data['juni_vsat_uiwsu'] = $this->Sla_model->juni_vsat_uiwsu();
			$data['juni_vsat_uiwsu_sukses'] = $data['juni_vsat_uiwsu'][0]['persentasi_sla'];
			$data['juni_vsat_uiwsu_ok'] = number_format($data['juni_vsat_uiwsu_sukses'],2,",",".");
			if(($data['juni_vsat_uiwsu_ok'])==0){ $data['juni_vsat_uiwsu_ok']=100;}	
			
			$data['juli_vsat_uiwsu'] = $this->Sla_model->juli_vsat_uiwsu();
			$data['juli_vsat_uiwsu_sukses'] = $data['juli_vsat_uiwsu'][0]['persentasi_sla'];
			$data['juli_vsat_uiwsu_ok'] = number_format($data['juli_vsat_uiwsu_sukses'],2,",",".");
			if(($data['juli_vsat_uiwsu_ok'])==0){ $data['juli_vsat_uiwsu_ok']=100;}	
			
			$data['agustus_vsat_uiwsu'] = $this->Sla_model->agustus_vsat_uiwsu();
			$data['agustus_vsat_uiwsu_sukses'] = $data['agustus_vsat_uiwsu'][0]['persentasi_sla'];
			$data['agustus_vsat_uiwsu_ok'] = number_format($data['agustus_vsat_uiwsu_sukses'],2,",",".");
			if(($data['agustus_vsat_uiwsu_ok'])==0){ $data['agustus_vsat_uiwsu_ok']=100;}	
			
			$data['september_vsat_uiwsu'] = $this->Sla_model->september_vsat_uiwsu();
			$data['september_vsat_uiwsu_sukses'] = $data['september_vsat_uiwsu'][0]['persentasi_sla'];
			$data['september_vsat_uiwsu_ok'] = number_format($data['september_vsat_uiwsu_sukses'],2,",",".");
			if(($data['september_vsat_uiwsu_ok'])==0){ $data['september_vsat_uiwsu_ok']=100;}	
			
			$data['oktober_vsat_uiwsu'] = $this->Sla_model->oktober_vsat_uiwsu();
			$data['oktober_vsat_uiwsu_sukses'] = $data['oktober_vsat_uiwsu'][0]['persentasi_sla'];
			$data['oktober_vsat_uiwsu_ok'] = number_format($data['oktober_vsat_uiwsu_sukses'],2,",",".");
			if(($data['oktober_vsat_uiwsu_ok'])==0){ $data['oktober_vsat_uiwsu_ok']=100;}	
			
			$data['november_vsat_uiwsu'] = $this->Sla_model->november_vsat_uiwsu();
			$data['november_vsat_uiwsu_sukses'] = $data['november_vsat_uiwsu'][0]['persentasi_sla'];
			$data['november_vsat_uiwsu_ok'] = number_format($data['november_vsat_uiwsu_sukses'],2,",",".");
			if(($data['november_vsat_uiwsu_ok'])==0){ $data['november_vsat_uiwsu_ok']=100;}	
			
			$data['desember_vsat_uiwsu'] = $this->Sla_model->desember_vsat_uiwsu();
			$data['desember_vsat_uiwsu_sukses'] = $data['desember_vsat_uiwsu'][0]['persentasi_sla'];
			$data['desember_vsat_uiwsu_ok'] = number_format($data['desember_vsat_uiwsu_sukses'],2,",",".");
			if(($data['desember_vsat_uiwsu_ok'])==0){ $data['desember_vsat_uiwsu_ok']=100;}	
			
			//internet_UIKSBU
			$data['januari_internet_uiksbu'] = $this->Sla_model->januari_internet_uiksbu();
			$data['januari_internet_uiksbu_sukses'] = $data['januari_internet_uiksbu'][0]['persentasi_sla'];
			$data['januari_internet_uiksbu_ok'] = number_format($data['januari_internet_uiksbu_sukses'],2,",",".");
			if(($data['januari_internet_uiksbu_ok'])==0){ $data['januari_internet_uiksbu_ok']=100;}	
			
			$data['februari_internet_uiksbu'] = $this->Sla_model->februari_internet_uiksbu();
			$data['februari_internet_uiksbu_sukses'] = $data['februari_internet_uiksbu'][0]['persentasi_sla'];
			$data['februari_internet_uiksbu_ok'] = number_format($data['februari_internet_uiksbu_sukses'],2,",",".");
			if(($data['februari_internet_uiksbu_ok'])==0){ $data['februari_internet_uiksbu_ok']=100;}	
			
			$data['maret_internet_uiksbu'] = $this->Sla_model->maret_internet_uiksbu();
			$data['maret_internet_uiksbu_sukses'] = $data['maret_internet_uiksbu'][0]['persentasi_sla'];
			$data['maret_internet_uiksbu_ok'] = number_format($data['maret_internet_uiksbu_sukses'],2,",",".");
			if(($data['maret_internet_uiksbu_ok'])==0){ $data['maret_internet_uiksbu_ok']=100;}	
			
			$data['april_internet_uiksbu'] = $this->Sla_model->april_internet_uiksbu();
			$data['april_internet_uiksbu_sukses'] = $data['april_internet_uiksbu'][0]['persentasi_sla'];
			$data['april_internet_uiksbu_ok'] = number_format($data['april_internet_uiksbu_sukses'],2,",",".");
			if(($data['april_internet_uiksbu_ok'])==0){ $data['april_internet_uiksbu_ok']=100;}	
			
			$data['mei_internet_uiksbu'] = $this->Sla_model->mei_internet_uiksbu();
			$data['mei_internet_uiksbu_sukses'] = $data['mei_internet_uiksbu'][0]['persentasi_sla'];
			$data['mei_internet_uiksbu_ok'] = number_format($data['mei_internet_uiksbu_sukses'],2,",",".");
			if(($data['mei_internet_uiksbu_ok'])==0){ $data['mei_internet_uiksbu_ok']=100;}	
			
			$data['juni_internet_uiksbu'] = $this->Sla_model->juni_internet_uiksbu();
			$data['juni_internet_uiksbu_sukses'] = $data['juni_internet_uiksbu'][0]['persentasi_sla'];
			$data['juni_internet_uiksbu_ok'] = number_format($data['juni_internet_uiksbu_sukses'],2,",",".");
			if(($data['juni_internet_uiksbu_ok'])==0){ $data['juni_internet_uiksbu_ok']=100;}	
			
			$data['juli_internet_uiksbu'] = $this->Sla_model->juli_internet_uiksbu();
			$data['juli_internet_uiksbu_sukses'] = $data['juli_internet_uiksbu'][0]['persentasi_sla'];
			$data['juli_internet_uiksbu_ok'] = number_format($data['juli_internet_uiksbu_sukses'],2,",",".");
			if(($data['juli_internet_uiksbu_ok'])==0){ $data['juli_internet_uiksbu_ok']=100;}	
			
			$data['agustus_internet_uiksbu'] = $this->Sla_model->agustus_internet_uiksbu();
			$data['agustus_internet_uiksbu_sukses'] = $data['agustus_internet_uiksbu'][0]['persentasi_sla'];
			$data['agustus_internet_uiksbu_ok'] = number_format($data['agustus_internet_uiksbu_sukses'],2,",",".");
			if(($data['agustus_internet_uiksbu_ok'])==0){ $data['agustus_internet_uiksbu_ok']=100;}	
			
			$data['september_internet_uiksbu'] = $this->Sla_model->september_internet_uiksbu();
			$data['september_internet_uiksbu_sukses'] = $data['september_internet_uiksbu'][0]['persentasi_sla'];
			$data['september_internet_uiksbu_ok'] = number_format($data['september_internet_uiksbu_sukses'],2,",",".");
			if(($data['september_internet_uiksbu_ok'])==0){ $data['september_internet_uiksbu_ok']=100;}	
			
			$data['oktober_internet_uiksbu'] = $this->Sla_model->oktober_internet_uiksbu();
			$data['oktober_internet_uiksbu_sukses'] = $data['oktober_internet_uiksbu'][0]['persentasi_sla'];
			$data['oktober_internet_uiksbu_ok'] = number_format($data['oktober_internet_uiksbu_sukses'],2,",",".");
			if(($data['oktober_internet_uiksbu_ok'])==0){ $data['oktober_internet_uiksbu_ok']=100;}	
			
			$data['november_internet_uiksbu'] = $this->Sla_model->november_internet_uiksbu();
			$data['november_internet_uiksbu_sukses'] = $data['november_internet_uiksbu'][0]['persentasi_sla'];
			$data['november_internet_uiksbu_ok'] = number_format($data['november_internet_uiksbu_sukses'],2,",",".");
			if(($data['november_internet_uiksbu_ok'])==0){ $data['november_internet_uiksbu_ok']=100;}	
			
			$data['desember_internet_uiksbu'] = $this->Sla_model->desember_internet_uiksbu();
			$data['desember_internet_uiksbu_sukses'] = $data['desember_internet_uiksbu'][0]['persentasi_sla'];
			$data['desember_internet_uiksbu_ok'] = number_format($data['desember_internet_uiksbu_sukses'],2,",",".");
			if(($data['desember_internet_uiksbu_ok'])==0){ $data['desember_internet_uiksbu_ok']=100;}	
			
			//ipvpn_uiksbu
			$data['januari_ipvpn_uiksbu'] = $this->Sla_model->januari_ipvpn_uiksbu();
			$data['januari_ipvpn_uiksbu_sukses'] = $data['januari_ipvpn_uiksbu'][0]['persentasi_sla'];
			$data['januari_ipvpn_uiksbu_ok'] = number_format($data['januari_ipvpn_uiksbu_sukses'],2,",",".");
			if(($data['januari_ipvpn_uiksbu_ok'])==0){ $data['januari_ipvpn_uiksbu_ok']=100;}	
			
			$data['februari_ipvpn_uiksbu'] = $this->Sla_model->februari_ipvpn_uiksbu();
			$data['februari_ipvpn_uiksbu_sukses'] = $data['februari_ipvpn_uiksbu'][0]['persentasi_sla'];
			$data['februari_ipvpn_uiksbu_ok'] = number_format($data['februari_ipvpn_uiksbu_sukses'],2,",",".");
			if(($data['februari_ipvpn_uiksbu_ok'])==0){ $data['februari_ipvpn_uiksbu_ok']=100;}	
			
			$data['maret_ipvpn_uiksbu'] = $this->Sla_model->maret_ipvpn_uiksbu();
			$data['maret_ipvpn_uiksbu_sukses'] = $data['maret_ipvpn_uiksbu'][0]['persentasi_sla'];
			$data['maret_ipvpn_uiksbu_ok'] = number_format($data['maret_ipvpn_uiksbu_sukses'],2,",",".");
			if(($data['maret_ipvpn_uiksbu_ok'])==0){ $data['maret_ipvpn_uiksbu_ok']=100;}	
			
			$data['april_ipvpn_uiksbu'] = $this->Sla_model->april_ipvpn_uiksbu();
			$data['april_ipvpn_uiksbu_sukses'] = $data['april_ipvpn_uiksbu'][0]['persentasi_sla'];
			$data['april_ipvpn_uiksbu_ok'] = number_format($data['april_ipvpn_uiksbu_sukses'],2,",",".");
			if(($data['april_ipvpn_uiksbu_ok'])==0){ $data['april_ipvpn_uiksbu_ok']=100;}	
			
			$data['mei_ipvpn_uiksbu'] = $this->Sla_model->mei_ipvpn_uiksbu();
			$data['mei_ipvpn_uiksbu_sukses'] = $data['mei_ipvpn_uiksbu'][0]['persentasi_sla'];
			$data['mei_ipvpn_uiksbu_ok'] = number_format($data['mei_ipvpn_uiksbu_sukses'],2,",",".");
			if(($data['mei_ipvpn_uiksbu_ok'])==0){ $data['mei_ipvpn_uiksbu_ok']=100;}	
			
			$data['juni_ipvpn_uiksbu'] = $this->Sla_model->juni_ipvpn_uiksbu();
			$data['juni_ipvpn_uiksbu_sukses'] = $data['juni_ipvpn_uiksbu'][0]['persentasi_sla'];
			$data['juni_ipvpn_uiksbu_ok'] = number_format($data['juni_ipvpn_uiksbu_sukses'],2,",",".");
			if(($data['juni_ipvpn_uiksbu_ok'])==0){ $data['juni_ipvpn_uiksbu_ok']=100;}	
			
			$data['juli_ipvpn_uiksbu'] = $this->Sla_model->juli_ipvpn_uiksbu();
			$data['juli_ipvpn_uiksbu_sukses'] = $data['juli_ipvpn_uiksbu'][0]['persentasi_sla'];
			$data['juli_ipvpn_uiksbu_ok'] = number_format($data['juli_ipvpn_uiksbu_sukses'],2,",",".");
			if(($data['juli_ipvpn_uiksbu_ok'])==0){ $data['juli_ipvpn_uiksbu_ok']=100;}	
			
			$data['agustus_ipvpn_uiksbu'] = $this->Sla_model->agustus_ipvpn_uiksbu();
			$data['agustus_ipvpn_uiksbu_sukses'] = $data['agustus_ipvpn_uiksbu'][0]['persentasi_sla'];
			$data['agustus_ipvpn_uiksbu_ok'] = number_format($data['agustus_ipvpn_uiksbu_sukses'],2,",",".");
			if(($data['agustus_ipvpn_uiksbu_ok'])==0){ $data['agustus_ipvpn_uiksbu_ok']=100;}	
			
			$data['september_ipvpn_uiksbu'] = $this->Sla_model->september_ipvpn_uiksbu();
			$data['september_ipvpn_uiksbu_sukses'] = $data['september_ipvpn_uiksbu'][0]['persentasi_sla'];
			$data['september_ipvpn_uiksbu_ok'] = number_format($data['september_ipvpn_uiksbu_sukses'],2,",",".");
			if(($data['september_ipvpn_uiksbu_ok'])==0){ $data['september_ipvpn_uiksbu_ok']=100;}	
			
			$data['oktober_ipvpn_uiksbu'] = $this->Sla_model->oktober_ipvpn_uiksbu();
			$data['oktober_ipvpn_uiksbu_sukses'] = $data['oktober_ipvpn_uiksbu'][0]['persentasi_sla'];
			$data['oktober_ipvpn_uiksbu_ok'] = number_format($data['oktober_ipvpn_uiksbu_sukses'],2,",",".");
			if(($data['oktober_ipvpn_uiksbu_ok'])==0){ $data['oktober_ipvpn_uiksbu_ok']=100;}	
			
			$data['november_ipvpn_uiksbu'] = $this->Sla_model->november_ipvpn_uiksbu();
			$data['november_ipvpn_uiksbu_sukses'] = $data['november_ipvpn_uiksbu'][0]['persentasi_sla'];
			$data['november_ipvpn_uiksbu_ok'] = number_format($data['november_ipvpn_uiksbu_sukses'],2,",",".");
			if(($data['november_ipvpn_uiksbu_ok'])==0){ $data['november_ipvpn_uiksbu_ok']=100;}	
			
			$data['desember_ipvpn_uiksbu'] = $this->Sla_model->desember_ipvpn_uiksbu();
			$data['desember_ipvpn_uiksbu_sukses'] = $data['desember_ipvpn_uiksbu'][0]['persentasi_sla'];
			$data['desember_ipvpn_uiksbu_ok'] = number_format($data['desember_ipvpn_uiksbu_sukses'],2,",",".");
			if(($data['desember_ipvpn_uiksbu_ok'])==0){ $data['desember_ipvpn_uiksbu_ok']=100;}	
			
								
			//internet_UIpSBU
			$data['januari_internet_uipsbu'] = $this->Sla_model->januari_internet_uipsbu();
			$data['januari_internet_uipsbu_sukses'] = $data['januari_internet_uipsbu'][0]['persentasi_sla'];
			$data['januari_internet_uipsbu_ok'] = number_format($data['januari_internet_uipsbu_sukses'],2,",",".");
			if(($data['januari_internet_uipsbu_ok'])==0){ $data['januari_internet_uipsbu_ok']=100;}	
			
			$data['februari_internet_uipsbu'] = $this->Sla_model->februari_internet_uipsbu();
			$data['februari_internet_uipsbu_sukses'] = $data['februari_internet_uipsbu'][0]['persentasi_sla'];
			$data['februari_internet_uipsbu_ok'] = number_format($data['februari_internet_uipsbu_sukses'],2,",",".");
			if(($data['februari_internet_uipsbu_ok'])==0){ $data['februari_internet_uipsbu_ok']=100;}	
			
			$data['maret_internet_uipsbu'] = $this->Sla_model->maret_internet_uipsbu();
			$data['maret_internet_uipsbu_sukses'] = $data['maret_internet_uipsbu'][0]['persentasi_sla'];
			$data['maret_internet_uipsbu_ok'] = number_format($data['maret_internet_uipsbu_sukses'],2,",",".");
			if(($data['maret_internet_uipsbu_ok'])==0){ $data['maret_internet_uipsbu_ok']=100;}	
			
			$data['april_internet_uipsbu'] = $this->Sla_model->april_internet_uipsbu();
			$data['april_internet_uipsbu_sukses'] = $data['april_internet_uipsbu'][0]['persentasi_sla'];
			$data['april_internet_uipsbu_ok'] = number_format($data['april_internet_uipsbu_sukses'],2,",",".");
			if(($data['april_internet_uipsbu_ok'])==0){ $data['april_internet_uipsbu_ok']=100;}	
			
			$data['mei_internet_uipsbu'] = $this->Sla_model->mei_internet_uipsbu();
			$data['mei_internet_uipsbu_sukses'] = $data['mei_internet_uipsbu'][0]['persentasi_sla'];
			$data['mei_internet_uipsbu_ok'] = number_format($data['mei_internet_uipsbu_sukses'],2,",",".");
			if(($data['mei_internet_uipsbu_ok'])==0){ $data['mei_internet_uipsbu_ok']=100;}	
			
			$data['juni_internet_uipsbu'] = $this->Sla_model->juni_internet_uipsbu();
			$data['juni_internet_uipsbu_sukses'] = $data['juni_internet_uipsbu'][0]['persentasi_sla'];
			$data['juni_internet_uipsbu_ok'] = number_format($data['juni_internet_uipsbu_sukses'],2,",",".");
			if(($data['juni_internet_uipsbu_ok'])==0){ $data['juni_internet_uipsbu_ok']=100;}	
			
			$data['juli_internet_uipsbu'] = $this->Sla_model->juli_internet_uipsbu();
			$data['juli_internet_uipsbu_sukses'] = $data['juli_internet_uipsbu'][0]['persentasi_sla'];
			$data['juli_internet_uipsbu_ok'] = number_format($data['juli_internet_uipsbu_sukses'],2,",",".");
			if(($data['juli_internet_uipsbu_ok'])==0){ $data['juli_internet_uipsbu_ok']=100;}	
			
			$data['agustus_internet_uipsbu'] = $this->Sla_model->agustus_internet_uipsbu();
			$data['agustus_internet_uipsbu_sukses'] = $data['agustus_internet_uipsbu'][0]['persentasi_sla'];
			$data['agustus_internet_uipsbu_ok'] = number_format($data['agustus_internet_uipsbu_sukses'],2,",",".");
			if(($data['agustus_internet_uipsbu_ok'])==0){ $data['agustus_internet_uipsbu_ok']=100;}	
			
			$data['september_internet_uipsbu'] = $this->Sla_model->september_internet_uipsbu();
			$data['september_internet_uipsbu_sukses'] = $data['september_internet_uipsbu'][0]['persentasi_sla'];
			$data['september_internet_uipsbu_ok'] = number_format($data['september_internet_uipsbu_sukses'],2,",",".");
			if(($data['september_internet_uipsbu_ok'])==0){ $data['september_internet_uipsbu_ok']=100;}	
			
			$data['oktober_internet_uipsbu'] = $this->Sla_model->oktober_internet_uipsbu();
			$data['oktober_internet_uipsbu_sukses'] = $data['oktober_internet_uipsbu'][0]['persentasi_sla'];
			$data['oktober_internet_uipsbu_ok'] = number_format($data['oktober_internet_uipsbu_sukses'],2,",",".");
			if(($data['oktober_internet_uipsbu_ok'])==0){ $data['oktober_internet_uipsbu_ok']=100;}	
			
			$data['november_internet_uipsbu'] = $this->Sla_model->november_internet_uipsbu();
			$data['november_internet_uipsbu_sukses'] = $data['november_internet_uipsbu'][0]['persentasi_sla'];
			$data['november_internet_uipsbu_ok'] = number_format($data['november_internet_uipsbu_sukses'],2,",",".");
			if(($data['november_internet_uipsbu_ok'])==0){ $data['november_internet_uipsbu_ok']=100;}	
			
			$data['desember_internet_uipsbu'] = $this->Sla_model->desember_internet_uipsbu();
			$data['desember_internet_uipsbu_sukses'] = $data['desember_internet_uipsbu'][0]['persentasi_sla'];
			$data['desember_internet_uipsbu_ok'] = number_format($data['desember_internet_uipsbu_sukses'],2,",",".");
			if(($data['desember_internet_uipsbu_ok'])==0){ $data['desember_internet_uipsbu_ok']=100;}	
			
			//ipvpn_uipsbu
			$data['januari_ipvpn_uipsbu'] = $this->Sla_model->januari_ipvpn_uipsbu();
			$data['januari_ipvpn_uipsbu_sukses'] = $data['januari_ipvpn_uipsbu'][0]['persentasi_sla'];
			$data['januari_ipvpn_uipsbu_ok'] = number_format($data['januari_ipvpn_uipsbu_sukses'],2,",",".");
			if(($data['januari_ipvpn_uipsbu_ok'])==0){ $data['januari_ipvpn_uipsbu_ok']=100;}	
			
			$data['februari_ipvpn_uipsbu'] = $this->Sla_model->februari_ipvpn_uipsbu();
			$data['februari_ipvpn_uipsbu_sukses'] = $data['februari_ipvpn_uipsbu'][0]['persentasi_sla'];
			$data['februari_ipvpn_uipsbu_ok'] = number_format($data['februari_ipvpn_uipsbu_sukses'],2,",",".");
			if(($data['februari_ipvpn_uipsbu_ok'])==0){ $data['februari_ipvpn_uipsbu_ok']=100;}	
			
			$data['maret_ipvpn_uipsbu'] = $this->Sla_model->maret_ipvpn_uipsbu();
			$data['maret_ipvpn_uipsbu_sukses'] = $data['maret_ipvpn_uipsbu'][0]['persentasi_sla'];
			$data['maret_ipvpn_uipsbu_ok'] = number_format($data['maret_ipvpn_uipsbu_sukses'],2,",",".");
			if(($data['maret_ipvpn_uipsbu_ok'])==0){ $data['maret_ipvpn_uipsbu_ok']=100;}	
			
			$data['april_ipvpn_uipsbu'] = $this->Sla_model->april_ipvpn_uipsbu();
			$data['april_ipvpn_uipsbu_sukses'] = $data['april_ipvpn_uipsbu'][0]['persentasi_sla'];
			$data['april_ipvpn_uipsbu_ok'] = number_format($data['april_ipvpn_uipsbu_sukses'],2,",",".");
			if(($data['april_ipvpn_uipsbu_ok'])==0){ $data['april_ipvpn_uipsbu_ok']=100;}	
			
			$data['mei_ipvpn_uipsbu'] = $this->Sla_model->mei_ipvpn_uipsbu();
			$data['mei_ipvpn_uipsbu_sukses'] = $data['mei_ipvpn_uipsbu'][0]['persentasi_sla'];
			$data['mei_ipvpn_uipsbu_ok'] = number_format($data['mei_ipvpn_uipsbu_sukses'],2,",",".");
			if(($data['mei_ipvpn_uipsbu_ok'])==0){ $data['mei_ipvpn_uipsbu_ok']=100;}	
			
			$data['juni_ipvpn_uipsbu'] = $this->Sla_model->juni_ipvpn_uipsbu();
			$data['juni_ipvpn_uipsbu_sukses'] = $data['juni_ipvpn_uipsbu'][0]['persentasi_sla'];
			$data['juni_ipvpn_uipsbu_ok'] = number_format($data['juni_ipvpn_uipsbu_sukses'],2,",",".");
			if(($data['juni_ipvpn_uipsbu_ok'])==0){ $data['juni_ipvpn_uipsbu_ok']=100;}	
			
			$data['juli_ipvpn_uipsbu'] = $this->Sla_model->juli_ipvpn_uipsbu();
			$data['juli_ipvpn_uipsbu_sukses'] = $data['juli_ipvpn_uipsbu'][0]['persentasi_sla'];
			$data['juli_ipvpn_uipsbu_ok'] = number_format($data['juli_ipvpn_uipsbu_sukses'],2,",",".");
			if(($data['juli_ipvpn_uipsbu_ok'])==0){ $data['juli_ipvpn_uipsbu_ok']=100;}	
			
			$data['agustus_ipvpn_uipsbu'] = $this->Sla_model->agustus_ipvpn_uipsbu();
			$data['agustus_ipvpn_uipsbu_sukses'] = $data['agustus_ipvpn_uipsbu'][0]['persentasi_sla'];
			$data['agustus_ipvpn_uipsbu_ok'] = number_format($data['agustus_ipvpn_uipsbu_sukses'],2,",",".");
			if(($data['agustus_ipvpn_uipsbu_ok'])==0){ $data['agustus_ipvpn_uipsbu_ok']=100;}	
			
			$data['september_ipvpn_uipsbu'] = $this->Sla_model->september_ipvpn_uipsbu();
			$data['september_ipvpn_uipsbu_sukses'] = $data['september_ipvpn_uipsbu'][0]['persentasi_sla'];
			$data['september_ipvpn_uipsbu_ok'] = number_format($data['september_ipvpn_uipsbu_sukses'],2,",",".");
			if(($data['september_ipvpn_uipsbu_ok'])==0){ $data['september_ipvpn_uipsbu_ok']=100;}	
			
			$data['oktober_ipvpn_uipsbu'] = $this->Sla_model->oktober_ipvpn_uipsbu();
			$data['oktober_ipvpn_uipsbu_sukses'] = $data['oktober_ipvpn_uipsbu'][0]['persentasi_sla'];
			$data['oktober_ipvpn_uipsbu_ok'] = number_format($data['oktober_ipvpn_uipsbu_sukses'],2,",",".");
			if(($data['oktober_ipvpn_uipsbu_ok'])==0){ $data['oktober_ipvpn_uipsbu_ok']=100;}	
			
			$data['november_ipvpn_uipsbu'] = $this->Sla_model->november_ipvpn_uipsbu();
			$data['november_ipvpn_uipsbu_sukses'] = $data['november_ipvpn_uipsbu'][0]['persentasi_sla'];
			$data['november_ipvpn_uipsbu_ok'] = number_format($data['november_ipvpn_uipsbu_sukses'],2,",",".");
			if(($data['november_ipvpn_uipsbu_ok'])==0){ $data['november_ipvpn_uipsbu_ok']=100;}	
			
			$data['desember_ipvpn_uipsbu'] = $this->Sla_model->desember_ipvpn_uipsbu();
			$data['desember_ipvpn_uipsbu_sukses'] = $data['desember_ipvpn_uipsbu'][0]['persentasi_sla'];
			$data['desember_ipvpn_uipsbu_ok'] = number_format($data['desember_ipvpn_uipsbu_sukses'],2,",",".");
			if(($data['desember_ipvpn_uipsbu_ok'])==0){ $data['desember_ipvpn_uipsbu_ok']=100;}	
			
			//internet_uipkitsum
			$data['januari_internet_uipkitsum'] = $this->Sla_model->januari_internet_uipkitsum();
			$data['januari_internet_uipkitsum_sukses'] = $data['januari_internet_uipkitsum'][0]['persentasi_sla'];
			$data['januari_internet_uipkitsum_ok'] = number_format($data['januari_internet_uipkitsum_sukses'],2,",",".");
			if(($data['januari_internet_uipkitsum_ok'])==0){ $data['januari_internet_uipkitsum_ok']=100;}	
			
			$data['februari_internet_uipkitsum'] = $this->Sla_model->februari_internet_uipkitsum();
			$data['februari_internet_uipkitsum_sukses'] = $data['februari_internet_uipkitsum'][0]['persentasi_sla'];
			$data['februari_internet_uipkitsum_ok'] = number_format($data['februari_internet_uipkitsum_sukses'],2,",",".");
			if(($data['februari_internet_uipkitsum_ok'])==0){ $data['februari_internet_uipkitsum_ok']=100;}	
			
			$data['maret_internet_uipkitsum'] = $this->Sla_model->maret_internet_uipkitsum();
			$data['maret_internet_uipkitsum_sukses'] = $data['maret_internet_uipkitsum'][0]['persentasi_sla'];
			$data['maret_internet_uipkitsum_ok'] = number_format($data['maret_internet_uipkitsum_sukses'],2,",",".");
			if(($data['maret_internet_uipkitsum_ok'])==0){ $data['maret_internet_uipkitsum_ok']=100;}	
			
			$data['april_internet_uipkitsum'] = $this->Sla_model->april_internet_uipkitsum();
			$data['april_internet_uipkitsum_sukses'] = $data['april_internet_uipkitsum'][0]['persentasi_sla'];
			$data['april_internet_uipkitsum_ok'] = number_format($data['april_internet_uipkitsum_sukses'],2,",",".");
			if(($data['april_internet_uipkitsum_ok'])==0){ $data['april_internet_uipkitsum_ok']=100;}	
			
			$data['mei_internet_uipkitsum'] = $this->Sla_model->mei_internet_uipkitsum();
			$data['mei_internet_uipkitsum_sukses'] = $data['mei_internet_uipkitsum'][0]['persentasi_sla'];
			$data['mei_internet_uipkitsum_ok'] = number_format($data['mei_internet_uipkitsum_sukses'],2,",",".");
			if(($data['mei_internet_uipkitsum_ok'])==0){ $data['mei_internet_uipkitsum_ok']=100;}	
			
			$data['juni_internet_uipkitsum'] = $this->Sla_model->juni_internet_uipkitsum();
			$data['juni_internet_uipkitsum_sukses'] = $data['juni_internet_uipkitsum'][0]['persentasi_sla'];
			$data['juni_internet_uipkitsum_ok'] = number_format($data['juni_internet_uipkitsum_sukses'],2,",",".");
			if(($data['juni_internet_uipkitsum_ok'])==0){ $data['juni_internet_uipkitsum_ok']=100;}	
			
			$data['juli_internet_uipkitsum'] = $this->Sla_model->juli_internet_uipkitsum();
			$data['juli_internet_uipkitsum_sukses'] = $data['juli_internet_uipkitsum'][0]['persentasi_sla'];
			$data['juli_internet_uipkitsum_ok'] = number_format($data['juli_internet_uipkitsum_sukses'],2,",",".");
			if(($data['juli_internet_uipkitsum_ok'])==0){ $data['juli_internet_uipkitsum_ok']=100;}	
			
			$data['agustus_internet_uipkitsum'] = $this->Sla_model->agustus_internet_uipkitsum();
			$data['agustus_internet_uipkitsum_sukses'] = $data['agustus_internet_uipkitsum'][0]['persentasi_sla'];
			$data['agustus_internet_uipkitsum_ok'] = number_format($data['agustus_internet_uipkitsum_sukses'],2,",",".");
			if(($data['agustus_internet_uipkitsum_ok'])==0){ $data['agustus_internet_uipkitsum_ok']=100;}	
			
			$data['september_internet_uipkitsum'] = $this->Sla_model->september_internet_uipkitsum();
			$data['september_internet_uipkitsum_sukses'] = $data['september_internet_uipkitsum'][0]['persentasi_sla'];
			$data['september_internet_uipkitsum_ok'] = number_format($data['september_internet_uipkitsum_sukses'],2,",",".");
			if(($data['september_internet_uipkitsum_ok'])==0){ $data['september_internet_uipkitsum_ok']=100;}	
			
			$data['oktober_internet_uipkitsum'] = $this->Sla_model->oktober_internet_uipkitsum();
			$data['oktober_internet_uipkitsum_sukses'] = $data['oktober_internet_uipkitsum'][0]['persentasi_sla'];
			$data['oktober_internet_uipkitsum_ok'] = number_format($data['oktober_internet_uipkitsum_sukses'],2,",",".");
			if(($data['oktober_internet_uipkitsum_ok'])==0){ $data['oktober_internet_uipkitsum_ok']=100;}	
			
			$data['november_internet_uipkitsum'] = $this->Sla_model->november_internet_uipkitsum();
			$data['november_internet_uipkitsum_sukses'] = $data['november_internet_uipkitsum'][0]['persentasi_sla'];
			$data['november_internet_uipkitsum_ok'] = number_format($data['november_internet_uipkitsum_sukses'],2,",",".");
			if(($data['november_internet_uipkitsum_ok'])==0){ $data['november_internet_uipkitsum_ok']=100;}	
			
			$data['desember_internet_uipkitsum'] = $this->Sla_model->desember_internet_uipkitsum();
			$data['desember_internet_uipkitsum_sukses'] = $data['desember_internet_uipkitsum'][0]['persentasi_sla'];
			$data['desember_internet_uipkitsum_ok'] = number_format($data['desember_internet_uipkitsum_sukses'],2,",",".");
			if(($data['desember_internet_uipkitsum_ok'])==0){ $data['desember_internet_uipkitsum_ok']=100;}	
			
			//ipvpn_uipkitsum
			$data['januari_ipvpn_uipkitsum'] = $this->Sla_model->januari_ipvpn_uipkitsum();
			$data['januari_ipvpn_uipkitsum_sukses'] = $data['januari_ipvpn_uipkitsum'][0]['persentasi_sla'];
			$data['januari_ipvpn_uipkitsum_ok'] = number_format($data['januari_ipvpn_uipkitsum_sukses'],2,",",".");
			if(($data['januari_ipvpn_uipkitsum_ok'])==0){ $data['januari_ipvpn_uipkitsum_ok']=100;}	
			
			$data['februari_ipvpn_uipkitsum'] = $this->Sla_model->februari_ipvpn_uipkitsum();
			$data['februari_ipvpn_uipkitsum_sukses'] = $data['februari_ipvpn_uipkitsum'][0]['persentasi_sla'];
			$data['februari_ipvpn_uipkitsum_ok'] = number_format($data['februari_ipvpn_uipkitsum_sukses'],2,",",".");
			if(($data['februari_ipvpn_uipkitsum_ok'])==0){ $data['februari_ipvpn_uipkitsum_ok']=100;}	
			
			$data['maret_ipvpn_uipkitsum'] = $this->Sla_model->maret_ipvpn_uipkitsum();
			$data['maret_ipvpn_uipkitsum_sukses'] = $data['maret_ipvpn_uipkitsum'][0]['persentasi_sla'];
			$data['maret_ipvpn_uipkitsum_ok'] = number_format($data['maret_ipvpn_uipkitsum_sukses'],2,",",".");
			if(($data['maret_ipvpn_uipkitsum_ok'])==0){ $data['maret_ipvpn_uipkitsum_ok']=100;}	
			
			$data['april_ipvpn_uipkitsum'] = $this->Sla_model->april_ipvpn_uipkitsum();
			$data['april_ipvpn_uipkitsum_sukses'] = $data['april_ipvpn_uipkitsum'][0]['persentasi_sla'];
			$data['april_ipvpn_uipkitsum_ok'] = number_format($data['april_ipvpn_uipkitsum_sukses'],2,",",".");
			if(($data['april_ipvpn_uipkitsum_ok'])==0){ $data['april_ipvpn_uipkitsum_ok']=100;}	
			
			$data['mei_ipvpn_uipkitsum'] = $this->Sla_model->mei_ipvpn_uipkitsum();
			$data['mei_ipvpn_uipkitsum_sukses'] = $data['mei_ipvpn_uipkitsum'][0]['persentasi_sla'];
			$data['mei_ipvpn_uipkitsum_ok'] = number_format($data['mei_ipvpn_uipkitsum_sukses'],2,",",".");
			if(($data['mei_ipvpn_uipkitsum_ok'])==0){ $data['mei_ipvpn_uipkitsum_ok']=100;}	
			
			$data['juni_ipvpn_uipkitsum'] = $this->Sla_model->juni_ipvpn_uipkitsum();
			$data['juni_ipvpn_uipkitsum_sukses'] = $data['juni_ipvpn_uipkitsum'][0]['persentasi_sla'];
			$data['juni_ipvpn_uipkitsum_ok'] = number_format($data['juni_ipvpn_uipkitsum_sukses'],2,",",".");
			if(($data['juni_ipvpn_uipkitsum_ok'])==0){ $data['juni_ipvpn_uipkitsum_ok']=100;}	
			
			$data['juli_ipvpn_uipkitsum'] = $this->Sla_model->juli_ipvpn_uipkitsum();
			$data['juli_ipvpn_uipkitsum_sukses'] = $data['juli_ipvpn_uipkitsum'][0]['persentasi_sla'];
			$data['juli_ipvpn_uipkitsum_ok'] = number_format($data['juli_ipvpn_uipkitsum_sukses'],2,",",".");
			if(($data['juli_ipvpn_uipkitsum_ok'])==0){ $data['juli_ipvpn_uipkitsum_ok']=100;}	
			
			$data['agustus_ipvpn_uipkitsum'] = $this->Sla_model->agustus_ipvpn_uipkitsum();
			$data['agustus_ipvpn_uipkitsum_sukses'] = $data['agustus_ipvpn_uipkitsum'][0]['persentasi_sla'];
			$data['agustus_ipvpn_uipkitsum_ok'] = number_format($data['agustus_ipvpn_uipkitsum_sukses'],2,",",".");
			if(($data['agustus_ipvpn_uipkitsum_ok'])==0){ $data['agustus_ipvpn_uipkitsum_ok']=100;}	
			
			$data['september_ipvpn_uipkitsum'] = $this->Sla_model->september_ipvpn_uipkitsum();
			$data['september_ipvpn_uipkitsum_sukses'] = $data['september_ipvpn_uipkitsum'][0]['persentasi_sla'];
			$data['september_ipvpn_uipkitsum_ok'] = number_format($data['september_ipvpn_uipkitsum_sukses'],2,",",".");
			if(($data['september_ipvpn_uipkitsum_ok'])==0){ $data['september_ipvpn_uipkitsum_ok']=100;}	
			
			$data['oktober_ipvpn_uipkitsum'] = $this->Sla_model->oktober_ipvpn_uipkitsum();
			$data['oktober_ipvpn_uipkitsum_sukses'] = $data['oktober_ipvpn_uipkitsum'][0]['persentasi_sla'];
			$data['oktober_ipvpn_uipkitsum_ok'] = number_format($data['oktober_ipvpn_uipkitsum_sukses'],2,",",".");
			if(($data['oktober_ipvpn_uipkitsum_ok'])==0){ $data['oktober_ipvpn_uipkitsum_ok']=100;}	
			
			$data['november_ipvpn_uipkitsum'] = $this->Sla_model->november_ipvpn_uipkitsum();
			$data['november_ipvpn_uipkitsum_sukses'] = $data['november_ipvpn_uipkitsum'][0]['persentasi_sla'];
			$data['november_ipvpn_uipkitsum_ok'] = number_format($data['november_ipvpn_uipkitsum_sukses'],2,",",".");
			if(($data['november_ipvpn_uipkitsum_ok'])==0){ $data['november_ipvpn_uipkitsum_ok']=100;}	
			
			$data['desember_ipvpn_uipkitsum'] = $this->Sla_model->desember_ipvpn_uipkitsum();
			$data['desember_ipvpn_uipkitsum_sukses'] = $data['desember_ipvpn_uipkitsum'][0]['persentasi_sla'];
			$data['desember_ipvpn_uipkitsum_ok'] = number_format($data['desember_ipvpn_uipkitsum_sukses'],2,",",".");
			if(($data['desember_ipvpn_uipkitsum_ok'])==0){ $data['desember_ipvpn_uipkitsum_ok']=100;}	
								
			//vsat_uipkitsum
			$data['januari_vsat_uipkitsum'] = $this->Sla_model->januari_vsat_uipkitsum();
			$data['januari_vsat_uipkitsum_sukses'] = $data['januari_vsat_uipkitsum'][0]['persentasi_sla'];
			$data['januari_vsat_uipkitsum_ok'] = number_format($data['januari_vsat_uipkitsum_sukses'],2,",",".");
			if(($data['januari_vsat_uipkitsum_ok'])==0){ $data['januari_vsat_uipkitsum_ok']=100;}	
			
			$data['februari_vsat_uipkitsum'] = $this->Sla_model->februari_vsat_uipkitsum();
			$data['februari_vsat_uipkitsum_sukses'] = $data['februari_vsat_uipkitsum'][0]['persentasi_sla'];
			$data['februari_vsat_uipkitsum_ok'] = number_format($data['februari_vsat_uipkitsum_sukses'],2,",",".");
			if(($data['februari_vsat_uipkitsum_ok'])==0){ $data['februari_vsat_uipkitsum_ok']=100;}	
			
			$data['maret_vsat_uipkitsum'] = $this->Sla_model->maret_vsat_uipkitsum();
			$data['maret_vsat_uipkitsum_sukses'] = $data['maret_vsat_uipkitsum'][0]['persentasi_sla'];
			$data['maret_vsat_uipkitsum_ok'] = number_format($data['maret_vsat_uipkitsum_sukses'],2,",",".");
			if(($data['maret_vsat_uipkitsum_ok'])==0){ $data['maret_vsat_uipkitsum_ok']=100;}	
			
			$data['april_vsat_uipkitsum'] = $this->Sla_model->april_vsat_uipkitsum();
			$data['april_vsat_uipkitsum_sukses'] = $data['april_vsat_uipkitsum'][0]['persentasi_sla'];
			$data['april_vsat_uipkitsum_ok'] = number_format($data['april_vsat_uipkitsum_sukses'],2,",",".");
			if(($data['april_vsat_uipkitsum_ok'])==0){ $data['april_vsat_uipkitsum_ok']=100;}	
			
			$data['mei_vsat_uipkitsum'] = $this->Sla_model->mei_vsat_uipkitsum();
			$data['mei_vsat_uipkitsum_sukses'] = $data['mei_vsat_uipkitsum'][0]['persentasi_sla'];
			$data['mei_vsat_uipkitsum_ok'] = number_format($data['mei_vsat_uipkitsum_sukses'],2,",",".");
			if(($data['mei_vsat_uipkitsum_ok'])==0){ $data['mei_vsat_uipkitsum_ok']=100;}	
			
			$data['juni_vsat_uipkitsum'] = $this->Sla_model->juni_vsat_uipkitsum();
			$data['juni_vsat_uipkitsum_sukses'] = $data['juni_vsat_uipkitsum'][0]['persentasi_sla'];
			$data['juni_vsat_uipkitsum_ok'] = number_format($data['juni_vsat_uipkitsum_sukses'],2,",",".");
			if(($data['juni_vsat_uipkitsum_ok'])==0){ $data['juni_vsat_uipkitsum_ok']=100;}	
			
			$data['juli_vsat_uipkitsum'] = $this->Sla_model->juli_vsat_uipkitsum();
			$data['juli_vsat_uipkitsum_sukses'] = $data['juli_vsat_uipkitsum'][0]['persentasi_sla'];
			$data['juli_vsat_uipkitsum_ok'] = number_format($data['juli_vsat_uipkitsum_sukses'],2,",",".");
			if(($data['juli_vsat_uipkitsum_ok'])==0){ $data['juli_vsat_uipkitsum_ok']=100;}	
			
			$data['agustus_vsat_uipkitsum'] = $this->Sla_model->agustus_vsat_uipkitsum();
			$data['agustus_vsat_uipkitsum_sukses'] = $data['agustus_vsat_uipkitsum'][0]['persentasi_sla'];
			$data['agustus_vsat_uipkitsum_ok'] = number_format($data['agustus_vsat_uipkitsum_sukses'],2,",",".");
			if(($data['agustus_vsat_uipkitsum_ok'])==0){ $data['agustus_vsat_uipkitsum_ok']=100;}	
			
			$data['september_vsat_uipkitsum'] = $this->Sla_model->september_vsat_uipkitsum();
			$data['september_vsat_uipkitsum_sukses'] = $data['september_vsat_uipkitsum'][0]['persentasi_sla'];
			$data['september_vsat_uipkitsum_ok'] = number_format($data['september_vsat_uipkitsum_sukses'],2,",",".");
			if(($data['september_vsat_uipkitsum_ok'])==0){ $data['september_vsat_uipkitsum_ok']=100;}	
			
			$data['oktober_vsat_uipkitsum'] = $this->Sla_model->oktober_vsat_uipkitsum();
			$data['oktober_vsat_uipkitsum_sukses'] = $data['oktober_vsat_uipkitsum'][0]['persentasi_sla'];
			$data['oktober_vsat_uipkitsum_ok'] = number_format($data['oktober_vsat_uipkitsum_sukses'],2,",",".");
			if(($data['oktober_vsat_uipkitsum_ok'])==0){ $data['oktober_vsat_uipkitsum_ok']=100;}	
			
			$data['november_vsat_uipkitsum'] = $this->Sla_model->november_vsat_uipkitsum();
			$data['november_vsat_uipkitsum_sukses'] = $data['november_vsat_uipkitsum'][0]['persentasi_sla'];
			$data['november_vsat_uipkitsum_ok'] = number_format($data['november_vsat_uipkitsum_sukses'],2,",",".");
			if(($data['november_vsat_uipkitsum_ok'])==0){ $data['november_vsat_uipkitsum_ok']=100;}	
			
			$data['desember_vsat_uipkitsum'] = $this->Sla_model->desember_vsat_uipkitsum();
			$data['desember_vsat_uipkitsum_sukses'] = $data['desember_vsat_uipkitsum'][0]['persentasi_sla'];
			$data['desember_vsat_uipkitsum_ok'] = number_format($data['desember_vsat_uipkitsum_sukses'],2,",",".");
			if(($data['desember_vsat_uipkitsum_ok'])==0){ $data['desember_vsat_uipkitsum_ok']=100;}
			
			
			
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
					'status' => "login",
					'role' => $role
				);

				$this->session->set_userdata($data_session);
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/index>";
			} elseif (($role == 2)) {
				//echo "<script>alert('Anda Berhasil Login dengan Hak Akses EOS ICON+')</script>";
				$data_session = array(
					'nama' => $username,
					'status' => "login",
					'role' => $role
				);

				$this->session->set_userdata($data_session);
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "eosicon/index>";
			} elseif (($role == 3)) {
				//echo "<script>alert('Anda Berhasil Login dengan Hak Akses IT Support')</script>";
				$data_session = array(
					'nama' => $username,
					'status' => "login",
					'role' => $role
				);

				$this->session->set_userdata($data_session);
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "support/index_dashboard>";
			} elseif (($role == 4)) {
				//echo "<script>alert('Anda Berhasil Login dengan Hak Akses Pegawai')</script>";
				$data_session = array(
					'nama' => $username,
					'status' => "login",
					'role' => $role
				);

				$this->session->set_userdata($data_session);
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
			$no_tiket = $this->input->post('filter_no_tiket');
			$asman = $this->input->post('filter_asman');
			$layanan = $this->input->post('filter_layanan');
			$year = $this->input->post('filter_year');
			$month = $this->input->post('filter_month');
			
			if (empty($no_tiket) && empty($asman) && empty($layanan) && empty($year) && empty($month)) {
				echo "<script>alert('Harap masukkan nomor tiket, asman, layanan, tahun, atau bulan untuk melakukan filter data log gangguan')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/lgangguan_view>";
			} else {
				$data['lgangguan_view'] = $this->admin_model->lgangguan_filter($no_tiket, $asman, $layanan, $year, $month);
				$data['filter_no_tiket'] = $no_tiket;
				$data['filter_asman'] = $asman;
				$data['filter_layanan'] = $layanan;
				$data['filter_year'] = $year;
				$data['filter_month'] = $month;
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
			$this->form_validation->set_rules('id_kantor_induk', 'ID Kantor Induk', 'required|numeric', [
				'required' => 'ID Kantor Induk harus di isi!'
			]);
			$this->form_validation->set_rules('asman', 'Asman', 'required|numeric', [
				'required' => 'Asman harus di isi!'
			]);
			$this->form_validation->set_rules('layanan', 'Layanan', 'required', [
				'required' => 'Layanan harus di isi!'
			]);
			$this->form_validation->set_rules('scada', 'Scada', 'required|numeric', [
				'required' => 'Scada harus di isi!'
			]);
			$this->form_validation->set_rules('status_log', 'Status Tiket', 'required', [
				'required' => 'Status tiket harus di isi!'
			]);
			$this->form_validation->set_rules('stop_clock', 'Stop Clock (menit)', 'required|numeric', [
				'required' => 'Stop clock harus diisi dengan angka!'
			]);
			$this->form_validation->set_rules('penyebab', 'penyebab', 'required', [
				'required' => 'Penyebab harus di isi!'
			]);

			$this->form_validation->set_rules('action', 'action', 'required', [
				'required' => 'Action harus di isi!'
			]);

			$this->form_validation->set_rules('periode_tahun', 'Periode Tahun', 'required', [
				'required' => 'Periode Tahun harus di isi!'
			]);

			$this->form_validation->set_rules('periode_bulan', 'Periode Bulan', 'required', [
				'required' => 'Periode Bulan harus di isi!'
			]);

			if ($this->form_validation->run() == false) {
				$this->load->view('header');
				$this->load->view('sidebar');
				$this->load->view('admin/lgangguan_add');
				$this->load->view('footer');
			} else {
				$tiket_open = $this->input->post('tiket_open');
				$tiket_close = $this->input->post('tiket_close');
				$stop_clock = $this->input->post('stop_clock');
				
				$before = date_create($tiket_open);
				$after = date_create($tiket_close);
				$diff = date_diff($before, $after, FALSE);
				$printdiff = $diff->format("%Y-%m-%d %H:%i:%s");
				$datediff = date_create($printdiff);
				$diffminus = $datediff->modify("-{$stop_clock} minutes");
				$time = $diffminus->format("H:i:s");
				$timeArr = explode(':', $time);
    			$durasi = ($timeArr[0]*60) + ($timeArr[1]) + ($timeArr[2]/60);

				$data = array(
					'no_tiket' => $this->input->post('no_tiket'),
					'nama_service' => $this->input->post('nama_service'),
					'sid' => $this->input->post('sid'),
					'id_kantor_induk' => $this->input->post('id_kantor_induk'),
					'asman' => $this->input->post('asman'),
					'layanan' => $this->input->post('layanan'),
					'scada' => $this->input->post('scada'),
					'status_log' => $this->input->post('status_log'),
					'tiket_open' => $tiket_open,
					'tiket_close' => $tiket_close,
					'stop_clock' => $stop_clock,
					'durasi' => $durasi,
					'penyebab' => $this->input->post('penyebab'),
					'action' => $this->input->post('action'),
					'periode_tahun' => $this->input->post('periode_tahun'),
					'periode_bulan' => $this->input->post('periode_bulan')
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
			$this->form_validation->set_rules('id_kantor_induk', 'ID Kantor Induk', 'required|numeric', [
				'required' => 'ID Kantor Induk harus di isi!'
			]);
			$this->form_validation->set_rules('asman', 'Asman', 'required|numeric', [
				'required' => 'Asman harus di isi!'
			]);
			$this->form_validation->set_rules('layanan', 'Layanan', 'required', [
				'required' => 'Layanan harus di isi!'
			]);
			$this->form_validation->set_rules('scada', 'Scada', 'required|numeric', [
				'required' => 'Scada harus di isi!'
			]);
			$this->form_validation->set_rules('status_log', 'Status Tiket', 'required', [
				'required' => 'Status tiket harus di isi!'
			]);
			$this->form_validation->set_rules('stop_clock', 'Stop Clock (menit)', 'required|numeric', [
				'required' => 'Stop clock harus di isi!'
			]);
			$this->form_validation->set_rules('penyebab', 'penyebab', 'required', [
				'required' => 'Penyebab harus di isi!'
			]);

			$this->form_validation->set_rules('action', 'action', 'required', [
				'required' => 'Action harus di isi!'
			]);

			$this->form_validation->set_rules('periode_tahun', 'Periode Tahun', 'required', [
				'required' => 'Periode Tahun harus di isi!'
			]);

			$this->form_validation->set_rules('periode_bulan', 'Periode Bulan', 'required', [
				'required' => 'Periode Bulan harus di isi!'
			]);

			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible text-center " role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
					</button>
					Pastikan seluruh data terisi
					</div>');
				redirect(base_url() . "admin/lgangguan_edit?log_id=" . $log_id);
			} else {
				$tiket_open = $this->input->post('tiket_open');
				$tiket_close = $this->input->post('tiket_close');
				$stop_clock = $this->input->post('stop_clock');

				$before = date_create($tiket_open);
				$after = date_create($tiket_close);
				$diff = date_diff($before, $after, FALSE);
				$printdiff = $diff->format("%Y-%m-%d %H:%i:%s");
				$datediff = date_create($printdiff);
				$diffminus = $datediff->modify("-{$stop_clock} minutes");
				$time = $diffminus->format("H:i:s");
				$timeArr = explode(':', $time);
    			$durasi = ($timeArr[0]*60) + ($timeArr[1]) + ($timeArr[2]/60);

				$data = array(
					'no_tiket' => $this->input->post('no_tiket'),
					'nama_service' => $this->input->post('nama_service'),
					'sid' => $this->input->post('sid'),
					'id_kantor_induk' => $this->input->post('id_kantor_induk'),
					'asman' => $this->input->post('asman'),
					'layanan' => $this->input->post('layanan'),
					'scada' => $this->input->post('scada'),
					'status_log' => $this->input->post('status_log'),
					'tiket_open' => $tiket_open,
					'tiket_close' => $tiket_close,
					'stop_clock' => $stop_clock,
					'durasi' => $durasi,
					'penyebab' => $this->input->post('penyebab'),
					'action' => $this->input->post('action'),
					'periode_tahun' => $this->input->post('periode_tahun'),
					'periode_bulan' => $this->input->post('periode_bulan')
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

	//DATA NETWORK
	public function data_network_view()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['list_unit'] = $this->admin_model->list_unit();
			$data['data_network_view'] = $this->admin_model->tampil_data_network();
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('admin/data_network_view', $data);
			$this->load->view('footer');
		}
	}

	public function data_network_filter()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$id_unit = $this->input->post('id_unit');
			if (empty($id_unit)) {
				echo "<script>alert('Harap masukkan nama unit untuk melakukan filter data network')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/data_network_view>";
			} else {
				$data['data_network_view'] = $this->admin_model->data_network_filter($id_unit);
				$data['filter_unit'] = $id_unit;
				$data['list_unit'] = $this->admin_model->list_unit();
				$this->load->view('header');
				$this->load->view('sidebar');
				$this->load->view('admin/data_network_view', $data);
				$this->load->view('footer');
			}
		}
	}

	public function data_network_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data['list_unit_sumut1'] = $this->admin_model->list_unit_sumut1();
			$data['list_unit_sumut2'] = $this->admin_model->list_unit_sumut2();
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $data);
			$this->load->view('admin/data_network_add', $data);
			$this->load->view('footer');
		}
	}

	public function action_data_network_add()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$nomorasman = $this->input->post('nomorasman');
			$this->form_validation->set_rules('tanggal_aktivasi', 'Tanggal Aktivasi', 'required', [
				'required' => 'Tanggal Aktivasi harus di isi!'
			]);
			$this->form_validation->set_rules('service_id', 'Service ID', 'required', [
				'required' => 'Service ID harus di isi!'
			]);
			$this->form_validation->set_rules('service', 'Service', 'required', [
				'required' => 'Service harus di isi!'
			]);
			$this->form_validation->set_rules('asman', 'Asman', 'required', [
				'required' => 'Asman harus di isi!'
			]);
			if($nomorasman == 1){
				$this->form_validation->set_rules('id_unit1', 'Nama Unit', 'required|numeric', [
					'required' => 'Nama unit harus di isi!'
				]);
			} else if ($nomorasman == 2){
				$this->form_validation->set_rules('id_unit2', 'Nama Unit', 'required|numeric', [
					'required' => 'Nama unit harus di isi!'
				]);
			}
			
			$this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
				'required' => 'Keterangan harus di isi!'
			]);
			$this->form_validation->set_rules('no_aktivasi', 'No BA Aktivasi/ADM', 'required', [
				'required' => 'No BA Aktivasi/ADM harus diisi!'
			]);
			$this->form_validation->set_rules('scada', 'scada', 'required', [
				'required' => 'scada harus di isi!'
			]);

			$this->form_validation->set_rules('harga', 'Harga', 'required|numeric', [
				'required' => 'harga harus di isi!'
			]);

			$this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required', [
				'required' => 'Kapasitas harus di isi!'
			]);

			if ($this->form_validation->run() == false) {
				$this->load->view('header');
				$this->load->view('sidebar');
				$this->load->view('admin/data_network_add');
				$this->load->view('footer');
			} else {
				if($nomorasman == 1){
					$id_unit = $this->input->post('id_unit1');
				} else if($nomorasman == 2){
					$id_unit = $this->input->post('id_unit2');
				}
				$data = array(
					'tanggal_aktivasi' => $this->input->post('tanggal_aktivasi'),
					'service_id' => $this->input->post('service_id'),
					'service' => $this->input->post('service'),
					'asman' => $this->input->post('asman'),
					'id_unit' => $id_unit,
					'keterangan' => $this->input->post('keterangan'),
					'no_aktivasi' => $this->input->post('no_aktivasi'),
					'scada' => $this->input->post('scada'),
					'harga' => $this->input->post('harga'),
					'kapasitas' => $this->input->post('kapasitas')
				);

				$insert = $this->admin_model->add_data_network_data($data);
				if ($insert) {
					echo "<script>alert('Berhasil Menambah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/data_network_view>";
				} else {
					echo "<script>alert('Gagal Menambah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/data_network_view>";
				}
			}
		}
	}

	public function data_network_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data_id = $this->input->get('data_id');
			$data['list_unit_sumut1'] = $this->admin_model->list_unit_sumut1();
			$data['list_unit_sumut2'] = $this->admin_model->list_unit_sumut2();
			$data['data_networknya'] = $this->admin_model->get_data_network($data_id, "data_id");
			$this->data['title'] = 'Update Data Network :: ';
			$this->load->view('header', $this->data);
			$this->load->view('sidebar', $data);
			$this->load->view('admin/data_network_edit', $data);
			$this->load->view('footer');
		}
	}

	public function action_data_network_edit()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data_id = $this->input->post('data_id');
			$nomorasman = $this->input->post('nomorasman');
			$this->form_validation->set_rules('tanggal_aktivasi', 'Tanggal Aktivasi', 'required', [
				'required' => 'Tanggal Aktivasi harus di isi!'
			]);
			$this->form_validation->set_rules('service_id', 'Service ID', 'required', [
				'required' => 'Service ID harus di isi!'
			]);
			$this->form_validation->set_rules('service', 'Service', 'required', [
				'required' => 'Service harus di isi!'
			]);
			$this->form_validation->set_rules('asman', 'Asman', 'required', [
				'required' => 'Asman harus di isi!'
			]);
			if($nomorasman == 1){
				$this->form_validation->set_rules('id_unit1', 'Nama Unit', 'required|numeric', [
					'required' => 'Nama unit harus di isi!'
				]);
			} else if ($nomorasman == 2){
				$this->form_validation->set_rules('id_unit2', 'Nama Unit', 'required|numeric', [
					'required' => 'Nama unit harus di isi!'
				]);
			}
			
			$this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
				'required' => 'Keterangan harus di isi!'
			]);
			$this->form_validation->set_rules('no_aktivasi', 'No BA Aktivasi/ADM', 'required', [
				'required' => 'No BA Aktivasi/ADM harus diisi!'
			]);
			$this->form_validation->set_rules('scada', 'scada', 'required', [
				'required' => 'scada harus di isi!'
			]);

			$this->form_validation->set_rules('harga', 'Harga', 'required|numeric', [
				'required' => 'Harga harus di isi!'
			]);

			$this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required', [
				'required' => 'Kapasitas harus di isi!'
			]);

			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible text-center " role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
					</button>
					Pastikan seluruh data terisi
					</div>');
				redirect(base_url() . "admin/data_network_edit?data_id=" . $data_id);
			} else {
				if($nomorasman == 1){
					$id_unit = $this->input->post('id_unit1');
				} else if($nomorasman == 2){
					$id_unit = $this->input->post('id_unit2');
				} else {
					$id_unit = $this->input->post('id_unit_lama');
				}
				$data = array(
					'tanggal_aktivasi' => $this->input->post('tanggal_aktivasi'),
					'service_id' => $this->input->post('service_id'),
					'service' => $this->input->post('service'),
					'asman' => $this->input->post('asman'),
					'id_unit' => $id_unit,
					'keterangan' => $this->input->post('keterangan'),
					'no_aktivasi' => $this->input->post('no_aktivasi'),
					'scada' => $this->input->post('scada'),
					'harga' => $this->input->post('harga'),
					'kapasitas' => $this->input->post('kapasitas')
				);

				$update = $this->admin_model->update_data_network($data, $data_id);
				if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/data_network_view?data_id=" . $data_id . ">";
				}
			}
		}
	}

	public function data_network_delete()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$data_id = $this->input->get('data_id');
			$delete = $this->admin_model->data_network_delete($data_id);
			if ($delete) {
				echo "<script>alert('Berhasil Menghapus Data')</script>";
				echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/data_network_view>";
			}
		}
	}
}
