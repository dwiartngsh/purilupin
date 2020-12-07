<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bumbu_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('master_bumbu');
        if($id != null){
            $this->db->where('bu_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        //kiri database, kanan post
        $params = [
            'tanggal_bu' => $post['tanggal'],
            'bwgputih_bu' => $post['bawang'],
            'kemiri_bu' => $post['kemiri'],
            'penyedap_bu' => $post['penyedap'],
            'tepungberas_bu' => $post['tepung'],
            'air_bu' => $post['air'],
            'pb_id' => $post['kode_pb'],
        ];
        $this->db->insert('master_bumbu', $params);
    }

    public function edit($post)
    {
        //kiri database, kanan post
        $params = [
            'tanggal_bu' => $post['tanggal'],
            'bwgputih_bu' => $post['bawang'],
            'kemiri_bu' => $post['kemiri'],
            'penyedap_bu' => $post['penyedap'],
            'tepungberas_bu' => $post['tepung'],
            'air_bu' => $post['air'],
            'pb_id' => $post['kode_pb'],
        ];
        $this->db->where(array('bu_id'=> $post['edit']));
        $this->db->update('master_bumbu', $params);    
    }

    public function del($id)
    {
        $this->db->where('bu_id', $id);
        $this->db->delete('master_bumbu');
    }

}