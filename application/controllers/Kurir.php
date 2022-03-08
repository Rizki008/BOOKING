<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kurir extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_boking');
        $this->load->model('m_pembayaran');
    }
    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'boking' => $this->m_boking->boking(),
            'isi' => 'v_kurir'
        );
        $this->load->view('layout/kurir/v_wrapper.php', $data, FALSE);
    }

    public function boking_masuk()
    {
        $data = array(
            'title' => 'Booking',
            'boking' => $this->m_boking->boking(),
            'pembayaran' => $this->m_pembayaran->pembayaran(),
            'isi' => 'layout/kurir/boking_masuk/v_boking_masuk'
        );
        $this->load->view('layout/kurir/v_wrapper', $data, FALSE);
    }

    public function detail($no_boking)
    {
        $data = array(
            'title' => 'Pesanan',
            'boking_detail' => $this->m_boking->boking_detail($no_boking),
            // 'diproses_pesanan' => $this->m_pesanan_masuk->diproses_pesanan(),
            // 'proses_kirim' => $this->m_pesanan_masuk->proses_kirim(),
            'isi' =>  'layout/kurir/detail/v_detail'
        );
        $this->load->view('layout/kurir/v_wrapper', $data, FALSE);
    }

    public function proses($id_bayar)
    {
        $data = array(
            'id_bayar' => $id_bayar,
            'status' => 1
        );
        $this->m_pembayaran->update_kurir($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Di proses');
        redirect('kurir/boking_masuk');
    }
}

/* End of file Admin.php */
