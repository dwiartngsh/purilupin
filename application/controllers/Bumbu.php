<?php defined('BASEPATH') OR exit('No direct script access allowed');

class bumbu extends CI_Controller {
//supaya bisa terload langsung tiap method
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('bumbu_m');
	}

	public function index()
	{
		$data['row'] = $this->bumbu_m->get();
		$this->template->load('template', 'master/bumbu/bumbu_data', $data);
	}

	public function add()
	{
        $bumbu = new stdClass();
        $bumbu->bu_id = null;
        $bumbu->tanggal_bu = null;
        $bumbu->bwgputih_bu = null;
        $bumbu->kemiri_bu = null;
        $bumbu->penyedap_bu = null;
        $bumbu->tepungberas_bu = null;
        $bumbu->air_bu = null;
        $bumbu->pb_id = null;
        $data = array(
            'page' => 'add',
            'row' => $bumbu
        );
        $this->template->load('template', 'master/bumbu/bumbu_form', $data);

	}
	
	public function edit($id)
	{
        $query = $this->bumbu_m->get($id);
        if($query->num_rows() > 0) {
            $bumbu = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $bumbu
            );
            $this->template->load('template', 'master/bumbu/bumbu_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
		echo "window.location='".site_url('bumbu')."';</script>";
        }
    }
    
        public function process()
        {
            $post = $this->input->post(null, TRUE);
            if(isset($_POST['add'])) {
                $this->bumbu_m->add($post);
            } else if(isset($_POST['edit'])) {
                $this->bumbu_m->edit($post);
            }

            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            }
            echo "<script>window.location='".site_url('bumbu')."';</script>";
        }
	 
        public function del($id)
        {
            $this->bumbu_m->del($id);
            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil dihapus');</script>";
            }
            echo "<script>window.location='".site_url('bumbu')."';</script>";
	    }
    }