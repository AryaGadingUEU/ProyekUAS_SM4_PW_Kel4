-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jul 2023 pada 17.41
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--
CREATE DATABASE mahasiswa;
USE mahasiswa;
-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `nim` varchar(0) NOT NULL,
  `nama_mahasiswa` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `tmp_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `hp` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`nim`, `nama_mahasiswa`, `jenis_kelamin`, `foto`, `jurusan`, `tmp_lahir`, `tgl_lahir`, `alamat`, `nama_ibu`, `email`, `hp`) VALUES
('202101', 'Arya', 'Laki-Laki', 'image1.com', 'T-Informatika', 'Cilacap', '1986-02-18', 'Cilacap', 'Febriana', 'arya86@gmail.com', '089812113344'),
('202102', 'Fathur', 'Laki-Laki', 'image2.com', 'T-Informatika', 'Banyumas', '1987-12-22', 'Desa Uripharjo Kec. Senggol Kab. Banyumas', 'Nawangsari', 'Fathur@gmail.com', '081200001100'),
('202103', 'Dita', 'Perempuan', 'image3.com', 'T-Informatika', 'Bandung', '1987-06-14', 'Jl. Bandung Raya II No. 453', 'Stevany N', 'dita@gmail.com', '085600112221');

-- --------------------------------------------------------

SELECT `nama_mahasiswa` FROM `data_mahasiswa` WHERE `tmp_lahir` = 'Cilacap';
UPDATE `data_mahasiswa` SET `foto` = '14.jpg' WHERE `nim` = '202101' AND `tgl_lahir` = '1986-02-18';
DELETE FROM `data_mahasiswa` WHERE `nim` = '202103';

--
-- Indeks untuk tabel `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`nim`);
