<?php

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!logged_in_user_id()) {
            redirect('auth/login');
            exit;
        }
        $this->load->library([
            'form_validation'
        ]);
        $this->load->model('Model_Pasien');
        $this->load->model('Model_Laporan');
    }


    public function index()
    {
        $data['title'] = 'Laporan Pasien';

        $data['pasien'] = $this->Model_Pasien->data_pasien();
        $data['content'] = $this->load->view('dashboard/laporan/index', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }



    public function cetak()
    {
        if ($_POST) {
            $this->form_validation->set_error_delimiters('<div class="error-message" style="color: red;">', '</div>');
            $this->form_validation->set_rules('awal', 'awal', 'trim|required');
            $this->form_validation->set_rules('akhir', 'akhir', 'trim|required');


            if ($this->form_validation->run()) {
                $data = [
                    'awal' => $this->input->post('awal'),
                    'akhir' => $this->input->post('akhir'),
                    // 'awal' => date('Y-m-d'),
                    // 'akhir' => date('Y-m-d')
                ];
                // print_r($data);
                // die;
                $data['pasien'] = $this->Model_Laporan->getdata($data);
                $this->load->view('dashboard/laporan/cetak', $data, FALSE);

                // $title = "Laporan_pemasukan_keseluruhan";

                // $this->load->library("pdf");
                // $data['pasien'] = $this->Model_Laporan->getdata($data);
                // $this->pdf->setPaper('A4', 'landscape');
                // $this->pdf->filename = $title;
                // $this->pdf->load_view('laporan/template', $data);
            } else {
                $data = $_POST;
                $data['title'] = "Laporan  Pasien";
                $data['content'] = $this->load->view('dashboard/laporan/index', $data, TRUE);
                $this->load->view('template/main', $data, FALSE);
            }
        }
    }
}
