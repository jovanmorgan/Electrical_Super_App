<?php
include 'koneksi.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_home = $_POST['idHome'];
    $konten1_judul = $_POST['konten1Judul'];
    $konten1_judul2 = $_POST['konten1Judul2'];
    $konten1_text = $_POST['konten1Text'];

    $sql = "UPDATE home SET konten1_judul = '$konten1_judul', konten1_judul2 = '$konten1_judul2', konten1_text = '$konten1_text'  WHERE id_home = $id_home";

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
