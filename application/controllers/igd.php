<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Igd extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Pasien_m');
	}
    
    public function pasigd()
    {
        $data['paslama'] = $this->Pasien_m->getpaslama();
        $data['dokter'] = $this->Pasien_m->getdokter();

        $this->template->load('template', 'pasien/pasigd', $data);
    }

    public function igdDokter()
    {
        $this->template->load('igd/assesment/template', 'igd/assesment/detail');
    }

    public function triase()
    {
        $this->template->load('igd/assesment/template', 'igd/assesment/triase');
    }

    public function awal()
    {
        $this->template->load('igd/assesment/template', 'igd/assesment/awal');
    }

    public function igdCPPT()
	{
		$this->template->load('igd/assesment/template', 'igd/assesment/cppt');
	}
}
