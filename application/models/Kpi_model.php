<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kpi_model extends CI_Model
{

	public function getData()
	{
		$get = $this->db->query("SELECT a.*,(SELECT nama FROM pegawai WHERE pegawai_id = a.`pic`) AS nama_pj FROM kpi a ORDER BY a.kpi_id DESC ");
		return $get;
	}

	public function get_kpi_open()
	{
		$get = $this->db->query("SELECT a.*,(SELECT nama FROM pegawai WHERE pegawai_id = a.`pic`) AS nama_pj FROM kpi a WHERE a.status = 'Open' ORDER BY a.kpi_id DESC LIMIT 5 ");
		return $get;
	}

	function list_pegawai()
	{
		$get = $this->db->query("SELECT 
		  * 
		FROM
		  pegawai 
		ORDER BY pegawai_id DESC");
		return $get;
	}

	public function addData()
	{
		$data = [
			'indikator_kpi' => htmlspecialchars($this->input->post('indikator_kpi'), true),
			'pic' => htmlspecialchars($this->input->post('pic'), true),
			'satuan' => htmlspecialchars($this->input->post('satuan'), true),
			'bobot' => htmlspecialchars($this->input->post('bobot'), true),
			'target' => htmlspecialchars($this->input->post('target'), true),
			'realisasi' => htmlspecialchars($this->input->post('realisasi'), true),
			'skor' => htmlspecialchars($this->input->post('skor'), true),
			'waktu' => htmlspecialchars($this->input->post('waktu'), true),
			'status' => htmlspecialchars($this->input->post('status'), true)
		];

		$this->db->insert('kpi', $data);
	}

	public function getDataById($id)
	{
		$get = $this->db->query("SELECT a.*,(SELECT nama FROM pegawai WHERE pegawai_id = a.`pic`) AS nama_pj FROM kpi a WHERE a.kpi_id = $id");
		if ($get->num_rows() == 1) {
			return $get->row_array();
		}
	}

	public function editData()
	{
		$data = [
			'indikator_kpi' => htmlspecialchars($this->input->post('indikator_kpi'), true),
			'pic' => htmlspecialchars($this->input->post('pic'), true),
			'satuan' => htmlspecialchars($this->input->post('satuan'), true),
			'bobot' => htmlspecialchars($this->input->post('bobot'), true),
			'target' => htmlspecialchars($this->input->post('target'), true),
			'realisasi' => htmlspecialchars($this->input->post('realisasi'), true),
			'skor' => htmlspecialchars($this->input->post('skor'), true),
			'waktu' => htmlspecialchars($this->input->post('waktu'), true),
			'status' => htmlspecialchars($this->input->post('status'), true)
		];

		$this->db->where('kpi_id', $this->input->post('kpi_id'));
		$this->db->update('kpi', $data);
	}

	public function deleteData($id)
	{
		$this->db->delete('kpi', ['kpi_id' => $id]);
	}
}
