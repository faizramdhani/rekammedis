<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cassessmentawalperawatigd extends CI_Controller
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
		
		// igd
		$this->template->load('igd/template', 'igd/assesment/awalperawat/anak/Vindex', $data);

	}
	
	public function create()
	{
		// $this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/awalperawat/Vcreate');

		// igd
		$this->template->load('igd/template', 'igd/assesment/awalperawat/anak/Vcreate');
	}

	public function insert()
	{
        $product = $this->Massessmentawalperawat;
		$response = $product->save1();
		print_r($response);
		// $this->session->set_flashdata('success', 'Berhasil disimpan');
		// $this->session->set_flashdata('msg', 'triase ok');
      

		// // igd
		// $this->template->load('igd/template', 'igd/assesment/awalperawat/anak/Vindex');
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
		$this->template->load('igd/template', 'igd/pasien/pasigd');
    }

	public function show()
	{
		$noIdAssessmentawalperawat = $this->uri->segment(3);
		$data['assessmentdetail'] = $this->Massessmentawalperawat->getassessmentawaldetail($noIdAssessmentawalperawat);
		// dd($data);

		// igd
		$this->template->load('igd/template', 'igd/assesment/awalperawat/Vread', $data);
	}

}
