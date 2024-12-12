<?php
if ($_SERVER['HTTP_REFERER'] == "") {
        header("Location: register.php");
        exit();
}
?>

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
        <link rel="stylesheet" type="text/css" href="css2/registerApp.css">
        <link rel="stylesheet" type="text/css" href="css/popup.css">


</head>

<body>
        <?php
        include "koneksi.php";
        // Periksa apakah pengguna mengakses simpan_register.php langsung

        $username = $_POST["username"];
        $password = $_POST["password"];
        $nama_lengkap = $_POST["nama_lengkap"];
        $email = $_POST["email"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $alamat = $_POST["alamat"];
        $hp = $_POST["hp"];
        $status = $_POST["status"];

        // Validasi Username
        if (!preg_match("/^\d+-[a-zA-Z]$/", $username)) {

                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                                Swal.fire({
                                icon: 'error',
                                title: 'Data Yang Diinput Gagal',
                                text: 'Username harus diawali dengan angka dan diikuti oleh tanda " - " dan satu huruf. contoh : 1593152-W',
                                allowOutsideClick: false,
                                showCancelButton: false,
                                confirmButtonText: 'OK'
                                }).then(function() {
                                window.history.back();
                                });
                        });
                        </script>";
                exit;
        }

        // Validasi Password
        if (strlen($password) < 8) {

                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                                Swal.fire({
                                icon: 'error',
                                title: 'Data Yang Diinput Gagal',
                                text: 'Password harus lebih dari 7 karakter',
                                allowOutsideClick: false,
                                showCancelButton: false,
                                confirmButtonText: 'OK'
                                }).then(function() {
                                window.history.back();
                                });
                        });
                        </script>";
                exit;
        }

        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]+$/", $password)) {

                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                                Swal.fire({
                                icon: 'error',
                                title: 'Data Yang Diinput Gagal',
                                text: 'Password hanya boleh mengandung setidaknya satu huruf kecil, satu huruf besar, dan satu angka',
                                allowOutsideClick: false,
                                showCancelButton: false,
                                confirmButtonText: 'OK'
                                }).then(function() {
                                window.history.back();
                                });
                        });
                        </script>";
                exit;
        }

        // Validasi Email
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<script>
                alert('Format email tidak valid atau email tidak diisi');
                window.history.back();
                </script>";
                exit;

                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
                echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                                Swal.fire({
                                icon: 'error',
                                title: 'Data Yang Diinput Gagal',
                                text: 'Password hanya boleh mengandung setidaknya satu huruf kecil, satu huruf besar, dan satu angka',
                                allowOutsideClick: false,
                                showCancelButton: false,
                                confirmButtonText: 'OK'
                                }).then(function() {
                                window.history.back();
                                });
                        });
                        </script>";
                exit;
        }

        // periksa data
        $queryUsername = "SELECT username, password, nama_lengkap, email, jenis_kelamin, tanggal_lahir, alamat, hp, status, '' AS status_akun FROM user WHERE username = '$username' 
        UNION 
        SELECT username, password, nama_lengkap, email, jenis_kelamin, tanggal_lahir, alamat, hp, status, status_akun FROM admin WHERE username = '$username' 
        UNION 
        SELECT username, password, nama_lengkap, email, jenis_kelamin, tanggal_lahir, alamat, hp, status, '' AS status_akun FROM admin_utama WHERE username = '$username'";
        $resultUsername = mysqli_query($koneksi, $queryUsername);

        $queryEmail = "SELECT username, password, nama_lengkap, email, jenis_kelamin, tanggal_lahir, alamat, hp, status, '' AS status_akun FROM user WHERE email = '$email' 
        UNION 
        SELECT username, password, nama_lengkap, email, jenis_kelamin, tanggal_lahir, alamat, hp, status, status_akun FROM admin WHERE email = '$email' 
        UNION 
        SELECT username, password, nama_lengkap, email, jenis_kelamin, tanggal_lahir, alamat, hp, status, '' AS status_akun FROM admin_utama WHERE email = '$email'";
        $resultEmail = mysqli_query($koneksi, $queryEmail);


        if (mysqli_num_rows($resultUsername) > 0) {
                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
                echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                        icon: 'error',
                        title: 'Data Yang Diinput Gagal',
                        text: 'Nip-Username sudah terdaftar. Gunakan Nip-Username lain.',
                        allowOutsideClick: false, // Tidak memungkinkan mengklik di luar pesan kesalahan
                        showCancelButton: false, 
                        confirmButtonText: 'OK'
                        }).then(function() {
                        window.history.back(); // Kembali ke halaman registrasi sebelumnya
                        });
                });
                </script>";
                exit;
        }

        if (mysqli_num_rows($resultEmail) > 0) {
                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';

                echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                        icon: 'error',
                        title: 'Data Yang Diinput Gagal',
                        text: 'Email sudah terdaftar. Gunakan email lain.',
                        allowOutsideClick: false,
                        showCancelButton: false,
                        confirmButtonText: 'OK'
                        }).then(function() {
                        window.history.back();
                        });
                });
                </script>";
                exit;
        }

        // akhir periksa


        // Cek apakah sesi sudah ada sebelumnya
        if (isset($_SESSION['login_user'])) {
                // Jika sesi sudah ada, membersihkannya
                session_unset();
        }

        // Membersihkan sesi sebelumnya (jika ada)
        session_start();
        session_unset();

        if ($status === 'admin') {
                $table = 'admin';
                $status_value = 'admin';
                $status_akun = $_POST["status_akun"];
        } else {
                $table = 'user';
                $status_value = 'user';
                $status_akun = $_POST["status_akun"];
        }

        if (isset($table)) {
                // Menginput data ke tabel yang sesuai
                if ($status === 'admin') {
                        $hasil = mysqli_query($koneksi, "INSERT INTO $table (username, password, nama_lengkap, email, jenis_kelamin, tanggal_lahir, alamat, hp, status, status_akun) VALUES ('$username', '$password', '$nama_lengkap', '$email', '$jenis_kelamin', '$tanggal_lahir', '$alamat', '$hp', '$status_value', '$status_akun')");
                } else {
                        $hasil = mysqli_query($koneksi, "INSERT INTO $table (username, password, nama_lengkap, email, jenis_kelamin, tanggal_lahir, alamat, hp, status, status_akun) VALUES ('$username', '$password', '$nama_lengkap', '$email', '$jenis_kelamin', '$tanggal_lahir', '$alamat', '$hp', '$status_value', '$status_akun')");
                }

                // Kondisi apakah berhasil atau tidak
                if ($hasil) {
                        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
                        echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                                Swal.fire({
                                icon: 'success',
                                title: 'Selamat Registrasi Anda Berhasil!',
                                text: 'Silakan Cek Akun Anda Dihalaman Login',
                                allowOutsideClick: false,
                                showCancelButton: false,
                                confirmButtonText: 'OK'
                                }).then(function() {
                                document.location='login.php';
                                });
                        });
                        </script>";
                } else {
                        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
                        echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                                Swal.fire({
                                icon: 'error',
                                title: 'Registrasi Anda Gagal',
                                text: 'Silakan melakukan registrasi ulang!',
                                allowOutsideClick: false,
                                showCancelButton: false,
                                confirmButtonText: 'OK'
                                }).then(function() {
                                document.location='register.php';
                                });
                        });
                        </script>";
                }
        } else {
                // Handle the case where the status is not recognized (if needed)
                // Anda dapat menambahkan penanganan kesalahan yang sesuai di sini.
        }

        ?>
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