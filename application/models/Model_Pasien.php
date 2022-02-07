<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_Pasien extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
    }

    public function get($id_pasien = null)
    {
        $this->db->select('*');
        $this->db->from('pasien');
        if ($id_pasien != null) {
            $this->db->where('id', $id_pasien);
        }
        $query = $this->db->get();
        return $query;
    }

    public function data_pasien($id_pasien = null)
    {
        $this->db->select('*');
        $this->db->from('pasien');
        // $this->db->limit(2);
        if ($id_pasien != null) {
            $this->db->where('id_pasien', $id_pasien);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function simpan($data)
    {
        $pasien = [
            'nama_pasien' => $this->input->post('nama_pasien'),
            'alamat' => $this->input->post('alamat'),
            'telephone' => $this->input->post('telephone'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'foto' => $data['foto']
        ];
        $this->db->insert('pasien', $pasien);
    }

    public function update($data)
    {
        $pasien = [
            'nama' => $data['nama'],
            'alamat' => $data['alamat'],
            'tmplahir' => $data['tmplahir'],
            'tgllahir' => $data['tgllahir'],
            'jenkel' => $data['jenkel'],
            'layanan' => $data['layanan'],
            'nobpjs' => $data['nobpjs'],
            'keluhan' => $data['keluhan'],
            'nik' => $data['nik'],
            'pekerjaan' => $data['pekerjaan'],
            'pernikahan' => $data['pernikahan'],
            'goldarah' => $data['goldarah']
        ];

        $this->db->where('id_pasien', $data['pasien_id']);
        $this->db->update('pasien', $pasien);
    }



    public function daftar($data)
    {
        $this->db->insert('pasien', $data);
        // $insert_id = $this->db->$insert_id();
        // return $insert_id;
    }
}
