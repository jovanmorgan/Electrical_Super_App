<?php
include 'koneksi.php'; // Sertakan file koneksi.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    // Query SQL untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM admin WHERE id_admin = ?";
    $stmt = mysqli_prepare($koneksi, $sql);

    if ($stmt === false) {
        echo json_encode(array("status" => "error", "message" => "Gagal mempersiapkan statement SQL."));
        exit();
    }

    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        echo json_encode(array("status" => "success", "message" => "Data berhasil dihapus."));
    } else {
        echo json_encode(array("status" => "error", "message" => "Gagal menghapus data: " . mysqli_error($koneksi)));
    }

    mysqli_stmt_close($stmt);
} else {
    echo json_encode(array("status" => "error", "message" => "Permintaan tidak valid."));
}

mysqli_close($koneksi); // Tutup koneksi database
