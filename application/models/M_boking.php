<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_boking extends CI_Model
{
    public function simpan_boking($data)
    {
        $this->db->insert('boking', $data);
        $this->db->insert('pembayaran', $data);
    }

    // List all your items
    public function boking()
    {
        $this->db->select('*');
        $this->db->from('boking');
        // $this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
        $this->db->join('pelanggan', 'boking.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->order_by('id_boking', 'desc');
        return $this->db->get()->result();
    }

    public function detail_boking($id_boking)
    {
        $this->db->select('*');
        $this->db->from('boking');
        $this->db->where('id_boking', $id_boking);
        return $this->db->get()->row();
    }

    public function boking_detail($no_boking)
    {
        $this->db->select('*');
        $this->db->from('boking');
        $this->db->join('pelanggan', 'boking.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->where('boking.no_boking', $no_boking);
        return $this->db->get()->result();
    }

    public function upload_buktibayar($data)
    {
        $this->db->where('id_boking', $data['id_boking']);
        $this->db->update('boking', $data);
    }

    public function update_kurir($data)
    {
        $this->db->where('id_boking', $data['id_boking']);
        $this->db->update('boking', $data);
    }

    public function update_admin($data)
    {
        $this->db->where('id_boking', $data['id_boking']);
        $this->db->update('boking', $data);
    }

    public function update_teknisi($data)
    {
        $this->db->where('id_boking', $data['id_boking']);
        $this->db->update('boking', $data);
    }
}

/* End of file M_paket.php */
