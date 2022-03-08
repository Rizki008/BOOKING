<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pesan');
        $this->load->model('m_admin');
        $this->load->model('m_lokasi');
    }
    public function index()
    {
        $data = array(
            'title' => 'Data Lokasi',
            'provinsi' => $this->m_lokasi->provinsi(),
            'kabupaten' => $this->m_lokasi->kabupaten(),
            'kecamatan' => $this->m_lokasi->kecamatan(),
            'desa' => $this->m_lokasi->desa(),
            'isi' => 'layout/backand/lokasi/v_lokasi'
        );
        $this->load->view('layout/backand/v_wrapper', $data, FALSE);
    }

    // crud provinsi
    public function add()
    {
        $this->form_validation->set_rules('nama_provinsi', 'Nama Provinsi', 'required|regex_match[/^([a-zA-Z]|\s)+$/]', array('required' => '%s Mohon Untuk Diisi!!!'));

        $data = array(
            'nama_provinsi' => $this->input->post('nama_provinsi'),
        );
        $this->m_lokasi->add($data);
        $this->session->set_flashdata('pesan', 'Provinsi Berhasil Ditambahkan!!!');
        redirect('lokasi');
    }
    public function update($id_provinsi = NULL)
    {
        $data = array(
            'id_provinsi' => $id_provinsi,
            'nama_provinsi' => $this->input->post('nama_provinsi'),
        );
        $this->m_lokasi->update($data);
        $this->session->set_flashdata('pesan', 'Provinsi Berhasil Diedit!!!');
        redirect('lokasi');
    }
    public function delete($id_provinsi = NULL)
    {
        $data = array(
            'id_provinsi' => $id_provinsi
        );
        $this->m_lokasi->delete($data);
        $this->session->set_flashdata('pesan', 'Provinsi Berhasil Didelet!!!');
        redirect('lokasi');
    }
    // and crud provinsi

    // crud kabupate
    public function add_kabupaten()
    {
        $this->form_validation->set_rules('nama_kabupaten', 'Nama Kabupaten', 'required|regex_match[/^([a-zA-Z]|\s)+$/]', array('required' => '%s Mohon Untuk Diisi!!!'));
        $this->form_validation->set_rules('id_provinsi', 'Nama Kabupaten', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'provinsi' => $this->m_lokasi->kabupaten(),
                'isi' => 'layout/backand/lokasi/crud_kabupaten/v_add'
            );
            $this->load->view('layout/backand/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'nama_kabupaten' => $this->input->post('nama_kabupaten'),
                'id_provinsi' => $this->input->post('id_provinsi'),
            );
            $this->m_lokasi->add_kabupaten($data);
            $this->session->set_flashdata('pesan', 'kabupaten Berhasil Ditambahkan!!!');
            redirect('lokasi');
        }
    }
    public function update_kabupaten($id_kabupaten = NULL)
    {
        $this->form_validation->set_rules('nama_kabupaten', 'Nama Kabupaten', 'required|regex_match[/^([a-zA-Z]|\s)+$/]', array('required' => '%s Mohon Untuk Diisi!!!'));
        $this->form_validation->set_rules('id_provinsi', 'Nama Kabupaten', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'provinsi' => $this->m_lokasi->kabupaten(),
                'kabupaten' => $this->m_lokasi->detail($id_kabupaten),
                'isi' => 'layout/backand/lokasi/crud_kabupaten/v_add'
            );
            $this->load->view('layout/backand/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'id_kabupaten' => $id_kabupaten,
                'nama_kabupaten' => $this->input->post('nama_kabupaten'),
                'id_provinsi' => $this->input->post('id_provinsi'),
            );
            $this->m_lokasi->update_kabupaten($data);
            $this->session->set_flashdata('pesan', 'kabupaten Berhasil Ditambahkan!!!');
            redirect('lokasi');
        }

        $data = array(
            'provinsi' => $this->m_lokasi->kabupaten(),
            'kabupaten' => $this->m_lokasi->detail($id_kabupaten),
            'isi' => 'layout/backand/lokasi/crud_kabupaten/v_add'
        );
        $this->load->view('layout/backand/v_wrapper', $data, FALSE);
    }
    public function delete_kabupaten($id_kabupaten = NULL)
    {
        $data = array(
            'id_kabupaten' => $id_kabupaten
        );
        $this->m_lokasi->delete_kabupaten($data);
        $this->session->set_flashdata('pesan', 'kabupaten Berhasil Didelet!!!');
        redirect('lokasi');
    }
    // and crud kabupaten

    // crud kecamatan
    public function add_kecamatan()
    {
        $this->form_validation->set_rules('nama_kecamatan', 'Nama kecamatan', 'required|regex_match[/^([a-zA-Z]|\s)+$/]', array('required' => '%s Mohon Untuk Diisi!!!'));
        // $this->form_validation->set_rules('id_provinsi', 'Nama provinsi', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
        $this->form_validation->set_rules('id_kabupaten', 'Nama kabupaten', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'kabupaten' => $this->m_lokasi->kecamatan(),
                'kecamatan' => $this->m_lokasi->kecamatan(),
                'isi' => 'layout/backand/lokasi/crud_kabupaten/v_add'
            );
            $this->load->view('layout/backand/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'nama_kecamatan' => $this->input->post('nama_kecamatan'),
                // 'id_provinsi' => $this->input->post('id_provinsi'),
                'id_kabupaten' => $this->input->post('id_kabupaten'),
            );
            $this->m_lokasi->add_kecamatan($data);
            $this->session->set_flashdata('pesan', 'kecamatan Berhasil Ditambahkan!!!');
            redirect('lokasi');
        }
    }
    public function update_kecamatan($id_kecamatan = NULL)
    {
        $this->form_validation->set_rules('nama_kecamatan', 'Nama kecamatan', 'required|regex_match[/^([a-zA-Z]|\s)+$/]', array('required' => '%s Mohon Untuk Diisi!!!'));
        // $this->form_validation->set_rules('id_provinsi', 'Nama provinsi', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
        $this->form_validation->set_rules('id_kabupaten', 'Nama kabupaten', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                // 'provinsi' => $this->m_lokasi->kabupaten(),
                'kabupaten' => $this->m_lokasi->kecamatan(),
                'kecamatan' => $this->m_lokasi->detail_kecamatan($id_kecamatan),
                'isi' => 'layout/backand/lokasi/crud_kecamatan/v_edit'
            );
            $this->load->view('layout/backand/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'id_kecamatan' => $id_kecamatan,
                'nama_kecamatan' => $this->input->post('nama_kecamatan'),
                // 'id_provinsi' => $this->input->post('id_provinsi'),
                'id_kabupaten' => $this->input->post('id_kabupaten'),
            );
            $this->m_lokasi->update_kecamatan($data);
            $this->session->set_flashdata('pesan', 'kabupaten Berhasil Ditambahkan!!!');
            redirect('lokasi');
        }
        $data = array(
            // 'provinsi' => $this->m_lokasi->kabupaten(),
            'kabupaten' => $this->m_lokasi->kecamatan(),
            'detail_kecamatan' => $this->m_lokasi->detail_kecamatan($id_kecamatan),
            'isi' => 'layout/backand/lokasi/crud_kecamatan/v_edit'
        );
        $this->load->view('layout/backand/v_wrapper', $data, FALSE);
    }
    public function delete_kecamatan($id_kecamatan = NULL)
    {
        $data = array(
            'id_kecamatan' => $id_kecamatan
        );
        $this->m_lokasi->delete_kecamatan($data);
        $this->session->set_flashdata('pesan', 'kecamatan Berhasil Didelet!!!');
        redirect('lokasi');
    }
    // and crud kecamatan

    // crud desa
    public function add_desa()
    {
        $this->form_validation->set_rules('nama_desa', 'Nama desa', 'required|regex_match[/^([a-zA-Z]|\s)+$/]', array('required' => '%s Mohon Untuk Diisi!!!'));
        // $this->form_validation->set_rules('id_provinsi', 'Nama provinsi', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
        // $this->form_validation->set_rules('id_kabupaten', 'Nama kabupaten', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));
        $this->form_validation->set_rules('id_kecamatan', 'Nama kecamatan', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'provinsi' => $this->m_lokasi->kabupaten(),
                'kabupaten' => $this->m_lokasi->kecamatan(),
                'kecamatan' => $this->m_lokasi->desa(),
                'isi' => 'layout/backand/lokasi/crud_desa/v_add'
            );
            $this->load->view('layout/backand/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'nama_desa' => $this->input->post('nama_desa'),
                // 'id_provinsi' => $this->input->post('id_provinsi'),
                // 'id_kabupaten' => $this->input->post('id_kabupaten'),
                'id_kecamatan' => $this->input->post('id_kecamatan'),
            );
            $this->m_lokasi->add_desa($data);
            $this->session->set_flashdata('pesan', 'Desa Berhasil Ditambahkan!!!');
            redirect('lokasi');
        }
    }
    public function update_desa($id_desa = NULL)
    {
        $this->form_validation->set_rules('nama_desa', 'Nama desa', 'required|regex_match[/^([a-zA-Z]|\s)+$/]', array('required' => '%s Mohon Untuk Diisi!!!'));
        $this->form_validation->set_rules('id_kecamatan', 'Nama kecamatan', 'required', array('required' => '%s Mohon Untuk Diisi!!!'));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'kecamatan' => $this->m_lokasi->desa(),
                'desa' => $this->m_lokasi->detail_desa($id_desa),
                'isi' => 'layout/backand/lokasi/crud_desa/v_edit'
            );
            $this->load->view('layout/backand/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'id_desa' => $id_desa,
                'nama_desa' => $this->input->post('nama_desa'),
                'id_kecamatan' => $this->input->post('id_kecamatan'),
            );
            $this->m_lokasi->update_desa($data);
            $this->session->set_flashdata('pesan', 'kabupaten Berhasil Ditambahkan!!!');
            redirect('lokasi');
        }
        $data = array(
            'kecamatan' => $this->m_lokasi->desa(),
            'desa' => $this->m_lokasi->detail_desa($id_desa),
            'isi' => 'layout/backand/lokasi/crud_desa/v_edit'
        );
        $this->load->view('layout/backand/v_wrapper', $data, FALSE);
    }
    public function delete_desa($id_desa = NULL)
    {
        $data = array(
            'id_desa' => $id_desa
        );
        $this->m_lokasi->delete_desa($data);
        $this->session->set_flashdata('pesan', 'desa Berhasil Didelet!!!');
        redirect('lokasi');
    }
    // and crud desa
}
