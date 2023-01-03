<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rawatjalan extends CI_Controller
{

    public function listpasien()
    {
        $this->template->load('template', 'rawatjalan/listpasien');
    }

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
