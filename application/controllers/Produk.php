<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_produk');
        $this->load->model('m_admin');
        $this->load->model('m_pesan');
    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Data Barang Servis',
            'produk' => $this->m_produk->produk(),
            'isi' => 'layout/backand/barang/v_produk'
        );
        $this->load->view('layout/backand/v_wrapper', $data, FALSE);
    }

    // Add a new item
    public function add()
    {
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required|regex_match[/^([a-zA-Z]|\s)+$/]', array('pesan' => '%s Mohon Untuk Diisi'));

        $data = array(
            'nama_produk' => $this->input->post('nama_produk')
        );
        $this->m_produk->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
        redirect('produk');
    }

    //Update one item
    public function update($id_produk = NULL)
    {
        // $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', array('pesan' => '%s Mohon Untuk Diisi'));

        $data = array(
            'id_produk' => $id_produk,
            'nama_produk' => $this->input->post('nama_produk')
        );
        $this->m_produk->update($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
        redirect('produk');
    }

    //Delete one item
    public function delete($id_produk = NULL)
    {
        $data = array(
            'id_produk' => $id_produk,
        );
        $this->m_produk->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('produk');
    }
}

/* End of file Controllername.php */
