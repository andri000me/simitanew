<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai_model extends CI_Model {

	public function getData()
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function addData()
	{
		$data = [
			'nip' => htmlspecialchars($this->input->post('nip'), true),
			'nama' => htmlspecialchars($this->input->post('nama'), true),
			'email' => htmlspecialchars($this->input->post('email'), true),
			'no_hp' => htmlspecialchars($this->input->post('no_hp'), true)
		];

		$this->db->insert('pegawai', $data);
	}

	public function getDataById($id)
    {
        return $this->db->get_where('pegawai', ['pegawai_id' => $id])->row_array();
    }

    public function editData()
	{
		$data = [
			'nip' => htmlspecialchars($this->input->post('nip'), true),
			'nama' => htmlspecialchars($this->input->post('nama'), true),
			'email' => htmlspecialchars($this->input->post('email'), true),
			'no_hp' => htmlspecialchars($this->input->post('no_hp'), true)
		];

		$this->db->where('pegawai_id', $this->input->post('pegawai_id'));
		$this->db->update('pegawai', $data);
	}

	public function deleteData($id)
    {
        $this->db->delete('pegawai', ['pegawai_id' => $id]);
    }
}