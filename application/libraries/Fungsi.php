<?php

class Fungsi
{
    protected $ci;
    function __construct()
    {
        $this->ci = &get_instance();
    }
    function user_login()
    {
        $this->ci->load->model('user_m');
        $id_pmedis = $this->ci->session->userdata('id_pmedis');
        $user_data = $this->ci->user_m->get($id_pmedis)->row();
        return $user_data;
    }

    public function count_user()
    {
        $this->ci->load->model('user_m');
        return $this->ci->user_m->get()->num_rows();
    }

    public function count_paslama()
    {
        $this->ci->load->model('pasien_m');
        return $this->ci->pasien_m->getpaslama();
    }
}
