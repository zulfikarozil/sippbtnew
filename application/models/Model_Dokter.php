<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_Dokter extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
    }

    public function get($id_dokter = null)
    {
        $this->db->select('*');
        $this->db->from('dokter');
        if ($id_dokter != null) {
            $this->db->where('id', $id_dokter);
        }
        $query = $this->db->get();
        return $query;
    }

    public function data_dokter($id_dokter = null)
    {
        $this->db->select('*');
        $this->db->from('dokter');
        // $this->db->limit(2);
        if ($id_dokter != null) {
            $this->db->where('id_dokter', $id_dokter);
        }
        $query = $this->db->get();
        return $query->result();
    }

    // public function simpan($data)
    // {
    //     $dokter = [
    //         'nama' => $this->input->post('nama'),
    //         'nip' => $this->input->post('nip'),
    //         'alamat' => $this->input->post('alamat'),
    //         'telephone' => $this->input->post('telephone'),
    //         'email' => $this->input->post('email'),
    //         'password' => md5($this->input->post('password')),
    //         'foto' => $data['foto']
    //     ];
    //     $this->db->insert('dokter', $dokter);
    // }

    public function update($data)
    {
        $dokter = [
            'nama' => $data['nama'],
            'nip' => $data['nip'],
            'alamat' => $data['alamat'],
            'tmplahir' => $data['tmplahir'],
            'tgllahir' => $data['tgllahir'],
            'jenkel' => $data['jenkel'],
            'spesialis' => $data['spesialis'],
            'poli_id' => $data['poli_id']
        ];

        $this->db->where('id_dokter', $data['id_dokter']);
        $this->db->update('dokter', $dokter);
    }
}
