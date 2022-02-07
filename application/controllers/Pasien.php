<?php

class Pasien extends CI_Controller
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
    }


    public function index()
    {
        $data['title'] = 'Data Pasien';
        $data['pasien'] = $this->Model_Pasien->data_pasien();
        $data['content'] = $this->load->view('dashboard/pasien/index', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
    // public function add()
    // {
    //     $data['title'] = "Form Tambah Data pasien";
    //     $data['content'] = $this->load->view('dashboard/pasien/add', $data, TRUE);
    //     $this->load->view('template/main', $data, FALSE);
    // }
    public function simpan()
    {
        if ($_POST) {
            $this->form_validation->set_error_delimiters('<div class="error-message" style="color: red;">', '</div>');
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');


            if ($this->form_validation->run()) {
                $data = [
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
                $insert_id = $this->db->insert('pasien', $data);
                if ($insert_id) {
                    $this->session->set_flashdata('msg', 'Anda Menambahkan pasien ' . $this->input->post('nama'));
                    redirect('pasien', 'refresh');
                }
            } else {

                $data = $_POST;
                $data['title'] = "Form Tambah Data pasien";
                $data['content'] = $this->load->view('dashboard/pasien/add', $data, TRUE);
                $this->load->view('template/main', $data, FALSE);
            }
        }
    }
    public function edit($id_pasien = NULL)
    {
        $data['title'] = "Form Edit Data pasien";
        $data['pasien'] = $this->db->get_where('pasien', array('id_pasien' => $id_pasien))->row();
        $data['content'] = $this->load->view('dashboard/pasien/edit', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
    public function update()
    {
        if ($_POST) {
            $this->form_validation->set_error_delimiters('<div class="error-message" style="color: red;">', '</div>');
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');


            if ($this->form_validation->run()) {
                $data = [
                    'pasien_id' => $this->input->post('pasien_id'),
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
                ];
                // print_r($data);
                // die;
                $this->Model_Pasien->update($data);
                $this->session->set_flashdata('msg', 'Anda Menambahkan Data pasien ');
                redirect('pasien', 'refresh');
            } else {

                $data = $_POST;
                // print_r($data);
                // die;
                $data['title'] = "Form Tambah Data pasien";
                $data['content'] = $this->load->view('dashboard/pasien/edit', $data, TRUE);
                $this->load->view('template/main', $data, FALSE);
            }
        }
    }
    public function delete($id_pasien = NULL)
    {
        $get_data = $this->db->get_where('pasien', array('id_pasien' => $id_pasien))->row();
        $deleted = $this->db->delete('pasien', array('id_pasien' => $id_pasien));
        if ($deleted) {
            $this->session->set_flashdata('msg', "Data Pasien Berhasil Dihapus");
            redirect('pasien', 'refresh');
        }
    }
}
