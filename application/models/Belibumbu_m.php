<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Belibumbu_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('transaksi_belibumbu');
        if($id != null){
            $this->db->where('pb_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        //kiri database, kanan post
        $params = [
            'tanggal_pb' => $post['tanggal'],
            'bwgputih_pb' => $post['bawang'],
            'kemiri_pb' => $post['kemiri'],
            'penyedap_pb' => $post['penyedap'],
            'tepungberas_pb' => $post['tepung'],
            'harga' => $post['harga'],
        ];
        $this->db->insert('transaksi_belibumbu', $params);
    }

    public function edit($post)
    {
        //kiri database, kanan post
        $params = [
            'tanggal_pb' => $post['tanggal'],
            'bwgputih_pb' => $post['bawang'],
            'kemiri_pb' => $post['kemiri'],
            'penyedap_pb' => $post['penyedap'],
            'tepungberas_pb' => $post['tepung'],
            'harga' => $post['harga'],
        ];
        $this->db->where(array('pb_id'=> $post['edit']));
        $this->db->update('transaksi_belibumbu', $params);    
    }

    public function del($id)
    {
        $this->db->where('pb_id', $id);
        $this->db->delete('transaksi_belibumbu');
    }

}