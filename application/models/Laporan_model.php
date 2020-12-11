<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan_model extends CI_Model {


    public function getData()
	{
		$this->db->select('*');
		$this->db->from('report_kerusakan');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getDataEdit($id)
	{
		return $this->db->get_where('report_kerusakan', ['id_report' => $id])->row_array();
	}

	public function editData()
	{
		$data = [
			
			'nama_item' => htmlspecialchars($this->input->post('nama_item'), true),
			'merek_item' => htmlspecialchars($this->input->post('merek_item'), true),
			'kondisi_item' => htmlspecialchars($this->input->post('kondisi_item'), true),
			'tanggal_pelaporan' => htmlspecialchars($this->input->post('tanggal_pelaporan'), true),
			'pengguna' => htmlspecialchars($this->input->post('pengguna'), true)
		];

		$this->db->where('id_report', $this->input->post('id_report'));
		$this->db->update('report_kerusakan', $data);
	}

	public function deleteData($id)
	{
		$this->db->from('report_kerusakan');
		$this->db->where('id_report',$id);
		return $this->db->delete('report_kerusakan');
	}

	public function addData($data)
	{
		return $this->db->insert('report_kerusakan', $data);
	}
		
}