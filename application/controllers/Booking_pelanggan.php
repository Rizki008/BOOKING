<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking_pelanggan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_boking');
        $this->load->model('m_pembayaran');
        $this->load->model('m_lokasi');
        $this->load->model('m_produk');
        $this->load->model('m_home');
        $this->load->model('m_pelanggan');
    }

    public function index()
    {
        $data = array(
            'title' => 'Boking',
            'boking' => $this->m_boking->boking(),
            'data_boking' => $this->m_pembayaran->data_boking(),
            'produk' => $this->m_produk->produk(),
            'boking' => $this->m_pelanggan->boking(),
            'isi' => 'layout/frontend/boking/v_boking'
        );
        $this->load->view('layout/frontend/v_wrapper', $data, FALSE);
    }

    public function booking()
    {
        //proteksi halaman
        $this->pelanggan_login->proteksi_halaman();

        $this->form_validation->set_rules('deskripsi_kerusakan', 'Deskripsi Kerusakan', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Langsung Boking',
                'isi' => 'layout/frontend/boking/v_boking'
            );
            $this->load->view('layout/frontend/v_wrapper', $data, FALSE);
        } else {
            //simpan ke tabel boking
            $data = array(
                'id_pelanggan' => $this->session->userdata('id_pelanggan'),
                'no_boking' => $this->input->post('no_boking'),
                // 'id_provinsi' => $this->input->post('nama_provinsi'),
                // 'id_kabupaten' => $this->input->post('nama_kabupaten'),
                // 'id_kecamatan' => $this->input->post('nama_kecamatan'),
                'id_desa' => $this->input->post('id_desa'),
                'nama_produk' => $this->input->post('nama_produk'),
                'tgl_boking' => date('Y-m-d'),
                'alamat' => $this->session->userdata('alamat'),
                'no_tlpn' => $this->session->userdata('no_tlpn'),
                'deskripsi_kerusakan' => $this->input->post('deskripsi_kerusakan'),
                'status' => '0',
            );
            $this->m_boking->simpan_boking($data);
            $this->session->set_flashdata('pesan', 'Pesanan Berhasil Diproses');
            // $this->cart->destroy();
            redirect('home');
        }
    }

    public function bayar($id_boking)
    {
        $this->form_validation->set_rules('atas_nama', 'Atas Nama', 'required|regex_match[/^([a-zA-Z]|\s)+$/]',  array('pesan' => '%s Mohon Untuk Diisi',));
        $this->form_validation->set_rules('nama_bank', 'Nama Bank', 'required|regex_match[/^([a-zA-Z]|\s)+$/]', array('pesan' => '%s Mohon Untuk Diisi',));
        $this->form_validation->set_rules('no_rek', 'Nomor Rekening', 'required', array('pesan' => '%s Mohon Untuk Diisi',));
        $this->form_validation->set_rules('jumlah_bayar', 'Jumlah Bayar', 'required', array('pesan' => '%s Mohon Untuk Diisi',));

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/bukti_bayar';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
            $config['max_size']     = '2000';
            $this->upload->initialize($config);
            $field_name = "bukti_bayar";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Bayar Boking Servis',
                    'boking' => $this->m_boking->detail_boking($id_boking),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'layout/frontend/boking/v_bayar'
                );
                $this->load->view('layout/frontend/v_wrapper', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/bukti_bayar' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id_boking' => $id_boking,
                    'atas_nama' => $this->input->post('atas_nama'),
                    'nama_bank' => $this->input->post('nama_bank'),
                    'no_rek' => $this->input->post('no_rek'),
                    'jumlah_bayar' => $this->input->post('jumlah_bayar'),
                    'status' => '2',
                    'bukti_bayar' => $upload_data['uploads']['file_name'],
                );
                $this->m_boking->upload_buktibayar($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Di Konfirmasi');
                redirect('pesanan_saya');
            }
        }
        $data = array(
            'title' => 'Pembayaran',
            'boking' => $this->m_boking->detail_boking($id_boking),
            // 'rekening' => $this->m_boking->rekening(),
            'isi' => 'layout/frontend/boking/v_bayar'
        );
        $this->load->view('layout/frontend/v_wrapper', $data, FALSE);
    }
}
