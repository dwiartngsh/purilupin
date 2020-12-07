<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Detil_distbrgjadi extends CI_Controller {
//supaya bisa terload langsung tiap method
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('detil_distbrgjadi_m');
	}

	public function index()
	{ //lempar data, manggil model detil_distbrgjadi + parameter jd nampilin semua
		$data['row'] = $this->detil_distbrgjadi_m->get();
		$this->template->load('template', 'transaksi/detil_distbrgjadi/detil_distbrgjadi_data', $data);
	}

	public function add()
	{ //database
        $detil_distbrgjadi = new stdClass();
        $detil_distbrgjadi->dbj_id = null;
        $detil_distbrgjadi->bj_id = null;
        $detil_distbrgjadi->qty = null;
        $detil_distbrgjadi->packing50gr_dbj = null;
        $detil_distbrgjadi->packing75gr_dbj = null;
        $detil_distbrgjadi->packing150gr_dbj = null;
        $detil_distbrgjadi->packingtabung_dbj = null;
        $data = array(
            'page' => 'add',
            'row' => $detil_distbrgjadi
        );
        $this->template->load('template', 'transaksi/detil_distbrgjadi/detil_distbrgjadi_form', $data);

	}
	
	public function edit($id)
	{
        $query = $this->detil_distbrgjadi_m->get($id);
        if($query->num_rows() > 0) {
            $detil_distbrgjadi = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $detil_distbrgjadi
            );
            $this->template->load('template', 'transaksi/detil_distbrgjadi/detil_distbrgjadi_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
		echo "window.location='".site_url('detil_distbrgjadi')."';</script>";
        }
    }
    
        public function process()
        {
            $post = $this->input->post(null, TRUE);
            if(isset($_POST['add'])) {
                $this->detil_distbrgjadi_m->add($post);
            } else if(isset($_POST['edit'])) {
                $this->detil_distbrgjadi_m->edit($post);
            }

            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            }
            echo "<script>window.location='".site_url('detil_distbrgjadi')."';</script>";
        }
	 
        public function del($id)
        {
            $this->detil_distbrgjadi_m->del($id);
            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil dihapus');</script>";
            }
            echo "<script>window.location='".site_url('detil_distbrgjadi')."';</script>";
	    }
    }