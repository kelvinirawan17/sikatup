-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2020 pada 03.56
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikatup_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `idJabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`idJabatan`, `nama_jabatan`) VALUES
(1, 'Ketua Umum'),
(2, 'Wakil Ketua'),
(3, 'Sekretaris I'),
(4, 'Sekretaris II'),
(5, 'Bendaharan I'),
(6, 'Bendaharan II'),
(7, 'Staff Anggota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `idKegiatan` int(11) NOT NULL,
  `judul_kegiatan` varchar(100) DEFAULT NULL,
  `thumbnail` varchar(100) DEFAULT 'assets/img/upload/produk/default.png',
  `slug` text DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `kategori` int(1) DEFAULT NULL,
  `create` timestamp NULL DEFAULT NULL,
  `update` timestamp NULL DEFAULT NULL,
  `kegiatan_status` int(1) DEFAULT NULL,
  `Pengurus_idPengurus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus`
--

CREATE TABLE `pengurus` (
  `idPengurus` int(11) NOT NULL,
  `nama_pengurus` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_wa` varchar(15) DEFAULT NULL,
  `foto` varchar(100) DEFAULT 'assets/img/upload/produk/default.png',
  `status` int(1) DEFAULT NULL,
  `role` int(1) DEFAULT NULL,
  `dibuat` timestamp NULL DEFAULT NULL,
  `diedit` timestamp NULL DEFAULT NULL,
  `Jabatan_idJabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idProduk` int(11) NOT NULL,
  `nama_produk` varchar(45) DEFAULT NULL,
  `foto_produk` varchar(100) DEFAULT 'assets/img/upload/produk/default.png',
  `deskripsi_produk` text DEFAULT NULL,
  `harga_produk` int(11) DEFAULT NULL,
  `cp_produk` varchar(45) DEFAULT NULL,
  `produk_status` int(1) DEFAULT NULL,
  `Pengurus_idPengurus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sikatupsession`
--

CREATE TABLE `sikatupsession` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `timestamp` int(11) DEFAULT NULL,
  `data` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`idJabatan`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`idKegiatan`,`Pengurus_idPengurus`),
  ADD KEY `fk_Kegiatan_Pengurus1_idx` (`Pengurus_idPengurus`);

--
-- Indeks untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`idPengurus`,`Jabatan_idJabatan`),
  ADD KEY `fk_Pengurus_Jabatan_idx` (`Jabatan_idJabatan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`,`Pengurus_idPengurus`),
  ADD KEY `fk_Produk_Pengurus1_idx` (`Pengurus_idPengurus`);

--
-- Indeks untuk tabel `sikatupsession`
--
ALTER TABLE `sikatupsession`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `idJabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `idKegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `idPengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `fk_Kegiatan_Pengurus1` FOREIGN KEY (`Pengurus_idPengurus`) REFERENCES `pengurus` (`idPengurus`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pengurus`
--
ALTER TABLE `pengurus`
  ADD CONSTRAINT `fk_Pengurus_Jabatan` FOREIGN KEY (`Jabatan_idJabatan`) REFERENCES `jabatan` (`idJabatan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_Produk_Pengurus1` FOREIGN KEY (`Pengurus_idPengurus`) REFERENCES `pengurus` (`idPengurus`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
