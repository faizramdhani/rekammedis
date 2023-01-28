<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mcppt extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
<<<<<<< HEAD
    public function getcppt($noRM)
    {
        $query = $this->db->query("SELECT a.nomrm, a.nmpasien, c.nama, a.norj, b.kelamin, b.identitas, b.umurthn, a.kode1
        FROM paslama a, pasien b, tindakan1 c
        WHERE b.nomrm=a.nomrm AND a.nomrm='$noRM'  AND c.kode1=a.kode1");

        $result = $query->row_array();
        $this->session->set_userdata($result);
        return $result;
=======

    public function geticd(){

        $query = $this->db->query("SELECT * FROM icds ORDER BY code ASC LIMIT 100");

        $result = $query->result_array();
        return $result;
        // return $query->result();
>>>>>>> 205847653b3bb8f402f7e5aa99723bddd8442bc9
    }
}
