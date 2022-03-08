<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Boking_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_boking');
        $this->load->model('m_pesan');
        $this->load->model('m_admin');
    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => "Data boking",
            // 'boking' => $this->m_boking->boking(),
            // 'total_paket' => $this->m_boking->total_paket(),
            'isi' => 'layout/backand/boking/v_boking'
        );
        $this->load->view('layout/backand/v_wrapper', $data, FALSE);
    }
}

/* End of file Paket.php */
