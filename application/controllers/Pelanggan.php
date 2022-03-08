<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pelanggan');
        $this->load->model('m_auth');
        $this->load->model('m_home');
        $this->load->model('m_lokasi');
    }

    // List all your items
    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required|regex_match[/^([a-zA-Z]|\s)+$/]', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('no_tlpn', 'Nomor Telpon', 'required|min_length[11]|max_length[13]', array(
            'required' => '%s Mohon Untuk Diisi !!!',
            'min_length' => '%s Minimal 11 angka !!!',
            'max_length' => '%s Maksimal 13 angka !!!'
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('email', 'Email Pelanggan', 'required|is_unique[pelanggan.email]', array(
            'required' => '%s Mohon Untuk Diisi !!!',
            'is_unique' => '%s Email Sudah Terdaptar'
        ));
        $this->form_validation->set_rules('password', 'Password Pelanggan', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
        $this->form_validation->set_rules('ulangi_password', 'Ulangi Password Pelanggan', 'required|matches[password]', array(
            'required' => '%s Mohon Untuk Diisi !!!',
            'matches' => '%s Password Tidak Sama !!!'
        ));

        $provinsi = $this->m_lokasi->provinsi();
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Regiseter Pelanggan',
                'provinsi' => $this->m_lokasi->provinsi(),
                //'kabupaten' => $this->m_lokasi->kabupaten(),
                //'kecamatan' => $this->m_lokasi->kecamatan(),
                //'desa' => $this->m_lokasi->desa(),
                'isi' => 'layout/frontend/register/v_register'
            );
            $this->load->view('layout/frontend/register/v_register', $data);
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'no_tlpn' => $this->input->post('no_tlpn'),
                'alamat' => $this->input->post('alamat'),
                // 'nama_provinsi' => $this->input->post('provinsi'),
                // 'nama_kabupaten' => $this->input->post('kabupaten'),
                // 'nama_kecamatan' => $this->input->post('kecamatan'),
                'id_desa' => $this->input->post('desa'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
            );
            $this->m_pelanggan->insert($data);
            $this->session->set_flashdata('pesan', 'Register Berhasil, Silahkan Untuk Login!!!');
            redirect('pelanggan/login');
        }
    }
    public function kabupaten()
    {
        $provinsi = $this->input->post('id_provinsi');
        $kabupaten = $this->m_pelanggan->kabupaten($provinsi);
        // foreach ($kabupaten as $key => $value) {
        //     echo "<option value='" . $value->id_provinsi . "'>" . $value->nama_kabupaten . "</option>";
        // }
        echo json_encode($kabupaten);
    }
    public function kecamatan()
    {
        $kabupaten = $this->input->post('id_kabupaten');
        $kecamatan = $this->m_pelanggan->kecamatan($kabupaten);
        echo json_encode($kecamatan);
    }
    public function desa()
    {
        $kecamatan = $this->input->post('id_kecamatan');
        $desa = $this->m_pelanggan->desa($kecamatan);
        echo json_encode($desa);
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'E-mail', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));

        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->pelanggan_login->login($email, $password);
        }
        $data = array(
            'title' => 'Login Pelanggan',
            'isi' => 'layout/frontend/login/v_login_pelanggan'
        );
        $this->load->view('layout/frontend/login/v_login_pelanggan', $data, FALSE);
    }

    public function logout()
    {
        $this->pelanggan_login->logout();
    }

    public function akun()
    {
        //proteksi halaman
        // $this->pelanggan_login->proteksi_halaman();
        $data = array(
            'title' => 'Akun Saya',
            'profil' => $this->m_pelanggan->profil(),
            'total_boking' => $this->m_pelanggan->total_boking(),
            'total_transaksi' => $this->m_pelanggan->total_transaksi(),
            'isi' => 'layout/frontend/login/v_akun'
        );
        $this->load->view('layout/frontend/v_wrapper', $data, FALSE);
    }
}

/* End of file Pelanggan.php */
