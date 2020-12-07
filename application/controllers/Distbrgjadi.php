<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Distbrgjadi extends CI_Controller {
//supaya bisa terload langsung tiap method
	function __construct()
	{
		parent::__construct();
		check_not_login();
        $this->load->model('distbrgjadi_m');
        $this->load->helper('form');
	}

	public function index()
	{ //lempar data, manggil model distbrgjadi + parameter jd nampilin semua
		$data['row'] = $this->distbrgjadi_m->get();
		$this->template->load('template', 'transaksi/distbrgjadi/distbrgjadi_data', $data);
	}

	public function add()
	{ //database
        $distbrgjadi = new stdClass();
        $distbrgjadi->dbj_id = null;
        $distbrgjadi->tanggal_dbj = null;
        $distbrgjadi->nama_dbj = null;
        $distbrgjadi->packing50gr_dbj=null;
        $distbrgjadi->packing75gr_dbj=null;
        $distbrgjadi->packing150gr_dbj=null;
        $distbrgjadi->packingtabung_dbj=null;
        $data = array(
            'page' => 'add',
            'row' => $distbrgjadi
        );
        $this->template->load('template', 'transaksi/distbrgjadi/distbrgjadi_form', $data);

	}
	
	public function edit($id)
	{
        $query = $this->distbrgjadi_m->get($id);
        if($query->num_rows() > 0) {
            $distbrgjadi = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $distbrgjadi
            );
            $this->template->load('template', 'transaksi/distbrgjadi/distbrgjadi_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
		echo "window.location='".site_url('distbrgjadi')."';</script>";
        }
    }
    
        public function process()
        {
            $post = $this->input->post(null, TRUE);
            if(isset($_POST['add'])) {
                $this->distbrgjadi_m->add($post);
            } else if(isset($_POST['edit'])) {
                $this->distbrgjadi_m->edit($post);
            }

            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            }
            echo "<script>window.location='".site_url('distbrgjadi')."';</script>";
        }
	 
        public function del($id)
        {
            $this->distbrgjadi_m->del($id);
            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil dihapus');</script>";
            }
            echo "<script>window.location='".site_url('distbrgjadi')."';</script>";
        }
        
    }