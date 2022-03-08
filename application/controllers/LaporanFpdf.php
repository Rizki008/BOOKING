<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Laporanfpdf extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf'); // MEMANGGIL LIBRARY YANG KITA BUAT TADI
        $this->load->model('m_laporan');
    }
    function index()
    {
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm', 'Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 7, 'LAPORAN SEVICE PERTAHUN', 0, 1, 'C');
        $pdf->Cell(0, 7, 'TOKO ELEKTRONIK SINAR JAYA', 0, 1, 'C');
        $pdf->Cell(0, 7, 'JL.Selajambe Dselajambe RT/RW 07/02 Kec.Selajambe Kab.Kuningan', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 4);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(15, 6, 'No', 1, 0, 'C');
        $pdf->Cell(60, 6, 'Nomor Boking', 1, 0, 'C');
        $pdf->Cell(70, 6, 'Tanggal Boking', 1, 0, 'C');
        $pdf->Cell(50, 6, 'Nama Barang', 1, 0, 'C');
        $pdf->Cell(30, 6, 'harga', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $pembayaran = $this->db->get('pembayaran')->result();
        $no = 0;
        foreach ($pembayaran as $data) {
            $no++;
            $pdf->Cell(15, 6, $no, 1, 0, 'C');
            $pdf->Cell(60, 6, $data->no_boking, 1, 0);
            $pdf->Cell(70, 6, $data->tgl_boking, 1, 0);
            $pdf->Cell(50, 6, $data->nama_produk, 1, 0);
            $pdf->Cell(30, 6, $data->jumlah_bayar, 1, 1);
        }
        $pdf->Output();
    }
    function hari()
    {
        $tanggal = $this->input->post('tanggal');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm', 'Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 7, 'LAPORAN SEVICE PERHARI', 0, 1, 'C');
        $pdf->Cell(0, 7, 'TOKO ELEKTRONIK SINAR JAYA', 0, 1, 'C');
        $pdf->Cell(0, 7, 'JL.Selajambe Dselajambe RT/RW 07/02 Kec.Selajambe Kab.Kuningan', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 4);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(15, 6, 'No', 1, 0, 'C');
        $pdf->Cell(60, 6, 'Nomor Boking', 1, 0, 'C');
        $pdf->Cell(70, 6, 'Tanggal Boking', 1, 0, 'C');
        $pdf->Cell(50, 6, 'Nama Barang', 1, 0, 'C');
        $pdf->Cell(30, 6, 'harga', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $pembayaran = $this->m_laporan->lap_harian($tanggal, $bulan, $tahun);
        $no = 0;
        foreach ($pembayaran as $data) {
            $no++;
            $pdf->Cell(15, 6, $no, 1, 0, 'C');
            $pdf->Cell(60, 6, $data->no_boking, 1, 0);
            $pdf->Cell(70, 6, $data->tgl_boking, 1, 0);
            $pdf->Cell(50, 6, $data->nama_produk, 1, 0);
            $pdf->Cell(30, 6, $data->jumlah_bayar, 1, 1);
        }
        $pdf->Output();
    }
    function bulan()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm', 'Letter');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 7, 'LAPORAN SEVICE PERBULAN', 0, 1, 'C');
        $pdf->Cell(0, 7, 'TOKO ELEKTRONIK SINAR JAYA', 0, 1, 'C');
        $pdf->Cell(0, 7, 'JL.Selajambe Dselajambe RT/RW 07/02 Kec.Selajambe Kab.Kuningan', 0, 1, 'C');
        $pdf->Cell(10, 7, '', 0, 4);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(15, 6, 'No', 1, 0, 'C');
        $pdf->Cell(60, 6, 'Nomor Boking', 1, 0, 'C');
        $pdf->Cell(70, 6, 'Tanggal Boking', 1, 0, 'C');
        $pdf->Cell(50, 6, 'Nama Barang', 1, 0, 'C');
        $pdf->Cell(30, 6, 'harga', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $pembayaran = $this->m_laporan->lap_bulanan($bulan, $tahun);
        $no = 0;
        foreach ($pembayaran as $data) {
            $no++;
            $pdf->Cell(15, 6, $no, 1, 0, 'C');
            $pdf->Cell(60, 6, $data->no_boking, 1, 0);
            $pdf->Cell(70, 6, $data->tgl_boking, 1, 0);
            $pdf->Cell(50, 6, $data->nama_produk, 1, 0);
            $pdf->Cell(30, 6, $data->jumlah_bayar, 1, 1);
        }
        $pdf->Output();
    }
}
