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
        $query = $this->db->query("SELECT a.tanggal, a.nomrm, a.nmpasien, b.nmdokter, a.alamat, a.noasuransi, a.nosep, a.norj, a.nmkons
        FROM paslama a, mtdokter b
        WHERE b.kddokter=a.kddokter 
        ORDER BY a.nomrm ASC LIMIT 10");

        $result = $query->result_array();
        return $result;
    }

    public function getpaslamadetail($noRM)
    {
        $query = $this->db->query("SELECT a.tanggal, a.nomrm, a.nmpasien, b.nmdokter, a.alamat, a.noasuransi, a.nosep, a.norj, a.nmkons, a.nik
        FROM paslama a, mtdokter b
        WHERE b.kddokter=a.kddokter AND a.nomrm='$noRM'");

        $result = $query->row_array();
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
}
