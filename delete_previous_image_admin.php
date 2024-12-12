<?php
session_start();
include 'koneksi.php';

$id_admin_utama = $_POST['id_admin_utama'];

// Ambil nama file gambar yang sudah ada
$query = "SELECT foto_profile FROM admin_utama WHERE id_admin_utama = $id_admin_utama";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
$previousImage = $row['foto_profile'];

// Tentukan direktori lengkap untuk file yang akan dihapus
$fullPath = 'foto_profile/' . $previousImage;

// Hapus file gambar yang sudah ada
if (file_exists($fullPath)) {
    unlink($fullPath);
    echo "Previous image deleted successfully.";
} else {
    echo "Previous image not found or could not be deleted.";
}

mysqli_close($koneksi);
