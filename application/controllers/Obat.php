<?php

class Obat extends CI_Controller
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
        $this->load->model('Model_Obat');
    }


    public function index()
    {
        $data['title'] = 'Data Obat';
        $data['obat'] = $this->Model_Obat->data_obat();
        $data['content'] = $this->load->view('dashboard/obat/index', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
    public function add()
    {
        $data['title'] = "Form Tambah Data obat";
        $data['content'] = $this->load->view('dashboard/obat/add', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
    public function simpan()
    {
        if ($_POST) {
            $this->form_validation->set_error_delimiters('<div class="error-message" style="color: red;">', '</div>');
            $this->form_validation->set_rules('nama', 'Nama obat', 'trim|required');


            if ($this->form_validation->run()) {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'golongan' => $this->input->post('golongan'),
                    'jenis' => $this->input->post('jenis'),
                    'kategori' => $this->input->post('kategori'),
                    'kegunaan' => $this->input->post('kegunaan'),
                    'satuan' => $this->input->post('satuan'),
                ];
                // $insert_id = $this->db->insert('obat', $data);
                $this->Model_Obat->simpan($data);
                $this->session->set_flashdata('msg', 'Anda Menambahkan Data obat ' . $this->input->post('nama_layanan'));
                redirect('obat', 'refresh');
            } else {
                $data = $_POST;
                $data['title'] = "Form Tambah Data obat";
                $data['content'] = $this->load->view('dashboard/obat/add', $data, TRUE);
                $this->load->view('template/main', $data, FALSE);
            }
        }
    }
    public function edit($id_obat = NULL)
    {
        $data['title'] = "Form Edit Data Dokter";
        $data['obat'] = $this->db->get_where('obat', array('id_obat' => $id_obat))->row();
        $data['content'] = $this->load->view('dashboard/obat/edit', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
    public function update($id_obat = NULL)
    {
        if ($_POST) {
            $this->form_validation->set_error_delimiters('<div class="error-message" style="color: red;">', '</div>');
            $this->form_validation->set_rules('nama', 'Nama obat', 'trim|required');


            if ($this->form_validation->run()) {
                $data = [
                    'id_obat' => $this->input->post('id'),
                    'nama' => $this->input->post('nama'),
                    'golongan' => $this->input->post('golongan'),
                    'jenis' => $this->input->post('jenis'),
                    'kategori' => $this->input->post('kategori'),
                    'kegunaan' => $this->input->post('kegunaan'),
                    'satuan' => $this->input->post('satuan'),
                ];
                // print_r($data);
                // die;
                $this->Model_Obat->update($data);
                $this->session->set_flashdata('msg', 'Anda Menambahkan Data obat ' . $this->input->post('nama_layanan'));
                redirect('obat', 'refresh');
            } else {
                $data = $_POST;
                $data['title'] = "Form Tambah Data obat";
                $data['content'] = $this->load->view('dashboard/obat/add', $data, TRUE);
                $this->load->view('template/main', $data, FALSE);
            }
        }
    }
    public function delete($id_obat = NULL)
    {
        $get_data = $this->db->get_where('obat', array('id_obat' => $id_obat))->row();
        $deleted = $this->db->delete('obat', array('id_obat' => $id_obat));
        if ($deleted) {
            $this->session->set_flashdata('msg', "Data Obat Berhasil Dihapus");
            redirect('obat', 'refresh');
        }
    }
}
