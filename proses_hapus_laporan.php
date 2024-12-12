<?php
include 'koneksi.php';

$response = array(); // Inisialisasi array untuk respon

// Ambil id_laporan dari parameter GET
if (isset($_GET['id'])) {
    $id_laporan = $_GET['id'];

    // Query untuk menghapus data laporan
    $query = "DELETE FROM laporan WHERE id_laporan = $id_laporan";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Data berhasil dihapus
        $response['status'] = 'success';
        $response['message'] = 'Data berhasil dihapus.';
    } else {
        // Terjadi error
        $response['status'] = 'error';
        $response['message'] = 'Error: ' . $query . '<br>' . mysqli_error($koneksi);
    }
} else {
    // ID laporan tidak ditemukan
    $response['status'] = 'error';
    $response['message'] = 'ID laporan tidak ditemukan.';
}

// Tutup koneksi
mysqli_close($koneksi);

// Mengirim respon dalam format JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
