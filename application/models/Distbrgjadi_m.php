<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Distbrgjadi_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('transaksi_distbrgjadi');
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
            'tanggal_dbj' => $post['tanggal'],
            'nama_dbj' => $post['nama'],
            'packing50gr_dbj' => $post['packing50gr_dbj'],
            'packing75gr_dbj' => $post['packing75gr_dbj'],
            'packing150gr_dbj' => $post['packing150gr_dbj'],
            'packingtabung_dbj' => $post['packingtabung_dbj'],
        ];
        $this->db->insert('transaksi_distbrgjadi', $params);

        $params = [
        'packing50gr_dbj' => $post['packing50gr_dbj'],
        'packing75gr_dbj' => $post['packing75gr_dbj'],
        'packing150gr_dbj' => $post['packing150gr_dbj'],
        'packingtabung_dbj' => $post['packingtabung_dbj'],
        ];
        $this->db->insert('transaksi_detil_distbrgjadi',$params);
    }

    public function edit($post)
    {
        //kiri database, kanan post
        $params = [
            'tanggal_dbj' => $post['tanggal'],
            'nama_dbj' => $post['nama'],
            'packing50gr_dbj' => $post['packing50gr_dbj'],
            'packing75gr_dbj' => $post['packing75gr_dbj'],
            'packing150gr_dbj' => $post['packing150gr_dbj'],
            'packingtabung_dbj' => $post['packingtabung_dbj'],
        ];
        $this->db->where(array('dbj_id'=> $post['edit']));
        $this->db->update('transaksi_distbrgjadi', $params);    
    }

    public function del($id)
    {
        $this->db->where('dbj_id', $id);
        $this->db->delete('transaksi_distbrgjadi');
    }

}