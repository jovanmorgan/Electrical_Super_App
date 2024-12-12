<?php
include 'koneksi.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_kontak = $_POST['id_kontak'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $email = $_POST['email'];
    $jadwal = $_POST['jadwal'];

    $sql = "UPDATE kontak SET alamat = '$alamat', hp = '$hp', email = '$email', jadwal = '$jadwal' WHERE id_kontak = $id_kontak";

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
