<?php
include 'koneksi.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_berita = $_POST['idBerita'];
    $icon1_judul = $_POST['icon1Judul'];
    $icon1_teks = $_POST['icon1Teks'];
    $icon2_judul = $_POST['icon2Judul'];
    $icon2_teks = $_POST['icon2Teks'];
    $icon3_judul = $_POST['icon3Judul'];
    $icon3_teks = $_POST['icon3Teks'];

    $sql = "UPDATE berita SET icon1_judul = '$icon1_judul', icon1_teks = '$icon1_teks', icon2_judul = '$icon2_judul', icon2_teks = '$icon2_teks', icon3_judul = '$icon3_judul', icon3_teks = '$icon3_teks' WHERE id_berita = $id_berita";

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
