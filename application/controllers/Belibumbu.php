<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Belibumbu extends CI_Controller {
//supaya bisa terload langsung tiap method
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('belibumbu_m');
	}

	public function index()
	{
		$data['row'] = $this->belibumbu_m->get();
		$this->template->load('template', 'transaksi/belibumbu/belibumbu_data', $data);
	}

	public function add()
	{
        $belibumbu = new stdClass();
        $belibumbu->pb_id = null;
        $belibumbu->tanggal_pb = null;
        $belibumbu->bwgputih_pb = null;
        $belibumbu->kemiri_pb = null;
        $belibumbu->penyedap_pb = null;
        $belibumbu->tepungberas_pb = null;
        $belibumbu->harga = null;
        $data = array(
            'page' => 'add',
            'row' => $belibumbu
        );
        $this->template->load('template', 'transaksi/belibumbu/belibumbu_form', $data);

	}
	
	public function edit($id)
	{
        $query = $this->belibumbu_m->get($id);
        if($query->num_rows() > 0) {
            $belibumbu = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $belibumbu
            );
            $this->template->load('template', 'transaksi/belibumbu/belibumbu_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
		echo "window.location='".site_url('belibumbu')."';</script>";
        }
    }
    
        public function process()
        {
            $post = $this->input->post(null, TRUE);
            if(isset($_POST['add'])) {
                $this->belibumbu_m->add($post);
            } else if(isset($_POST['edit'])) {
                $this->belibumbu_m->edit($post);
            }

            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            }
            echo "<script>window.location='".site_url('belibumbu')."';</script>";
        }
	 
        public function del($id)
        {
            $this->belibumbu_m->del($id);
            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil dihapus');</script>";
            }
            echo "<script>window.location='".site_url('belibumbu')."';</script>";
	    }
    }