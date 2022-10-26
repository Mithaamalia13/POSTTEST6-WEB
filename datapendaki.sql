-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2022 pada 18.12
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mountravelers`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapendaki`
--

CREATE TABLE `datapendaki` (
  `id_pendaki` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `asal_daerah` varchar(30) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `nama_grup` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `gunung` varchar(30) NOT NULL,
  `tgl_naik` varchar(50) NOT NULL,
  `tgl_turun` varchar(50) NOT NULL,
  `status_pendakian` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapendaki`
--

INSERT INTO `datapendaki` (`id_pendaki`, `nama`, `ttl`, `asal_daerah`, `nama_ortu`, `nama_grup`, `telepon`, `gunung`, `tgl_naik`, `tgl_turun`, `status_pendakian`, `foto`) VALUES
(1, 'Mitha Amalia', 'Bandung, 13 Februari 2002', 'Sumedang', 'Sutanto', 'Strong Women', '085624613983', 'Gunung Merbabu', '', '', 'On Track', ''),
(2, 'Ega Sulfika', 'Muara Pasir, 10 Januari 2003', 'Grogot', 'Acep', 'Strong Women', '0811721979261', 'Gunung Merbabu', '2022-10-21', '2022-10-24', 'Selesai', ''),
(9, 's', 's', 's', 's', 's', 's', 's', '2022-11-26', '2022-11-30', 'Selesai', 's.png'),
(335, '', '', '', '', '', '', '', '', '', '0', ''),
(336, '', '', '', '', '', '', '', '', '', '0', ''),
(337, '', '', '', '', '', '', '', '', '', '0', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datapendaki`
--
ALTER TABLE `datapendaki`
  ADD PRIMARY KEY (`id_pendaki`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datapendaki`
--
ALTER TABLE `datapendaki`
  MODIFY `id_pendaki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
