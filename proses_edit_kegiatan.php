<?php
include 'koneksi.php';
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kode = $_POST['kode'];
    $jumlah_alat_baik = $_POST['jumlah_alat_baik'];
    $jumlah_alat_rusak = $_POST['jumlah_alat_rusak'];
    $tgl_kegagalan = $_POST['tgl_kegagalan'];
    $jenis_kegagalan = $_POST['jenis_kegagalan'];
    $penanganan = $_POST['penanganan'];
    $kategory_kerusakan = $_POST['kategory_kerusakan'];
    $tgl_perbaikan = $_POST['tgl_perbaikan'];
    $lama_kegagalan = $_POST['lama_kegagalan'];
    $frekuensi_kegagalan = $_POST['frekuensi_kegagalan'];
    $waktu_pemeliharaan = $_POST['waktu_pemeliharaan'];
    $keterangan = $_POST['keterangan'];

    // Update query
    $sql = "UPDATE kegiatan SET 
        jumlah_alat_baik = '$jumlah_alat_baik',
        jumlah_alat_rusak = '$jumlah_alat_rusak',
        tgl_kegagalan = '$tgl_kegagalan',
        jenis_kegagalan = '$jenis_kegagalan',
        penanganan = '$penanganan',
        kategory_kerusakan = '$kategory_kerusakan',
        tgl_perbaikan = '$tgl_perbaikan',
        lama_kegagalan = '$lama_kegagalan',
        frekuensi_kegagalan = '$frekuensi_kegagalan',
        waktu_pemeliharaan = '$waktu_pemeliharaan',
        keterangan = '$keterangan'
        WHERE kode = '$kode'";

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

    // Mengembalikan respons dalam format JSON
    echo json_encode($response);
} else {
    $response = array(
        'status' => 'error',
        'message' => 'Permintaan tidak valid.'
    );

    // Mengembalikan respons dalam format JSON
    echo json_encode($response);
}
