<?php
include 'koneksi.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];

    // Dapatkan file gambar
    $gambar = $_FILES['gambar'];
    $namaGambar = $gambar['name'];

    // Tentukan path untuk menyimpan gambar
    $path = "images/" . $namaGambar;

    $sql = "INSERT INTO tim (nama, jabatan, foto_profile) VALUES ('$nama', '$jabatan', '$namaGambar')";

    if (mysqli_query($koneksi, $sql)) {
        // Pindahkan gambar ke folder yang ditentukan
        move_uploaded_file($gambar['tmp_name'], $path);

        $response = array(
            'status' => 'success',
            'message' => 'Data berhasil disimpan.'
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Error: ' . mysqli_error($koneksi)
        );
    }

    mysqli_close($koneksi);

    echo json_encode($response);
} else {
    $response = array(
        'status' => 'error',
        'message' => 'Permintaan tidak valid.'
    );

    echo json_encode($response);
}
