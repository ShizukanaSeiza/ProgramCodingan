-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2025 pada 12.51
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joki`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `joki`
--

CREATE TABLE `joki` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `rank_awal` varchar(20) NOT NULL,
  `rank_tujuan` varchar(20) NOT NULL,
  `catatan` text NOT NULL,
  `estimasi` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `joki`
--

INSERT INTO `joki` (`id`, `nama`, `rank_awal`, `rank_tujuan`, `catatan`, `estimasi`, `created_at`, `updated_at`) VALUES
(16, 'Shizukana Seiza', 'Grandmaster', 'Epic', 'Semangat', 1, '2025-05-24 10:29:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `joki`
--
ALTER TABLE `joki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `joki`
--
ALTER TABLE `joki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
