<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bhnbaku extends CI_Controller {
//supaya bisa terload langsung tiap method
	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('bhnbaku_m');
	}

	public function index()
	{
		$data['row'] = $this->bhnbaku_m->get();
		$this->template->load('template', 'master/bhnbaku/bhnbaku_data', $data);
	}

	public function add()
	{
        $bhnbaku = new stdClass();
        $bhnbaku->bb_id = null;
        $bhnbaku->tanggal_bb = null;
        $bhnbaku->lupin_bb = null;
        $bhnbaku->tapioka_bb = null;
        $bhnbaku->ragi_bb = null;
        $data = array(
            'page' => 'add',
            'row' => $bhnbaku
        );
        $this->template->load('template', 'master/bhnbaku/bhnbaku_form', $data);

	}
	
	public function edit($id)
	{
        $query = $this->bhnbaku_m->get($id);
        if($query->num_rows() > 0) {
            $bhnbaku = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $bhnbaku
            );
            $this->template->load('template', 'master/bhnbaku/bhnbaku_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');";
		echo "window.location='".site_url('bhnbaku')."';</script>";
        }
    }
    
        public function process()
        {
            $post = $this->input->post(null, TRUE);
            if(isset($_POST['add'])) {
                $this->bhnbaku_m->add($post);
            } else if(isset($_POST['edit'])) {
                $this->bhnbaku_m->edit($post);
            }

            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil disimpan');</script>";
            }
            echo "<script>window.location='".site_url('bhnbaku')."';</script>";
        }
	 
        public function del($id)
        {
            $this->bhnbaku_m->del($id);
            if($this->db->affected_rows() > 0) {
                echo "<script>alert('Data berhasil dihapus');</script>";
            }
            echo "<script>window.location='".site_url('bhnbaku')."';</script>";
	    }
    }