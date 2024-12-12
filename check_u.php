<?php
// Sertakan berkas koneksi.php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"])) {
    // Ambil nilai username dari permintaan POST
    $username = $_POST["username"];

    // Lakukan kueri SQL untuk memeriksa apakah username sudah ada dalam database
    $query = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        // Jika username sudah ada dalam database, kirimkan respons 'exist'
        echo json_encode("exist");
    } else {
        // Jika username belum ada dalam database, kirimkan respons 'available'
        echo json_encode("available");
    }
} else {
    // Jika permintaan bukan POST atau parameter username tidak ada, kirimkan respons kosong
    echo json_encode("");
}

// Tutup koneksi ke database (dalam berkas koneksi.php)
mysqli_close($koneksi);
