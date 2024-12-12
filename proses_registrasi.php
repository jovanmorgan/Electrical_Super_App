<?php

// Menginput data ke tabel
$hasil = mysqli_query($koneksi, "INSERT INTO user (username,password,nama_lengkap,email,jenis_kelamin,tanggal_lahir,alamat,hp,status) VALUES('$username','$password','$nama_lengkap','$email','$jenis_kelamin','$tanggal_lahir','$alamat','$hp','$status')");

if ($hasil) {
    // Registrasi berhasil
    $response = array(
        'status' => 'success',
        'message' => 'Registrasi Anda Berhasil!'
    );
} else {
    // Registrasi gagal
    $response = array(
        'status' => 'error',
        'message' => 'Registrasi Anda Gagal!'
    );
}

// Mengirimkan response dalam format JSON
echo json_encode($response);
?>