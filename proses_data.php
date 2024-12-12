<?php
session_start();

$id = $_POST['id'];
$jenis_peralatan = $_POST['jenis_peralatan'];
$nama_peralatan = $_POST['nama_peralatan'];
$jumlah_alat_baik = $_POST['jumlah_alat_baik'];
$jumlah_alat_rusak = $_POST['jumlah_alat_rusak'];
$tgl_kegagalan = $_POST['tgl_kegagalan'];
$jenis_kegagalan = $_POST['jenis_kegagalan'];
$penanganan = $_POST['penanganan'];
$kategory_kerusakan = $_POST['kategory_kerusakan'];
$tgl_perbaikan = $_POST['tgl_perbaikan'];
$lama_kegagalan = $_POST['lama_kegagalan'];
$frekuensi_kegagalan = $_POST['frekuensi_kegagalan'];
$waktu_pemeliharaan = $_POST['waktu_pemeliharaan'];
$keterangan = $_POST['keterangan'];

// Simpan data dalam sesi
$_SESSION['id'] = $id;
$_SESSION['jenis_peralatan'] = $jenis_peralatan;
$_SESSION['nama_peralatan'] = $nama_peralatan;
$_SESSION['jumlah_alat_baik'] = $jumlah_alat_baik;
$_SESSION['jumlah_alat_rusak'] = $jumlah_alat_rusak;
$_SESSION['tgl_kegagalan'] = $tgl_kegagalan;
$_SESSION['jenis_kegagalan'] = $jenis_kegagalan;
$_SESSION['penanganan'] = $penanganan;
$_SESSION['kategory_kerusakan'] = $kategory_kerusakan;
$_SESSION['tgl_perbaikan'] = $tgl_perbaikan;
$_SESSION['lama_kegagalan'] = $lama_kegagalan;
$_SESSION['frekuensi_kegagalan'] = $frekuensi_kegagalan;
$_SESSION['waktu_pemeliharaan'] = $waktu_pemeliharaan;
$_SESSION['keterangan'] = $keterangan;
// ... (simpan data lainnya)

echo "Data berhasil disimpan dalam sesi.";
