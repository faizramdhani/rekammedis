<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter_m extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
  
    public function getData($id = 1)
    {
        $query = $this->db->query("select * from mtdokter");
        $result = $query->result_array();
        // $this->db->from('ptnmudbadm');
        // if ($id != 1) {
        //     $this->db->where('id_pmedis', $id);
        // }
        // $query = $this->db->get();
        return $result;
    }
}
