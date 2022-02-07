<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!logged_in_user_id()) {
            redirect('auth/login');
            exit;
        }
        // $this->load->model('Model_Pasien');
        $this->load->model('Model_Pemeriksaan');
    }


    public function index()
    {
        $dokter = $this->db->query("SELECT * FROM dokter");
        $obat = $this->db->query("SELECT * FROM obat");
        $pasien = $this->db->query("SELECT * FROM pasien WHERE status = '0'");
        $pasien_semua = $this->db->query("SELECT * FROM pasien");
        $data['title'] = 'Dashboard';
        $data = [
            'dokter' => $dokter->num_rows(),
            'obat' => $obat->num_rows(),
            'pasien' => $pasien->num_rows(),
            'pasien_semua' => $pasien_semua->num_rows(),
        ];
        $data['pasien_baru'] = $this->Model_Pemeriksaan->list();
        $data['content'] = $this->load->view('dashboard', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
}
