<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function total_produk()
    {
        return $this->db->get('produk')->num_rows();
    }

    public function total_boking()
    {
        $this->db->where('status=0');
        return $this->db->get('pembayaran')->num_rows();
    }

    public function total_pelanggan()
    {
        return $this->db->get('pelanggan')->num_rows();
    }

    public function total_transaksi()
    {
        $this->db->where('status=3');
        return $this->db->get('pembayaran')->num_rows();
    }
}
