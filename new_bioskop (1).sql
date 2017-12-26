-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 26, 2017 at 06:13 PM
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
  `gambar` blob NOT NULL,
  `judul` varchar(30) DEFAULT NULL,
  `sinopsis` text NOT NULL,
  `director` varchar(100) NOT NULL,
  `aktor` varchar(100) NOT NULL,
  `durasi` varchar(20) NOT NULL,
  `rating_sensor` int(3) NOT NULL,
  `bahasa` varchar(30) NOT NULL,
  `subtitle` varchar(30) NOT NULL,
  `kd_kategori` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`kd_film`, `gambar`, `judul`, `sinopsis`, `director`, `aktor`, `durasi`, `rating_sensor`, `bahasa`, `subtitle`, `kd_kategori`) VALUES
(1, 0x61376636652d626c61646572756e6e65722e6a7067, 'Blade Runner 2049', '<p>\r\n	<span font-size:=\"\" helvetica=\"\" style=\"color: rgb(124, 124, 124); font-family: Ubuntu, \">Film Blade Runner 2049</span><span font-size:=\"\" helvetica=\"\" style=\"color: rgb(124, 124, 124); font-family: Ubuntu, \">&nbsp; terbaru Hollywood ini akan mengisahkan kisah tentang seorang mantan polisi yang bernama Rick Deckard, Yang mana Ia telah ditangkap oleh seoarang polisi bernama Gaff, dan kemudian dia dibawa untuk diproses ke atasannya yaitu Bryant. Rick bekerja sebagai seorang Blade Runner, pekerjaannya ialah untuk memburu sebuah makhluk ciptaan semi otomatis yang disebut juga sebagai replicants.</span><br font-size:=\"\" helvetica=\"\" style=\"box-sizing: border-box; color: rgb(124, 124, 124); font-family: Ubuntu, \" />\r\n	<br font-size:=\"\" helvetica=\"\" style=\"box-sizing: border-box; color: rgb(124, 124, 124); font-family: Ubuntu, \" />\r\n	<span font-size:=\"\" helvetica=\"\" style=\"color: rgb(124, 124, 124); font-family: Ubuntu, \">Makhluk itu berjumlah 4 unit dan mereka berada di bumi secara illegal. Pada suatu ketika Model terbaru yaitu Tyrell Corporation Nexus-6 akan datang ke bumi, yaitu untuk memperpanjang masa hidup ke empat makhluk yang telah berada di bumi sebelumnya, Kemudian Deckard melakukan sebuah investigasi pada perusahan Tyrell Corp, untuk memastikan bahwa uji coba mereka pada model Nexus 6 telah berhasil.</span><br font-size:=\"\" helvetica=\"\" style=\"box-sizing: border-box; color: rgb(124, 124, 124); font-family: Ubuntu, \" />\r\n	<br font-size:=\"\" helvetica=\"\" style=\"box-sizing: border-box; color: rgb(124, 124, 124); font-family: Ubuntu, \" />\r\n	<span font-size:=\"\" helvetica=\"\" style=\"color: rgb(124, 124, 124); font-family: Ubuntu, \">Pada Saat Ia melakukan investigasi tersebut, Deckard bertemu dengan asisten Eldon Tyrell yang bernama Rachel, yang mana ia merupakan replika dari percobaan tersebut, dan mengaku sebagai manusia. Rachel selalu berusaha untuk menunjukkan bukti bahwa dirinya adalah manusia.&nbsp;</span><br font-size:=\"\" helvetica=\"\" style=\"box-sizing: border-box; color: rgb(124, 124, 124); font-family: Ubuntu, \" />\r\n	<br font-size:=\"\" helvetica=\"\" style=\"box-sizing: border-box; color: rgb(124, 124, 124); font-family: Ubuntu, \" />\r\n	<span font-size:=\"\" helvetica=\"\" style=\"color: rgb(124, 124, 124); font-family: Ubuntu, \">memori Rachel merupakan implant dari perusahaan tyrell. Mengetahui kebenaran tersebut kemudian Rachel sambil menangis meningalkan apartemen Deckard . Bryant berusaha untuk menghentikan replikan yang lainnya dengan meminta keputusan dari Deckard. Replika tersebut yaitu Zhora, Roy Batty dan Pris. Akan tetapi masalah baru datang, ketika para replikan berusaha saling menuduh dan akhirnya berujung tewasnya rio. Melihat fenomena ini, timbul pertanyaan apakah membunuh benda yang sudah diciptakan itu hal yang baik? saksika hanya di bioskop kesayangan anda pada tanggal 6 Oktober 2017 (USA).&nbsp;</span></p>\r\n', 'Denis Ville', 'Jared Telo', '115 Menit', 8, 'Inggris', 'English', 1002),
(2, 0x32393764652d67656f73746f726d2e6a7067, 'Geostorm', '<p style=\"box-sizing: border-box; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-top: 0px; margin-bottom: 26px;\">\r\n	Film Geostorm&nbsp;ceritanya tentang penggunaan satelit khusus pengontrol cuaca untuk mengatur ekosistem dan perubahan cuaca ekstrem. Namun, ketika &nbsp;satelit ini mengalami gangguan justru dapat mengancam bumi. Akibat sistem yang dibuat untuk melindungi bumi malah mengakibatkan berbagai bencana alam.</p>\r\n<p style=\"box-sizing: border-box; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-top: 0px; margin-bottom: 26px;\">\r\n	Sesungguhnya kerusakan pada satelit tersebut bukanlah terjadi tanpa sengaja. Namun, ada orang yang tidak bertanggungjawab menyabotase. Mereka sengaja memanfaatkan kemampuan satelit tersebut, mengubah pengaturan cuaca untuk bumi sehingga menyebabkan berbagai bencana badai di bumi.</p>\r\n<p style=\"box-sizing: border-box; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-top: 0px; margin-bottom: 26px;\">\r\n	Seluruh pemimpin negara di bumi bersatu dan menciptakan sebuah program yang dinamai The Dutch Boy, yakni sebuah jaring satelit dari seluruh dunia yang mengelilingi planet bumi. Program ini dipersenjatai dengan teknologi geo engineering yang dirancang untuk menagkal bahaya tersebut.</p>\r\n<p style=\"box-sizing: border-box; font-family: Verdana, Geneva, sans-serif; font-size: 15px; line-height: 26px; margin-top: 0px; margin-bottom: 26px;\">\r\n	Perancang satelit (Gerard Butler) bersama saudaranya yangb sudah lama tidak bertemu &nbsp;bernama Max (Jim Sturgess) dibantu beberapa ahli lainnya ditugaskan keluar angkasa untuk memperbaiki satelit yang rusak itu sebelum bencana&nbsp;<i>Geostorm</i>&nbsp;membinasakan bumi. Namun untuk melakukannya mereka harus menculik Presiden Amerika untuk dapat mematikan sistem satelit.</p>\r\n', 'Dea Devlin', 'Ed Haris', '109 Menit', 17, 'UK', 'Indonesia', 1031),
(3, 0x36633663392d6864642d6e65772e706e67, 'Happy Death Day', '<p style=\"box-sizing: border-box; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 15px; line-height: 34px; margin-top: 0px; margin-bottom: 26px;\">\r\n	Tree Gelbman (Jessica Rothe) bangun kesiangan di sebuah kamar asrama laki-laki. Ia mabuk semalaman. Tree adalah tipikal&nbsp;<em style=\"box-sizing: border-box;\">mean girl</em>: judes, bermulut tajam,&nbsp;<em style=\"box-sizing: border-box;\">bitchy</em>, terobsesi pada gaya hidup kekinian, dan bergabung dengan geng gadis-gadis judes lainnya.</p>\r\n<p style=\"box-sizing: border-box; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 15px; line-height: 34px; margin-top: 0px; margin-bottom: 26px;\">\r\n	Perjalanan pulang dari asrama laki-laki ke asrama perempuan menunjukkan sebagian besar sifatnya. Ketika semua orang berpakaian kuliah, ia jalan dengan&nbsp;<em style=\"box-sizing: border-box;\">tank</em>&nbsp;<em style=\"box-sizing: border-box;\">top</em>, celana ketat, dan ber-<em style=\"box-sizing: border-box;\">high heel</em>. Ia menolak menandatangani petisi&nbsp;<em style=\"box-sizing: border-box;\">global warming</em>&nbsp;dengan kasar, tidak menjawab telepon ayah, mencampakkan mantan pacar, hingga membuang kue ulang tahun yang dihadiahkan teman sekamarnya.</p>\r\n<p style=\"box-sizing: border-box; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 15px; line-height: 34px; margin-top: 0px; margin-bottom: 26px;\">\r\n	Oiya, hari itu ia berulang tahun. Hari yang bahagia. Namun di penghujung hari, seseorang bertopeng membunuhnya dengan pisau. Dan Tree terbangun lagi di asrama laki-laki.</p>\r\n', 'Scott Lopbell', 'Jessica Rothe', '96 Menit', 18, 'English', 'Indonesia', 1021);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(8) NOT NULL,
  `kd_film` int(8) NOT NULL,
  `tgl_tayang` date NOT NULL,
  `tgl_berakhir` date NOT NULL,
  `jam_tayang` set('11.00-12.30','11.30-12.45','12.00-13.45','14.00-15-15','15.30.17.00','17.15-18.45','17.00-19.00','19.00-21.00','20.00-22.00') NOT NULL,
  `kd_studio` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `kd_film`, `tgl_tayang`, `tgl_berakhir`, `jam_tayang`, `kd_studio`) VALUES
(1001, 1, '2017-12-19', '2017-12-27', '11.30-12.45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kd_kategori` int(4) NOT NULL,
  `jenis_k` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kd_kategori`, `jenis_k`) VALUES
(1001, 'Romance'),
(1002, 'Documentary'),
(1003, 'Comedy'),
(1005, 'Crime'),
(1012, 'Horor'),
(1014, 'Drama'),
(1021, 'Thriller'),
(1031, 'Action'),
(1039, 'Sci-fi');

-- --------------------------------------------------------

--
-- Table structure for table `memesan`
--

CREATE TABLE `memesan` (
  `id_pemesan` int(8) NOT NULL,
  `id_pegawai` int(8) NOT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `jam_transaksi` time DEFAULT NULL,
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
  `alamat` varchar(25) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `no_telp` bigint(12) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
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
  `id_pemesan` int(8) NOT NULL,
  `nama_pemesan` varchar(30) NOT NULL,
  `alamat` varchar(40) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pemesan`
--

INSERT INTO `pemesan` (`id_pemesan`, `nama_pemesan`, `alamat`, `jenis_kelamin`, `no_telp`, `email`) VALUES
(5, 'kljlkj', 'jl.tubagus', 'L', '0908987878', 'andirifanto77@yahoo.co.id');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `kd_studio` int(8) NOT NULL,
  `nama_studio` varchar(20) DEFAULT NULL,
  `kursi` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`kd_studio`, `nama_studio`, `kursi`) VALUES
(1, 'Starplex-A', 60),
(2, 'Starplex-B', 60),
(3, 'Starplex-C', 60),
(4, 'Starplex-D', 60);

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
  `kursi` int(100) NOT NULL,
  `judul` varchar(30) DEFAULT NULL,
  `tgl_tayang` date DEFAULT NULL,
  `jam_tayang` varchar(10) DEFAULT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `kd_film` int(8) DEFAULT NULL,
  `id_pemesan` int(8) DEFAULT NULL,
  `kd_studio` int(8) NOT NULL,
  `nama_studio` varchar(10) DEFAULT NULL,
  `id_jadwal` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`kd_film`),
  ADD KEY `kd_kategori` (`kd_kategori`),
  ADD KEY `kategori` (`kd_kategori`),
  ADD KEY `kd_kategori_2` (`kd_kategori`),
  ADD KEY `kd_kategori_3` (`kd_kategori`),
  ADD KEY `kategori_2` (`kd_kategori`),
  ADD KEY `kd_kategori_4` (`kd_kategori`),
  ADD KEY `kd_kategori_5` (`kd_kategori`),
  ADD KEY `kategori_3` (`kd_kategori`),
  ADD KEY `kategori_4` (`kd_kategori`),
  ADD KEY `kategori_5` (`kd_kategori`),
  ADD KEY `kd_kategori_6` (`kd_kategori`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `kd_studio` (`kd_studio`),
  ADD KEY `kd_film` (`kd_film`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `memesan`
--
ALTER TABLE `memesan`
  ADD KEY `id_pemesan` (`id_pemesan`),
  ADD KEY `id_pemesan_2` (`id_pemesan`),
  ADD KEY `id_pegawai` (`id_pegawai`);

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
  ADD KEY `kd_studio` (`kd_studio`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_jadwal_2` (`id_jadwal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `kd_film` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `id_pemesan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`kd_kategori`) REFERENCES `kategori` (`kd_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`kd_studio`) REFERENCES `studio` (`kd_studio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`kd_film`) REFERENCES `film` (`kd_film`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `memesan`
--
ALTER TABLE `memesan`
  ADD CONSTRAINT `memesan_ibfk_1` FOREIGN KEY (`id_pemesan`) REFERENCES `pemesan` (`id_pemesan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `memesan_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_4` FOREIGN KEY (`id_pemesan`) REFERENCES `memesan` (`id_pemesan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tiket_ibfk_5` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
