<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Eosicon extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('status') != "login") {
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "admin/login>";
		} else {
			$this->load->view('header');
			$this->load->view('sidebar');
			$this->load->view('eosicon/index');			
			$this->load->view('footer');
		}
	}

}
?>