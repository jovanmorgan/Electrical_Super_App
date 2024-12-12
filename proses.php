<?php
include 'koneksi.php';

// Ambil nilai kode dari permintaan POST
$kode = $_POST['kode'];

// Query untuk mencari nilai jenis_peralatan berdasarkan kode
$query = "SELECT jenis_peralatan FROM kegiatan WHERE kode = '$kode'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    // Jika query berhasil dijalankan
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $jenis_peralatan = $row['jenis_peralatan'];

        // Kirim nilai jenis_peralatan ke klien (browser)
        echo $jenis_peralatan;
    } else {
        echo "Data tidak ditemukan";
    }
} else {
    echo "Error: " . mysqli_error($koneksi);
}
