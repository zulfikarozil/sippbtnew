<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_Poli extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
    }

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('poli');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function data_poli($id = null)
    {
        $this->db->select('*');
        $this->db->from('poli');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function simpan($data)
    {
        $poli = [
            'nama' => $data['nama'],
            'des' => $data['des'],
            'hapus' => '1'
        ];
        $this->db->insert('poli', $poli);
    }

    public function update($data)
    {
        $poli = [
            'nama' => $data['nama'],
            'des' => $data['des']
        ];

        $this->db->where('id_poli', $data['id_poli']);
        $this->db->update('poli', $poli);
    }

    function duplicate_check($email, $id = null)
    {
        if ($id) {
            $this->db->where_not_in('id', $id);
        }
        $this->db->where('email', $email);
        return $this->db->get('poli')->num_rows();
    }
}
