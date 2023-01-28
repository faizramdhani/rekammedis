<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_m');
    }

    public function paslama()
    {
        $data['paslama'] = $this->Pasien_m->getpaslama();
        $data['poli'] = $this->Pasien_m->getpoli();
        $this->template->load('template', 'pasien/paslama', $data);
    }

    public function pasinap()
    {
        $data['pasinap'] = $this->Pasien_m->getpasinap();
        $data['poli'] = $this->Pasien_m->getpoli();

        $this->template->load('template', 'pasien/pasinap', $data);
    }

    public function pasigd()
    {
        $data['pasigd'] = $this->Pasien_m->getpasigd();
        $data['poli'] = $this->Pasien_m->getpoli();
        
        $this->template->load('template', 'pasien/pasigd', $data);
    }

    function searchdokter()
	{				
	    $postData = $this->input->post();
	    // print_r($postData);
        $data = $this->Pasien_m->dokterbyahli($postData['kode1']); 
		echo json_encode($data); 
	}

  
}
