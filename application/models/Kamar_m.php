<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kamar_m extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }


    public function getData($id = 1)
    {
        $query = $this->db->query("select * from mtkamar ");
        $result = $query->result_array();

        return $result;
    }
}
