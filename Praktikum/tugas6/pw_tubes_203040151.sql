-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 08:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: pw_tubes_203040151
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  id int(11) NOT NULL,
  gambar varchar(100) NOT NULL,
  Judul varchar(50) NOT NULL,
  Pengarang varchar(50) NOT NULL,
  Terbit date NOT NULL,
  Dimensi varchar(15) NOT NULL,
  ISBN char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (id, gambar, Judul, Pengarang, Terbit, Dimensi, ISBN) VALUES
(1, 'i.png', 'SELENA', 'Tere Liye', '2020-03-16', '368 Halaman', '9786020639512'),
(2, 'f.png', 'Misteri Terakhir #1', 'S. Mara Gd', '2020-04-06', '448 Halaman', '9786020637112'),
(3, 'g.png', 'Nebula', 'Tere Liye', '2020-03-16', '376 Halaman', '9786020639536'),
(4, 'a.png', 'After the Funeral', 'Agatha Christie', '2017-12-27', '336 Halaman', '9789792234343'),
(5, 'e.png', 'Ganjil Genap', 'Amira Bastari', '2020-03-03', '344 Halaman', '9786020638010'),
(6, 'j.png', 'Tokyo & Perayaan', 'Ruth Pricilia Angelinae', '2020-04-13', '208 Halaman', '9786020640853'),
(7, 'h.png', 'Segi Tiga', 'Sapardi Djoko Damono', '2020-03-29', '328 Halaman', '9786020639246'),
(8, 'c.png', 'Ibuk', 'Iwan Setyawan', '2013-02-06', '289 Halaman', '9786020329987'),
(9, 'd.png', 'Laut Bercerita', 'Leila S. Chudori', '2017-12-21', '379 Halaman', '9786024246945'),
(10, 'b.png', 'Defending Jacob', 'William Landay', '2019-01-30', '484 Halaman', '9786020451558'),
(17, 'g.png', 'aa', 'aaa', '2021-04-08', 'aaa', '2222222222222'),
(18, 'f.png', 'laili', 'meidina', '2011-05-19', '222 halaman', '1231231231231'),
(19, 'h.png', 'asdas', 'sadasd', '2021-04-02', 'asd', '1231231231233');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
