<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Brgmasuk_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('transaksi_brgmasuk');
        if($id != null){
            $this->db->where('bm_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post) 
    {
        //kiri database, kanan post
        $params = [
            'tanggal_bm' => $post['tanggal'],
            'nama_bm' => $post['nama'],
            'jumlah_bm' => $post['jumlah'],
            'keterangan_bm' => empty($post['keterangan']) ? null : $post['keterangan'],
            'sj_id'=> $post['kode_sj'],
            'bb_id'=> $post['kode_bb'],
            'pbb_id'=> $post['kode_pbb'],
        ];
        $this->db->insert('transaksi_brgmasuk', $params);
    }

    public function edit($post)
    {
        //kiri database, kanan post
        $params = [
            'tanggal_bm' => $post['tanggal'],
            'nama_bm' => $post['nama'],
            'jumlah_bm' => $post['jumlah'],
            'keterangan_bm' => empty($post['keterangan']) ? null : $post['keterangan'],
            'sj_id'=> $post['kode_sj'],
            'bb_id'=> $post['kode_bb'],
            'pbb_id'=> $post['kode_pbb'],
        ];
        $this->db->where(array('bm_id'=> $post['edit']));
        $this->db->update('transaksi_brgmasuk', $params);    
    }

    public function del($id)
    {
        $this->db->where('bm_id', $id);
        $this->db->delete('transaksi_brgmasuk');
    }

}