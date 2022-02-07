<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_Pemeriksaan extends CI_Model
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

    public function list($id_pasien = null)
    {
        $this->db->select('*');
        $this->db->from('pasien');
        $this->db->where('list_status', 0);
        $this->db->where('status', 0);
        $this->db->order_by("id_pasien", "asc");
        if ($id_pasien != null) {
            $this->db->where('id_pasien', $id_pasien);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function belum($id_pasien = null)
    {
        $this->db->select('*');
        $this->db->from('pasien');
        $this->db->where('list_status', 1);
        $this->db->where('status', 0);
        $this->db->order_by("id_pasien", "asc");
        if ($id_pasien != null) {
            $this->db->where('id_pasien', $id_pasien);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function sudah($id_pasien = null)
    {
        $this->db->select('*');
        $this->db->from('pasien');
        $this->db->where('status', 1);
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
            // 'dokter_id' => $data['dokter_id'],
            // 'poli_id' => $data['poli_id'],
            'tgl' => $data['tgl'],
            'hasil' => $data['hasil'],
            'status' => $data['status'],
            'ket' => $data['ket'],
        ];

        $this->db->where('id_pasien', $data['pasien_id']);
        $this->db->update('pasien', $pasien);
    }
    public function list_update($data)
    {
        $pasien = [
            'dokter_id' => $data['dokter_id'],
            'poli_id' => $data['poli_id'],
            'tgl' => $data['tgl'],
            'list_status' => $data['list_status'],

        ];

        $this->db->where('id_pasien', $data['pasien_id']);
        $this->db->update('pasien', $pasien);
    }

    function duplicate_check($email, $id_pasien = null)
    {
        if ($id_pasien) {
            $this->db->where_not_in('id', $id_pasien);
        }
        $this->db->where('email', $email);
        return $this->db->get('pasien')->num_rows();
    }

    public function daftar($data)
    {
        $this->db->insert('pasien', $data);
        // $insert_id = $this->db->$insert_id();
        // return $insert_id;
    }
}
