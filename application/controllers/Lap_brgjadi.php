<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lap_brgjadi extends CI_Controller {

	public function index()
	{
		check_not_login();
		$this->template->load('template', 'laporan/lap_brgjadi/lap_brgjadi_form');
	}

	public function cetak()
	{	
		$this->load->view('laporan/lap_brgjadi/lap_brgjadi_data');
	}
}