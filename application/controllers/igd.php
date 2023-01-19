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
        $this->template->load('igd/assesment/template', 'igd/assesment/detail');
    }

    public function awal()
    {
        $this->template->load('igd/assesment/template', 'igd/assesment/awal');
    }
    
    
}
