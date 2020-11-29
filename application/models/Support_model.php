<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Support_model extends CI_Model {

	public function getData()
	{
		$this->db->select('*');
		$this->db->from('it_support');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function addData()
	{
		$data = [
			'nama' => htmlspecialchars($this->input->post('nama'), true),
			'no_hp' => htmlspecialchars($this->input->post('no_hp'), true),
			'email' => htmlspecialchars($this->input->post('email'), true),
			'penempatan' => htmlspecialchars($this->input->post('penempatan'), true)
		];

		$this->db->insert('it_support', $data);
	}

	public function getDataById($id)
    {
        return $this->db->get_where('it_support', ['id' => $id])->row_array();
    }

    public function editData()
	{
		$data = [
			'nama' => htmlspecialchars($this->input->post('nama'), true),
			'no_hp' => htmlspecialchars($this->input->post('no_hp'), true),
			'email' => htmlspecialchars($this->input->post('email'), true),
			'penempatan' => htmlspecialchars($this->input->post('penempatan'), true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('it_support', $data);
	}

	public function deleteData($id)
    {
        $this->db->delete('it_support', ['id' => $id]);
    }
}