<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function login()
    {
        check_already_login();
        $this->load->view('auth/login');
    }
    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $this->load->model('user_m');
            $query = $this->user_m->login($post);
            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'id_pmedis' => $row->id_pmedis,
                    'level_erm' => $row->level_erm
                );
                $this->session->set_userdata($params);
                echo "<script>
          alert('Login Berhasil');
          window.location='" . site_url('dashboard') . "';
          </script>";
            } else {
                echo "<script>
          alert('Login Gagal');
          window.location='" . site_url('auth/login') . "';
          </script>";
            }
        }
    }
    public function logout()
    {
        $params = array('id_pmedis', 'level_erm');
        $this->session->unset_userdata($params);
        redirect('auth/login');
    }
}
