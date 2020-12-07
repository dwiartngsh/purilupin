<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Suratjalan extends CI_Controller {
//supaya bisa terload langsung tiap method
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('suratjalan_m');
	}

	public function index()
	{ //lempar data, manggil model suratjalan + parameter jd nampilin semua
		$data['row'] = $this->suratjalan_m->get();
		$this->template->load('template', 'suratjalan/suratjalan_data', $data);
	}

	public function add()
	{ //database
        $suratjalan = new stdClass();
        $suratjalan->sj_id = null;
        $suratjalan->tanggal_sj = null;
        $suratjalan->qty_sj = null;
        $suratjalan->berat_sj = null;
        $suratjalan->jumlahberat_sj = null;
        $suratjalan->keterangan_sj = null;
        $suratjalan->pbb_id = null;
        $data = array(
            'page' => 'add',
            'row' => $suratjalan
        );
        $this->template->load('template', 'suratjalan/suratjalan_form', $data);

	}
	
	public function edit($id)
	{
        $query = $this->suratjalan_m->get($id);
        if($query->num_rows() > 0) {
            $suratjalan = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $suratjalan
            );
            $this->template->load('template', 'suratjalan/suratjalan_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
		echo "window.location='".site_url('suratjalan')."';</script>";
        }
    }
    
        public function process()
        {
            $post = $this->input->post(null, TRUE);
            if(isset($_POST['add'])) {
                $this->suratjalan_m->add($post);
            } else if(isset($_POST['edit'])) {
                $this->suratjalan_m->edit($post);
            }

            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            }
            echo "<script>window.location='".site_url('suratjalan')."';</script>";
        }
	 
        public function del($id)
        {
            $this->suratjalan_m->del($id);
            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil dihapus');</script>";
            }
            echo "<script>window.location='".site_url('suratjalan')."';</script>";
	    }
    }