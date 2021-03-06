<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('m_auth');
    }

    public function login($email, $password)
    {
        $cek = $this->ci->m_auth->login_pelanggan($email, $password);
        if ($cek) {
            $id_pelanggan = $cek->id_pelanggan;
            $nama = $cek->nama;
            $email = $cek->email;
            $no_tlpn = $cek->no_tlpn;
            $alamat = $cek->alamat;
            $nama_provinsi = $cek->nama_provinsi;
            $nama_kabupaten = $cek->nama_kabupaten;
            $nama_kecamatan = $cek->nama_kecamatan;
            $nama_desa = $cek->nama_desa;

            //session
            $this->ci->session->set_userdata('id_pelanggan', $id_pelanggan);
            $this->ci->session->set_userdata('nama', $nama);
            $this->ci->session->set_userdata('email', $email);
            $this->ci->session->set_userdata('no_tlpn', $no_tlpn);
            $this->ci->session->set_userdata('alamat', $alamat);
            $this->ci->session->set_userdata('nama_provinsi', $nama_provinsi);
            $this->ci->session->set_userdata('nama_kabupaten', $nama_kabupaten);
            $this->ci->session->set_userdata('nama_kecamatan', $nama_kecamatan);
            $this->ci->session->set_userdata('nama_desa', $nama_desa);

            redirect('home');
        } else {
            $this->ci->session->set_flashdata('error', 'email Atau Password Salah');
            redirect('pelanggan/login');
        }
    }

    public function proteksi_halaman()
    {
        if ($this->ci->session->userdata('nama') == '') {
            $this->ci->session->set_flashdata('error', 'Anda Belum Login');
            redirect('pelanggan/login');
        }
    }

    public function logout()
    {
        $this->ci->session->unset_userdata('id_pelanggan');
        $this->ci->session->unset_userdata('nama');
        $this->ci->session->unset_userdata('email');
        $this->ci->session->unset_userdata('no_tlpn');
        $this->ci->session->unset_userdata('alamat');
        $this->ci->session->unset_userdata('nama_provinsi');
        $this->ci->session->unset_userdata('nama_kabupaten');
        $this->ci->session->unset_userdata('nama_kecamatan');
        $this->ci->session->unset_userdata('nama_desa');
        $this->ci->session->set_flashdata('pesan', 'Berhasil LogOut!!!!');
        redirect('pelanggan/login');
    }
}
