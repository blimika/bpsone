-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2017 at 09:32 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntbsatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `ckp_satuan`
--

CREATE TABLE `ckp_satuan` (
  `ckp_sat_id` int(2) NOT NULL,
  `ckp_sat_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ckp_satuan`
--

INSERT INTO `ckp_satuan` (`ckp_sat_id`, `ckp_sat_nama`) VALUES
(1, 'Paket'),
(2, 'Konten'),
(3, 'Pengunjung'),
(4, 'Laporan'),
(5, 'Kegiatan'),
(6, 'Hari'),
(7, 'Blok Sensus'),
(8, 'Rumah Tangga'),
(9, 'Dokumen'),
(10, 'Persen'),
(11, 'Peserta'),
(12, 'Publikasi'),
(13, 'Set'),
(14, 'Aktivitas');

-- --------------------------------------------------------

--
-- Table structure for table `m_gol`
--

CREATE TABLE `m_gol` (
  `gol_kode` int(2) NOT NULL,
  `gol_nama` varchar(5) NOT NULL,
  `gol_jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_gol`
--

INSERT INTO `m_gol` (`gol_kode`, `gol_nama`, `gol_jabatan`) VALUES
(11, 'I/a', 'JURU MUDA'),
(12, 'I/b', 'JURU MUDA TINGKAT I'),
(13, 'I/c', 'JURU'),
(14, 'I/d', 'JURU TINGKAT I'),
(21, 'II/a', 'PENGATUR MUDA'),
(22, 'II/b', 'PENGATUR MUDA TINGKAT I'),
(23, 'II/c', 'PENGATUR'),
(24, 'II/d', 'PENGATUR TINGKAT I'),
(31, 'III/a', 'PENATA MUDA'),
(32, 'III/b', 'PENATA MUDA TINGKAT I'),
(33, 'III/c', 'PENATA'),
(34, 'III/d', 'PENATA TINGKAT I'),
(41, 'IV/a', 'PEMBINA'),
(42, 'IV/b', 'PEMBINA TINGKAT I'),
(43, 'IV/c', 'PEMBINA UTAMA MUDA'),
(44, 'IV/d', 'PEMBINA UTAMA MADYA'),
(45, 'IV/e', 'PEMBINA UTAMA');

-- --------------------------------------------------------

--
-- Table structure for table `m_pegawai`
--

CREATE TABLE `m_pegawai` (
  `peg_id` int(8) NOT NULL,
  `peg_user_no` int(8) NOT NULL,
  `peg_nik` varchar(18) NOT NULL,
  `peg_nama` varchar(100) NOT NULL,
  `peg_panggilan` varchar(20) NOT NULL,
  `peg_jk` int(1) NOT NULL,
  `peg_status_peg` int(1) NOT NULL,
  `peg_kawin` int(1) NOT NULL,
  `peg_tempat_lahir` varchar(50) NOT NULL,
  `peg_tgl_lahir` date NOT NULL,
  `peg_agama` int(1) NOT NULL,
  `peg_dibuat_oleh` int(8) NOT NULL,
  `peg_dibuat_waktu` datetime NOT NULL,
  `peg_diupdate_oleh` int(8) DEFAULT NULL,
  `peg_diupdate_waktu` datetime DEFAULT NULL,
  `peg_status` int(1) DEFAULT NULL,
  `peg_unitkode` int(5) NOT NULL,
  `peg_jenis` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_pegawai`
--

INSERT INTO `m_pegawai` (`peg_id`, `peg_user_no`, `peg_nik`, `peg_nama`, `peg_panggilan`, `peg_jk`, `peg_status_peg`, `peg_kawin`, `peg_tempat_lahir`, `peg_tgl_lahir`, `peg_agama`, `peg_dibuat_oleh`, `peg_dibuat_waktu`, `peg_diupdate_oleh`, `peg_diupdate_waktu`, `peg_status`, `peg_unitkode`, `peg_jenis`) VALUES
(3, 4, '5272031903820005', 'I PUTU DYATMIKA', 'MIKA', 1, 2, 2, 'MATARAM', '1982-03-19', 4, 1, '2017-01-18 16:38:49', 4, '2017-01-19 09:33:54', 1, 52563, 1),
(4, 5, '5215411445614154', 'CASSLIRAIS SURAWAN', 'CASSLI', 1, 2, 2, 'YOGYAKARTA', '1983-06-15', 1, 1, '2017-01-18 16:39:48', 4, '2017-01-20 16:22:18', 1, 52562, 1),
(5, 6, '5272036604820001', 'GUSTI KETUT INDRADEWI', 'INDRA', 2, 2, 2, 'GIANYAR', '1982-04-26', 4, 1, '2017-01-18 23:05:05', 4, '2017-01-19 16:28:05', 1, 52521, 1),
(9, 7, '5106667777666675', 'HASAN BASRIL', 'HASAN', 1, 2, 2, 'JAKARTA', '1985-11-16', 1, 4, '2017-01-19 09:28:02', 4, '2017-01-20 15:36:16', 1, 52016, 2),
(10, 9, '5271321561415156', 'JOKO PITOYO', 'JOKO', 1, 2, 2, 'JAKARTA', '2017-01-04', 1, 4, '2017-01-19 09:37:06', 4, '2017-01-20 16:24:49', 1, 52720, 2),
(11, 10, '7238734263297166', 'LALU ANDRE LUKITO', 'ANDRE', 1, 1, 2, 'SELONG', '2011-03-10', 1, 4, '2017-01-19 15:30:32', NULL, NULL, 1, 52514, 1),
(12, 11, '5204677621345615', 'ISFY SUMBAWA', 'ISFY', 2, 1, 2, 'SUMBAWA BESAR', '1985-06-12', 1, 4, '2017-01-19 15:33:00', 4, '2017-01-20 15:47:52', 1, 52514, 1);

-- --------------------------------------------------------

--
-- Table structure for table `peg_honorer`
--

CREATE TABLE `peg_honorer` (
  `peg_id` int(8) NOT NULL,
  `peg_tmt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peg_pns`
--

CREATE TABLE `peg_pns` (
  `peg_id` int(8) NOT NULL,
  `peg_nip` varchar(18) NOT NULL,
  `peg_nip_lama` int(9) DEFAULT NULL,
  `peg_gol_cpns` int(2) NOT NULL,
  `peg_tmt_cpns` date NOT NULL,
  `peg_gol_pns` int(2) NOT NULL,
  `peg_tmt_pns` date NOT NULL,
  `peg_jabatan` int(1) NOT NULL,
  `peg_tmt_jabatan` date NOT NULL,
  `peg_pendidikan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peg_pns`
--

INSERT INTO `peg_pns` (`peg_id`, `peg_nip`, `peg_nip_lama`, `peg_gol_cpns`, `peg_tmt_cpns`, `peg_gol_pns`, `peg_tmt_pns`, `peg_jabatan`, `peg_tmt_jabatan`, `peg_pendidikan`) VALUES
(3, '198203192004121002', 340017401, 31, '2004-12-01', 34, '2005-12-01', 1, '2013-01-11', 4),
(4, '198311032011011008', 340054408, 31, '2011-01-01', 32, '2015-04-01', 2, '2017-01-25', 2),
(5, '198204262004122001', 340017402, 31, '2004-12-01', 34, '2005-12-01', 1, '2013-01-11', 1),
(9, '198511162010121006', 340054212, 31, '2010-12-01', 32, '2015-04-01', 1, '2016-03-22', 1),
(10, '197511201997121002', 340015535, 22, '1997-12-01', 41, '2015-04-01', 1, '2017-01-19', 3);

-- --------------------------------------------------------

--
-- Table structure for table `unitkerja`
--

CREATE TABLE `unitkerja` (
  `unit_kode` int(5) NOT NULL,
  `unit_nama` varchar(254) NOT NULL,
  `unit_parent` int(5) DEFAULT NULL,
  `unit_jenis` int(1) NOT NULL,
  `unit_dibuat_waktu` datetime NOT NULL,
  `unit_dibuat_oleh` int(5) NOT NULL,
  `unit_diupdate_waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `unit_diupdate_oleh` int(5) NOT NULL,
  `unit_eselon` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unitkerja`
--

INSERT INTO `unitkerja` (`unit_kode`, `unit_nama`, `unit_parent`, `unit_jenis`, `unit_dibuat_waktu`, `unit_dibuat_oleh`, `unit_diupdate_waktu`, `unit_diupdate_oleh`, `unit_eselon`) VALUES
(52000, 'BPS Provinsi Nusa Tenggara Barat', NULL, 1, '2016-12-06 08:12:08', 1, '2017-01-18 06:54:45', 1, 2),
(52010, 'BPS Kabupaten Lombok Barat', 52000, 2, '2016-12-06 09:22:39', 1, '2017-01-18 06:54:45', 1, 3),
(52016, 'Seksi Integrasi Pengolahan dan Diseminasi Data', 52010, 2, '2017-01-19 00:13:19', 0, '2017-01-18 16:13:19', 0, 4),
(52020, 'BPS Kabupaten Lombok Tengah', 52000, 2, '2016-12-06 09:25:49', 1, '2017-01-18 06:54:45', 1, 3),
(52021, 'Subbagian Tata Usaha', 52020, 2, '2017-01-19 10:10:12', 4, '2017-01-19 02:10:47', 4, 4),
(52030, 'BPS Kabupaten Lombok Timur', 52000, 2, '2016-12-06 09:26:21', 1, '2017-01-18 06:54:45', 1, 3),
(52031, 'Subbagian Tata Usaha', 52030, 2, '2017-01-19 10:11:12', 4, '2017-01-19 02:11:12', 0, 4),
(52040, 'BPS Kabupaten Sumbawa', 52000, 2, '2016-12-06 09:26:54', 1, '2017-01-18 06:54:45', 1, 3),
(52050, 'BPS Kabupaten Dompu', 52000, 2, '2016-12-06 09:28:40', 1, '2017-01-18 06:54:45', 1, 3),
(52060, 'BPS Kabupaten Bima', 52000, 2, '2016-12-06 09:30:55', 1, '2017-01-18 06:54:45', 1, 3),
(52070, 'BPS Kabupaten Sumbawa Barat', 52000, 2, '2016-12-06 09:31:13', 1, '2017-01-18 06:54:45', 1, 3),
(52080, 'BPS Kabupaten Lombok Utara', 52000, 2, '2016-12-06 09:31:27', 1, '2017-01-18 06:54:45', 1, 3),
(52510, 'Bagian Tata Usaha', 52000, 1, '2016-12-06 09:35:55', 1, '2017-01-18 06:54:45', 1, 3),
(52511, 'Subbagian Bina Program', 52510, 1, '2016-12-10 13:28:49', 1, '2017-01-18 06:54:45', 1, 4),
(52512, 'Subbagian Kepegawaian & Hukum', 52510, 1, '2016-12-10 13:33:23', 1, '2017-01-18 06:54:45', 1, 4),
(52513, 'Subbagian Keuangan', 52510, 1, '2016-12-10 13:35:10', 1, '2017-01-18 06:54:45', 1, 4),
(52514, 'Subbagian Urusan Dalam', 52510, 1, '2016-12-10 13:35:54', 1, '2017-01-18 06:54:45', 1, 4),
(52515, 'Subbagian Perlengkapan', 52510, 1, '2016-12-10 13:40:09', 1, '2017-01-18 06:54:45', 1, 4),
(52520, 'Bidang Statistik Sosial', 52000, 1, '2016-12-06 09:36:50', 1, '2017-01-18 06:54:45', 1, 3),
(52521, 'Seksi Statistik Kependudukan', 52520, 1, '2016-12-10 13:43:19', 1, '2017-01-18 06:54:45', 1, 4),
(52522, 'Seksi Statistik Ketahanan Sosial', 52520, 1, '2016-12-10 13:43:51', 1, '2017-01-18 06:54:45', 1, 4),
(52523, 'Seksi Statistik Kesejahteraan Rakyat', 52520, 1, '2016-12-10 13:44:14', 1, '2017-01-18 06:54:45', 1, 4),
(52530, 'Bidang Statistik Produksi', 52000, 1, '2016-12-06 09:37:57', 1, '2017-01-18 06:54:45', 1, 3),
(52531, 'Seksi Statistik Pertanian', 52530, 1, '2016-12-10 18:52:16', 1, '2017-01-18 06:54:45', 1, 4),
(52532, 'Seksi Statistik Industri', 52530, 1, '2016-12-10 18:52:50', 1, '2017-01-18 06:54:45', 1, 4),
(52533, 'Seksi Statistik Pertambangan, Energi dan Konstruksi', 52530, 1, '2016-12-10 18:53:38', 1, '2017-01-18 06:54:45', 1, 4),
(52540, 'Bidang Statistik Distribusi', 52000, 1, '2016-12-07 07:42:46', 1, '2017-01-18 06:54:45', 1, 3),
(52541, 'Seksi Statistik Harga Konsumen dan Harga Perdagangan Besar', 52540, 1, '2016-12-10 18:54:22', 1, '2017-01-18 06:54:45', 1, 4),
(52542, 'Seksi Statistik Keuangan Dan Harga Produsen', 52540, 1, '2016-12-10 18:54:47', 1, '2017-01-18 06:54:45', 1, 4),
(52543, 'Seksi Statistik Niaga dan Jasa', 52540, 1, '2016-12-10 18:55:20', 1, '2017-01-18 06:54:45', 1, 4),
(52550, 'Bidang Neraca Wilayah dan Analisis Statistik', 52000, 1, '2016-12-07 07:42:25', 1, '2017-01-18 06:54:45', 1, 3),
(52551, 'Seksi Neraca Produksi', 52550, 1, '2016-12-10 18:58:18', 1, '2017-01-18 06:54:45', 1, 4),
(52552, 'Seksi Neraca Konsumsi', 52550, 1, '2016-12-10 18:58:43', 1, '2017-01-18 06:54:45', 1, 4),
(52553, 'Seksi Analisis Statistik Lintas Sektoral', 52550, 1, '2016-12-10 18:59:06', 1, '2017-01-18 06:54:45', 1, 4),
(52560, 'Bidang Integrasi Pengolahan Dan Diseminasi Statistik', 52000, 1, '2016-12-06 09:34:35', 1, '2017-01-18 06:54:45', 1, 3),
(52561, 'Seksi Integrasi Pengolahan Data', 52560, 1, '2016-12-06 09:23:00', 1, '2017-01-18 06:54:45', 1, 4),
(52562, 'Seksi Jaringan dan Rujukan Statistik', 52560, 1, '2016-12-06 09:25:26', 1, '2017-01-18 06:54:45', 1, 4),
(52563, 'Seksi Diseminasi dan Layanan Statistik', 52560, 1, '2016-12-06 09:36:17', 1, '2017-01-18 06:54:45', 1, 4),
(52710, 'BPS Kota Mataram', 52000, 2, '2016-12-06 09:32:53', 1, '2017-01-18 06:54:45', 1, 3),
(52720, 'BPS Kota Bima', 52000, 2, '2016-12-06 09:33:10', 1, '2017-01-18 06:54:45', 1, 3),
(52721, 'Subbagian Tata Usaha', 52720, 2, '2017-01-19 09:35:26', 4, '2017-01-19 01:35:26', 4, 4),
(52722, 'Seksi Statistik Sosial', 52720, 2, '2017-01-19 09:35:53', 4, '2017-01-19 01:35:53', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_no` int(8) NOT NULL,
  `user_peg_id` int(8) DEFAULT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `user_passwd` varchar(32) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_level` int(2) NOT NULL,
  `user_status` int(1) DEFAULT NULL,
  `user_lastip` varchar(20) NOT NULL,
  `user_lastlogin` datetime NOT NULL,
  `user_dibuat_oleh` int(5) NOT NULL,
  `user_dibuat_waktu` datetime NOT NULL,
  `user_diupdate_oleh` int(5) DEFAULT NULL,
  `user_diupdate_waktu` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_no`, `user_peg_id`, `user_nama`, `user_id`, `user_passwd`, `user_email`, `user_level`, `user_status`, `user_lastip`, `user_lastlogin`, `user_dibuat_oleh`, `user_dibuat_waktu`, `user_diupdate_oleh`, `user_diupdate_waktu`) VALUES
(1, NULL, 'ADMIN SISTEM', 'admin', '032d66b893ad4d122ce8ff4510edbc85', 'admin@bpsntb.web.id', 3, 1, '192.168.1.9', '2017-01-19 05:10:33', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(4, 3, 'I PUTU DYATMIKA', 'mika', 'bb07f9e616e6f90eceb8bd9ceb659859', 'pdyatmika@gmail.com', 2, 1, '10.52.6.32', '2017-01-20 14:45:47', 1, '2017-01-18 15:18:57', 4, '2017-01-19 09:53:06'),
(5, 4, 'CASSLIRAIS SURAWAN', 'cassli', 'fa7382b1ba90d3fdbbc0fceaa4b97fd0', 'casslirais@bps.go.id', 1, 1, '', '0000-00-00 00:00:00', 1, '2017-01-18 15:19:45', 4, '2017-01-19 08:03:49'),
(6, 5, 'GUSTI KETUT INDRADEWI', 'indradewi', '69e8b508e4008130652dc13a4cdb2c6f', 'indradewi@bps.go.id', 1, 1, '10.52.6.31', '2017-01-19 16:32:36', 1, '2017-01-18 23:04:08', 4, '2017-01-19 08:04:12'),
(7, 9, 'HASAN BASRIL', 'hasan', 'c6143d4c7441b45854273f23c6edacb2', 'hasan@bps.go.id', 1, 1, '192.168.1.9', '2017-01-19 05:24:46', 1, '2017-01-19 00:09:57', 4, '2017-01-20 15:34:24'),
(9, 10, 'JOKO PITOYO', 'joko', 'f97f8b3f076047e5dbd5d11d55dbc918', 'joko@bps.go.id', 1, 1, '', '0000-00-00 00:00:00', 4, '2017-01-19 09:36:28', NULL, NULL),
(10, 11, 'LALU ANDRE LUKITO', 'andre', '0f095d0ab06624f6fec27baffb77a448', 'andre@gmail.com', 1, 1, '', '0000-00-00 00:00:00', 4, '2017-01-19 15:29:41', NULL, NULL),
(11, 12, 'ISFY SUMBAWA', 'isfy', '2bc5b83479eaee76e9fb7b6868431ce3', 'isfy@gmail.com', 1, 1, '', '0000-00-00 00:00:00', 4, '2017-01-19 15:29:59', 4, '2017-01-20 15:47:52');

-- --------------------------------------------------------

--
-- Table structure for table `users_akses`
--

CREATE TABLE `users_akses` (
  `user_no` int(9) NOT NULL,
  `akses` int(2) DEFAULT NULL,
  `pegawai` int(1) DEFAULT NULL,
  `ckp` int(1) DEFAULT NULL,
  `surat` int(1) DEFAULT NULL,
  `kegiatan` int(1) DEFAULT NULL,
  `master` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ckp_satuan`
--
ALTER TABLE `ckp_satuan`
  ADD PRIMARY KEY (`ckp_sat_id`);

--
-- Indexes for table `m_gol`
--
ALTER TABLE `m_gol`
  ADD PRIMARY KEY (`gol_kode`);

--
-- Indexes for table `m_pegawai`
--
ALTER TABLE `m_pegawai`
  ADD PRIMARY KEY (`peg_id`) USING BTREE;

--
-- Indexes for table `peg_honorer`
--
ALTER TABLE `peg_honorer`
  ADD PRIMARY KEY (`peg_id`);

--
-- Indexes for table `peg_pns`
--
ALTER TABLE `peg_pns`
  ADD PRIMARY KEY (`peg_id`);

--
-- Indexes for table `unitkerja`
--
ALTER TABLE `unitkerja`
  ADD PRIMARY KEY (`unit_kode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_no`) USING BTREE;

--
-- Indexes for table `users_akses`
--
ALTER TABLE `users_akses`
  ADD PRIMARY KEY (`user_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ckp_satuan`
--
ALTER TABLE `ckp_satuan`
  MODIFY `ckp_sat_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `m_pegawai`
--
ALTER TABLE `m_pegawai`
  MODIFY `peg_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_no` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
