<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_boking');
        $this->load->model('m_pembayaran');
        $this->load->model('m_pesan');
        $this->load->model('m_admin');
    }
    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'boking' => $this->m_boking->boking(),
            'isi' => 'v_admin'
        );
        $this->load->view('layout/backand/v_wrapper.php', $data, FALSE);
    }

    public function boking_masuk()
    {
        $data = array(
            'title' => 'Booking',
            'boking' => $this->m_boking->boking(),
            'pembayaran' => $this->m_pembayaran->pembayaran(),
            'isi' => 'layout/backand/boking_masuk/v_boking_masuk'
        );
        $this->load->view('layout/backand/v_wrapper', $data, FALSE);
    }

    public function detail($id_bayar)
    {
        $data = array(
            'id_bayar' => $id_bayar,
            'status' => 4
        );
        $this->m_pembayaran->update_admin($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Di Update');
        redirect('Admin/boking_masuk');
    }

    public function harga($id_bayar)
    {
        $data = array(
            'id_bayar' => $id_bayar,
            'total_bayar' => $this->input->post('total_bayar'),
            //'status' => 5
        );
        $this->m_pembayaran->update_admin($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Di Update');
        redirect('Admin/boking_masuk');
    }
}

/* End of file Admin.php */
