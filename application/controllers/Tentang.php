<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
//supaya bisa terload langsung tiap method
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('Tentang_m');
	}

	public function index()
	{
		$this->template->load('template', 'tentang/tentang');
	}
}