<?php defined('BASEPATH') OR exit('No direct script access allowed');

class  Bhnbaku_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('master_bhnbaku');
        if($id != null){
            $this->db->where('bb_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        //kiri database, kanan post
        $params = [
            'tanggal_bb' => $post['tanggal'],
            'lupin_bb' => $post['lupin'],
            'tapioka_bb' => $post['tapioka'],
            'ragi_bb' => $post['ragi'],
        ];
        $this->db->insert('master_bhnbaku', $params);
    }

    public function edit($post)
    {
        //kiri database, kanan post
        $params = [
            'tanggal_bb' => $post['tanggal'],
            'lupin_bb' => $post['lupin'],
            'tapioka_bb' => $post['tapioka'],
            'ragi_bb' => $post['ragi'],
        ];
        $this->db->where(array('bb_id'=> $post['edit']));
        $this->db->update('master_bhnbaku', $params);    
    }

    public function del($id)
    {
        $this->db->where('bb_id', $id);
        $this->db->delete('master_bhnbaku');
    }

}