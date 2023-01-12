<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rawatinap extends CI_Controller
{
    public function listpasien()
    {
        $this->template->load('template', 'rawatinap/listpasien');
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
}
