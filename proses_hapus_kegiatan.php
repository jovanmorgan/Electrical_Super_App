<?php
include 'koneksi.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode = $_POST["kode"];

    // Ambil nama file gambar dari database sebelum menghapus data
    $sql_select = "SELECT gambar FROM kegiatan WHERE kode = ?";
    $stmt_select = mysqli_prepare($koneksi, $sql_select);

    if ($stmt_select === false) {
        echo json_encode(array("status" => "error", "message" => "Gagal mempersiapkan statement SQL."));
        exit();
    }

    mysqli_stmt_bind_param($stmt_select, "s", $kode);
    mysqli_stmt_execute($stmt_select);
    mysqli_stmt_bind_result($stmt_select, $gambar);
    mysqli_stmt_fetch($stmt_select);
    mysqli_stmt_close($stmt_select);

    // Query SQL untuk menghapus data berdasarkan Kode
    $sql_delete = "DELETE FROM kegiatan WHERE kode = ?";
    $stmt_delete = mysqli_prepare($koneksi, $sql_delete);

    if ($stmt_delete === false) {
        echo json_encode(array("status" => "error", "message" => "Gagal mempersiapkan statement SQL."));
        exit();
    }

    mysqli_stmt_bind_param($stmt_delete, "s", $kode);

    if (mysqli_stmt_execute($stmt_delete)) {
        // Hapus file gambar jika ada
        $path_to_file = "uploads/" . $gambar;
        if (file_exists($path_to_file)) {
            unlink($path_to_file);
        }

        echo json_encode(array("status" => "success", "message" => "Data berhasil dihapus."));
    } else {
        echo json_encode(array("status" => "error", "message" => "Gagal menghapus data: " . mysqli_error($koneksi)));
    }

    mysqli_stmt_close($stmt_delete);
} else {
    echo json_encode(array("status" => "error", "message" => "Permintaan tidak valid."));
}

mysqli_close($koneksi);
