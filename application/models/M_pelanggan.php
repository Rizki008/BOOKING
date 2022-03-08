<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pelanggan extends CI_Model
{
    // List all your items
    public function register()
    {
        $this->db->select('*');
        $this->db->from('provinsi');
        return $this->db->get()->result();
    }
    public function insert($data)
    {
        $this->db->insert('pelanggan', $data);
    }
    public function kabupaten($id_provinsi)
    {
        $this->db->select('*');
        $this->db->from('kabupaten');
        $this->db->where('id_provinsi=', $id_provinsi);
        return $this->db->get()->result();
    }
    public function kecamatan($id_kabupaten)
    {
        $this->db->select('*');
        $this->db->from('kecamatan');
        $this->db->where('id_kabupaten=', $id_kabupaten);
        return $this->db->get()->result();
    }
    public function desa($id_kecamatan)
    {
        $this->db->select('*');
        $this->db->from('desa');
        $this->db->where('id_kecamatan=', $id_kecamatan);
        return $this->db->get()->result();
    }

    public function profil()
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        $this->db->join('desa', 'pelanggan.id_desa = desa.id_desa', 'left');
        $this->db->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan', 'left');
        $this->db->join('kabupaten', 'kecamatan.id_kabupaten = kabupaten.id_kabupaten', 'left');
        $this->db->join('provinsi', 'kabupaten.id_provinsi = provinsi.id_provinsi', 'left');
        $this->db->order_by('id_pelanggan', 'desc');
        return $this->db->get()->result();
    }

    public function boking()
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->join('desa', 'pelanggan.id_desa = desa.id_desa', 'left');
        $this->db->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan', 'left');
        $this->db->join('kabupaten', 'kecamatan.id_kabupaten = kabupaten.id_kabupaten', 'left');
        $this->db->join('provinsi', 'kabupaten.id_provinsi = provinsi.id_provinsi', 'left');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        $this->db->order_by('id_pelanggan', 'desc');
        return $this->db->get()->row();
    }

    public function total_boking()
    {
        $this->db->where('status=0');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        return $this->db->get('pembayaran')->num_rows();
    }

    public function total_transaksi()
    {
        $this->db->where('status=3');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        return $this->db->get('pembayaran')->num_rows();
    }
    // Add a new item
    public function add()
    {
    }

    //Update one item
    public function update($id = NULL)
    {
    }

    //Delete one item
    public function delete($id = NULL)
    {
    }
}

/* End of file M_pelanggan.php */
