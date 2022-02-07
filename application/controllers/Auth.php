<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Auth_Model', 'auth', true);
    }

    public function login()
    {
        if ($this->session->userdata('isLogin')) {
            redirect('dashboard', 'refresh');
        }

        if ($_POST) {
            $data['username'] = $this->input->post('username');
            $data['password'] = md5($this->input->post('password'));

            $check_login = $this->db->get_where('user', array('username' => $data['username'], 'password' => $data['password']))->row();

            if (!empty($check_login)) {

                $array = array(
                    'id' => $check_login->id,
                    'username' => $this->input->post('username'),
                    'isLogin' => true,
                );
                $error = FALSE;
                $this->session->set_userdata($array);
                // create_log('Has been logged in');
                redirect('dashboard', 'refresh');
            }

            $this->session->set_flashdata('error', 'Maaf, username atau password salah!');
            redirect('auth/login', 'refresh');
        }

        $this->load->view('login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
