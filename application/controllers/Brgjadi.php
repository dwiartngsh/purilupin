<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Brgjadi extends CI_Controller {
//supaya bisa terload langsung tiap method
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('brgjadi_m');
	}

	public function index()
	{
        $data['row']=$this->brgjadi_m->get();
        $this->template->load('template', 'master/brgjadi/brgjadi_data', $data);
	}

	public function add()
	{
        $brgjadi = new stdClass();
        $brgjadi->bj_id = null;
        $brgjadi->tanggal_bj = null;
        $brgjadi->nama_bj = null;
        $brgjadi->packing50gr_bj = null;
        $brgjadi->packing75gr_bj = null;
        $brgjadi->packing150gr_bj = null;
        $brgjadi->packingtabung_bj = null;
        $brgjadi->tp_id = null;
        $data = array(
            'page' => 'add',
            'row' => $brgjadi
        );
        $this->template->load('template', 'master/brgjadi/brgjadi_form', $data);

	}
	
	public function edit($id)
	{
        $query = $this->brgjadi_m->get($id);
        if($query->num_rows() > 0) {
            $brgjadi = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $brgjadi
            );
            $this->template->load('template', 'master/brgjadi/brgjadi_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
		      echo "window.location='".site_url('brgjadi')."';</script>";
        }
    }
    
        public function process()
        {
            $post = $this->input->post(null, TRUE);
            if(isset($_POST['add'])) {
                $this->brgjadi_m->add($post);
            } else if(isset($_POST['edit'])) {
                $this->brgjadi_m->edit($post);
            }

            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            }
            echo "<script>window.location='".site_url('brgjadi')."';</script>";
        }
	 
        public function del($id)
        {
            $this->brgjadi_m->del($id);
            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil dihapus');</script>";
            }
            echo "<script>window.location='".site_url('brgjadi')."';</script>";
	    }
    }