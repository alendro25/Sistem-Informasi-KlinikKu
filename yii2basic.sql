-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 08:05 AM
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
-- Database: `yii2basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id_biodata` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `usia` varchar(10) NOT NULL,
  `id_domisili` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id_biodata`, `nama`, `alamat`, `usia`, `id_domisili`) VALUES
(4, 'Gerald', 'Griya Kebraon, Karang Pilang, Kota Surabaya', '22', 1),
(5, 'Anton', 'Petrokimia, Padhank, Gersik', '45', 3),
(7, 'Santhi', 'Jl. Klutuk No.23, Malang', '19', 2),
(13, 'Bondi Bionte', 'Jl. Tanjung Anjungan, Mluehe, Aceh', '25', 4),
(14, 'Gugun', 'agaksjhdalskdnakdamkadmad', '12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id_contact` int(11) NOT NULL,
  `nama_contact` int(11) NOT NULL,
  `email_contact` int(11) NOT NULL,
  `subject_contact` int(11) NOT NULL,
  `body_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `domisili`
--

CREATE TABLE `domisili` (
  `id_domisili` int(250) NOT NULL,
  `nama_domisili` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `domisili`
--

INSERT INTO `domisili` (`id_domisili`, `nama_domisili`) VALUES
(1, 'Surabaya'),
(2, 'Malang'),
(3, 'Gersik'),
(4, 'Aceh');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(250) NOT NULL,
  `keterangan_obat` varchar(250) NOT NULL,
  `kategori_obat` varchar(250) NOT NULL,
  `exp_obat` date NOT NULL,
  `stok_obat` int(11) NOT NULL,
  `harga_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `keterangan_obat`, `kategori_obat`, `exp_obat`, `stok_obat`, `harga_obat`) VALUES
(1, 'Sanmol', 'Pereda nyeri, dan demam', 'Bebas', '2024-07-15', 10, 4500),
(2, 'Amoxcillin', 'Obat antibiotik untuk mengatasi penyakit akibat infeksi bakteri, seperti otitis media, gonore, atau pielonefritis', 'Bebas terbatas', '2024-10-05', 25, 7000),
(3, 'Ester C', 'Vitamin C untuk menambah daya tahan tubuh serta suplemen makan', 'Vitamin', '2026-05-20', 5, 50000),
(6, 'Diapet', 'Diapet merupakan obat herbal yang mengandung ekstrak daun jambu biji, kunyit, buah mojokeling dan kulit buah delima yang dikemas dalam bentuk sediaan kapsul. Diapet digunakan untuk membantu mengurangi frekuensi buang air besar.', 'Herbal', '2024-10-12', 10, 6500);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_biodata` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `id_tindakan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_pegawai`, `id_biodata`, `id_obat`, `id_tindakan`) VALUES
(5, 1, 13, 1, 1),
(6, 1, 14, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `jenis_pegawai` varchar(250) NOT NULL,
  `status_pegawai` varchar(250) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `tanggal_bergabung` date NOT NULL,
  `gaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_personal`, `jenis_pegawai`, `status_pegawai`, `jabatan`, `tanggal_bergabung`, `gaji`) VALUES
(1, 1, 'Medis', 'Pegawai Tetap', 'Dokter', '2022-10-12', 4500000),
(2, 2, 'Non Medis', 'Pegawai Kontrak', 'Customer Service', '2022-10-08', 3000000),
(3, 3, 'Non Medis', 'Pegawai tetap', 'Office Boy', '2022-12-10', 2500000);

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `nama_panggilan` varchar(250) NOT NULL,
  `jenis_kelamin` varchar(250) NOT NULL,
  `tempat_lahir` varchar(250) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_perkawinan` varchar(250) NOT NULL,
  `agama` varchar(250) NOT NULL,
  `pendidikan` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `nik` varchar(250) NOT NULL,
  `no_hp` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id_personal`, `nama_lengkap`, `nama_panggilan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `status_perkawinan`, `agama`, `pendidikan`, `alamat`, `nik`, `no_hp`, `email`) VALUES
(1, 'Gerald Alessandro Timothy', 'Gerald', 'Pria', 'Sidoarjo', '2000-07-25', 'Belum Menikah', 'Islam', 'S1 Teknik Informatika', 'Griya Kebraon Timur FA-30', '123123123123132', '083831144432', 'alendro25@gmail.com'),
(2, 'Aditya Hernanda', 'Adit', 'Pria', 'Lamongan', '2000-06-11', 'Belum Menikah', 'Islam', 'S1 Teknik Sipil', 'Karangpilang Gang. Durian No.21', '098098098098', '08531234124551', 'adityahernanda@gmail.co.id'),
(3, 'Bagong Mahendra', 'Bagong', 'Pria', 'Gersik', '0000-00-00', 'Menikah', 'Kristen', 'SMK TKJ', 'Blauran, Surabaya', '817263123', '082631812738', 'bagong@gmail.co.id'),
(5, 'Santoso duwi arilangga', 'Santoso', 'Pria', 'Jombang', '2000-09-18', 'Belum Menikah', 'Hindu', 'SLTA', 'Mojokerto', '981261640', '083838181239', 'duwiairlangga@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE `tindakan` (
  `id_tindakan` int(11) NOT NULL,
  `nama_tindakan` varchar(256) NOT NULL,
  `keterangan_tindakan` varchar(250) NOT NULL,
  `biaya_tindakan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`id_tindakan`, `nama_tindakan`, `keterangan_tindakan`, `biaya_tindakan`) VALUES
(1, 'Konsultasi', 'Periksa dan konsultasi pada pasien', 75000),
(2, 'Suntik', 'Memberikan tindakan suntik pada pasien', 50000),
(3, 'Perban', 'Melakukan perban pada bekas luka pasien', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `authKey` varchar(250) NOT NULL,
  `accessToken` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `time_create` datetime NOT NULL,
  `time_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `authKey`, `accessToken`, `status`, `role`, `id_pegawai`, `time_create`, `time_update`) VALUES
(1, 'admin', 'admin', 'admin01', 'admin01', 10, 'admin', 1, '2022-10-12 11:13:11', '2022-10-12 11:13:11'),
(2, 'cs', 'cs', 'cs01', 'cs01', 10, 'customer service', 2, '2022-10-12 11:13:11', '2022-10-12 11:13:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id_biodata`);

--
-- Indexes for table `domisili`
--
ALTER TABLE `domisili`
  ADD PRIMARY KEY (`id_domisili`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `foreignKeyPegawai` (`id_pegawai`),
  ADD KEY `foreignKeyBiodata` (`id_biodata`),
  ADD KEY `foreignKeyObat` (`id_obat`),
  ADD KEY `foreignKeyTindakan` (`id_tindakan`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `pegawai_id_personal` (`id_personal`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `relasi_id_pegawai` (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id_biodata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `domisili`
--
ALTER TABLE `domisili`
  MODIFY `id_domisili` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `id_tindakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `foreignKeyBiodata` FOREIGN KEY (`id_biodata`) REFERENCES `biodata` (`id_biodata`),
  ADD CONSTRAINT `foreignKeyObat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`),
  ADD CONSTRAINT `foreignKeyPegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `foreignKeyTindakan` FOREIGN KEY (`id_tindakan`) REFERENCES `tindakan` (`id_tindakan`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_id_personal` FOREIGN KEY (`id_personal`) REFERENCES `personal` (`id_personal`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `relasi_id_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
