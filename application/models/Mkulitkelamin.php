<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mkulitkelamin extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function geticd(){

        $query = $this->db->query("SELECT * FROM icds ORDER BY code ASC LIMIT 100");

        $result = $query->result_array();
        return $result;
        // return $query->result();
    }
}
