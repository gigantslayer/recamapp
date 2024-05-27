-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Mar 2024 pada 12.29
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rekam_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id_semester`, `semester`, `created_at`) VALUES
(2, 2, '2024-02-06 19:56:23'),
(3, 3, '2024-02-06 19:58:16'),
(4, 4, '2024-02-06 19:59:05'),
(6, 1, '2024-02-06 20:00:40'),
(7, 5, '2024-02-06 20:00:47'),
(8, 6, '2024-02-06 20:00:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `panggilan` varchar(50) NOT NULL,
  `nik` varchar(70) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` int(11) NOT NULL,
  `tinggal_di` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `diagnosa` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `telepon_orangtua` varchar(50) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `semester` int(11) NOT NULL DEFAULT 1,
  `id_orangtua` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `panggilan`, `nik`, `jenis_kelamin`, `tanggal_lahir`, `usia`, `tinggal_di`, `status`, `diagnosa`, `alamat`, `tanggal_masuk`, `nama_ibu`, `nama_ayah`, `telepon_orangtua`, `kelas`, `semester`, `id_orangtua`, `created_at`) VALUES
(1, 'ifans', 'ifan2', '59464843949785484', 'L', '2024-01-19', 25, 'medan', 'jomblo', 'sakit bae', 'jalan marelan', '2024-01-19', 'ivano', 'kamma', '08542488424', '5', 2, 2, '2024-01-28 12:15:16'),
(2, 'keko', 'kek', '64848497878', 'L', '2024-02-08', 24, 'malaysia', 'aktif', 'sehat', 'medan', '2024-02-08', 'ibundo', 'bapando', '0454848807', '5', 4, 2, '2024-02-07 14:24:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `terapi`
--

CREATE TABLE `terapi` (
  `id_terapi` int(11) NOT NULL,
  `id_guru_terapi` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `hasil` varchar(10) NOT NULL,
  `minggu` int(11) NOT NULL,
  `semester` int(11) NOT NULL DEFAULT 1,
  `photo` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `terapi`
--

INSERT INTO `terapi` (`id_terapi`, `id_guru_terapi`, `id_siswa`, `hasil`, `minggu`, `semester`, `photo`, `note`, `created_at`) VALUES
(1, 1, 1, '1', 1, 1, 'f516f325b80bafef801384a7b7bae1ff.jpg', '', '2024-02-02 13:10:06'),
(2, 1, 1, '2', 2, 1, 'f516f325b80bafef801384a7b7bae1ff.jpg', '', '2024-02-02 13:40:26'),
(3, 1, 1, '2', 4, 1, 'f516f325b80bafef801384a7b7bae1ff.jpg', '', '2024-02-02 13:50:03'),
(4, 1, 1, '3', 3, 1, 'f516f325b80bafef801384a7b7bae1ff.jpg', 'oke', '2024-02-02 13:50:10'),
(6, 4, 1, '3', 1, 2, 'f516f325b80bafef801384a7b7bae1ff.jpg', 'testing', '2024-02-07 01:32:44'),
(8, 4, 1, '1', 2, 2, 'f516f325b80bafef801384a7b7bae1ff.jpg', 'okya', '2024-02-07 13:59:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.png',
  `role` enum('ADMIN','GURU_TERAPI','ORANGTUA') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `photo`, `role`, `created_at`) VALUES
(1, 'Admins', 'admin', 'admin', 'f9522b141e16664c7f2b9b64bdfe7cee.jpg', 'ADMIN', '2024-01-26 22:14:12'),
(2, 'orangtua', 'orangtua', '12345', '4cf08199d655dea7b8caa16335bd030e.jpg', 'ORANGTUA', '2024-01-28 01:31:56'),
(4, 'evan', 'guru', '12345', 'default.png', 'GURU_TERAPI', '2024-01-28 01:31:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `terapi`
--
ALTER TABLE `terapi`
  ADD PRIMARY KEY (`id_terapi`),
  ADD KEY `id_guru_terapi` (`id_guru_terapi`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `terapi`
--
ALTER TABLE `terapi`
  MODIFY `id_terapi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `terapi`
--
ALTER TABLE `terapi`
  ADD CONSTRAINT `terapi_ibfk_1` FOREIGN KEY (`id_guru_terapi`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `terapi_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
