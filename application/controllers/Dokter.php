<?php

class Dokter extends CI_Controller
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
        $this->load->model('Model_Dokter');
    }


    public function index()
    {
        $data['title'] = 'Data Dokter';
        $data['dokter'] = $this->Model_Dokter->data_dokter();
        $data['content'] = $this->load->view('dashboard/dokter/index', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
    public function add()
    {
        $data['title'] = "Form Tambah Data Dokter";
        $data['content'] = $this->load->view('dashboard/dokter/add', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
    public function simpan()
    {
        if ($_POST) {
            $this->form_validation->set_error_delimiters('<div class="error-message" style="color: red;">', '</div>');
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');


            if ($this->form_validation->run()) {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'nip' => $this->input->post('nip'),
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
                $insert_id = $this->db->insert('dokter', $data);
                if ($insert_id) {
                    $this->session->set_flashdata('msg', 'Anda Menambahkan Dokter ' . $this->input->post('nama'));
                    redirect('dokter', 'refresh');
                }
            } else {

                $data = $_POST;
                $data['title'] = "Form Tambah Data dokter";
                $data['content'] = $this->load->view('dashboard/dokter/add', $data, TRUE);
                $this->load->view('template/main', $data, FALSE);
            }
        }
    }
    public function edit($id_dokter = NULL)
    {
        $data['title'] = "Form Edit Data Dokter";
        $data['dokter'] = $this->db->get_where('dokter', array('id_dokter' => $id_dokter))->row();
        $data['content'] = $this->load->view('dashboard/dokter/edit', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
    public function update()
    {
        if ($_POST) {
            $this->form_validation->set_error_delimiters('<div class="error-message" style="color: red;">', '</div>');
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');


            if ($this->form_validation->run()) {
                $data = [
                    'id_dokter' => $this->input->post('id'),
                    'nama' => $this->input->post('nama'),
                    'nip' => $this->input->post('nip'),
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
                $this->Model_Dokter->update($data);
                $this->session->set_flashdata('msg', 'Anda Menambahkan Data Dokter ' . $this->input->post('nama_layanan'));
                redirect('dokter', 'refresh');
            } else {

                $data = $_POST;
                $data['title'] = "Form Edit Data dokter";
                $data['content'] = $this->load->view('dashboard/dokter/edit', $data, TRUE);
                $this->load->view('template/main', $data, FALSE);
            }
        }
    }
    public function delete($id_dokter = NULL)
    {
        $get_data = $this->db->get_where('dokter', array('id_dokter' => $id_dokter))->row();
        $deleted = $this->db->delete('dokter', array('id_dokter' => $id_dokter));
        if ($deleted) {
            $this->session->set_flashdata('msg', "Data Siswa Berhasil Dihapus");
            redirect('dokter', 'refresh');
        }
    }
}
