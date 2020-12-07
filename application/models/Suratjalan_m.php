<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Suratjalan_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('surat_jalan');
        if($id != null){
            $this->db->where('sj_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post) 
    {
        //kiri database, kanan post
        $params = [
            'tanggal_sj' => $post['tanggal'],
            'qty_sj' => $post['qty'],
            'berat_sj' => $post['berat'],
            'jumlahberat_sj' => $post['jumlahberat'],
            'keterangan_sj' => empty($post['keterangan']) ? null : $post['keterangan'],
            'pbb_id'=> $post['kode_pbb'],
        ];
        $this->db->insert('surat_jalan', $params);
    }

    public function edit($post)
    {
        //kiri database, kanan post
        $params = [
            'tanggal_sj' => $post['tanggal'],
            'qty_sj' => $post['qty'],
            'berat_sj' => $post['berat'],
            'jumlahberat_sj' => $post['jumlahberat'],
            'keterangan_sj' => empty($post['keterangan']) ? null : $post['keterangan'],
            'pbb_id'=> $post['kode_pbb'],
        ];
        $this->db->where(array('sj_id'=> $post['edit']));
        $this->db->update('surat_jalan', $params);    
    }

    public function del($id)
    {
        $this->db->where('sj_id', $id);
        $this->db->delete('surat_jalan');
    }

}