<?php
session_start();
include 'koneksi.php';

$id_user = $_SESSION['id_user'];

// Tentukan direktori tujuan untuk menyimpan foto profil
$upload_dir = 'foto_profile/';  // Sesuaikan dengan struktur folder dan nama folder Anda
$nama_file = '';

// Handle file
if (isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $upload_dir = 'foto_profile/';

    if ($file['error'] === UPLOAD_ERR_OK) {
        $temp_name = $file['tmp_name'];
        $file_name = $id_user . '_' . uniqid() . '.png';  // Assuming the file is PNG, you can adjust accordingly

        // Move the file to the destination directory
        move_uploaded_file($temp_name, $upload_dir . $file_name);

        // Update the database
        $query = "UPDATE user SET foto_profile = '$file_name' WHERE id_user = $id_user";
        mysqli_query($koneksi, $query);

        // Redirect or send a response, as needed
        header('Location: staf_akun.php');
        exit();
    } else {
        // Handle upload error
        echo "Error: " . $file['error'];
    }
}

mysqli_close($koneksi);
