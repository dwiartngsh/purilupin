<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Brgjadi_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('master_brgjadi');
        if($id != null){
            $this->db->where('bj_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        //kiri database, kanan post
        $params = [
            'tanggal_bj' => $post['tanggal'],
            'nama_bj' => $post['nama'],
            'packing50gr_bj' => $post['packing50gr'],
            'packing75gr_bj' => $post['packing75gr'],
            'packing150gr_bj' => $post['packing150gr'],
            'packingtabung_bj' => $post['packingtabung'],
            'tp_id' => $post['kode_tp'],
        ];
        $this->db->insert('master_brgjadi', $params);
    }

    public function edit($post)
    {
        //kiri database, kanan post
        $params = [
            'tanggal_bj' => $post['tanggal'],
            'nama_bj' => $post['nama'],
            'packing50gr_bj' => $post['packing50gr'],
            'packing75gr_bj' => $post['packing75gr'],
            'packing150gr_bj' => $post['packing150gr'],
            'packingtabung_bj' => $post['packingtabung'],
            'tp_id' => $post['kode_tp'],
        ];
        $this->db->where(array('bj_id'=> $post['edit']));
        $this->db->update('master_brgjadi', $params);    
    }

    public function del($id)
    {
        $this->db->where('bj_id', $id);
        $this->db->delete('master_brgjadi');
    }


}