<?php
session_start();

include 'koneksi.php'; // Sesuaikan dengan nama file koneksi Anda

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kode = $_POST['kodeinpt'];
    $id_manager = $_POST['id_manager'];
    $laporan_kegiatan = $_POST['laporan_kegiatan'];
    $tanggal = $_POST['tanggal'];
    $nama_peralatan = $_POST['np'];
    $jumlah_alat_baik = $_POST['jab'];
    $jumlah_alat_rusak = $_POST['jar'];
    $tgl_kegagalan = $_POST['tmkinpt'];
    $jenis_kegagalan = $_POST['jk'];
    $penanganan = $_POST['penanganan'];
    $kategory_kerusakan = $_POST['kk'];
    $tgl_perbaikan = $_POST['tp'];
    $lama_kegagalan = $_POST['lk'];
    $frekuensi_kegagalan = $_POST['fk'];
    $waktu_pemeliharaan = $_POST['wp'];
    $keterangan = $_POST['keterangan'];

    $selectQuery = "SELECT jenis_peralatan FROM kegiatan WHERE kode = '$kode'";
    $result = mysqli_query($koneksi, $selectQuery);

    if ($result) {
        // Jika terdapat data dengan kode yang sama, ambil jenis_peralatan dan taru
        $row = mysqli_fetch_assoc($result);
        $jenis_peralatan = $row['jenis_peralatan'];

        // Masukkan data ke dalam tabel laporan
        $insertQuery = "INSERT INTO laporan (kode, id_manager, laporan_kegiatan , tanggal, jenis_peralatan, nama_peralatan, jumlah_alat_baik, jumlah_alat_rusak, tgl_kegagalan, jenis_kegagalan, penanganan, kategory_kerusakan, tgl_perbaikan, lama_kegagalan, frekuensi_kegagalan, waktu_pemeliharaan, keterangan) VALUES ('$kode', '$id_manager', '$laporan_kegiatan', '$tanggal','$jenis_peralatan', '$nama_peralatan', '$jumlah_alat_baik', '$jumlah_alat_rusak', '$tgl_kegagalan', '$jenis_kegagalan', '$penanganan', '$kategory_kerusakan', '$tgl_perbaikan', '$lama_kegagalan', '$frekuensi_kegagalan', '$waktu_pemeliharaan', '$keterangan')";

        if (mysqli_query($koneksi, $insertQuery)) {
            echo "Data laporan berhasil disimpan";
        } else {
            echo "Error: " . $insertQuery . "<br>" . mysqli_error($koneksi);
        }
    } else {
        echo "Error: " . $selectQuery . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "Metode HTTP yang diterima bukan POST.";
}
