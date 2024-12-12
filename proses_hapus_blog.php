<?php
include 'koneksi.php'; // Pastikan Anda mengganti ini dengan file koneksi yang sesuai

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_blog'])) {
    $id_blog = $_POST['id_blog'];

    // Ambil nama file gambar yang akan dihapus
    $query_select = "SELECT gambar FROM blog WHERE id_blog = $id_blog";
    $result_select = mysqli_query($koneksi, $query_select);

    if ($result_select) {
        $row = mysqli_fetch_assoc($result_select);
        $gambar_filename = $row['gambar'];

        // Hapus data dari tabel blog
        $query_delete = "DELETE FROM blog WHERE id_blog = $id_blog";
        $result_delete = mysqli_query($koneksi, $query_delete);

        if ($result_delete) {
            // Hapus file gambar dari direktori
            $gambar_path = "berita/images/blog/" . $gambar_filename;
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
