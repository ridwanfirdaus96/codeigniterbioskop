-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 18, 2017 at 09:58 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `kd_film` int(8) NOT NULL,
  `gambar` longblob NOT NULL,
  `judul` varchar(30) NOT NULL,
  `sinopsis` text NOT NULL,
  `kategori` set('Romance','Action','Comedy','Thriler','Sci-fi','Anime','Horor','History','Drama','Sice-Life') NOT NULL,
  `tgl_tayang` date NOT NULL,
  `tgl_beres` date NOT NULL,
  `jam` set('10.00-12.30','11.00-13.30','12.00-15.30','13.00-15.30','14.00-16.30','15.00-17.30','16.00-18.30','17.00-19.30','18.00-20.30','19.00-21.30','20.00-22.30') NOT NULL,
  `kd_studio` int(2) NOT NULL,
  `nama_studio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`kd_film`, `gambar`, `judul`, `sinopsis`, `kategori`, `tgl_tayang`, `tgl_beres`, `jam`, `kd_studio`, `nama_studio`) VALUES
(1, 0x65643061342d626c61646572756e6e65722e6a7067, 'Blade Runner', '<p>\r\n	Film ini dibuat</p>\r\n', 'Action', '2017-11-19', '2017-11-21', '13.00-15.30', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `kd_kursi` int(8) NOT NULL,
  `baris` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kursi`
--

INSERT INTO `kursi` (`kd_kursi`, `baris`) VALUES
(3, 6),
(4, 9),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `memesan`
--

CREATE TABLE `memesan` (
  `id_pemesan` int(8) NOT NULL,
  `jml_tiket` int(2) NOT NULL,
  `harga` bigint(10) NOT NULL,
  `total` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(8) NOT NULL,
  `nama_pegawai` varchar(20) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `no_telp` bigint(12) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `alamat`, `jenis_kelamin`, `no_telp`, `email`) VALUES
(123445, 'ade', 'bandung', 'Laki-laki', 85820057888, 'ade@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `id_pemesan` int(11) NOT NULL,
  `nama_pemesan` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pemesan`
--

INSERT INTO `pemesan` (`id_pemesan`, `nama_pemesan`, `alamat`, `jenis_kelamin`, `no_telp`, `email`) VALUES
(4, 'Andy', 'jl.cihanjuang', 'L', '0811', 'the_randas@rocketmail.com'),
(5, 'we', 'jl.cihanjuang', 'L', '08112230300', 'the_randas@rocketmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `kd_studio` int(2) NOT NULL,
  `nama_studio` varchar(20) NOT NULL,
  `jml_kursi` varchar(20) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`kd_studio`, `nama_studio`, `jml_kursi`) VALUES
(1, 'Starplex-A', '60');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `kd_film` int(8) DEFAULT NULL,
  `id_pemesan` int(11) DEFAULT NULL,
  `kd_kursi` int(8) NOT NULL,
  `kd_studio` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`kd_film`),
  ADD KEY `kd_studio` (`kd_studio`),
  ADD KEY `kd_studio_2` (`kd_studio`),
  ADD KEY `kd_studio_3` (`kd_studio`),
  ADD KEY `kd_studio_4` (`kd_studio`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`kd_kursi`);

--
-- Indexes for table `memesan`
--
ALTER TABLE `memesan`
  ADD KEY `id_pemesan` (`id_pemesan`),
  ADD KEY `id_pemesan_2` (`id_pemesan`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`id_pemesan`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`kd_studio`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `id_tiket` (`id_tiket`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `kd_film` (`kd_film`),
  ADD KEY `id_pemesan` (`id_pemesan`),
  ADD KEY `kd_kursi` (`kd_kursi`),
  ADD KEY `kd_studio` (`kd_studio`),
  ADD KEY `kd_kursi_2` (`kd_kursi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `kd_film` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kursi`
--
ALTER TABLE `kursi`
  MODIFY `kd_kursi` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `id_pemesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `memesan`
--
ALTER TABLE `memesan`
  ADD CONSTRAINT `memesan_ibfk_1` FOREIGN KEY (`id_pemesan`) REFERENCES `pemesan` (`id_pemesan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_3` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiket_ibfk_4` FOREIGN KEY (`id_pemesan`) REFERENCES `memesan` (`id_pemesan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiket_ibfk_5` FOREIGN KEY (`kd_studio`) REFERENCES `studio` (`kd_studio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiket_ibfk_6` FOREIGN KEY (`kd_kursi`) REFERENCES `kursi` (`kd_kursi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiket_ibfk_7` FOREIGN KEY (`kd_film`) REFERENCES `film` (`kd_film`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
