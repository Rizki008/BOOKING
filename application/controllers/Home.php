<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
        // $this->load->model('m_paket');
        //$this->load->model('m_transaksi');
    }

    public function index()
    {
        $data = array(
            'title' => 'Home',
            // 'paket' => $this->m_paket->paket(),
            // 'dekor' => $this->m_home->dekor(),
            // 'diskon_murah' => $this->m_paket->diskon_murah(),
            'reviews' => $this->m_home->reviews(),
            'isi' => 'v_home'
        );
        $this->load->view('layout/frontend/v_wrapper', $data, FALSE);
    }

    public function riviews($id_bayar)
    {
        $data = array(
            'title' => 'Testimoni',
            'reviews' => $this->m_home->reviews($id_bayar),
            'isi' => 'layout/frontend/testimoni/v_testimoni'
        );
        $this->load->view('layout/frontend/v_wrapper', $data, FALSE);
    }
}
