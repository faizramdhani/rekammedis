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
}
