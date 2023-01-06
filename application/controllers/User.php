<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        $this->load->model('user_m');
        
    }

    public function index()
    {
        $data['row'] = $this->user_m->get();

        $this->template->load('template', 'user/user_data', $data);
    }
    public function add()
    {
        $this->template->load('template', 'user/user_add');
    }
}
