<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Igd extends CI_Controller
{
    public function listpasien()
    {
        $this->template->load('template', 'igd/listpasien');
    }

    public function igdDokter()
    {
        $this->template->load('igd/pengkajian/template', 'igd/pengkajian/detail');
    }

    public function awal()
    {
        $this->template->load('igd/pengkajian/template', 'igd/pengkajian/awal');
    }
    
    
}
