<?php
include 'koneksi.php'; // Pastikan Anda mengganti ini dengan file koneksi yang sesuai

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_tim'])) {
    $id_tim = $_POST['id_tim'];

    // Ambil nama file foto_profile yang akan dihapus
    $query_select = "SELECT foto_profile FROM tim WHERE id_tim = $id_tim";
    $result_select = mysqli_query($koneksi, $query_select);

    if ($result_select) {
        $row = mysqli_fetch_assoc($result_select);
        $gambar_filename = $row['foto_profile'];

        // Hapus data dari tabel tim
        $query_delete = "DELETE FROM tim WHERE id_tim = $id_tim";
        $result_delete = mysqli_query($koneksi, $query_delete);

        if ($result_delete) {
            // Hapus file gambar dari direktori
            $gambar_path = "images/" . $gambar_filename;
            if (file_exists($gambar_path)) {
                unlink($gambar_path);
            }

            $response = array('status' => 'success');
        } else {
            $response = array('status' => 'error', 'message' => 'Gagal menghapus data.');
        }
    } else {
        $response = array('status' => 'error', 'message' => 'Gagal mengambil nama file gambar.');
    }

    // Tutup koneksi database
    mysqli_close($koneksi);

    // Kembalikan respons dalam format JSON
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Jika tidak ada ID yang diberikan, kembalikan respons error
    $response = array('status' => 'error', 'message' => 'ID tidak valid.');
    header('Content-Type: application/json');
    echo json_encode($response);
}
