<?php

class Pemeriksaan extends CI_Controller
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
        $this->load->model('Model_Pemeriksaan');
        $this->load->model('Model_Pasien');
        $this->load->model('Model_Dokter');
        $this->load->model('Model_Poli');
        $this->load->model('Model_Obat');
    }


    public function index()
    {
        $data['title'] = 'Data Pemeriksaan';

        $data['pasien'] = $this->Model_Pasien->data_pasien();
        $data['content'] = $this->load->view('dashboard/pemeriksaan/index', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
    public function list()
    {
        $data['title'] = 'Data List Periksa';

        $data['pasien'] = $this->Model_Pemeriksaan->list();
        $data['content'] = $this->load->view('dashboard/pemeriksaan/list', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
    public function belum()
    {
        $data['title'] = 'Data Pasien Belum Periksa';

        $data['pasien'] = $this->Model_Pemeriksaan->belum();
        $data['content'] = $this->load->view('dashboard/pemeriksaan/belum', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
    public function sudah()
    {
        $data['title'] = 'Data Pasien Sudah Periksa';

        $data['pasien'] = $this->Model_Pemeriksaan->sudah();
        $data['content'] = $this->load->view('dashboard/pemeriksaan/sudah', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
    // public function add()
    // {
    //     $data['title'] = "Form Tambah Data pasien";
    //     $data['content'] = $this->load->view('dashboard/pasien/add', $data, TRUE);
    //     $this->load->view('template/main', $data, FALSE);
    // }

    public function periksa($id_pasien = NULL)
    {
        $data['title'] = "Form Pemeriksaan";
        $data['dokter'] = $this->Model_Dokter->data_dokter();
        $data['poli'] = $this->Model_Poli->data_poli();
        $data['obat'] = $this->Model_Obat->data_obat();
        $data['pasien'] = $this->db->get_where('pasien', array('id_pasien' => $id_pasien))->row();
        $data['content'] = $this->load->view('dashboard/pemeriksaan/periksa', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
    public function simpan()
    {
        if ($_POST) {
            $this->form_validation->set_error_delimiters('<div class="error-message" style="color: red;">', '</div>');
            $this->form_validation->set_rules('pasien_id', 'Pasien', 'trim|required');
            // $this->form_validation->set_rules('dokter_id', 'Pasien', 'trim|required');
            // $this->form_validation->set_rules('poli_id', 'Pasien', 'trim|required');
            $this->form_validation->set_rules('hasil', 'Pasien', 'trim|required');
            $this->form_validation->set_rules('ket', 'Pasien', 'trim|required');
            // $this->form_validation->set_rules('obat_id', 'Pasien', 'trim|required');


            if ($this->form_validation->run()) {
                $data = [
                    'pasien_id' => $this->input->post('pasien_id'),
                    // 'dokter_id' => $this->input->post('dokter_id'),
                    // 'poli_id' => $this->input->post('poli_id'),
                    'tgl' => date('Y-m-d'),
                    'hasil' => $this->input->post('hasil'),
                    'ket' => $this->input->post('ket'),
                    // 'obat_id' => $this->input->post('obat_id'),
                    'status' => 1
                ];
                // print_r($data);
                // die;
                $insert_id = $this->Model_Pemeriksaan->update($data);
                $this->session->set_flashdata('msg', 'Anda Menambahkan pasien ');
                redirect('pemeriksaan/sudah', 'refresh');
                // if ($insert_id) {
                // }
            } else {
                $data = $_POST;
                // print_r($data);
                // die;
                // $data['title'] = "Form Tambah Data pasien";
                // $data['content'] = $this->load->view('dashboard/pasien/add', $data, TRUE);
                // $this->load->view('template/main', $data, FALSE);
            }
        }
    }
    public function list_periksa($id_pasien = NULL)
    {
        $data['title'] = "Form List Pemeriksaan";
        $data['dokter'] = $this->Model_Dokter->data_dokter();
        $data['poli'] = $this->Model_Poli->data_poli();
        $data['obat'] = $this->Model_Obat->data_obat();
        $data['pasien'] = $this->db->get_where('pasien', array('id_pasien' => $id_pasien))->row();
        $data['content'] = $this->load->view('dashboard/pemeriksaan/list_periksa', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
    public function list_simpan()
    {
        if ($_POST) {
            $this->form_validation->set_error_delimiters('<div class="error-message" style="color: red;">', '</div>');
            $this->form_validation->set_rules('pasien_id', 'Pasien', 'trim|required');
            $this->form_validation->set_rules('dokter_id', 'Pasien', 'trim|required');
            $this->form_validation->set_rules('poli_id', 'Pasien', 'trim|required');
            // $this->form_validation->set_rules('hasil', 'Pasien', 'trim|required');
            // $this->form_validation->set_rules('obat_id', 'Pasien', 'trim|required');


            if ($this->form_validation->run()) {
                $data = [
                    'pasien_id' => $this->input->post('pasien_id'),
                    'dokter_id' => $this->input->post('dokter_id'),
                    'poli_id' => $this->input->post('poli_id'),
                    'tgl' => date('Y-m-d'),
                    // 'hasil' => $this->input->post('hasil'),
                    // 'obat_id' => $this->input->post('obat_id'),
                    'list_status' => 1
                ];
                // print_r($data);
                // die;
                $insert_id = $this->Model_Pemeriksaan->list_update($data);
                $this->session->set_flashdata('msg', 'Anda Menambahkan pasien ');
                redirect('pemeriksaan/belum', 'refresh');
                // if ($insert_id) {
                // }
            } else {
                $data = $_POST;
                // print_r($data);
                // die;
                // $data['title'] = "Form Tambah Data pasien";
                // $data['content'] = $this->load->view('dashboard/pasien/add', $data, TRUE);
                // $this->load->view('template/main', $data, FALSE);
            }
        }
    }
    public function edit($id_pasien = NULL)
    {
        $data['title'] = "Form Pemeriksaan";
        $data['dokter'] = $this->Model_Dokter->data_dokter();
        $data['poli'] = $this->Model_Poli->data_poli();
        $data['obat'] = $this->Model_Obat->data_obat();
        $data['pasien'] = $this->db->get_where('pasien', array('id_pasien' => $id_pasien))->row();
        $data['content'] = $this->load->view('dashboard/pemeriksaan/edit', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
    public function update()
    {
        if ($_POST) {
            $this->form_validation->set_error_delimiters('<div class="error-message" style="color: red;">', '</div>');
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');


            if ($this->form_validation->run()) {
                $data = [
                    'id_pasien' => $this->input->post('id'),
                    'nama' => $this->input->post('nama'),
                    'alamat' => $this->input->post('alamat'),
                    'tmplahir' => $this->input->post('tmplahir'),
                    'tgllahir' => $this->input->post('tgllahir'),
                    'jenkel' => $this->input->post('jenkel'),
                    'spesialis' => $this->input->post('spesialis'),
                    'poli_id' => $this->input->post('poli_id'),
                    'hapus' => 1
                ];
                // print_r($data);
                // die;
                $this->Model_pasien->update($data);
                $this->session->set_flashdata('msg', 'Anda Menambahkan Data pasien ' . $this->input->post('nama_layanan'));
                redirect('pasien', 'refresh');
            } else {

                $data = $_POST;
                $data['title'] = "Form Tambah Data pasien";
                $data['content'] = $this->load->view('dashboard/pemeriksaan/periksa', $data, TRUE);
                $this->load->view('template/main', $data, FALSE);
            }
        }
    }
    public function delete($id_pasien = NULL)
    {
        $get_data = $this->db->get_where('pasien', array('id_pasien' => $id_pasien))->row();
        $deleted = $this->db->delete('pasien', array('id_pasien' => $id_pasien));
        if ($deleted) {
            $this->session->set_flashdata('msg', "Data Siswa Berhasil Dihapus");
            redirect('pasien', 'refresh');
        }
    }

    public function cetak($id_pasien)
    {
        $data['pasien'] = $this->db->get_where('pasien', array('id_pasien' => $id_pasien))->row();
        $data['content'] = $this->load->view('dashboard/pemeriksaan/cetak', $data, TRUE);
        $this->load->view('dashboard/pemeriksaan/cetak', $data, FALSE);
    }
}
