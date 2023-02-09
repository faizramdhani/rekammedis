<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mprofilringkas extends CI_Model
{
    private $_table = "profil_ringkas";

    public $id_profilringkas;
    public $namalengkap;
    public $tempatlahir;
    public $alamatlengkap;
    public $rt;
    public $rw;
    public $kel;
    public $kec;
    public $kab;
    public $provinsi;
    public $negara;
    public $tgllahir;
    public $nomrm;
    public $noidentitaslain;
    public $namaibukandung;
    public $suku;
    public $nik;
    public $bahasa;
    public $pendidikan;
    public $pekerjaan;
    public $kelamin;
    public $agama;
    public $statkawin;
    public $telpon;
    public $telponrumah;
    public $alamatdom;
    public $rtdom;
    public $rwdom;
    public $keldom;
    public $kecdom;
    public $kabdom;
    public $provinsidom;
    public $negaradom;
    public $kodeposdom;
    public $kodepos;

    public function __construct()
    {
        $this->load->database();
    }

    public function getprofilringkas($noRM)
    {
        $query = $this->db->query("SELECT a.nomrm, a.nmpasien, c.nama, a.norj, b.kelamin, b.identitas, b.umurthn, a.kode1, b.temlahir, b.tgllahir, b.alamat, b.telpon, b.kelurahan, b.pekerjaan, b.agama, b.pendidikan, b.suku, b.statkawin
        FROM paslama a, pasien b, tindakan1 c
        WHERE b.nomrm=a.nomrm AND a.nomrm='$noRM' AND c.kode1=a.kode1");

        $result = $query->row_array();
        $this->session->set_userdata($result);
        return $result;
    }

    public function save()
    {
        $post = $this->input->post();
        $this->namalengkap = $post["namalengkap"];
        $this->tempatlahir = $post["tempatlahir"];
        $this->alamatlengkap = $post["alamatlengkap"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];
        $this->kel = $post["kel"];
        $this->kec = $post["kec"];
        $this->kab = $post["kab"];
        $this->provinsi = $post["provinsi"];
        $this->negara = $post["negara"];
        $this->kodepos = $post["kodepos"];
        $this->tgllahir = $post["tgllahir"];
        $this->nomrm = $post["nomrm"];
        $this->noidentitaslain = $post["noidentitaslain"];
        $this->namaibukandung = $post["namaibukandung"];
        $this->suku = $post["suku"];
        $this->nik = $post["nik"];
        $this->bahasa = $post["bahasa"];
        $this->pendidikan = $post["pendidikan"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->kelamin = $post["kelamin"];
        $this->agama = $post["agama"];
        $this->statkawin = $post["statkawin"];
        $this->telpon = $post["telpon"];
        $this->telponrumah = $post["telponrumah"];
        $this->alamatdom = $post["alamatdom"];
        $this->rtdom = $post["rtdom"];
        $this->rwdom = $post["rwdom"];
        $this->keldom = $post["keldom"];
        $this->kecdom = $post["kecdom"];
        $this->kabdom = $post["kabdom"];
        $this->kodeposdom = $post["kodeposdom"];
        $this->provinsidom = $post["provinsidom"];
        $this->negaradom = $post["negaradom"];
        return $this->db->insert($this->_table, $this);
    }
}
