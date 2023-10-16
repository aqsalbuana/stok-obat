-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2023 pada 08.05
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_stokobat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_alatkesehatan`
--

CREATE TABLE `tbl_alatkesehatan` (
  `id` int(15) NOT NULL,
  `nama_alat` varchar(25) NOT NULL,
  `harga` int(7) NOT NULL,
  `stok_alat` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_alatkesehatan`
--

INSERT INTO `tbl_alatkesehatan` (`id`, `nama_alat`, `harga`, `stok_alat`) VALUES
(112, 'nald', 90000, 45),
(113, 'selang inpus', 20000, 67),
(114, 'gunting bedah', 90000, 34);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `kode` int(20) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(10) NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_obat`
--

INSERT INTO `tbl_obat` (`kode`, `nama_obat`, `harga`, `stok`, `exp_date`) VALUES
(101, 'Neurobion', 31000, 36, '2024-10-04'),
(102, 'Fatigon Spirit', 11000, 60, '2025-07-17'),
(103, 'Hormoviton Pasak Bumi', 75000, 48, '2024-06-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'admin', 1, 'Admin'),
('andi', '827ccb0eea8a706c4c34a16891f84e7b', 'andi@gmail.com', 'Andi', 2, 'staff'),
('aqsal', '827ccb0eea8a706c4c34a16891f84e7b', 'aqsalbuana@gmail.com', 'Aqsal Arya Buana', 2, 'staff'),
('edwan', '827ccb0eea8a706c4c34a16891f84e7b', 'nidzaredwan@gmail.com', 'Muhammad Edwan  Nidzar', 2, 'staff');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_alatkesehatan`
--
ALTER TABLE `tbl_alatkesehatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_alatkesehatan`
--
ALTER TABLE `tbl_alatkesehatan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
