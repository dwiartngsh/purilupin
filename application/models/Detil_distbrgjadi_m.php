<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Detil_distbrgjadi_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('transaksi_detil_distbrgjadi');
        if($id != null){
            $this->db->where('dbj_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post) 
    {
        //kiri database, kanan post
        $params = [
            'dbj_id' => $post['distbrgjadi'],
            'bj_id' => $post['brgjadi'],
            'qty' => $post['qty'],
            'packing50gr_dbj' => $post['packing50gr'],
            'packing75gr_dbj' => $post['packing75gr'],
            'packing150gr_dbj' => $post['packing150gr'],
            'packingtabung_dbj' => $post['packingtabung'],
        ];
        $this->db->insert('transaksi_detil_distbrgjadi', $params);
    }

    public function edit($post)
    {
        //kiri database, kanan post
        $params = [
            'dbj_id' => $post['distbrgjadi'],
            'bj_id' => $post['brgjadi'],
            'qty' => $post['qty'],
            'packing50gr_dbj' => $post['packing50gr'],
            'packing75gr_dbj' => $post['packing75gr'],
            'packing150gr_dbj' => $post['packing150gr'],
            'packingtabung_dbj' => $post['packingtabung'],
        ];
        $this->db->where(array('dbj_id'=> $post['edit']));
        $this->db->update('transaksi_detil_distbrgjadi', $params);    
    }

    public function del($id)
    {
        $this->db->where('dbj_id', $id);
        $this->db->delete('transaksi_detil_distbrgjadi');
    }

}