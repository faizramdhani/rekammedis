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
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/awalperawat/Vindex');
	}

	public function create()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/awalperawat/Vcreate');
	}

	public function insert()
	{
		$this->template->load('rawatjalan/assesment/template', 'rawatjalan/assesment/awalperawat/Vadd');
	}

}
