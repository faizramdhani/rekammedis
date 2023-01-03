<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dokter_m');
    }

    public function index()
    {
        $data['data'] = $this->Dokter_m->getData(1);
        $this->template->load('template', 'dokter/dokter_data', $data);
    }
}
