<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('pass_utama_bill');
        $this->db->where('nmuser', $post['nmuser']);
        $this->db->where('pswd', $post['pswd']);
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->from('pass_utama_bill');
        if ($id != null) {
            $this->db->where('id_pmedis', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    // public function getData($id = 1)
    // {
    //     $query = $this->db->query("select * from pass_utama_bill ORDER BY id_pmedis ASC limit 10 ");
    //     $result = $query->result_array();

    //     return $result;
    // }
}
