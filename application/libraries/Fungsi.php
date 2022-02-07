<?php

class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('Member_Model');
        $userid = $this->ci->session->userdata('id_member');
        $user_data = $this->ci->Member_Model->get($userid)->row();
        return $user_data;
    }
}
