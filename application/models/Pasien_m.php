<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_m extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getpaslama()
    {
        $query = $this->db->query("SELECT a.tanggal, a.nomrm, a.nmpasien, b.nmdokter, a.alamat, c.nama, a.nosep, a.norj, a.nmkons
        FROM paslama a, mtdokter b, tindakan1 c
        WHERE b.kddokter=a.kddokter AND a.kode1 != '010301' AND c.kode1=a.kode1
        ORDER BY a.nomrm ASC LIMIT 10");

        $result = $query->result_array();
        return $result;
    }

    public function getdokter(){

        $query = $this->db->query("SELECT nmdokter, nmahli FROM mtdokter where stsp='p'");

        $result = $query->result();
        return $result;
        // return $query->result();
    }

    public function getpoli(){

        $query = $this->db->query("SELECT kode1, nama FROM tindakan1");

        $result = $query->result_array();
        return $result;
        // return $query->result();
    }

    function dokterbyahli($kode1){    	
        $qry = $this->db->query("SELECT a.kddokter, b.nmdokter FROM paslama a, mtdokter b WHERE b.kddokter=a.kddokter AND kode1='".$kode1."';");
        $rest = $qry->result_array();
		return $rest;
    }

    public function getpaslamadetail($noRM)
    {
        // $query = $this->db->query("SELECT a.tanggal, a.nomrm, a.nmpasien, b.nmdokter, a.alamat, a.noasuransi, a.nosep, a.norj, a.nmkons, a.nik
        // FROM paslama a, mtdokter b
        // WHERE b.kddokter=a.kddokter AND a.nomrm='$noRM'");

        $query = $this->db->query("SELECT a.nomrm, a.nmpasien, c.nama, a.norj, b.kelamin, b.identitas, b.umurthn
        FROM paslama a, pasien b, tindakan1 c
        WHERE b.nomrm=a.nomrm AND a.nomrm='$noRM'  AND c.kode1=a.kode1");

        $result = $query->row_array();
        $this->session->set_userdata($result);
        return $result;
    }

    public function getpasinap()
    {

        $query = $this->db->query("SELECT a.tglmasuk, a.jam, a.nomrm, a.nori, a.asal, a.kdkelas, c.nmkamar, a.nobed, a.nmpasien, b.nmdokter, a.alamat, a.noasuransi, a.nosep, a.norj, a.nmkons
        FROM dafinap a, mtdokter b, mtkamar c
        WHERE b.kddokter=a.kddokter AND c.kdkamar=a.kdkamar
        ORDER BY a.nomrm ASC LIMIT 10");
        $result = $query->result_array();
        return $result;
    }

    
    // public function getpasigd()
    // {

    //     $query = $this->db->query("SELECT a.tglmasuk, a.jam, a.nomrm, a.nori, a.asal, a.kdkelas, c.nmkamar, a.nobed, a.nmpasien, b.nmdokter, a.alamat, a.noasuransi, a.nosep, a.norj, a.nmkons
    //     FROM dafinap a, mtdokter b, mtkamar c
    //     WHERE b.kddokter=a.kddokter AND c.kdkamar=a.kdkamar
    //     ORDER BY a.nomrm ASC LIMIT 10");
    //     $result = $query->result_array();
    //     return $result;
    // }
    
}
