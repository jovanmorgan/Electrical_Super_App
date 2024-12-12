<?php
session_start();
include 'koneksi.php';

$id_admin = $_POST['id_admin'];

// Ambil nama file gambar yang sudah ada
$query = "SELECT foto_profile FROM admin WHERE id_admin = $id_admin";
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
