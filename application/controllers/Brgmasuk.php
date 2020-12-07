<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Brgmasuk extends CI_Controller {
//supaya bisa terload langsung tiap method
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('brgmasuk_m');
	}

	public function index()
	{ //lempar data, manggil model brgmasuk + parameter jd nampilin semua
		$data['row'] = $this->brgmasuk_m->get();
		$this->template->load('template', 'transaksi/brgmasuk/brgmasuk_data', $data);
	}

	public function add()
	{ //database
        $brgmasuk = new stdClass();
        $brgmasuk->bm_id = null;
        $brgmasuk->tanggal_bm = null;
        $brgmasuk->nama_bm = null;
        $brgmasuk->jumlah_bm = null;
        $brgmasuk->keterangan_bm = null;
        $brgmasuk->sj_id = null;
        $brgmasuk->bb_id = null;
        $brgmasuk->pbb_id = null;
        $data = array(
            'page' => 'add',
            'row' => $brgmasuk
        );
        $this->template->load('template', 'transaksi/brgmasuk/brgmasuk_form', $data);

	}
	
	public function edit($id)
	{
        $query = $this->brgmasuk_m->get($id);
        if($query->num_rows() > 0) {
            $brgmasuk = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $brgmasuk
            );
            $this->template->load('template', 'transaksi/brgmasuk/brgmasuk_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
		echo "window.location='".site_url('brgmasuk')."';</script>";
        }
    }
    
        public function process()
        {
            $post = $this->input->post(null, TRUE);
            if(isset($_POST['add'])) {
                $this->brgmasuk_m->add($post);
            } else if(isset($_POST['edit'])) {
                $this->brgmasuk_m->edit($post);
            }

            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            }
            echo "<script>window.location='".site_url('brgmasuk')."';</script>";
        }
	 
        public function del($id)
        {
            $this->brgmasuk_m->del($id);
            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil dihapus');</script>";
            }
            echo "<script>window.location='".site_url('brgmasuk')."';</script>";
	    }
    }