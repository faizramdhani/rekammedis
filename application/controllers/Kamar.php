<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kamar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kamar_m');
    }

    public function index()
    {
        $data['data'] = $this->Kamar_m->getData(1);
        $this->template->load('template', 'kamar/kamar_data', $data);
    }
}
