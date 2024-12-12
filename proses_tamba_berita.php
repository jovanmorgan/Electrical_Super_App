<?php
include 'koneksi.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kategory = $_POST['kategory'];
    $link = $_POST['link'];
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $teks = $_POST['teks'];

    // Dapatkan file gambar
    $gambar = $_FILES['gambar'];
    $namaGambar = $gambar['name'];

    // Tentukan path untuk menyimpan gambar
    $path = "berita/images/blog/" . $namaGambar;

    $sql = "INSERT INTO blog (kategory, link, judul, tanggal, teks, gambar) VALUES ('$kategory', '$link', '$judul', '$tanggal', '$teks', '$namaGambar')";

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
