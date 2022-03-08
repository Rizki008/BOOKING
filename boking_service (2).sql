-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 04:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boking_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `boking`
--

CREATE TABLE `boking` (
  `id_boking` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_boking` varchar(50) DEFAULT NULL,
  `nama_tempat` text DEFAULT NULL,
  `nama_produk` varchar(125) DEFAULT NULL,
  `no_tlpn` varchar(25) DEFAULT NULL,
  `tgl_boking` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `nama_barang` varchar(128) DEFAULT NULL,
  `deskripsi_kerusakan` text DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL,
  `nama_bank` varchar(50) DEFAULT NULL,
  `no_rek` int(11) DEFAULT NULL,
  `jumlah_bayar` varchar(50) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `id_provinsi` varchar(11) DEFAULT NULL,
  `id_kabupaten` varchar(11) DEFAULT NULL,
  `id_kecamatan` varchar(11) DEFAULT NULL,
  `id_desa` varchar(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boking`
--

INSERT INTO `boking` (`id_boking`, `id_pelanggan`, `nama`, `no_boking`, `nama_tempat`, `nama_produk`, `no_tlpn`, `tgl_boking`, `status`, `nama_barang`, `deskripsi_kerusakan`, `atas_nama`, `nama_bank`, `no_rek`, `jumlah_bayar`, `bukti_bayar`, `id_provinsi`, `id_kabupaten`, `id_kecamatan`, `id_desa`, `alamat`, `id_produk`) VALUES
(1, 7, NULL, '20220308OO1TECID', NULL, 'Blender', '08712345671', '2022-03-08', 0, NULL, 'sasa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', 'sindang barang', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chatting`
--

CREATE TABLE `chatting` (
  `id_chatting` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `isi_pelanggan` text DEFAULT NULL,
  `balas` text DEFAULT NULL,
  `time_chatting` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatting`
--

INSERT INTO `chatting` (`id_chatting`, `id_pelanggan`, `isi_pelanggan`, `balas`, `time_chatting`) VALUES
(1, 2, 'selamat malam duhai kekasih', '0', '2021-10-09 22:58:23'),
(2, 2, '0', 'sebutlah namaku menjelang ke wc', '2021-10-09 22:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL,
  `id_kecamatan` int(11) DEFAULT NULL,
  `nama_desa` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id_desa`, `id_kecamatan`, `nama_desa`) VALUES
(1, 1, 'Manis'),
(2, 5, 'waduk Darma'),
(3, 5, 'pesing'),
(4, 1, 'jimbabwe'),
(5, 2, 'konoha'),
(6, 2, 'mahameru');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` int(11) NOT NULL,
  `id_provinsi` int(11) DEFAULT NULL,
  `nama_kabupaten` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `id_provinsi`, `nama_kabupaten`) VALUES
(1, 1, 'Kuningan'),
(2, 1, 'cirebon');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `id_kabupaten` int(11) DEFAULT NULL,
  `nama_kecamatan` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `id_kabupaten`, `nama_kecamatan`) VALUES
(1, 1, 'Selajambe'),
(2, 1, 'Subang'),
(3, 1, 'Kadugede'),
(4, 1, 'Luragung'),
(5, 1, 'Darma'),
(6, 2, 'oleced');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_provinsi` varchar(128) DEFAULT NULL,
  `nama_kabupaten` varchar(128) DEFAULT NULL,
  `nama_kecamatan` varchar(128) DEFAULT NULL,
  `id_desa` varchar(128) DEFAULT NULL,
  `no_tlpn` varchar(11) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_provinsi`, `nama_kabupaten`, `nama_kecamatan`, `id_desa`, `no_tlpn`, `nama`, `alamat`, `email`, `password`) VALUES
(1, '', '1', '1', '4', '08574132145', 'uud', 'sindang barang', 'rowinanopianti15@gmail.com', 'bnbn'),
(2, '', '1', '1', '1', '08712345671', 'bnn', 'Ciawilor', 'opik@gmail.com', 'bnn'),
(3, '', '1', '1', '1', '08574132145', 'uud', 'sindang barang', 'rowinanopianti402@gmail.com', 'xz'),
(4, '1', '1', '1', '4', '08574132145', 'uud', 'sindang barang', 'aulia@gmail.com', 'mkmk'),
(5, '1', '1', '1', '4', '08712345671', 'uud', 'sindang barang', 'bobo@gmail.com', 'mkmk'),
(6, NULL, NULL, NULL, '1', '08574132145', 'uud', 'sindang barang', 'admin@gmail.com', 'njnj'),
(7, NULL, NULL, NULL, '4', '08712345671', 'uud', 'sindang barang', 'admin@gmail.coma', '121');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_provinsi` varchar(128) DEFAULT NULL,
  `id_kabupaten` varchar(128) DEFAULT NULL,
  `id_kecamatan` varchar(128) DEFAULT NULL,
  `id_desa` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `nama_produk` varchar(125) DEFAULT NULL,
  `no_boking` int(11) DEFAULT NULL,
  `tgl_boking` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_tlpn` varchar(15) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `deskripsi_kerusakan` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `atas_nama` varchar(50) DEFAULT NULL,
  `nama_bank` varchar(50) DEFAULT NULL,
  `no_rek` varchar(50) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `jumlah_bayar` varchar(50) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `nama`, `id_pelanggan`, `id_provinsi`, `id_kabupaten`, `id_kecamatan`, `id_desa`, `id_produk`, `nama_produk`, `no_boking`, `tgl_boking`, `alamat`, `no_tlpn`, `nama_barang`, `deskripsi_kerusakan`, `status`, `atas_nama`, `nama_bank`, `no_rek`, `bukti_bayar`, `jumlah_bayar`, `total_bayar`) VALUES
(1, NULL, 7, NULL, NULL, NULL, 4, NULL, 'Blender', 20220308, '2022-03-08', 'sindang barang', '08712345671', NULL, 'sasa', 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`) VALUES
(2, 'Radio'),
(3, 'Kulkas'),
(4, 'Mesin Cuci'),
(5, 'Blender'),
(6, 'Mikser'),
(7, 'Gosokan'),
(8, 'TV One');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Jawabarat');

-- --------------------------------------------------------

--
-- Table structure for table `rinci_boking`
--

CREATE TABLE `rinci_boking` (
  `id_rinci` int(11) NOT NULL,
  `no_boking` varchar(50) DEFAULT NULL,
  `id_pelanggan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `riview`
--

CREATE TABLE `riview` (
  `id_riview` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_bayar` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riview`
--

INSERT INTO `riview` (`id_riview`, `id_pelanggan`, `id_bayar`, `nama`, `tanggal`, `isi`) VALUES
(1, 2, 3, 'jamal', '2021-10-10', 'bagus');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', 'admin', 1),
(2, 'Teknisi', 'teknisi', 'teknisi', 2),
(3, 'Kurir', 'kurir', 'kurir', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boking`
--
ALTER TABLE `boking`
  ADD PRIMARY KEY (`id_boking`);

--
-- Indexes for table `chatting`
--
ALTER TABLE `chatting`
  ADD PRIMARY KEY (`id_chatting`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `rinci_boking`
--
ALTER TABLE `rinci_boking`
  ADD PRIMARY KEY (`id_rinci`);

--
-- Indexes for table `riview`
--
ALTER TABLE `riview`
  ADD PRIMARY KEY (`id_riview`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boking`
--
ALTER TABLE `boking`
  MODIFY `id_boking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chatting`
--
ALTER TABLE `chatting`
  MODIFY `id_chatting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `riview`
--
ALTER TABLE `riview`
  MODIFY `id_riview` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
