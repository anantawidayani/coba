-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2023 at 05:55 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skema`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int NOT NULL,
  `id_kandidat` int NOT NULL,
  `id_pemilih` int NOT NULL,
  `tanggal_jam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `id_kandidat`, `id_pemilih`, `tanggal_jam`) VALUES
(0, 1, 2, '0000-00-00 00:00:00'),
(0, 2, 2, '2023-11-22 17:50:10');

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` int NOT NULL,
  `nama_ketos` varchar(100) NOT NULL,
  `nama_waketos` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `visi` varchar(100) NOT NULL,
  `misi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `nama_ketos`, `nama_waketos`, `image`, `visi`, `misi`) VALUES
(1, 'Gabriel Restu', 'Ananta Widayani', 'gab.jpg', '\"Menggugah Semangat Kebersamaan dan Kepemimpinan Siswa MA.\" ', 'Meningkatkan Partisipasi Siswa: Menggalang partisipasi aktif siswa dalam kegiatan sekolah dan proyek-proyek komunitas. Memperkuat Kebersamaan: Membangun ikatan yang kuat di antara siswa untuk menciptakan atmosfer sekolah yang harmonis.'),
(2, 'achmad day bihas', 'delia', 'gab.jpg', 'Menggugah Semangat Kebersamaan dan Kepemimpinan Siswa MA', 'Meningkatkan Partisipasi Siswa: Menggalang partisipasi aktif siswa dalam kegiatan sekolah dan proyek-proyek komunitas. Memperkuat Kebersamaan: Membangun ikatan yang kuat di antara siswa untuk menciptakan atmosfer sekolah yang harmonis.');

-- --------------------------------------------------------

--
-- Table structure for table `pemilih`
--

CREATE TABLE `pemilih` (
  `id_pemilih` int NOT NULL,
  `username` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nisn` int NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pemilih`
--

INSERT INTO `pemilih` (`id_pemilih`, `username`, `nama`, `password`, `nisn`, `alamat`) VALUES
(1, 'user', 'ananta widayani', '12dea96fec20593566ab75692c9949596833adc9', 123456789, 'tamanan'),
(2, 'ananta', 'ananta widayani', 'feb4ee1caf81d7491d4bab29ebc039ac1b12e60a', 12345, 'tamanan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(2, 'ananta', 'ananta@gmail.com', 'feb4ee1caf81d7491d4bab29ebc039ac1b12e60a', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indexes for table `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`id_pemilih`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id_kandidat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemilih`
--
ALTER TABLE `pemilih`
  MODIFY `id_pemilih` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
