<?php
include 'koneksi.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_berita = $_POST['idBerita'];
    $bagian2_judul = $_POST['bagian2Judul'];
    $bagian2_teks = $_POST['bagian2Teks'];

    $sql = "UPDATE berita SET bagian2_judul = '$bagian2_judul', bagian2_teks = '$bagian2_teks' WHERE id_berita = $id_berita";

    if (mysqli_query($koneksi, $sql)) {
        $response = array(
            'status' => 'success',
            'message' => 'Data berhasil diperbarui.'
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Error: ' . mysqli_error($koneksi)
        );
    }

    mysqli_close($koneksi);

    // Return the response in JSON format
    echo json_encode($response);
} else {
    $response = array(
        'status' => 'error',
        'message' => 'Permintaan tidak valid.'
    );

    // Return the response in JSON format
    echo json_encode($response);
}
