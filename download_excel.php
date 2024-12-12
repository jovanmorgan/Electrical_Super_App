<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data_kegiatan.xls");

include 'koneksi.php'; // Sertakan file koneksi.php

// Query SQL untuk mengambil data dari tabel "kegiatan"
$sql = "SELECT * FROM kegiatan";
$result = mysqli_query($koneksi, $sql);

if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}

// Mulai menghasilkan tag HTML untuk tabel
echo "<table border='1'>
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
    echo "<tr>";
    echo "<td style='text-align: left;'>" . $counter . "</td>";
    echo "<td style='text-align: left;'>" . $row["jenis_peralatan"] . "</td>";
    echo "<td style='text-align: left;'>" . $row["nama_peralatan"] . "</td>";
    echo "<td style='text-align: left;'>";
    if (empty($row["detail_peralatan"])) {
        echo "Detail Peralatan Sudah Lengkap";
    } else {
        echo $row["detail_peralatan"];
    }
    echo "</td>";
    echo "<td style='text-align: left;'>" . $row["tw_kegiatan"] . "</td>";
    echo "<td style='text-align: left;'>" . $row["kode_peralatan"] . "</td>";
    echo "<td style='text-align: left;'>" . $row["jumlah_alat"] . "</td>";
    echo "<td style='text-align: left;'>" . $row["jumlah_alat_baik"] . "</td>";
    echo "<td style='text-align: left;'>" . $row["jumlah_alat_rusak"] . "</td>";
    echo "<td style='text-align: left;'>" . $row["tgl_kegagalan"] . "</td>";
    echo "<td style='text-align: left;'>" . $row["jenis_kegagalan"] . "</td>";
    echo "<td style='text-align: left;'>" . $row["penanganan"] . "</td>";
    echo "<td style='text-align: left;'>" . $row["kategory_kerusakan"] . "</td>";
    echo "<td style='text-align: left;'>" . $row["tgl_perbaikan"] . "</td>";
    echo "<td style='text-align: left;'>" . $row["lama_kegagalan"] . "</td>";
    echo "<td style='text-align: left;'>" . $row["frekuensi_kegagalan"] . "</td>";
    echo "<td style='text-align: left;'>" . $row["waktu_pemeliharaan"] . "</td>";
    echo "<td style='text-align: left;'>" . $row["keterangan"] . "</td>";
    echo "</tr>";
    $counter++;
}

// Selesai dengan tag HTML untuk tabel
echo "</table>";

// Tutup koneksi database
mysqli_close($koneksi);
