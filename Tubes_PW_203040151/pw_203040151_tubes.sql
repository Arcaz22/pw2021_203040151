-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2021 pada 13.29
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
-- Database: `pw_203040151_tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `genre` varchar(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `harga` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `book`
--

INSERT INTO `book` (`id`, `genre`, `gambar`, `judul`, `pengarang`, `harga`) VALUES
(1, 'Inspiration', '1i.jpg', 'Paris Latters', 'Janice MacLoed', 30000),
(2, 'Inspiration', '2i.jpg', 'Second Chance Summer', 'Morgan Matson', 30000),
(3, 'Romance', '1r.jpg', 'Rindu', 'Tere Liye', 55000),
(4, 'Romance', '2r.jpg', 'The Book of Forbidden Feelings', 'Lala Bohang', 52000),
(5, 'Romance', '3r.jpg', 'friend ZONE', 'Vanesa Marcela', 25000),
(6, 'Sci-fi', '1s.jpg', 'Bumi', 'Tere Liye', 103000),
(7, 'Sci-fi', '2s.jpg', 'Contact', 'Carl Sagan', 76000),
(8, 'Sci-fi', '3s.jpg', 'Red Rising', 'Pierce Brown', 84000),
(9, 'Thriller', '1t.jpg', 'Spammer', 'Ronny Malindra', 52000),
(10, 'Thriller', '2t.jpg', 'Katarsis', 'Anastasia Aemilia', 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `host`
--

CREATE TABLE `host` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `host`
--

INSERT INTO `host` (`id`, `gambar`, `username`, `password`) VALUES
(2, '1t.jpg', 'user', '$2y$10$jse8YdlpooOz9wXLOEB0yu8fRvxlFK2.pFe3rsBfU/ywR/ldekQT2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `host`
--
ALTER TABLE `host`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `host`
--
ALTER TABLE `host`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
