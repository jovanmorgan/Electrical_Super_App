<?php
include 'koneksi.php';
header('Content-Type: application/json'); // Set header untuk memberi tahu browser bahwa respons adalah JSON

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama_lengkap = $_POST['nama_lengkap'];

    $sql = "UPDATE user SET nama_lengkap = '$nama_lengkap' WHERE id_user = $id";

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

    // Mengembalikan respons dalam format JSON
    echo json_encode($response);
} else {
    $response = array(
        'status' => 'error',
        'message' => 'Permintaan tidak valid.'
    );

    // Mengembalikan respons dalam format JSON
    echo json_encode($response);
}
