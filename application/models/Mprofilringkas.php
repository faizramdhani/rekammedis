<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mprofilringkas extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getprofilringkas($noRM)
    {
        $query = $this->db->query("SELECT a.nomrm, a.nmpasien, c.nama, a.norj, b.kelamin, b.identitas, b.umurthn
        FROM paslama a, pasien b, tindakan1 c
        WHERE b.nomrm=a.nomrm AND a.nomrm='$noRM'  AND c.kode1=a.kode1");

        $result = $query->row_array();
        $this->session->set_userdata($result);
        return $result;
    }   
}
