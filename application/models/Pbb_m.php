<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pbb_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('transaksi_pbb');
        if($id != null){
            $this->db->where('pbb_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post) 
    {
        //kiri database, kanan post
        $params = [
            'tanggal_pbb' => $post['tanggal'],
            'kacanglupin_pbb' => $post['kacang'],
            'keterangan_pbb' => empty($post['keterangan']) ? null : $post['keterangan'],
            'bb_id'=> $post['kode_bb'],
            'user_id'=> $post['kode_user'],
        ];
        $this->db->insert('transaksi_pbb', $params);
    }

    public function edit($post)
    {
        //kiri database, kanan post
        $params = [
            'tanggal_pbb' => $post['tanggal'],
            'kacanglupin_pbb' => $post['kacang'],
            'keterangan_pbb' => empty($post['keterangan']) ? null : $post['keterangan'],
            'bb_id'=> $post['kode_bb'],
            'user_id'=> $post['kode_user'],
        ];
        $this->db->where(array('pbb_id'=> $post['edit']));
        $this->db->update('transaksi_pbb', $params);    
    }

    public function del($id)
    {
        $this->db->where('pbb_id', $id);
        $this->db->delete('transaksi_pbb');
    }

}