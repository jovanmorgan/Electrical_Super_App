<?php
include 'koneksi.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_home = $_POST['id_home'];
    $konten2_judul = $_POST['konten2_judul'];
    $konten2_text = $_POST['konten2_text'];
    $konten2_judul1 = $_POST['konten2_judul1'];
    $konten2_text1 = $_POST['konten2_text1'];
    $konten2_judul2 = $_POST['konten2_judul2'];
    $konten2_text2 = $_POST['konten2_text2'];
    $konten2_judul3 = $_POST['konten2_judul3'];
    $konten2_text3 = $_POST['konten2_text3'];

    $sql = "UPDATE home SET konten2_judul = '$konten2_judul', konten2_text = '$konten2_text', konten2_judul1 = '$konten2_judul1', konten2_text1 = '$konten2_text1', konten2_judul2 = '$konten2_judul2', konten2_text2 = '$konten2_text2', konten2_judul3 = '$konten2_judul3', konten2_text3 = '$konten2_text3' WHERE id_home = $id_home";

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
