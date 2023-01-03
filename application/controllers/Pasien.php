<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_m');
        
    }

    public function paslama()
    {
        $data['paslama'] = $this->Pasien_m->getpaslama();

        $this->template->load('template', 'pasien/paslama', $data);
    }
    public function pasinap()
    {
        $data['pasinap'] = $this->Pasien_m->getpasinap();  
        $this->template->load('template', 'pasien/pasinap', $data);
    }
    public function pasigd()
    {
        // $data['data'] = $this->Pasien_m-->getpasien()->result_array();
        $this->template->load('template', 'pasien/pasigd');
    }
}
