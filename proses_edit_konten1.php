<?php
include 'koneksi.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_berita = $_POST['idBerita'];
    $dgs = $_POST['dgsKonten1'];
    $bagian1_judul = $_POST['bagian1Judul'];
    $bagian1_teks = $_POST['bagian1Teks'];

    // Check if a new image is provided
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == UPLOAD_ERR_OK) {
        // Process the uploaded image
        $uploadDir = 'berita/images/welcome-hero/';
        $uploadFile = $uploadDir . basename($_FILES['gambar']['name']);

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($_FILES['gambar']['tmp_name'], $uploadFile)) {
            $gambar = $_FILES['gambar']['name'];

            // Hapus file gambar lama
            if (!empty($dgs)) {
                $path_gambar_sebelumnya = $uploadDir . $dgs;
                if (file_exists($path_gambar_sebelumnya)) {
                    unlink($path_gambar_sebelumnya);
                }
            }
        } else {
            // Handle the file upload error
            $response = array(
                'status' => 'error',
                'message' => 'File upload failed.'
            );
            echo json_encode($response);
            exit;
        }
    } else {
        // Keep the existing image if no new image is provided
        $gambar = $_POST['gambar'];
    }

    $sql = "UPDATE berita SET bagian1_judul = '$bagian1_judul', bagian1_teks = '$bagian1_teks', bagian1_gambar = '$gambar' WHERE id_berita = $id_berita";

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
