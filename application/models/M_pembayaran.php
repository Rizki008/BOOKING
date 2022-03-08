<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pembayaran extends CI_Model
{
    public function detail_boking($id_bayar)
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->where('id_bayar', $id_bayar);
        return $this->db->get()->row();
    }

    public function upload_buktibayar($data)
    {
        $this->db->where('id_bayar', $data['id_bayar']);
        $this->db->update('pembayaran', $data);
    }

    public function belum_bayar()
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        $this->db->where('status=0');
        $this->db->order_by('id_bayar', 'desc');
        return $this->db->get()->result();
    }

    public function data_boking()
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        // $this->db->join('pelanggan', 'pembayaran.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->join('produk', 'pembayaran.nama_produk = produk.nama_produk', 'left');
        $this->db->order_by('id_bayar', 'desc');
        return $this->db->get()->result();
    }

    public function pembayaran()
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->join('pelanggan', 'pembayaran.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->join('produk', 'pembayaran.nama_produk = produk.nama_produk', 'left');
        $this->db->join('desa', 'pelanggan.id_desa = desa.id_desa', 'left');
        $this->db->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan', 'left');
        $this->db->join('kabupaten', 'kecamatan.id_kabupaten = kabupaten.id_kabupaten', 'left');
        $this->db->join('provinsi', 'kabupaten.id_provinsi = provinsi.id_provinsi', 'left');
        $this->db->order_by('id_bayar', 'desc');
        return $this->db->get()->result();
    }

    public function update_admin($data)
    {
        $this->db->where('id_bayar', $data['id_bayar']);
        $this->db->update('pembayaran', $data);
    }

    public function update_teknisi($data)
    {
        $this->db->where('id_bayar', $data['id_bayar']);
        $this->db->update('pembayaran', $data);
    }

    public function update_kurir($data)
    {
        $this->db->where('id_bayar', $data['id_bayar']);
        $this->db->update('pembayaran', $data);
    }

    //detail pesanan selesai
    public function pesanan_detail($no_boking)
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->where('pembayaran.no_boking', $no_boking);
        return $this->db->get()->result();
    }

    public function insert_riview()
    {
        $data = array(
            'id_pelanggan' => $this->session->userdata('id_pelanggan'),
            'id_bayar' => $this->input->post('id_bayar'),
            'nama' => $this->session->userdata('nama'),
            'tanggal' => date('Y-m-d'),
            'isi' => $this->input->post('isi'),
        );
        $this->db->insert('riview', $data);
    }

    public function info($no_boking)
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->where('no_boking', $no_boking);
        return $this->db->get()->result();
    }
    //and pesanan selesai
}
