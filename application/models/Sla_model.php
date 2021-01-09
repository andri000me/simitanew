<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sla_model extends CI_Model {


//INTERNET_UIWSU
	function januari_internet_uiwsu()
    {
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 1 
								AND STATUS='active' AND bulan='januari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='januari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =1 AND STATUS='active' AND bulan='januari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
	function februari_internet_uiwsu()
    {
		$get = $this->db->query("SELECT ((SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 1 
								AND STATUS='active' AND bulan='februari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='februari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Internet')) / (SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =1 AND STATUS='active' AND bulan='februari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function maret_internet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 1 
								AND STATUS='active' AND bulan='maret' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='maret' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =1 AND STATUS='active' AND bulan='maret' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function april_internet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 1 
								AND STATUS='active' AND bulan='april' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='april' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =1 AND STATUS='active' AND bulan='april' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}

		function mei_internet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 1 
								AND STATUS='active' AND bulan='mei' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='mei' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =1 AND STATUS='active' AND bulan='mei' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function juni_internet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 1 
								AND STATUS='active' AND bulan='juni' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juni' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =1 AND STATUS='active' AND bulan='juni' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		
		function juli_internet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 1 
								AND STATUS='active' AND bulan='juli' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juli' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =1 AND STATUS='active' AND bulan='juli' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function agustus_internet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 1 
								AND STATUS='active' AND bulan='agustus' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='agustus' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =1 AND STATUS='active' AND bulan='agustus' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function september_internet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 1 
								AND STATUS='active' AND bulan='september' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='september' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =1 AND STATUS='active' AND bulan='september' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function oktober_internet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 1 
								AND STATUS='active' AND bulan='oktober' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='oktober' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =1 AND STATUS='active' AND bulan='oktober' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function november_internet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 1 
								AND STATUS='active' AND bulan='november' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='november' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =1 AND STATUS='active' AND bulan='november' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function desember_internet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 1 
								AND STATUS='active' AND bulan='desember' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='desember' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =1 AND STATUS='active' AND bulan='desember' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
//IPVPN_UIWSU
	function januari_ipvpn_uiwsu()
    {
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 1 
								AND STATUS='active' AND bulan='januari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='januari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =1 AND STATUS='active' AND bulan='januari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
	function februari_ipvpn_uiwsu()
    {
		$get = $this->db->query("SELECT ((SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 1 
								AND STATUS='active' AND bulan='februari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='februari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'IP VPN')) / (SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =1 AND STATUS='active' AND bulan='februari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function maret_ipvpn_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 1 
								AND STATUS='active' AND bulan='maret' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='maret' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =1 AND STATUS='active' AND bulan='maret' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function april_ipvpn_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 1 
								AND STATUS='active' AND bulan='april' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='april' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =1 AND STATUS='active' AND bulan='april' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}

		function mei_ipvpn_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 1 
								AND STATUS='active' AND bulan='mei' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='mei' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =1 AND STATUS='active' AND bulan='mei' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function juni_ipvpn_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 1 
								AND STATUS='active' AND bulan='juni' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juni' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =1 AND STATUS='active' AND bulan='juni' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		
		function juli_ipvpn_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 1 
								AND STATUS='active' AND bulan='juli' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juli' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =1 AND STATUS='active' AND bulan='juli' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function agustus_ipvpn_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 1 
								AND STATUS='active' AND bulan='agustus' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='agustus' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =1 AND STATUS='active' AND bulan='agustus' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function september_ipvpn_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 1 
								AND STATUS='active' AND bulan='september' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='september' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =1 AND STATUS='active' AND bulan='september' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function oktober_ipvpn_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 1 
								AND STATUS='active' AND bulan='oktober' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='oktober' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =1 AND STATUS='active' AND bulan='oktober' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function november_ipvpn_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 1 
								AND STATUS='active' AND bulan='november' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='november' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =1 AND STATUS='active' AND bulan='november' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function desember_ipvpn_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 1 
								AND STATUS='active' AND bulan='desember' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='desember' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =1 AND STATUS='active' AND bulan='desember' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
//METRONET_UIWSU
	function januari_metronet_uiwsu()
    {
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' AND id_unit = 1 
								AND STATUS='active' AND bulan='januari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='januari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Metronet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' 
								AND id_unit =1 AND STATUS='active' AND bulan='januari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
	function februari_metronet_uiwsu()
    {
		$get = $this->db->query("SELECT ((SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' AND id_unit = 1 
								AND STATUS='active' AND bulan='februari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='februari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Metronet')) / (SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' 
								AND id_unit =1 AND STATUS='active' AND bulan='februari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function maret_metronet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' AND id_unit = 1 
								AND STATUS='active' AND bulan='maret' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='maret' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Metronet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' 
								AND id_unit =1 AND STATUS='active' AND bulan='maret' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function april_metronet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' AND id_unit = 1 
								AND STATUS='active' AND bulan='april' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='april' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Metronet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' 
								AND id_unit =1 AND STATUS='active' AND bulan='april' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}

		function mei_metronet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' AND id_unit = 1 
								AND STATUS='active' AND bulan='mei' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='mei' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Metronet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' 
								AND id_unit =1 AND STATUS='active' AND bulan='mei' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function juni_metronet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' AND id_unit = 1 
								AND STATUS='active' AND bulan='juni' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juni' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Metronet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' 
								AND id_unit =1 AND STATUS='active' AND bulan='juni' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		
		function juli_metronet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' AND id_unit = 1 
								AND STATUS='active' AND bulan='juli' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juli' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Metronet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' 
								AND id_unit =1 AND STATUS='active' AND bulan='juli' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function agustus_metronet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' AND id_unit = 1 
								AND STATUS='active' AND bulan='agustus' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='agustus' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Metronet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' 
								AND id_unit =1 AND STATUS='active' AND bulan='agustus' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function september_metronet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' AND id_unit = 1 
								AND STATUS='active' AND bulan='september' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='september' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Metronet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' 
								AND id_unit =1 AND STATUS='active' AND bulan='september' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function oktober_metronet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' AND id_unit = 1 
								AND STATUS='active' AND bulan='oktober' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='oktober' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Metronet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' 
								AND id_unit =1 AND STATUS='active' AND bulan='oktober' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function november_metronet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' AND id_unit = 1 
								AND STATUS='active' AND bulan='november' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='november' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Metronet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' 
								AND id_unit =1 AND STATUS='active' AND bulan='november' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function desember_metronet_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' AND id_unit = 1 
								AND STATUS='active' AND bulan='desember' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='desember' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'Metronet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Metronet' 
								AND id_unit =1 AND STATUS='active' AND bulan='desember' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
//VSAT_UIWSU
	function januari_vsat_uiwsu()
    {
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' AND id_unit = 1 
								AND STATUS='active' AND bulan='januari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='januari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'VSAT')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' 
								AND id_unit =1 AND STATUS='active' AND bulan='januari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
	function februari_vsat_uiwsu()
    {
		$get = $this->db->query("SELECT ((SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' AND id_unit = 1 
								AND STATUS='active' AND bulan='februari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='februari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'VSAT')) / (SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' 
								AND id_unit =1 AND STATUS='active' AND bulan='februari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function maret_vsat_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' AND id_unit = 1 
								AND STATUS='active' AND bulan='maret' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='maret' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'VSAT')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' 
								AND id_unit =1 AND STATUS='active' AND bulan='maret' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function april_vsat_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' AND id_unit = 1 
								AND STATUS='active' AND bulan='april' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='april' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'VSAT')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' 
								AND id_unit =1 AND STATUS='active' AND bulan='april' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}

		function mei_vsat_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' AND id_unit = 1 
								AND STATUS='active' AND bulan='mei' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='mei' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'VSAT')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' 
								AND id_unit =1 AND STATUS='active' AND bulan='mei' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function juni_vsat_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' AND id_unit = 1 
								AND STATUS='active' AND bulan='juni' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juni' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'VSAT')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' 
								AND id_unit =1 AND STATUS='active' AND bulan='juni' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		
		function juli_vsat_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' AND id_unit = 1 
								AND STATUS='active' AND bulan='juli' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juli' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'VSAT')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' 
								AND id_unit =1 AND STATUS='active' AND bulan='juli' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function agustus_vsat_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' AND id_unit = 1 
								AND STATUS='active' AND bulan='agustus' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='agustus' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'VSAT')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' 
								AND id_unit =1 AND STATUS='active' AND bulan='agustus' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function september_vsat_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' AND id_unit = 1 
								AND STATUS='active' AND bulan='september' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='september' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'VSAT')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' 
								AND id_unit =1 AND STATUS='active' AND bulan='september' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function oktober_vsat_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' AND id_unit = 1 
								AND STATUS='active' AND bulan='oktober' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='oktober' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'VSAT')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' 
								AND id_unit =1 AND STATUS='active' AND bulan='oktober' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function november_vsat_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' AND id_unit = 1 
								AND STATUS='active' AND bulan='november' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='november' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'VSAT')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' 
								AND id_unit =1 AND STATUS='active' AND bulan='november' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function desember_vsat_uiwsu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' AND id_unit = 1 
								AND STATUS='active' AND bulan='desember' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='desember' 
								AND periode_tahun = '2020' AND id_kantor_induk = 1 
								AND layanan = 'VSAT')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='VSAT' 
								AND id_unit =1 AND STATUS='active' AND bulan='desember' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		
//INTERNET_UIKSBU
	function januari_internet_uiksbu()
    {
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 3 
								AND STATUS='active' AND bulan='januari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='januari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =3 AND STATUS='active' AND bulan='januari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
	function februari_internet_uiksbu()
    {
		$get = $this->db->query("SELECT ((SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 3 
								AND STATUS='active' AND bulan='februari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='februari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'Internet')) / (SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit = 3 AND STATUS='active' AND bulan='februari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function maret_internet_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 3 
								AND STATUS='active' AND bulan='maret' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='maret' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =3 AND STATUS='active' AND bulan='maret' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function april_internet_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 3 
								AND STATUS='active' AND bulan='april' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='april' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =3 AND STATUS='active' AND bulan='april' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}

		function mei_internet_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 3 
								AND STATUS='active' AND bulan='mei' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='mei' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =3 AND STATUS='active' AND bulan='mei' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function juni_internet_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 3 
								AND STATUS='active' AND bulan='juni' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juni' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =3 AND STATUS='active' AND bulan='juni' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		
		function juli_internet_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 3 
								AND STATUS='active' AND bulan='juli' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juli' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =3 AND STATUS='active' AND bulan='juli' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function agustus_internet_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 3 
								AND STATUS='active' AND bulan='agustus' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='agustus' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =3 AND STATUS='active' AND bulan='agustus' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function september_internet_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 3 
								AND STATUS='active' AND bulan='september' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='september' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =3 AND STATUS='active' AND bulan='september' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function oktober_internet_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 3 
								AND STATUS='active' AND bulan='oktober' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='oktober' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =3 AND STATUS='active' AND bulan='oktober' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function november_internet_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 3 
								AND STATUS='active' AND bulan='november' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='november' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =3 AND STATUS='active' AND bulan='november' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function desember_internet_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 3 
								AND STATUS='active' AND bulan='desember' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='desember' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =3 AND STATUS='active' AND bulan='desember' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
//IPVPN_uiksbu
	function januari_ipvpn_uiksbu()
    {
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 3 
								AND STATUS='active' AND bulan='januari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='januari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =3 AND STATUS='active' AND bulan='januari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
	function februari_ipvpn_uiksbu()
    {
		$get = $this->db->query("SELECT ((SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 3 
								AND STATUS='active' AND bulan='februari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='februari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'IP VPN')) / (SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =3 AND STATUS='active' AND bulan='februari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function maret_ipvpn_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 3 
								AND STATUS='active' AND bulan='maret' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='maret' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =3 AND STATUS='active' AND bulan='maret' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function april_ipvpn_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 3 
								AND STATUS='active' AND bulan='april' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='april' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =3 AND STATUS='active' AND bulan='april' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}

		function mei_ipvpn_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 3 
								AND STATUS='active' AND bulan='mei' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='mei' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =3 AND STATUS='active' AND bulan='mei' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function juni_ipvpn_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 3 
								AND STATUS='active' AND bulan='juni' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juni' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =3 AND STATUS='active' AND bulan='juni' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		
		function juli_ipvpn_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 3 
								AND STATUS='active' AND bulan='juli' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juli' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =3 AND STATUS='active' AND bulan='juli' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function agustus_ipvpn_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 3 
								AND STATUS='active' AND bulan='agustus' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='agustus' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =3 AND STATUS='active' AND bulan='agustus' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function september_ipvpn_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 3 
								AND STATUS='active' AND bulan='september' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='september' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =3 AND STATUS='active' AND bulan='september' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function oktober_ipvpn_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 3 
								AND STATUS='active' AND bulan='oktober' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='oktober' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =3 AND STATUS='active' AND bulan='oktober' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function november_ipvpn_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 3 
								AND STATUS='active' AND bulan='november' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='november' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =3 AND STATUS='active' AND bulan='november' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function desember_ipvpn_uiksbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 3 
								AND STATUS='active' AND bulan='desember' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='desember' 
								AND periode_tahun = '2020' AND id_kantor_induk = 3 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =3 AND STATUS='active' AND bulan='desember' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		
//INTERNET_uipsbu
	function januari_internet_uipsbu()
    {
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 2 
								AND STATUS='active' AND bulan='januari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='januari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =2 AND STATUS='active' AND bulan='januari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
	function februari_internet_uipsbu()
    {
		$get = $this->db->query("SELECT ((SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 2 
								AND STATUS='active' AND bulan='februari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='februari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'Internet')) / (SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit = 2 AND STATUS='active' AND bulan='februari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function maret_internet_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 2 
								AND STATUS='active' AND bulan='maret' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='maret' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =2 AND STATUS='active' AND bulan='maret' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function april_internet_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 2 
								AND STATUS='active' AND bulan='april' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='april' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =2 AND STATUS='active' AND bulan='april' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}

		function mei_internet_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 2 
								AND STATUS='active' AND bulan='mei' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='mei' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =2 AND STATUS='active' AND bulan='mei' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function juni_internet_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 2 
								AND STATUS='active' AND bulan='juni' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juni' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =2 AND STATUS='active' AND bulan='juni' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		
		function juli_internet_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 2 
								AND STATUS='active' AND bulan='juli' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juli' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =2 AND STATUS='active' AND bulan='juli' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function agustus_internet_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 2 
								AND STATUS='active' AND bulan='agustus' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='agustus' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =2 AND STATUS='active' AND bulan='agustus' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function september_internet_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 2 
								AND STATUS='active' AND bulan='september' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='september' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =2 AND STATUS='active' AND bulan='september' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function oktober_internet_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 2 
								AND STATUS='active' AND bulan='oktober' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='oktober' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =2 AND STATUS='active' AND bulan='oktober' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function november_internet_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 2 
								AND STATUS='active' AND bulan='november' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='november' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =2 AND STATUS='active' AND bulan='november' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function desember_internet_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 2 
								AND STATUS='active' AND bulan='desember' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='desember' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =2 AND STATUS='active' AND bulan='desember' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
//IPVPN_uipsbu
	function januari_ipvpn_uipsbu()
    {
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 2 
								AND STATUS='active' AND bulan='januari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='januari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =2 AND STATUS='active' AND bulan='januari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
	function februari_ipvpn_uipsbu()
    {
		$get = $this->db->query("SELECT ((SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 2 
								AND STATUS='active' AND bulan='februari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='februari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'IP VPN')) / (SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =2 AND STATUS='active' AND bulan='februari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function maret_ipvpn_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 2 
								AND STATUS='active' AND bulan='maret' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='maret' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =2 AND STATUS='active' AND bulan='maret' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function april_ipvpn_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 2 
								AND STATUS='active' AND bulan='april' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='april' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =2 AND STATUS='active' AND bulan='april' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}

		function mei_ipvpn_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 2 
								AND STATUS='active' AND bulan='mei' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='mei' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =2 AND STATUS='active' AND bulan='mei' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function juni_ipvpn_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 2 
								AND STATUS='active' AND bulan='juni' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juni' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =2 AND STATUS='active' AND bulan='juni' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		
		function juli_ipvpn_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 2 
								AND STATUS='active' AND bulan='juli' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juli' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =2 AND STATUS='active' AND bulan='juli' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function agustus_ipvpn_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 2 
								AND STATUS='active' AND bulan='agustus' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='agustus' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =2 AND STATUS='active' AND bulan='agustus' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function september_ipvpn_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 2 
								AND STATUS='active' AND bulan='september' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='september' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =2 AND STATUS='active' AND bulan='september' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function oktober_ipvpn_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 2 
								AND STATUS='active' AND bulan='oktober' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='oktober' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =2 AND STATUS='active' AND bulan='oktober' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function november_ipvpn_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 2 
								AND STATUS='active' AND bulan='november' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='november' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =2 AND STATUS='active' AND bulan='november' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function desember_ipvpn_uipsbu()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 2 
								AND STATUS='active' AND bulan='desember' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='desember' 
								AND periode_tahun = '2020' AND id_kantor_induk = 2 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =2 AND STATUS='active' AND bulan='desember' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
//INTERNET_uipkitsum
	function januari_internet_uipkitsum()
    {
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 4 
								AND STATUS='active' AND bulan='januari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='januari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =4 AND STATUS='active' AND bulan='januari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
	function februari_internet_uipkitsum()
    {
		$get = $this->db->query("SELECT ((SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 4 
								AND STATUS='active' AND bulan='februari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='februari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'Internet')) / (SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit = 4 AND STATUS='active' AND bulan='februari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function maret_internet_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 4 
								AND STATUS='active' AND bulan='maret' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='maret' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =4 AND STATUS='active' AND bulan='maret' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function april_internet_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 4 
								AND STATUS='active' AND bulan='april' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='april' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =4 AND STATUS='active' AND bulan='april' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}

		function mei_internet_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 4 
								AND STATUS='active' AND bulan='mei' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='mei' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =4 AND STATUS='active' AND bulan='mei' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function juni_internet_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 4 
								AND STATUS='active' AND bulan='juni' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juni' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =4 AND STATUS='active' AND bulan='juni' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		
		function juli_internet_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 4 
								AND STATUS='active' AND bulan='juli' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juli' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =4 AND STATUS='active' AND bulan='juli' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function agustus_internet_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 4 
								AND STATUS='active' AND bulan='agustus' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='agustus' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =4 AND STATUS='active' AND bulan='agustus' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function september_internet_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 4 
								AND STATUS='active' AND bulan='september' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='september' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =4 AND STATUS='active' AND bulan='september' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function oktober_internet_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 4 
								AND STATUS='active' AND bulan='oktober' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='oktober' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'Internet')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =4 AND STATUS='active' AND bulan='oktober' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function november_internet_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 4 
								AND STATUS='active' AND bulan='november' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='november' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =4 AND STATUS='active' AND bulan='november' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function desember_internet_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' AND id_unit = 4 
								AND STATUS='active' AND bulan='desember' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='desember' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'Internet')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='Internet' 
								AND id_unit =4 AND STATUS='active' AND bulan='desember' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
//IPVPN_uipkitsum
	function januari_ipvpn_uipkitsum()
    {
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='januari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='januari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='januari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
	function februari_ipvpn_uipkitsum()
    {
		$get = $this->db->query("SELECT ((SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='februari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='februari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='februari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function maret_ipvpn_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='maret' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='maret' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='maret' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function april_ipvpn_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='april' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='april' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='april' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}

		function mei_ipvpn_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='mei' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='mei' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='mei' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function juni_ipvpn_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='juni' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juni' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='juni' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		
		function juli_ipvpn_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='juli' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juli' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='juli' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function agustus_ipvpn_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='agustus' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='agustus' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='agustus' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function september_ipvpn_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='september' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='september' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='september' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function oktober_ipvpn_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='oktober' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='oktober' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='oktober' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function november_ipvpn_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='november' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='november' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='november' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function desember_ipvpn_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='desember' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='desember' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='desember' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
			
//vsat_uipkitsum
	function januari_vsat_uipkitsum()
    {
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='januari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='januari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='januari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
	function februari_vsat_uipkitsum()
    {
		$get = $this->db->query("SELECT ((SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='februari' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='februari' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 41760 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='februari' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function maret_vsat_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='maret' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='maret' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='maret' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}
		
		function april_vsat_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='april' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='april' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='april' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
			
		}

		function mei_vsat_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='mei' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='mei' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='mei' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function juni_vsat_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='juni' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juni' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='juni' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		
		function juli_vsat_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='juli' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='juli' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='juli' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function agustus_vsat_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='agustus' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='agustus' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='agustus' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function september_vsat_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='september' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='september' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='september' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function oktober_vsat_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='oktober' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='oktober' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='oktober' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function november_vsat_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='november' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='november' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='november' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		
		function desember_vsat_uipkitsum()
		{
		$get = $this->db->query("SELECT ((SELECT 44640 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' AND id_unit = 4 
								AND STATUS='active' AND bulan='desember' AND tahun ='2020') - (SELECT SUM(durasi)FROM LOG_GANGGUAN
								WHERE  periode_bulan ='desember' 
								AND periode_tahun = '2020' AND id_kantor_induk = 4 
								AND layanan = 'IP VPN')) / (SELECT 43200 * 
								(SELECT COUNT(DATA_ID) FROM data_network WHERE service ='IP VPN' 
								AND id_unit =4 AND STATUS='active' AND bulan='desember' AND tahun ='2020')))* 100 AS persentasi_sla");
			
				return $get->result_array();
			
		}
		

		
}