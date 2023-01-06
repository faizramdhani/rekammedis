<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rawatjalan extends CI_Controller
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

    // public function listpasien()
    // {
    //     $this->template->load('template', 'rawatjalan/listpasien');
    // }

    public function rawatjalanDokter()
    {
        $this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/detail');
    }

    public function rawatjalanCPPT()
    {
        $this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/cppt');
    }

    public function perawatrawatjalan()
    {
        $this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/perawatrawatjalan');
    }

  
}
