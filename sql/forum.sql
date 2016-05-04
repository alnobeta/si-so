-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 02. Mei 2014 jam 09:44
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `pengirim` varchar(20) NOT NULL,
  `penerima` varchar(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `pengirim`, `penerima`, `judul`, `isi`, `tanggal`) VALUES
(1, 'rara', 'admin', 'Hello', 'hai admin :D', '2014-05-02 08:16:49'),
(2, 'admin', 'rara', 'Hello', 'hello juga', '2014-05-02 08:17:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `pengirim` varchar(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `dilihat` int(255) NOT NULL,
  `total_balasan` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id_post`, `pengirim`, `judul`, `isi`, `dilihat`, `total_balasan`, `tanggal`) VALUES
(24, 'admin', 'Komik', 'Ayo yang punya komik Miiko!', 4, 1, '2014-05-02 04:45:50'),
(25, 'lia', 'Novel', 'ada novel baru?', 5, 1, '2014-05-02 08:09:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `id_balasan` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(25) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penjawab` varchar(20) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_balasan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `reply`
--

INSERT INTO `reply` (`id_balasan`, `id_post`, `judul`, `penjawab`, `isi`, `tanggal`) VALUES
(1, 25, 'Novel', 'rara', 'ada...kuntilanak beranak :v', '2014-05-02 08:12:17'),
(2, 24, 'Komik', 'rara', 'adaaa', '2014-05-02 08:15:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `nama` varchar(8) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `tanggal` text NOT NULL,
  `avatar` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `status` varchar(50) NOT NULL,
  `web` varchar(50) NOT NULL,
  `hobi` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`nama`, `username`, `email`, `password`, `tanggal`, `avatar`, `status`, `web`, `hobi`, `telp`) VALUES
('admin', 'admin', 'haha@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '02/05/2014', 'images/avatar/1958212_1413328428917902_516762774_n.jpg', 'admin', 'haha.com', 'Tidur', '080989999'),
('Krisdha', 'rara', 'krisdhamara33@gmail.com', 'd8830ed2c45610e528dff4cb229524e9', '02/05/2014', 'images/avatar/1538787_1392505844333494_1508662053_n.jpg', 'user', 'rara.com', 'Traveling', '08555986852'),
('hasanah', 'lia', 'lia@gmail.com', '4e4d6c332b6fe62a63afe56171fd3725', '02/05/2014', 'images/avatar/10277716_1431392667111478_5579335409992332014_n.jpg', 'user', 'lia.com', 'Menyanyi', '089619333991'),
('diannisa', 'anis', 'anis@gmail.com', '38a1ffb5ccad9612d3d28d99488ca94b', '02/05/2014', 'images/avatar.png', 'user', '', '', ''),
('Putri', 'ces', 'tia@gmail.com', '9d89e27badedeba14a6e13bce87c9957', '02/05/2014', 'images/avatar.png', 'user', '', '', ''),
('Nabilah', 'fafa', 'fafa@gmail.com', '05d251ea28c5be9426611a121db0c92a', '02/05/2014', 'images/avatar.png', 'user', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
