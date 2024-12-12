<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Anda</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css2/popup.css">


</head>

<body>
    <?php
    session_start();
    include('koneksi.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $allFormData = array();

        // Folder tujuan untuk menyimpan gambar
        $uploadFolder = "uploads/";

        // Loop melalui data yang dikirim
        foreach ($_POST['jenis_peralatan'] as $index => $jenis_peralatan) {
            // Mengambil informasi file gambar
            $gambarName = $_FILES['gambar']['name'][$index];
            $gambarTmp = $_FILES['gambar']['tmp_name'][$index];
            $gambarPath = $uploadFolder . $gambarName;

            // Pindahkan gambar ke folder tujuan
            move_uploaded_file($gambarTmp, $gambarPath);

            $formData = array(
                'jenis_peralatan' => mysqli_real_escape_string($koneksi, $jenis_peralatan),
                'nama_peralatan' => mysqli_real_escape_string($koneksi, $_POST["nama_peralatan"][$index]),
                'jumlah_alat_baik' => mysqli_real_escape_string($koneksi, $_POST["jumlah_alat_baik"][$index]),
                'jumlah_alat_rusak' => mysqli_real_escape_string($koneksi, $_POST["jumlah_alat_rusak"][$index]),
                'tgl_kegagalan' => mysqli_real_escape_string($koneksi, $_POST["tgl_kegagalan"][$index]),
                'jenis_kegagalan' => mysqli_real_escape_string($koneksi, $_POST["jenis_kegagalan"][$index]),
                'penanganan' => mysqli_real_escape_string($koneksi, $_POST["penanganan"][$index]),
                'kategory_kerusakan' => mysqli_real_escape_string($koneksi, $_POST["kategory_kerusakan"][$index]),
                'tgl_perbaikan' => mysqli_real_escape_string($koneksi, $_POST["tgl_perbaikan"][$index]),
                'lama_kegagalan' => mysqli_real_escape_string($koneksi, $_POST["lama_kegagalan"][$index]),
                'frekuensi_kegagalan' => mysqli_real_escape_string($koneksi, $_POST["frekuensi_kegagalan"][$index]),
                'waktu_pemeliharaan' => mysqli_real_escape_string($koneksi, $_POST["waktu_pemeliharaan"][$index]),
                'keterangan' => mysqli_real_escape_string($koneksi, $_POST["keterangan"][$index]),
                'kode' => mysqli_real_escape_string($koneksi, $_POST["kode"][$index]),
                'gambar' => mysqli_real_escape_string($koneksi, $gambarName) // Simpan path gambar ke database
            );

            $allFormData[] = $formData;
        }

        foreach ($allFormData as $formData) {
            $query = "INSERT INTO kegiatan (jenis_peralatan, nama_peralatan, jumlah_alat_baik, jumlah_alat_rusak, tgl_kegagalan, jenis_kegagalan, penanganan, kategory_kerusakan, tgl_perbaikan, lama_kegagalan, frekuensi_kegagalan, waktu_pemeliharaan, keterangan, gambar, kode)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($koneksi, $query);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "sssssssssssssss", $formData['jenis_peralatan'], $formData['nama_peralatan'], $formData['jumlah_alat_baik'], $formData['jumlah_alat_rusak'], $formData['tgl_kegagalan'], $formData['jenis_kegagalan'], $formData['penanganan'], $formData['kategory_kerusakan'], $formData['tgl_perbaikan'], $formData['lama_kegagalan'], $formData['frekuensi_kegagalan'], $formData['waktu_pemeliharaan'], $formData['keterangan'], $formData['gambar'], $formData['kode']);
                // Bind parameter lainnya sesuai kebutuhan

                if (mysqli_stmt_execute($stmt)) {
                    $_SESSION['success_message'] = 'Data berhasil disimpan';
                } else {
                    $_SESSION['error_message'] = 'Terjadi kesalahan. Data gagal disimpan. ' . mysqli_stmt_error($stmt);
                }

                mysqli_stmt_close($stmt);
            } else {
                $_SESSION['error_message'] = 'Terjadi kesalahan dalam persiapan statement. ' . mysqli_error($koneksi);
            }
        }

        header("location: staf_kegiatan.php");
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- akhir -->
    <!-- Tambahkan script SweetAlert2 di sini -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- <script src="dist/dist/sweetalert2.all.min.js"></script> -->
</body>

</html>