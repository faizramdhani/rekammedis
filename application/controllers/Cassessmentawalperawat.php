<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cassessmentawalperawat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');

		$this->load->model('Massessmentawalperawat');
	}

	public function index()
	{
		$data['assessmentawalperawat'] = $this->Massessmentawalperawat->getassessmentawalperawat();
		$this->template->load('rawatjalan/template', 'rawatjalan/assesment/awalperawat/Vindex', $data);
	}

	public function create()
	{
		$this->template->load('rawatjalan/template', 'rawatjalan/assesment/awalperawat/Vcreate');
	}

	public function insert()
	{
        $product = $this->Massessmentawalperawat;
		$product->save();
		$this->session->set_flashdata('success', 'Berhasil disimpan');
        $this->template->load('rawatjalan/template', 'rawatjalan/assesment/awalperawat/Vindex');
    }

	public function add()
    {
        $AssessmentAwal = $this->Massessmentawalperawat; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($AssessmentAwal->rules()); //menerapkan rules validasi pada mahasiswa_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada mahasiswa_model
        if ($validation->run()) {
            $AssessmentAwal->save1();
        }
		$this->template->load('rawatjalan/template', 'rawatjalan/pasien/paslama');
    }

	public function show()
	{
		$noIdAssessmentawalperawat = $this->uri->segment(3);
		$data['assessmentdetail'] = $this->Massessmentawalperawat->getassessmentawaldetail($noIdAssessmentawalperawat);
		// dd($data);
		$this->template->load('rawatjalan/template', 'rawatjalan/assesment/awalperawat/Vread', $data);
	}

}
