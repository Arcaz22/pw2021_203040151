-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2021 pada 16.37
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_203040151`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(2, 'Udin Bro', '203040152', 'udin@gmail.com', 'Teknik Mesin', 'f.png'),
(3, 'Samsul', '203040153', 'samsul@gmail.com', 'PWK', 'c.png'),
(4, 'Dody', '203040154', 'dody@gmail.com', 'Tenkik Industri', 'd.png'),
(5, 'Syukron', '203040155', 'Syu@gmail.com', 'Teknik Pangan', 'e.png'),
(6, 'Nakei', '203040156', 'Neke@gmail.com', 'Teknik Informatika', 'f.png'),
(7, 'Moham', '203040157', 'Moh@gmail.com', 'Teknik mesin', 'g.png'),
(8, 'Jeni', '203040158', 'jen@gmail.com', 'Teknik Industri', 'h.png'),
(9, 'ayu', '203040159', 'ayu@gmail.com', 'PWK', 'i.png'),
(10, 'Dian', '203040160', 'Disas@gmail.com', 'Teknik Informatika', 'j.png'),
(25, 'sad', 'asd', 'asd', 'asd', '6086585b8d53e.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'chandra', '$2y$10$c2jx1GzaPRja59n.Zp.gc.8MYer3bYc9gHgd89/EktnQ.O4P/f50u'),
(3, 'admin', '$2y$10$v2wMMCo1HyeokJFcB3ZnyOJRJm/r0ZxL.Q7EINEIP8SgQZpwXzkaK'),
(4, 'user', '$2y$10$K8aLq6jL5dZjqdUqFUnY3e8jLuETW90NCZ7pfLJYnfiQuKYvl6crq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
