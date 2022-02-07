-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 12:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `tmplahir` varchar(200) NOT NULL,
  `tgllahir` date NOT NULL,
  `jenkel` char(1) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `poli_id` varchar(100) NOT NULL,
  `hapus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `alamat`, `tmplahir`, `tgllahir`, `jenkel`, `spesialis`, `poli_id`, `hapus`) VALUES
(8, 'Dr. Ruslan Yusuf', 'lombok tenagh', 'Lombok tengah', '2021-04-02', 'L', 'Dokter Umum', 'Poli Gigi', 1),
(9, 'Dr. iwin', 'lombok tenagh', 'Lombok tengah', '2021-04-02', 'P', 'bidan', 'Poli Gigi', 1),
(10, 'seniah', 'lombok tenagh', 'Lombok tengah', '2021-04-02', 'P', 'Dokter Umum', 'Poli Gigi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `golongan` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `kegunaan` varchar(100) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `hapus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama`, `golongan`, `jenis`, `kategori`, `kegunaan`, `satuan`, `hapus`) VALUES
(8, 'Vitamin C', 'obat anak', 'sirup', 'test kategori', 'panas dan demam', 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `no_rekam` varchar(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(30) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `tmplahir` varchar(100) NOT NULL,
  `tgllahir` date NOT NULL,
  `jenkel` char(10) DEFAULT NULL,
  `layanan` varchar(20) NOT NULL,
  `nobpjs` varchar(100) DEFAULT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `pernikahan` varchar(50) NOT NULL,
  `goldarah` varchar(10) NOT NULL,
  `keluhan` text NOT NULL,
  `status` int(11) NOT NULL,
  `list_status` int(11) NOT NULL,
  `hapus` int(11) NOT NULL,
  `dokter_id` varchar(100) DEFAULT NULL,
  `poli_id` varchar(100) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `hasil` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `no_rekam`, `nama`, `nik`, `alamat`, `tmplahir`, `tgllahir`, `jenkel`, `layanan`, `nobpjs`, `pekerjaan`, `pernikahan`, `goldarah`, `keluhan`, `status`, `list_status`, `hapus`, `dokter_id`, `poli_id`, `tgl`, `hasil`, `date`, `ket`) VALUES
(1, 'MKP-3adb0afd4a', 'Ruslan Yusuf', '2434324324423', 'Lombo Nusa tenggara barat', 'Lombok tengah', '2021-04-01', 'Laki-laki', 'BPJS', '21432423423', 'mahasiswa', 'Belum Kawin', 'A', 'Sakit Hati', 1, 0, 1, 'Dr. Ruslan Yusuf', 'Poli Dewasa', '2021-04-22', 'Rawat Jalan', '2021-04-22', ''),
(2, 'MKP-9c1abeaead', 'rio hasnadi', '900889899890', 'lombok tenagh', 'Lombok tengah', '2021-04-01', 'Laki-laki', 'Umum', '', 'Mahasiswa', 'Belum Kawin', 'B', 'kfsjdkfjsdf', 1, 0, 1, 'Dr. iwin', 'Poli Gigi', '2021-04-23', 'Rawat Inap', '2021-04-22', ''),
(3, 'MKP-778a7ab048', 'Fulan', '00909999090', 'Lombo Nusa tenggara barat', 'Lombok', '2015-02-04', 'Laki-laki', 'Umum', '', 'mahasiswa', 'Kawin', 'B', 'dfsdfsdfsdsdf', 1, 0, 1, 'Dr. Ruslan Yusuf', 'Poli Dewasa', '2021-04-25', 'Rujukan', '2021-04-23', ''),
(4, 'MKP-4f8b2bdf85', 'yusuf', '2434324324423', 'Lombo Nusa tenggara barat', 'Lombok tengah', '2021-04-02', 'Perempuan', 'Umum', '', 'Mahasiswa', 'Belum Kawin', 'B', 'sakit hati', 1, 0, 1, 'Dr. Ruslan Yusuf', 'Poli Gigi', '2021-04-28', 'Rujukan', '2021-04-23', 'Test keterangan'),
(5, 'PKM-63bca04632', 'coba', '3234234', 'Lombo Nusa tenggara barat', 'Lombok tengah', '2021-04-02', 'Laki-laki', 'Umum', '', 'mahasiswa', 'Belum Kawin', 'B', 'dfsdfsdfsd', 1, 1, 1, 'Dr. iwin', 'Poli Dewasa', '2021-04-28', 'Rawat Jalan', '2021-04-24', 'minum obat 2x sehari'),
(6, 'PKM-93ec6bb7b8', 'Subhan Hadi', '234234234234', 'lombok tenagh', 'Lombok tengah', '2021-04-01', 'Laki-laki', 'Umum', '', 'Mahasiswa', 'Belum Kawin', 'B', 'jomblo', 1, 1, 1, 'Dr. Ruslan Yusuf', 'Poli Gigi', '2021-04-28', 'Rawat Jalan', '2021-04-28', 'coba keterangan');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `pasien_id` int(11) NOT NULL,
  `dokter_id` int(11) NOT NULL,
  `poli_id` int(11) NOT NULL,
  `tgl` int(11) NOT NULL,
  `hasil` int(11) NOT NULL,
  `hapus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id_poli` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `des` text NOT NULL,
  `hapus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama`, `des`, `hapus`) VALUES
(23, 'Poli Anak', 'jdksjfkjsd', 1),
(24, 'Poli Gigi', 'fsdfsdfdsf', 1),
(25, 'Poli Dewasa', 'dsfsdfdsf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
