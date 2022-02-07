<?php

class Poli extends CI_Controller
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
        $this->load->model('Model_Poli');
    }


    public function index()
    {
        $data['title'] = 'Data Unit Poli';
        $data['poli'] = $this->Model_Poli->data_poli();
        $data['content'] = $this->load->view('dashboard/poli/index', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
    public function add()
    {
        $data['title'] = "Form Tambah Data Poli";
        $data['content'] = $this->load->view('dashboard/poli/add', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
    public function simpan()
    {
        if ($_POST) {
            $this->form_validation->set_error_delimiters('<div class="error-message" style="color: red;">', '</div>');
            $this->form_validation->set_rules('nama', 'Nama Poli', 'trim|required');


            if ($this->form_validation->run()) {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'des' => $this->input->post('des'),
                ];
                // $insert_id = $this->db->insert('poli', $data);
                $this->Model_Poli->simpan($data);
                $this->session->set_flashdata('msg', 'Anda Menambahkan Data Poli ' . $this->input->post('nama_layanan'));
                redirect('poli', 'refresh');
            } else {
                $data = $_POST;
                $data['title'] = "Form Tambah Data Poli";
                $data['content'] = $this->load->view('dashboard/poli/add', $data, TRUE);
                $this->load->view('template/main', $data, FALSE);
            }
        }
    }
    public function edit($id = NULL)
    {
        $data['title'] = "Form Edit Data Dokter";
        $data['poli'] = $this->db->get_where('poli', array('id_poli' => $id))->row();
        $data['content'] = $this->load->view('dashboard/poli/edit', $data, TRUE);
        $this->load->view('template/main', $data, FALSE);
    }
    public function update($id_poli = NULL)
    {
        if ($_POST) {
            $this->form_validation->set_error_delimiters('<div class="error-message" style="color: red;">', '</div>');
            $this->form_validation->set_rules('nama', 'Nama Poli', 'trim|required');


            if ($this->form_validation->run()) {
                $data = [
                    'id_poli' => $this->input->post('id'),
                    'nama' => $this->input->post('nama'),
                    'des' => $this->input->post('des'),
                ];
                // print_r($data);
                // die;
                $this->Model_Poli->update($data);
                $this->session->set_flashdata('msg', 'Anda Menambahkan Data Poli ' . $this->input->post('nama_layanan'));
                redirect('poli', 'refresh');
            } else {
                $data = $_POST;
                $data['title'] = "Form Tambah Data Poli";
                $data['content'] = $this->load->view('dashboard/poli/add', $data, TRUE);
                $this->load->view('template/main', $data, FALSE);
            }
        }
    }
    public function delete($id_poli = NULL)
    {
        $get_data = $this->db->get_where('poli', array('id_poli' => $id_poli))->row();
        $deleted = $this->db->delete('poli', array('id_poli' => $id_poli));
        if ($deleted) {
            $this->session->set_flashdata('msg', "Data Poli Berhasil Dihapus");
            redirect('poli', 'refresh');
        }
    }
}
