<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pbb extends CI_Controller {
//supaya bisa terload langsung tiap method
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('pbb_m');
	}

	public function index()
	{ //lempar data, manggil model pbb + parameter jd nampilin semua
		$data['row'] = $this->pbb_m->get();
		$this->template->load('template', 'transaksi/pbb/pbb_data', $data);
	}

	public function add()
	{ //database
        $pbb = new stdClass();
        $pbb->pbb_id = null;
        $pbb->tanggal_pbb = null;
        $pbb->kacanglupin_pbb = null;
        $pbb->keterangan_pbb = null;
        $pbb->bb_id = null;
        $pbb->user_id = null;
        $data = array(
            'page' => 'add',
            'row' => $pbb
        );
        $this->template->load('template', 'transaksi/pbb/pbb_form', $data);

	}
	
	public function edit($id)
	{
        $query = $this->pbb_m->get($id);
        if($query->num_rows() > 0) {
            $pbb = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $pbb
            );
            $this->template->load('template', 'transaksi/pbb/pbb_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
		echo "window.location='".site_url('pbb')."';</script>";
        }
    }
    
        public function process()
        {
            $post = $this->input->post(null, TRUE);
            if(isset($_POST['add'])) {
                $this->pbb_m->add($post);
            } else if(isset($_POST['edit'])) {
                $this->pbb_m->edit($post);
            }

            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            }
            echo "<script>window.location='".site_url('pbb')."';</script>";
        }
	 
        public function del($id)
        {
            $this->pbb_m->del($id);
            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil dihapus');</script>";
            }
            echo "<script>window.location='".site_url('pbb')."';</script>";
	    }
    }