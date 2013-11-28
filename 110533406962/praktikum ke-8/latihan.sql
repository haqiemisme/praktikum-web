-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 27. Nopember 2013 jam 15:35
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` double NOT NULL,
  `kd_prodi` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `kd_prodi`, `nama`, `alamat`) VALUES
(110533406966, 33, 'jalu', 'blitar'),
(110533406962, 33, 'khakim', 'lamongan'),
(110533406977, 33, 'tomet', 'malang'),
(110533406961, 33, 'armanda', 'palembang'),
(110534406969, 34, 'iman', 'ponorogo'),
(110534406983, 34, 'indri', 'lumajang'),
(110535406975, 35, 'ika rizki', 'lumajang'),
(110535406991, 35, 'elsa minuk', 'situbondo'),
(110535406999, 35, 'sigma rara', 'ponorogo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa2`
--

CREATE TABLE IF NOT EXISTS `mahasiswa2` (
  `nim` double NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa2`
--

INSERT INTO `mahasiswa2` (`nim`, `nama`, `alamat`, `nama_prodi`) VALUES
(110533406966, 'jalu', 'blitar', 'Pendidikan Teknik Informatika'),
(110533406962, 'khakim', 'lamongan', 'Pendidikan Teknik Informatika'),
(110533406977, 'tomet', 'malang', 'Pendidikan Teknik Informatika'),
(110533406961, 'armanda', 'palembang', 'Pendidikan Teknik Informatika'),
(110534406969, 'iman', 'ponorogo', 'Pendidikan Teknik Elektro'),
(110534406983, 'indri', 'lumajang', 'Pendidikan Teknik Elektro'),
(110535406975, 'ika rizki', 'lumajang', 'Pendidikan Teknik Sipil'),
(110535406991, 'elsa minuk', 'situbondo', 'Pendidikan Teknik Sipil'),
(110535406999, 'sigma rara', 'ponorogo', 'Pendidikan Teknik Sipil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
  `kd_prodi` int(3) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  PRIMARY KEY (`kd_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`kd_prodi`, `nama_prodi`) VALUES
(33, 'Pendidikan Teknik Informatika'),
(34, 'Pendidikan Teknik Elektro'),
(35, 'Pendidikan Teknik Sipil');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
