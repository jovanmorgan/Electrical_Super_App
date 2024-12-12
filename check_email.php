<?php
// Sertakan berkas koneksi.php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    // Ambil nilai email dari permintaan POST
    $email = $_POST["email"];

    // Lakukan kueri SQL untuk memeriksa apakah email sudah ada dalam database
    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        // Jika email sudah ada dalam database, kirimkan respons 'exist'
        echo json_encode("exist");
    } else {
        // Jika email belum ada dalam database, kirimkan respons 'available'
        echo json_encode("available");
    }
} else {
    // Jika permintaan bukan POST atau parameter email tidak ada, kirimkan respons kosong
    echo json_encode("");
}

// Tutup koneksi ke database (dalam berkas koneksi.php)
mysqli_close($koneksi);
