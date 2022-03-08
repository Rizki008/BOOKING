<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_laporan extends CI_Model
{
    public function lap_harian($tanggal, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->join('produk', 'pembayaran.nama_produk = produk.nama_produk', 'left');
        $this->db->where('DAY(pembayaran.tgl_boking)', $tanggal);
        $this->db->where('MONTH(pembayaran.tgl_boking)', $bulan);
        $this->db->where('YEAR(pembayaran.tgl_boking)', $tahun);
        return $this->db->get()->result();
    }

    public function lap_bulanan($bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->join('produk', 'pembayaran.nama_produk = produk.nama_produk', 'left');
        $this->db->where('MONTH(tgl_boking)', $bulan);
        $this->db->where('YEAR(tgl_boking)', $tahun);
        $this->db->where('status=4');
        return $this->db->get()->result();
    }

    public function lap_tahunan($tahun)
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->join('produk', 'pembayaran.nama_produk = produk.nama_produk', 'left');
        $this->db->where('YEAR(tgl_boking)', $tahun);
        $this->db->where('status=4');
        return $this->db->get()->result();
    }
}

/* End of file M_laporan.php */
