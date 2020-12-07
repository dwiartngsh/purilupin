<?php defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    //supaya bisa terload langsung tiap method
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_m');
    }

    public function index()
    {
        $data['row'] = $this->Profile_m->get();
        $this->template->load('template', 'profile/profile', $data);

        if (isset($_FILES['foto']['name'])) {
            $config['upload_path']          = './profil/';
            $config['allowed_types']        = 'gif|jpg|png';
            //$config['max_size']             = 100;
            //$config['max_width']            = 1024;
            //$config['max_height']           = 768;

            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $data = $this->upload->data();

            $this->db->set(array('avatar' => 'profil/' . $data['file_name']));
            $this->db->where(array('user_id' => $this->fungsi->user_login()->user_id));
            $this->db->update('user');

            header('Refresh: 0');
        }
    }
}
