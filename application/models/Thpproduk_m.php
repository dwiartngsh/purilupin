<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Thpproduk_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('transaksi_thpproduk');
        if($id != null){
            $this->db->where('tp_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post) 
    {
        //kiri database, kanan post
        $params = [
            'tanggal_tp' => $post['tanggal'],
            'nama_tp' => $post['nama'],
            'perendaman_tp' => $post['perendaman'],
            'perebusan_tp' => $post['perebusan'],
            'peragian_tp' => $post['peragian'],
            'pemotongan_tp' => $post['pemotongan'],
            'penggorengan_tp' => $post['penggorengan'],
            'keterangan_tp' => empty($post['keterangan']) ? null : $post['keterangan'],
            'bb_id'=> $post['kode_bb'],
            'bu_id'=> $post['kode_bu'],
            'user_id'=> $post['kode_user'],
        ];
        $this->db->insert('transaksi_thpproduk', $params);
    }

    public function edit($post)
    {
        //kiri database, kanan post
        $params = [
            'tanggal_tp' => $post['tanggal'],
            'nama_tp' => $post['nama'],
            'perendaman_tp' => $post['perendaman'],
            'perebusan_tp' => $post['perebusan'],
            'peragian_tp' => $post['peragian'],
            'pemotongan_tp' => $post['pemotongan'],
            'penggorengan_tp' => $post['penggorengan'],
            'keterangan_tp' => empty($post['keterangan']) ? null : $post['keterangan'],
            'bb_id'=> $post['kode_bb'],
            'bu_id'=> $post['kode_bu'],
            'user_id'=> $post['kode_user'],
        ];
        $this->db->where(array('tp_id'=> $post['edit']));
        $this->db->update('transaksi_thpproduk', $params);    
    }

    public function del($id)
    {
        $this->db->where('tp_id', $id);
        $this->db->delete('transaksi_thpproduk');
    }

}