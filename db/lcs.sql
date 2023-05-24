-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Mei 2023 pada 09.33
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lcs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lcs_lisensi`
--

CREATE TABLE `lcs_lisensi` (
  `id` int(10) NOT NULL,
  `plan` varchar(10) NOT NULL,
  `jns_srtfkt` varchar(50) NOT NULL,
  `no_lcns` varchar(100) NOT NULL,
  `no_lcns_old` varchar(100) NOT NULL,
  `no_lcns_new` varchar(100) NOT NULL,
  `ket_lcns2` varchar(20) NOT NULL,
  `ket_lcns` varchar(100) NOT NULL,
  `nm_srtfkt` varchar(100) NOT NULL,
  `pnrbt_srtfkt` varchar(100) NOT NULL,
  `tgl_lcns` date NOT NULL,
  `exprd_lcns` date NOT NULL,
  `tgl_war` date NOT NULL,
  `tgl_close` date NOT NULL,
  `st_aju` varchar(255) NOT NULL,
  `stat` varchar(50) DEFAULT NULL,
  `ket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lcs_lisensi`
--

INSERT INTO `lcs_lisensi` (`id`, `plan`, `jns_srtfkt`, `no_lcns`, `no_lcns_old`, `no_lcns_new`, `ket_lcns2`, `ket_lcns`, `nm_srtfkt`, `pnrbt_srtfkt`, `tgl_lcns`, `exprd_lcns`, `tgl_war`, `tgl_close`, `st_aju`, `stat`, `ket`) VALUES
(1, 'GA-EHS', 'Kendaraan', 'STNK / T 1050 HN', '', '', '', 'DAIHATSU GRAND MAX', 'FTI', 'SAMSAT KARAWANG', '2023-01-06', '2024-01-06', '2023-11-05', '0000-00-00', '', 'OK', ''),
(2, 'GA-EHS', 'Kendaraan', 'STNK / T 1052 FA (2016)', '', '', '', 'DAIHATSU GRAND MAX', 'FTI', 'SAMSAT KARAWANG', '2023-10-06', '2024-10-06', '2023-11-05', '0000-00-00', '', 'OK', ''),
(3, 'GA-EHS', 'Kendaraan', 'STNK / T 1146 FA (2016)', '', '', '', 'DAIHATSU SIGRA', 'FTI', 'SAMSAT KARAWANG', '2023-10-11', '2024-10-11', '2024-08-10', '0000-00-00', '', 'OK', ''),
(4, 'GA-EHS', 'Kendaraan', 'STNK / T 1147 FA (2016)', '', '', '', 'DAIHATSU SIGRA', 'FTI', 'SAMSAT KARAWANG', '2023-10-11', '2024-10-11', '2024-08-10', '0000-00-00', '', 'OK', ''),
(5, 'GA-EHS', 'Kendaraan', 'STNK / T 1516 FS (2018)', '', '', '', 'DAIHATSU TERIOS', 'FTI', 'SAMSAT KARAWANG', '2023-02-13', '2024-02-13', '2023-12-12', '0000-00-00', '', 'OK', ''),
(6, 'GA-EHS', 'Kendaraan', 'STNK / T 1421 DU', '', '', '', 'GM CHEVROLET SPIN', 'FTI', 'SAMSAT KARAWANG', '2023-11-06', '2024-11-06', '2024-09-05', '0000-00-00', '', 'OK', ''),
(7, 'GA-EHS', 'Kendaraan', 'STNK / T 1326 FD', '', '', '', 'HONDA BRV', 'FTI', 'SAMSAT KARAWANG', '2023-01-25', '2024-01-25', '2023-11-24', '0000-00-00', '', 'OK', ''),
(8, 'GA-EHS', 'Kendaraan', 'STNK / T 8069 FL', '', '', '', 'NISSAN UD TRUCK', 'FTI', 'SAMSAT KARAWANG', '2023-02-10', '2024-02-10', '2023-12-09', '0000-00-00', '', 'OK', ''),
(9, 'GA-EHS', 'Kendaraan', 'STNK / T 8640 M', '', '', '', 'ISUZU PANTHER', 'FTI', 'SAMSAT KARAWANG', '2023-02-14', '2024-02-14', '2023-12-13', '0000-00-00', '', 'OK', ''),
(10, 'GA-EHS', 'Kendaraan', 'STNK / T 8385 EC', '', '', '', 'SUZUKI APV', 'FTI', 'SAMSAT KARAWANG', '2023-10-27', '2024-10-27', '2024-08-26', '0000-00-00', '', 'OK', ''),
(11, 'GA-EHS', 'Kendaraan', 'STNK / T 1537 HW', '', '', '', 'ISUZU MUX', 'FTI', 'SAMSAT KARAWANG', '2023-02-22', '2024-02-22', '2023-12-21', '0000-00-00', '', 'OK', ''),
(12, 'GA-EHS', 'Kendaraan', 'STNK / T 1545 HW', '', '', '', 'SUZUKI ERTIGA', 'FTI', 'SAMSAT KARAWANG', '2023-02-22', '2024-02-22', '2023-12-21', '0000-00-00', '', 'OK', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lcs_login`
--

CREATE TABLE `lcs_login` (
  `id` int(5) NOT NULL,
  `npk` int(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `plan` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lcs_login`
--

INSERT INTO `lcs_login` (`id`, `npk`, `nama`, `username`, `plan`, `email`, `pass`, `hak_akses`) VALUES
(2, 59275, 'Hari Kusworo', 'hari.kusworo', 'GA-EHS', 'jihad.pts@gmail.com', 'Astra123', 'Admin'),
(3, 31641, 'Frein Diana', 'frein.diana', 'HR', 'jihad.pts@gmail.com', 'Astra123', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lcs_new`
--

CREATE TABLE `lcs_new` (
  `id_new` int(5) NOT NULL,
  `plan_new` varchar(5) NOT NULL,
  `no_lcns_new` varchar(100) NOT NULL,
  `no_lcns_old` varchar(100) NOT NULL,
  `tgl_input` date NOT NULL,
  `ket_new` varchar(20) NOT NULL,
  `ket_new2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lcs_uploadfile`
--

CREATE TABLE `lcs_uploadfile` (
  `id` int(11) NOT NULL,
  `lcs_lisenid` varchar(255) DEFAULT NULL,
  `lcs_namafiles` varchar(255) DEFAULT NULL,
  `lcs_alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lcs_lisensi`
--
ALTER TABLE `lcs_lisensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lcs_login`
--
ALTER TABLE `lcs_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lcs_new`
--
ALTER TABLE `lcs_new`
  ADD PRIMARY KEY (`id_new`);

--
-- Indexes for table `lcs_uploadfile`
--
ALTER TABLE `lcs_uploadfile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lcs_lisensi`
--
ALTER TABLE `lcs_lisensi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `lcs_login`
--
ALTER TABLE `lcs_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lcs_new`
--
ALTER TABLE `lcs_new`
  MODIFY `id_new` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lcs_uploadfile`
--
ALTER TABLE `lcs_uploadfile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
