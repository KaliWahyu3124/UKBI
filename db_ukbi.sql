-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2023 pada 15.30
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ukbi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`) VALUES
('Nurlita', '123', 'nurlita@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `tgl_ujian` date NOT NULL,
  `jumlah_benar` int(10) NOT NULL,
  `total_nilai` int(100) NOT NULL,
  `nim` int(15) NOT NULL,
  `kode_soal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengerjaan_soal`
--

CREATE TABLE `pengerjaan_soal` (
  `kode_soal` int(10) NOT NULL,
  `nim` int(15) NOT NULL,
  `skor` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `nim` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`nim`, `nama`, `prodi`, `password`, `email`) VALUES
(1234321, 'Budi', 'Teknik Informatika', '321', 'budi123@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `nama` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `jurusan` enum('Managemen Bisnis','Teknik Elektro','Teknik Informatika','Teknik Mesin') NOT NULL,
  `jenjang` enum('D3','D4') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`nama`, `email`, `password`, `ttl`, `jenis_kelamin`, `jurusan`, `jenjang`) VALUES
('Budi', 'budi123@gmail.com', '321', 'Batam, 10 Mei 2001', 'Laki-Laki', 'Teknik Informatika', 'D3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `kode_soal` int(10) NOT NULL,
  `jumlah_soal` int(50) NOT NULL,
  `kunci_jawaban` varchar(255) NOT NULL,
  `waktu_ujian` time NOT NULL,
  `jenis_soal` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `nim` (`nim`),
  ADD KEY `kode_soal` (`kode_soal`);

--
-- Indeks untuk tabel `pengerjaan_soal`
--
ALTER TABLE `pengerjaan_soal`
  ADD KEY `kode_soal` (`kode_soal`),
  ADD KEY `nim` (`nim`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `email` (`email`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`kode_soal`),
  ADD UNIQUE KEY `jenis_soal` (`jenis_soal`),
  ADD KEY `username` (`username`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`kode_soal`) REFERENCES `soal` (`kode_soal`);

--
-- Ketidakleluasaan untuk tabel `pengerjaan_soal`
--
ALTER TABLE `pengerjaan_soal`
  ADD CONSTRAINT `pengerjaan_soal_ibfk_1` FOREIGN KEY (`kode_soal`) REFERENCES `soal` (`kode_soal`),
  ADD CONSTRAINT `pengerjaan_soal_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `peserta` (`nim`);

--
-- Ketidakleluasaan untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD CONSTRAINT `peserta_ibfk_1` FOREIGN KEY (`email`) REFERENCES `registrasi` (`email`);

--
-- Ketidakleluasaan untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD CONSTRAINT `soal_ibfk_1` FOREIGN KEY (`username`) REFERENCES `admin` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
