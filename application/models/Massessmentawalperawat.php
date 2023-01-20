<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Massessmentawalperawat extends CI_Model
{
    private $_table = "pengkajianawal_perawatrj";

    public $id_pengkajianawalperawat;
    // public $asal_pasien;
    public $anamnesis;
    // public $riwayat_penyakit;
    // public $riwayat_penggunaan_obat;
    // public $riwayat_alergi;
    // public $tb;
    // public $bb;
    // public $gcs;
    // public $td;
    // public $suhu;
    // public $nadi;
    // public $rr;
    // public $gda;
    // public $spo2;
    // public $persepsi_penyakit_pasien;
    // public $ekspresi_penyakit_pasien;
    // public $gangguan_konsepdini;
    // public $reaksi_anak_interaksi;
    // public $pendidikan;
    // public $pekerjaan;
    // public $parameter_gizi1;
    // public $parameter_gizi2;
    // public $parameter_gizi3;
    // public $resiko_jatuh1;
    // public $resiko_jatuh2;
    // public $resiko_jatuh3;
    // public $nyeri;
    // public $nyeri_gmbr;
    // public $skala;
    // public $rangsang_defaksi;
    // public $rangsa_berkemih;
    // public $membersihkan_diri;
    // public $penggunaan_jamban;
    // public $makan;
    // public $berubah_sikap;
    // public $berpindah_berjalan;
    // public $memakai_baju;
    // public $mandi;
    // public $total_fungsional;
    // public $bicara;
    // public $gangguan_bicara;
    // public $perlu_penerjemah;
    // public $hambatan_belajar;
    // public $kebutuhan_belajar;
    // public $diagnosa_keperawatan;
    // public $rencana_keperawatan;


    public function __construct()
    {
        $this->load->database();
    }

    public function rules()
    {
        return [
            [
                'field' => 'anamnesis',  //samakan dengan atribute name pada tags input
                'label' => 'anamnesis',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required'
            ]
            ];
    }

    public function save1()
    {
        $data = array(
            "anamnesis" => $this->input->post('anamnesis'),
        );
        return $this->db->insert($this->table, $data);
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pengkajianawalperawat = uniqid();
        // $this->asal_pasien = $post["asalpasien"];
        $this->anamnesis = $post["anamnesis"];
        // $this->riwayat_penyakit = $post["riwayat_penyakit"];
        // $this->riwayat_penggunaan_obat = $post["riwayat_penggunaan_obat"];
        // $this->riwayat_alergi = $post["riwayat_alergi"];
        // $this->tb = $post["tb"];
        // $this->bb = $post["bb"];
        // $this->gcs = $post["gcs"];
        // $this->td = $post["td"];
        // $this->suhu = $post["suhu"];
        // $this->nadi = $post["nadi"];
        // $this->rr = $post["rr"];
        // $this->gda = $post["gda"];
        // $this->spo2 = $post["spo2"];
        // $this->persepsi_penyakit_pasien = $post["persepsi_penyakit_pasien"];
        // $this->ekspresi_penyakit_pasien = $post["ekspresi_penyakit_pasien"];
        // $this->gangguan_konsepdini = $post["gangguan_konsepdini"];
        // $this->reaksi_anak_interaksi = $post["reaksi_anak_interaksi"];
        // $this->pendidikan = $post["pendidikan"];
        // $this->parameter_gizi1 = $post["parameter_gizi1"];
        // $this->parameter_gizi2 = $post["parameter_gizi2"];
        // $this->parameter_gizi3 = $post["parameter_gizi3"];
        // $this->resiko_jatuh1 = $post["resiko_jatuh1"];
        // $this->resiko_jatuh2 = $post["resiko_jatuh2"];
        // $this->resiko_jatuh3 = $post["resiko_jatuh3"];
        // $this->nyeri = $post["nyeri"];
        // $this->nyeri_gmbr = $post["nyeri_gmbr"];
        // $this->skala = $post["skala"];
        // $this->rangsang_defaksi = $post["rangsang_defaksi"];
        // $this->rangsa_berkemih = $post["rangsa_berkemih"];
        // $this->membersihkan_diri = $post["membersihkan_diri"];
        // $this->penggunaan_jamban = $post["penggunaan_jamban"];
        // $this->makan = $post["makan"];
        // $this->berubah_sikap = $post["berubah_sikap"];
        // $this->berpindah_berjalan = $post["berpindah_berjalan"];
        // $this->memakai_baju = $post["memakai_baju"];
        // $this->mandi = $post["mandi"];
        // $this->total_fungsional = $post["total_fungsional"];
        // $this->bicara = $post["bicara"];
        // $this->gangguan_bicara = $post["gangguan_bicara"];
        // $this->perlu_penerjemah = $post["perlu_penerjemah"];
        // $this->hambatan_belajar = $post["hambatan_belajar"];
        // $this->kebutuhan_belajar = $post["kebutuhan_belajar"];
        // $this->diagnosa_keperawatan = $post["diagnosa_keperawatan"];
        // $this->rencana_keperawatan = $post["rencana_keperawatan"];
        return $this->db->insert($this->_table, $this);
    }

    public function getassessmentawalperawat()
    {
        $query = $this->db->query("SELECT * FROM pengkajianawal_perawatrj");

        $result = $query->result_array();
        return $result;
    }

}
