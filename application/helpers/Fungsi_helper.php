<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function check_not_login()
{
    $is_logged_in = get_instance();
    $user_session = $is_logged_in->session->userdata('logged_in');
    if (!$user_session) {
        redirect('login');
    }
}
function getiduser()
{
    $is_logged_in = get_instance();
    $user_session = $is_logged_in->session->userdata('id');
    return $user_session;
}
function getnameuser()
{
    $is_logged_in = get_instance();
    $user_session = $is_logged_in->session->userdata('name');
    return $user_session;
}
function checkadmin()
{
    $ci = get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->role != 1) {
        redirect('login');
    }
}
