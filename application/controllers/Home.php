<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        // $parser = [
        //     'judul' => 'Selamat Datang',
        //     'isi' => $this->load->view('dashboard/home', '', true)
        // ];
        // $this->parser->parse('template/main', $parser);
        $this->load->view('frontend/home');
    }
}
