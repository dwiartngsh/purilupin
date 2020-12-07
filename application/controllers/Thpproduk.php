<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Thpproduk extends CI_Controller {
//supaya bisa terload langsung tiap method
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('thpproduk_m');
	}

	public function index()
	{ //lempar data, manggil model thpproduk + parameter jd nampilin semua
		$data['row'] = $this->thpproduk_m->get();
		$this->template->load('template', 'transaksi/thpproduk/thpproduk_data', $data);
	}

	public function add()
	{ //database
        $thpproduk = new stdClass();
        $thpproduk->tp_id = null;
        $thpproduk->tanggal_tp = null;
        $thpproduk->nama_tp = null;
        $thpproduk->perendaman_tp = null;
        $thpproduk->perebusan_tp = null;
        $thpproduk->peragian_tp = null;
        $thpproduk->pemotongan_tp = null;
        $thpproduk->penggorengan_tp = null;
        $thpproduk->keterangan_tp = null;
        $thpproduk->bb_id = null;
        $thpproduk->bu_id = null;
        $thpproduk->user_id = null;
        $data = array(
            'page' => 'add',
            'row' => $thpproduk
        );
        $this->template->load('template', 'transaksi/thpproduk/thpproduk_form', $data);

	}
	
	public function edit($id)
	{
        $query = $this->thpproduk_m->get($id);
        if($query->num_rows() > 0) {
            $thpproduk = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $thpproduk
            );
            $this->template->load('template', 'transaksi/thpproduk/thpproduk_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
		echo "window.location='".site_url('thpproduk')."';</script>";
        }
    }
    
        public function process()
        {
            $post = $this->input->post(null, TRUE);
            if(isset($_POST['add'])) {
                $this->thpproduk_m->add($post);
            } else if(isset($_POST['edit'])) {
                $this->thpproduk_m->edit($post);
            }

            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            }
            echo "<script>window.location='".site_url('thpproduk')."';</script>";
        }
	 
        public function del($id)
        {
            $this->thpproduk_m->del($id);
            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil dihapus');</script>";
            }
            echo "<script>window.location='".site_url('thpproduk')."';</script>";
	    }
    }