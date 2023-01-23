<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rawatjalan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Pasien_m');
	}

	public function listpasien()
	{
		$data['paslama'] = $this->Pasien_m->getpaslama();
		$data['dokter'] = $this->Pasien_m->getdokter();
		$this->template->load('template', 'pasien/paslama', $data);
	}

	
	public function rawatjalanDokter()
	{
		$noRM = $this->uri->segment(3);
		$data['pasrj'] = $this->Pasien_m->getpaslamadetail($noRM);
		// dd($data);
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/detail', $data);
	}

	public function perawatrawatjalan()
	{

		// $this->session->set_userdata('$noRM', 'noRM');
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/perawatrawatjalan');
	}

	public function rawatjalanCPPT()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/cppt');
	}

	public function awal()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/awal');
	}

	public function penyakitdalam()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/penyakitdalam');
	}

	public function anak()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/anak');
	}

	public function bedah()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/bedah');
	}
	public function obstetriginekologi()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/obstetriginekologi');
	}

	public function nefrologi()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/nefrologi');
	}

	public function jantung()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/jantung');
	}

	public function kulitkelamin()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/kulitkelamin');
	}

	public function mata()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/mata');
	}

	public function neurologi()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/neurologi');
	}

	public function onkologi()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/onkologi');
	}

	public function paru()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/paru');
	}

	public function tht()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/tht');
	}

	public function urologi()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/urologi');
	}

	public function gigi()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/gigi');
	}

	public function hd()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/hd');
	}

	public function hdulang()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/hdulang');
	}

	public function bedahsyaraf()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/bedahsyaraf');
	}

	public function ortopedi()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/ortopedi');
	}

	public function btkv()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/btkv');
	}

	public function bedahplastik()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/bedahplastik');
	}

	public function kesehatanjiwa()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/kesehatanjiwa');
	}
	public function rehabmedik()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/rehabmedik');
	}
	public function monitoringhd()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/monitoringhd');
	}
}
