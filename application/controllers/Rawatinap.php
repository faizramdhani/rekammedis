<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rawatinap extends CI_Controller
{

    // public function index()
    // {
    //     $this->template->load('template', 'rawatinap/index');
    // }
    public function listpasien()
    {
        $this->template->load('template', 'rawatinap/listpasien');
    }

    public function rawatinapDokter()
    {
        $this->template->load('rawatinap/assesment/template', 'rawatinap/assesment/detail');
    }
}
