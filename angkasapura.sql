-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2023 pada 09.24
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angkasapura`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `email` text NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `hp` varchar(25) NOT NULL,
  `status` enum('admin','','','') NOT NULL,
  `status_akun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `email`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `hp`, `status`, `status_akun`) VALUES
(2, '7777777-j', 'Jovan120602', 'Jovandry Morgan Mere Guju', 'van@gmail.com', 'Laki-Laki', '2023-10-12', 'MATANI', '082339573409', 'admin', 'telah disetujui'),
(6, '222222-J', 'Jovan120602', 'Jovandry Morgan Mere Guju', 'jovan2@gmail.com', 'Laki-Laki', '2023-10-12', 'MATANI', '082339573409', 'admin', 'telah disetujui'),
(7, '543481-t', 'Jovan120602', 'Jovandry Morgan Mere Guju', 'jovandry7@gmail.com', 'Laki-Laki', '2023-10-12', 'El_tari', '082339573409', 'admin', 'telah disetujui'),
(8, '123123-D', 'Jovan120602', 'Jovandry Morgan Mere Guju', 'jovan@gmail.com', 'Laki-Laki', '2023-10-12', 'MATANI', '082339573409', 'admin', 'telah disetujui'),
(11, '12060209-j', 'Jovan120602', 'Jovandry Morgan Mere Guju', 'aan@gmail.com', 'Laki-Laki', '2023-10-24', 'MATANI', '082339573409', 'admin', 'belum disetujui'),
(12, '3728832-d', 'Jovan120602', 'Jovandry Morgan Mere Guju', 'Jo1@gmail.com', 'Laki-Laki', '2023-10-17', 'MATANI', '082339573409', 'admin', 'telah disetujui'),
(13, '37288321-d', 'Jovan120602', 'Jovandry Morgan Mere Guju', 'Jodad@gmail.com', 'Laki-Laki', '2023-10-17', 'MATANI', '082339573409', 'admin', 'telah disetujui'),
(14, '1233322-d', 'Jovan120602', 'Jovandry Morgan Mere Guju', 'nanda1@gmail.com', 'Laki-Laki', '2023-10-27', 'el-tari kupang', '082339573409', 'admin', 'telah disetujui'),
(15, '662626-d', 'Jovan120602', 'Jovandry Morgan Mere Guju', 'joasss@gmail.com', 'Laki-Laki', '2023-10-17', 'MATANI', '082339573409', 'admin', 'belum disetujui'),
(18, '021175-j', 'Jovan120602', 'Jovandry Morgan Mere Guju', 'van2@gmail.com', 'Perempuan', '2023-10-11', 'Bandara Eltari-kupang', '082339573409', 'admin', 'telah disetujui'),
(19, '111111-a', 'Avila1111', 'Avila1111', 'avila@gmail.com', 'Perempuan', '2023-10-25', 'bandung', '21312414234234235454', 'admin', 'telah disetujui'),
(20, '219810-v', 'Jovan12060', 'pak wahyu', 'pakwahyu@gmail.com', 'Laki-Laki', '1212-12-12', 'angjdasds', '23132131243143', 'admin', 'telah disetujui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_utama`
--

CREATE TABLE `admin_utama` (
  `id_admin_utama` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `email` text NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `hp` varchar(25) NOT NULL,
  `status` enum('admin_utama','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin_utama`
--

INSERT INTO `admin_utama` (`id_admin_utama`, `username`, `password`, `nama_lengkap`, `email`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `hp`, `status`) VALUES
(1, '12062002-j', 'Kevin1234', 'Kevin', 'kevin@gmail.com', 'Laki-Laki', '2023-10-12', 'MATANI', '082339573409', 'admin_utama'),
(2, '12345678-j', 'Van120602', 'Jovandry Morgan Mere Guju', '123@gmail.com', 'Laki-Laki', '2023-10-12', 'MATANI', '082339573409', 'admin_utama'),
(5, '021176-j', 'Jovan120602', 'Jovandry Morgan Mere Guju', 'van3@gmail.com', 'Laki-Laki', '2023-10-19', 'Bandara Eltari-kupang', '082339573409', 'admin_utama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `jenis_peralatan` varchar(100) NOT NULL,
  `nama_peralatan` varchar(100) NOT NULL,
  `detail_peralatan` varchar(100) NOT NULL,
  `tw_kegiatan` datetime NOT NULL DEFAULT current_timestamp(),
  `kode_peralatan` varchar(50) NOT NULL,
  `jumlah_alat` varchar(50) NOT NULL,
  `jumlah_alat_baik` varchar(50) NOT NULL,
  `jumlah_alat_rusak` int(25) NOT NULL,
  `tgl_kegagalan` date NOT NULL,
  `jenis_kegagalan` text NOT NULL,
  `penanganan` text NOT NULL,
  `kategory_kerusakan` varchar(50) NOT NULL,
  `tgl_perbaikan` date NOT NULL DEFAULT current_timestamp(),
  `lama_kegagalan` time NOT NULL DEFAULT current_timestamp(),
  `frekuensi_kegagalan` int(25) NOT NULL,
  `waktu_pemeliharaan` time NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `jenis_peralatan`, `nama_peralatan`, `detail_peralatan`, `tw_kegiatan`, `kode_peralatan`, `jumlah_alat`, `jumlah_alat_baik`, `jumlah_alat_rusak`, `tgl_kegagalan`, `jenis_kegagalan`, `penanganan`, `kategory_kerusakan`, `tgl_perbaikan`, `lama_kegagalan`, `frekuensi_kegagalan`, `waktu_pemeliharaan`, `keterangan`) VALUES
(249, 'PANEL TEGANGAN RENDAH', 'MPH', 'P. Outgoing MPH', '2023-10-25 17:45:00', '1212', '12', '12', 0, '2023-10-25', '12', '12', '12', '2023-10-25', '12:12:00', 12, '12:12:00', '12'),
(250, 'PANEL TEGANGAN MENENGAH', 'PANEL TM 24KV,630A 16KA Outgoing Gardu B', '', '2023-10-25 15:05:00', '342342', '21', '21', 0, '2023-10-25', 'perbaikan', 'perbaikan', 'perbaikan', '2023-10-25', '18:06:00', 1, '00:10:00', 'normal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `email` text NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `hp` varchar(25) NOT NULL,
  `status` enum('user','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `email`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `hp`, `status`) VALUES
(2, '120602-j', 'Jovan120602', 'Jovandry Morgan Mere Guju', 'jovandry@gmail.com', 'Laki-Laki', '2023-10-12', 'MATANI', '082339573409', 'user'),
(9, '923467-C', 'Handiana120602', 'handiana', 'handiana@gmail.com', 'Laki-Laki', '2023-10-20', 'BANDUNG', '082339573409', 'user'),
(12, '12060212-j', 'Jovan120602', 'Jovandry Morgan Mere Guju', 'jovasan@gmail.com', 'Laki-Laki', '2023-10-28', 'MATANI', '082339573409', 'user'),
(13, '9329912-r', 'Jovan120602', 'Jovandry Morgan Mere Guju', 'sawa@gmail.com', 'Laki-Laki', '2023-10-24', 'MATANI', '082339573409', 'user'),
(14, '3223321-k', 'Jovan120602', 'Jovandry Morgan Mere Guju', 'saan@gmail.com', 'Laki-Laki', '2023-10-25', 'MATANI', '082339573409', 'user'),
(15, '3223322-k', 'Jovan120602', 'Jovandry Morgan Mere Guju', 'sasan@gmail.com', 'Laki-Laki', '2023-10-25', 'MATANI', '082339573409', 'user'),
(16, '834320012-s', 'Jovan120602', 'Jovandry Morgan Mere Guju', 'jovawe@gmail.com', 'Laki-Laki', '2023-10-30', 'MATANI', '082339573409', 'user'),
(20, '021174-j', 'Jovan120602', 'Jovandry Morgan Mere Guju', 'van1@gmail.com', 'Laki-Laki', '2023-10-18', 'Bandara Eltari-kupang', '082339573409', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `admin_utama`
--
ALTER TABLE `admin_utama`
  ADD PRIMARY KEY (`id_admin_utama`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `admin_utama`
--
ALTER TABLE `admin_utama`
  MODIFY `id_admin_utama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
