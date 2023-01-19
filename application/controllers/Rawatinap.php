<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rawatinap extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_m');
    }

    public function listpasien()
    {
        $data['pasinap'] = $this->Pasien_m->getpasinap();
        $this->template->load('template', 'pasien/pasinap', $data);
    }

    public function rawatinapDokter()
    {
        $this->template->load('rawatinap/general/template', 'rawatinap/general/detail');
    }
    public function suratpulpak()
    {
        $this->template->load('rawatinap/general/template', 'rawatinap/general/pulpak');
    }
    public function preadmisi()
    {
        $this->template->load('rawatinap/general/template', 'rawatinap/general/preadmisi');
    }
    public function generalconsent()
    {
        $this->template->load('rawatinap/general/template', 'rawatinap/general/generalconsent');
    }

    public function consent()
    {
        $this->template->load('rawatinap/general/template', 'rawatinap/general/consent');
    }

    public function kronis()
    {
        $this->template->load('rawatinap/general/template', 'rawatinap/general/kronis');
    }
}
