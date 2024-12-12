<?php
session_start();

$jenis_peralatan = $_SESSION['jenis_peralatan'];
$nama_peralatan = $_SESSION['nama_peralatan'];
$jumlah_alat_baik = $_SESSION['jumlah_alat_baik'];
$jumlah_alat_rusak = $_SESSION['jumlah_alat_rusak'];
$tgl_kegagalan = $_SESSION['tgl_kegagalan'];
$jenis_kegagalan = $_SESSION['jenis_kegagalan'];
$penanganan = $_SESSION['penanganan'];
$kategory_kerusakan = $_SESSION['kategory_kerusakan'];
$tgl_perbaikan = $_SESSION['tgl_perbaikan'];
$lama_kegagalan = $_SESSION['lama_kegagalan'];
$frekuensi_kegagalan = $_SESSION['frekuensi_kegagalan'];
$waktu_pemeliharaan = $_SESSION['waktu_pemeliharaan'];
$keterangan = $_SESSION['keterangan'];

echo $jenis_peralatan;
echo $nama_peralatan;
echo $keterangan;
