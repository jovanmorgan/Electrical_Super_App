<?php
include 'koneksi.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_home = $_POST['idHome'];
    $konten3_judul = $_POST['konten3Judul'];
    $konten3_text = $_POST['konten3Text'];

    $sql = "UPDATE home SET konten3_judul = '$konten3_judul', konten3_text = '$konten3_text' WHERE id_home = $id_home";

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
