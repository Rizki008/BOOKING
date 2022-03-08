<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

    public function boking()
    {
        $this->db->select('*');
        $this->db->from('boking');
        $this->db->order_by('id_boking', 'desc');
        return $this->db->get()->result();
    }

    public function reviews()
    {
        $this->db->select('*');
        $this->db->from('riview');
        return $this->db->get()->result();
    }

    public function riview($nama)
    {
        $this->db->select('*');
        $this->db->from('riview');
        $this->db->join('tbl_pelanggan', 'riview.nama = tbl_pelanggan.nama', 'left');
        $this->db->where('nama', $nama);
        return $this->db->get()->result();
    }

    public function status_kurir()
    {
        $this->db->where('status=1');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        return $this->db->get('pembayaran')->num_rows();
    }

    public function status_teknisi()
    {
        $this->db->where('status=2');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        return $this->db->get('pembayaran')->num_rows();
    }

    public function status_bayar()
    {
        $this->db->where('status=3');
        $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        return $this->db->get('pembayaran')->num_rows();
    }
}
