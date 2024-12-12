<?php
require('tcpdf/tcpdf.php'); // Memuat library TCPDF

// Inisialisasi objek TCPDF
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

$pdf->SetPrintHeader(false); // Atur header PDF menjadi false
$pdf->SetPrintFooter(false); // Atur footer PDF menjadi false
$pdf->AddPage(); // Tambahkan halaman ke PDF

$pdf->SetFont('dejavusans', '', 12); // Atur jenis font dan ukuran font

// Query SQL untuk mengambil data dari tabel "kegiatan"
$sql = "SELECT * FROM kegiatan";
include 'koneksi.php'; // Sertakan file koneksi.php
$result = mysqli_query($koneksi, $sql);

if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}

if (mysqli_num_rows($result) > 0) {
    $html = "<table border='1'>
    <tr>
    <th>No</th>
    <th>Jenis Peralatan</th>
    <th>Nama Peralatan</th>
    <th>Detail Peralatan</th>
    <th>Tanggal & Waktu Kegiatan</th>
    <th>Kode Peralatan</th>
    <th>Jumlah Alat</th>
    <th>Jumlah Alat Baik</th>
    <th>Jumlah Alat Rusak</th>
    <th>Tanggal Kegagalan</th>
    <th>Jenis Kegagalan</th>
    <th>Penanganan</th>
    <th>Kategori Kerusakan</th>
    <th>Tanggal Perbaikan</th>
    <th>Lama Kegagalan</th>
    <th>Frekuensi Kegagalan</th>
    <th>Waktu Pemeliharaan</th>
    <th>Keterangan</th>
</tr>";

    $counter = 1; // Inisialisasi nomor urut

    while ($row = mysqli_fetch_assoc($result)) {
        $html .= "<tr>
            <td style='text-align: left;'>" . $counter . "</td>
            <td style='text-align: left;'>" . $row["jenis_peralatan"] . "</td>
            <td style='text-align: left;'>" . $row["nama_peralatan"] . "</td>
            <td style='text-align: left;'>" . ($row["detail_peralatan"] ? $row["detail_peralatan"] : "Detail Peralatan Sudah Lengkap") . "</td>
            <td style='text-align: left;'>" . $row["tw_kegiatan"] . "</td>
            <td style='text-align: left;'>" . $row["kode_peralatan"] . "</td>
            <td style='text-align: left;'>" . $row["jumlah_alat"] . "</td>
            <td style='text-align: left;'>" . $row["jumlah_alat_baik"] . "</td>
            <td style='text-align: left;'>" . $row["jumlah_alat_rusak"] . "</td>
            <td style='text-align: left;'>" . $row["tgl_kegagalan"] . "</td>
            <td style='text-align: left;'>" . $row["jenis_kegagalan"] . "</td>
            <td style='text-align: left;'>" . $row["penanganan"] . "</td>
            <td style='text-align: left;'>" . $row["kategory_kerusakan"] . "</td>
            <td style='text-align: left;'>" . $row["tgl_perbaikan"] . "</td>
            <td style='text-align: left;'>" . $row["lama_kegagalan"] . "</td>
            <td style='text-align: left;'>" . $row["frekuensi_kegagalan"] . "</td>
            <td style='text-align: left;'>" . $row["waktu_pemeliharaan"] . "</td>
            <td style='text-align: left;'>" . $row["keterangan"] . "</td>
        </tr>";
        $counter++;
    }

    $html .= "</table>";

    // Tulis HTML ke halaman PDF
    $pdf->writeHTML($html, true, false, true, false, '');

    // Menyimpan file PDF ke server
    $pdf->Output('data_kegiatan.pdf', 'F');
} else {
    echo "Tidak ada data dalam tabel.";
}

mysqli_close($koneksi); // Tutup koneksi database
?>
