<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_Obat extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
    }

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('obat');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function data_obat($id = null)
    {
        $this->db->select('*');
        $this->db->from('obat');
        // $this->db->limit(2);
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function simpan($data)
    {
        $obat = [
            'nama' => $data['nama'],
            'kegunaan' => $data['kegunaan'],
            'golongan' => $data['golongan'],
            'jenis' => $data['jenis'],
            'kategori' => $data['kategori'],
            'satuan' => $data['satuan'],
            'hapus' => '1'
        ];
        $this->db->insert('obat', $obat);
    }

    public function update($data)
    {
        $obat = [
            'nama' => $data['nama'],
            'kegunaan' => $data['kegunaan'],
            'golongan' => $data['golongan'],
            'jenis' => $data['jenis'],
            'kategori' => $data['kategori'],
            'satuan' => $data['satuan'],
        ];

        $this->db->where('id_obat', $data['id_obat']);
        $this->db->update('obat', $obat);
    }
}
