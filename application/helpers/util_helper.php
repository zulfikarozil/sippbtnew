

<?php

header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('__nilaikhs')) {

    function __nilaikhs($nilai, $sks)
    {
        if ($nilai == 'A') {
            $skor = 4 * $sks;
        } else if ($nilai == 'B') {
            $skor = 3 * $sks;
        } else if ($nilai == 'C') {
            $skor = 2 * $sks;
        } else if ($nilai == 'D') {
            $skor = 1 * $sks;
        } else {
            $skor = 0;
        }
        return $skor;
    }
}

if (!function_exists('logged_in_user_id')) {

    function logged_in_user_id()
    {
        $logged_in_id = 0;
        $CI = &get_instance();
        if ($CI->session->userdata('id')) :
            $logged_in_id = $CI->session->userdata('id');
        endif;
        return $logged_in_id;
    }
}

if (!function_exists('logged_in_member_id')) {

    function logged_in_member_id()
    {
        $logged_in_id = 0;
        $CI = &get_instance();
        if ($CI->session->userdata('id_member')) :
            $logged_in_id = $CI->session->userdata('id_member');
        endif;
        return $logged_in_id;
    }
}


function logged_in_role_id()
{
    $logged_in_role_id = 0;
    $CI = &get_instance();
    if ($CI->session->userdata('role_id')) :
        $logged_in_role_id = $CI->session->userdata('role_id');
    endif;
    return $logged_in_role_id;
}

function logged_in_username()
{
    $logged_in_username = '';
    $CI = &get_instance();
    if ($CI->session->userdata('username')) :
        $logged_in_username = $CI->session->userdata('username');
    endif;
    return $logged_in_username;
}


// if (!function_exists('create_log')) {

//     function create_log($activity = null)
//     {

//         $ci = &get_instance();
//         $data = array();
//         $data['user_id'] = logged_in_user_id();
//         $data['role_id'] =  logged_in_role_id();
//         $data['name'] =  logged_in_username();
//         $data['ip_address'] = $_SERVER['REMOTE_ADDR'];
//         $data['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
//         $data['activity'] = $activity;
//         $data['status'] = 1;
//         $data['created_at'] = date('Y-m-d H:i:s');
//         $data['created_by'] = logged_in_user_id();
//         $data['modified_at'] = date('Y-m-d H:i:s');
//         $data['modified_by'] = logged_in_user_id();
//         $ci->db->insert('activity_logs', $data);
//     }
// }
