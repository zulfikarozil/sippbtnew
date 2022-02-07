<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library([
            'form_validation'
        ]);
        $this->load->model('Model_Pasien');
    }


    public function index()
    {
        $data['pasien'] = $this->db->query("SELECT max(id_pasien) as kodeTerbesar FROM pasien")->row();
        $data['content'] = $this->load->view('frontend/daftar', $data, TRUE);
        $this->load->view('frontend/main', $data, FALSE);
    }

    public function daftar()
    {
        if ($_POST) {
            $this->form_validation->set_error_delimiters('<div class="error-message" style="color: red;">', '</div>');
            $this->form_validation->set_rules('nama', 'Data', 'trim|required');
            $this->form_validation->set_rules('alamat', 'Data', 'trim|required');
            $this->form_validation->set_rules('jenkel', 'Data', 'trim|required');
            $this->form_validation->set_rules('tmplahir', 'Data', 'trim|required');
            $this->form_validation->set_rules('tgllahir', 'Data', 'trim|required');
            $this->form_validation->set_rules('layanan', 'Data', 'trim|required');
            // $this->form_validation->set_rules('nobpjs', 'Data', 'trim|required');
            $this->form_validation->set_rules('keluhan', 'Data', 'trim|required');
            $this->form_validation->set_rules('nik', 'Data', 'trim|required');
            $this->form_validation->set_rules('pekerjaan', 'Data', 'trim|required');
            $this->form_validation->set_rules('pernikahan', 'Data', 'trim|required');
            $this->form_validation->set_rules('goldarah', 'Data', 'trim|required');

            // $this->form_validation->set_message('is_unique', ' {field} sudah diinput silahkan periksa kembali !');
            $this->form_validation->set_message('required', ' %s masih kosong, silahkan isi !');

            if ($this->form_validation->run()) {
                $no_rekam = $this->input->post('no_rekam');
                if ($no_rekam == null) {
                    $kode = 1;
                } else {

                    $kode = $no_rekam + 1;
                }
                $data = [
                    // 'no_rekam' => 'PKM-' . substr(md5(rand()), 0, 10,),
                    // 'no_rekam' => 'PKM-' . (int) substr($kodeBarang, 3, 3),
                    'no_rekam' => 'PKM-000' . $kode,
                    'nama' => $this->input->post('nama'),
                    'alamat' => $this->input->post('alamat'),
                    'jenkel' => $this->input->post('jenkel'),
                    'tmplahir' => $this->input->post('tmplahir'),
                    'tgllahir' => $this->input->post('tgllahir'),
                    'layanan' => $this->input->post('layanan'),
                    'nobpjs' => $this->input->post('nobpjs'),
                    'keluhan' => $this->input->post('keluhan'),
                    'nik' => $this->input->post('nik'),
                    'pekerjaan' => $this->input->post('pekerjaan'),
                    'pernikahan' => $this->input->post('pernikahan'),
                    'goldarah' => $this->input->post('goldarah'),
                    'date' => date('Y-m-d'),
                    'status' => 0,
                    'hapus' => 1
                ];
                // print_r($data);
                // die;
                $query = $this->db->insert('pasien', $data);
                $last_insert_id = $this->db->insert_id();
                $norekam = $this->db->query("SELECT * FROM pasien WHERE id_pasien = '" . $last_insert_id . "'");
                // $data['pasien'] = $this->db->get_where('pasien', array('id_pasien' => $last_insert_id))->row();
                $rekam = $norekam->row("no_rekam");
                // $data['content'] = $this->load->view('frontend/detail', $data, TRUE);
                // $this->load->view('frontend/main', $data, FALSE);
                // print_r($data);
                // die;
                // $this->Model_Pasien->daftar($data);
                // $this->session->set_flashdata('msg', 'Berhasil Daftar Check Up ');
                redirect('daftar/detail/' . $rekam, 'refresh');
            } else {
                $data['content'] = $this->load->view('frontend/daftar', '', TRUE);
                $this->load->view('frontend/main', $data, FALSE);
            }
        }
    }
    public function detail($rekam = NULL)
    {
        // $data['daftar'] = $this->Model_Pasien->data_daftar();
        // $pasien = $this->db->query("SELECT * FROM pasien");
        $data['pasien'] = $this->db->get_where('pasien', array('no_rekam' => $rekam))->row();
        $data['content'] = $this->load->view('frontend/detail', $data, TRUE);
        $this->load->view('frontend/main', $data, FALSE);
    }
    public function cetak($rekam = NULL)
    {
        $data['pasien'] = $this->db->get_where('pasien', array('no_rekam' => $rekam))->row();
        $data['content'] = $this->load->view('frontend/cetak', $data, TRUE);
        $this->load->view('frontend/cetak', $data, FALSE);
    }

    // public function cetak(){
    //     $data['pasien'] = $this->db->get_where('pasien', array('id_pasien' => $id_pasien))->row();
    //     $this->load->view('frontend');
    // }
}
