<?php
include 'koneksi.php';
header('Content-Type: application/json'); // Set header untuk memberi tahu browser bahwa respons adalah JSON

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $hp = $_POST['hp'];

    $sql = "UPDATE user SET hp = '$hp' WHERE id_user = $id";

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
