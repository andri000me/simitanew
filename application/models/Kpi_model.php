<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kpi_model extends CI_Model
{

	public function getData()
	{
		$this->db->select('*');
		$this->db->from('kpi');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function addData()
	{
		$data = [
			'indikator_kpi' => htmlspecialchars($this->input->post('indikator_kpi'), true),
			'satuan' => htmlspecialchars($this->input->post('satuan'), true),
			'bobot' => htmlspecialchars($this->input->post('bobot'), true),
			'target' => htmlspecialchars($this->input->post('target'), true),
			'realisasi' => htmlspecialchars($this->input->post('realisasi'), true),
			'skor' => htmlspecialchars($this->input->post('skor'), true),
			'waktu' => htmlspecialchars($this->input->post('waktu'), true),
			'keterangan' => htmlspecialchars($this->input->post('keterangan'), true)
		];

		$this->db->insert('kpi', $data);
	}

	public function getDataById($id)
	{
		return $this->db->get_where('kpi', ['kpi_id' => $id])->row_array();
	}

	public function editData()
	{
		$data = [
			'indikator_kpi' => htmlspecialchars($this->input->post('indikator_kpi'), true),
			'satuan' => htmlspecialchars($this->input->post('satuan'), true),
			'bobot' => htmlspecialchars($this->input->post('bobot'), true),
			'target' => htmlspecialchars($this->input->post('target'), true),
			'realisasi' => htmlspecialchars($this->input->post('realisasi'), true),
			'skor' => htmlspecialchars($this->input->post('skor'), true),
			'waktu' => htmlspecialchars($this->input->post('waktu'), true),
			'keterangan' => htmlspecialchars($this->input->post('keterangan'), true)
		];

		$this->db->where('kpi_id', $this->input->post('kpi_id'));
		$this->db->update('kpi', $data);
	}

	public function deleteData($id)
	{
		$this->db->delete('kpi', ['kpi_id' => $id]);
	}
}
