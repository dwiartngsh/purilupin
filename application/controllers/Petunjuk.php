<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Petunjuk extends CI_Controller {
//supaya bisa terload langsung tiap method
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('Petunjuk_m');
	}

	public function index()
	{
		$this->template->load('template', 'petunjuk/petunjuk');
	}
}