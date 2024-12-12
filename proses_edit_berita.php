<?php
include 'koneksi.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_blog = $_POST['id_blog'];
    $kategory = $_POST['kategory'];
    $link = $_POST['link'];
    $judul = $_POST['judul'];
    $tanggal = $_POST['tanggal'];
    $dgs = $_POST['dgs'];
    $teks = $_POST['teks'];

    // Check if a new image is provided
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == UPLOAD_ERR_OK) {
        // Process the uploaded image
        $uploadDir = 'berita/images/blog/';
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

    $sql = "UPDATE blog SET kategory = '$kategory', link = '$link', judul = '$judul', tanggal = '$tanggal', teks = '$teks', gambar = '$gambar' WHERE id_blog = $id_blog";

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
