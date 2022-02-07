<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_Laporan extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
    }

    public function getdata($data)
    {
        $awal = $data['awal'];
        $akhir = $data['akhir'];
        $query = $this->db->query("SELECT * FROM pasien WHERE date BETWEEN '$awal' AND '$akhir' ORDER BY date ASC");
        return $query->result();
    }
}
