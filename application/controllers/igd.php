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

    public function igdDokter()
    {
        $noRM = $this->uri->segment(3);
		$data['pasigd'] = $this->Pasien_m->getpasigddetail($noRM);
		// dd($data);
	
        $this->template->load('igd/assesment/template', 'igd/assesment/detail', $data );
    }

    public function awal()
    {
        $this->template->load('igd/assesment/template', 'igd/assesment/awal');
    }

    // public function triase()
    // {
    //     $this->template->load('igd/assesment/template', 'igd/assesment/triase');
    // }

    public function perawatigd()
    {
        $this->template->load('igd/assesment/template', 'igd/assesment/perawatigd');
    }

    public function igdCPPT()
    {
        $this->template->load('igd/assesment/template', 'igd/assesment/cppt');
    }
}
