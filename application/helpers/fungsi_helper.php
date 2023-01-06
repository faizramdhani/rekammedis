<?php
function check_already_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_pmedis');
    if ($user_session) {
        redirect('dashboard');
    }
}
function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_pmedis');
    if (!$user_session) {
        redirect('auth/login');
    }

    function check_admin()
    {
        $ci = &get_instance();
        $ci->load->library('fungsi');
        if ($ci->fungsi->user_login()->level_erm != 1) {
            redirect('dashboard');
        }
        // else if($ci->fungsi->user_login()->level_erm != 2){
        //     redirect('');
        // }
    }
}
