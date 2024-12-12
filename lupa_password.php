<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css2/login.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css2/login_app.css">
    <link rel="stylesheet" type="text/css" href="css/popup.css">
    <link rel="stylesheet" type="text/css" href="css2/popup-login.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <title>Halaman Login</title>
</head>

<style>
    body {
        background-image: url('images/Background/bg6.jpg');
        /* Ganti 'bg1.avif' dengan URL gambar Anda */
        background-size: cover;
        /* Mengatur gambar latar belakang untuk menutupi seluruh area body */
        background-repeat: no-repeat;
        /* Mencegah gambar latar belakang diulang */
        background-attachment: fixed;
        /* Membuat gambar latar belakang tetap di tempat saat menggulir halaman */
        /* Opsi lainnya yang dapat Anda pertimbangkan */
        background-position: center center;
        background-color: #ffffff;
    }
</style>

<body>
    <!-- Form Login -->
    <div class="container">
        <h2 class="text-center"><strong>Verifikasi Password!</strong></h2>
        <hr>
        <form method="POST" action="">
            <?php
            include 'koneksi.php';

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
                $username = $_POST["username"];
                $email = $_POST["email"];
                $tanggal_lahir = $_POST["tanggal_lahir"];

                $username = mysqli_real_escape_string($koneksi, $username);
                $email = mysqli_real_escape_string($koneksi, $email);
                $tanggal_lahir = mysqli_real_escape_string($koneksi, $tanggal_lahir);

                if (empty($username) || empty($email) || empty($tanggal_lahir)) {
                    echo '<script>document.getElementById("error-message").style.display = "block";</script>';
                    echo "Harap isi semua kolom.";
                } else {
                    $queryUser = "SELECT * FROM user WHERE username = '$username' AND email = '$email' AND tanggal_lahir = '$tanggal_lahir'";
                    $queryAdmin = "SELECT * FROM admin WHERE username = '$username' AND email = '$email' AND tanggal_lahir = '$tanggal_lahir'";
                    $queryAdminUtama = "SELECT * FROM admin_utama WHERE username = '$username' AND email = '$email' AND tanggal_lahir = '$tanggal_lahir'";

                    $cek_data_user = mysqli_query($koneksi, $queryUser);
                    $row_user = mysqli_num_rows($cek_data_user);

                    $cek_data_admin = mysqli_query($koneksi, $queryAdmin);
                    $row_admin = mysqli_num_rows($cek_data_admin);

                    $cek_data_admin_utama = mysqli_query($koneksi, $queryAdminUtama);
                    $row_admin_utama = mysqli_num_rows($cek_data_admin_utama);

                    if ($row_user > 0 || $row_admin > 0 || $row_admin_utama > 0) {
                        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
                        echo "<script>
                                Swal.fire({
                                    title: 'Masukkan Password',
                                    html: '<div class=\"form-group\"><div class=\"input-group\"><div class=\"input-group-prepend\"><div class=\"input-group-text bg-primary text-white h-100\" id=\"basic-addon1\"><i class=\"fas fa-unlock-alt\"></i></div></div><input type=\"password\" class=\"form-control fromControl2\" id=\"pass\" name=\"password\" placeholder=\"Masukan Password\" required onblur=\"validatePassword(this.value)\"><div class=\"input-group-append\"><span class=\"input-group-text bg-white text-dark\" onclick=\"togglePasswordVisibility()\" id=\"togglePasswordVisibility\"><i class=\"fas fa-eye\"></i></span></div></div></div>',
                                    confirmButtonText: 'Ganti Password',
                                    showCloseButton: true,
                                    preConfirm: function (password) {
                                        return new Promise(function (resolve) {
                                            if (password) {
                                                resolve(password);
                                            } else {
                                                var errorMessage = document.getElementById('error-message');
                                                errorMessage.style.display = 'block';
                                                errorMessage.innerText = 'Password harus diisi.';
                                                Swal.stopValidation();
                                            }
                                        });
                                    },
                                    allowOutsideClick: false,
                                    allowEscapeKey: false,
                                    allowEnterKey: false
                                }).then(function (result) {
                                    if (result.value) {
                                        // Di sini Anda dapat menambahkan kode untuk mengganti password dalam tabel yang sesuai.
                                        // Pastikan untuk mengganti password sesuai dengan tabel yang sesuai (user, admin, atau admin_utama).
                                    }
                                });
                            </script>";
                    } else {
                        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>";
                        echo "<script>
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal',
                                    text: 'Data akun yang anda masukan tidak ada.',
                                    allowOutsideClick: false,
                                    allowEscapeKey: false,
                                    allowEnterKey: false,
                                    showCloseButton: true
                                });
                            </script>";
                    }
                }
            }
            ?>

            <div id="error-message" class="alert alert-danger" style="display: none;"></div>
            <div class="form-group">
                <label for="exampleInputEmail1" class="text-black">Nip-Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-user"></i></div>
                    </div>
                    <input type="text" class="form-control fromControl1" id="user" name="username" placeholder="Masukan Nip-Username" required onblur="validateUsername(this.value)">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="details">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text bg-warning text-white h-100" id="basic-addon1"><i class="fas fa-at"></i></div>
                    </div>
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Masukan Email" required onblur="validateEmail(this.value); checkEmailAvailability(this.value);">
                </div>
            </div>
            <div class="form-group">
                <label for="tgl" class="details">Tanggal Lahir</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text bg-primary text-white h-100" id="basic-addon1"><i class="fas fa-calendar-check"></i></div>
                    </div>
                    <input type="date" class="form-control" id="tgl" name="tanggal_lahir" required>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <a href="login.php" type="button" name="submit" class="btn btn-danger btn-block ml-4">Kembali</a>
                </div>
                <div class="col-5">
                    <button type="submit" name="submit" class="btn btn-primary btn-block ml-4">Ganti</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- akhir -->

    <!-- js bootstrapt dan jqwery -->
    <!-- <script src="dist/dist/sweetalert2.all.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- akhir -->
    <script type="text/javascript" src="js/popup.js"></script>
    <script type="text/javascript" src="js/mata.js"></script>
    <script type="text/javascript" src="js2/login2.js"></script>
</body>

</html>