<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ccpptigd extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');

		$this->load->model('Mcppt');
	}

	public function index()
	{
		$noRM = $this->uri->segment(3);
		$data['cppt'] = $this->Mcppt->getcppt($noRM);

		$this->template->load('igd/template', 'igd/cppt/Vindex', $data);
	}

	public function create()
	{
		// $this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/awalperawat/Vcreate');
	}

	public function insert()
	{
		// $product = $this->Massessmentawalperawat;
		// $product->save();
		// $this->session->set_flashdata('success', 'Berhasil disimpan');
		// $this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/awalperawat/Vindex');
	}

	public function add()
	{
		// $AssessmentAwal = $this->Massessmentawalperawat; //objek model
		// $validation = $this->form_validation; //objek form validation
		// $validation->set_rules($AssessmentAwal->rules()); //menerapkan rules validasi pada mahasiswa_model
		// //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada mahasiswa_model
		// if ($validation->run()) {
		//     $AssessmentAwal->save1();
		// }
		// $this->template->load('rawatjalan/assesment/template', 'rawatjalan/pasien/paslama');
	}

	public function show()
	{
		// $noIdAssessmentawalperawat = $this->uri->segment(3);
		// $data['assessmentdetail'] = $this->Massessmentawalperawat->getassessmentawaldetail($noIdAssessmentawalperawat);
		// // dd($data);
		// $this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/awalperawat/Vread', $data);
	}
}
