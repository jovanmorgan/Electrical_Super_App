<?php
include 'koneksi.php';

// Inisialisasi variabel untuk pesan error dan pesan login berhasil
$errorMessage = "";
$loginSuccessMessage = "";

if (isset($_POST['submit'])) {
  // Proses login
  $user = $_POST['username'];
  $password = $_POST['password'];

  // Query untuk mencari data di tabel "user", "admin", dan "admin_utama"
  $queryUser = "SELECT * FROM user WHERE username = '$user' AND password = '$password'";
  $queryAdmin = "SELECT * FROM admin WHERE username = '$user' AND password = '$password'";
  $queryAdminUtama = "SELECT * FROM admin_utama WHERE username = '$user' AND password = '$password'";

  // Eksekusi query untuk mencari data di tabel "user"
  $cek_data_user = mysqli_query($koneksi, $queryUser);
  $row_user = mysqli_num_rows($cek_data_user);

  // Eksekusi query untuk mencari data di tabel "admin"
  $cek_data_admin = mysqli_query($koneksi, $queryAdmin);
  $row_admin = mysqli_num_rows($cek_data_admin);

  // Eksekusi query untuk mencari data di tabel "admin_utama"
  $cek_data_admin_utama = mysqli_query($koneksi, $queryAdminUtama);
  $row_admin_utama = mysqli_num_rows($cek_data_admin_utama);

  // Pengecekan Kondisi Login Berhasil/Tidak
  if ($row_user > 0 || $row_admin > 0 || $row_admin_utama > 0) {
    session_start();
    // session_unset();

    if ($row_user > 0) {
      $hasil = mysqli_fetch_array($cek_data_user);
      $login_user = $hasil['username'];
      $status = $hasil['status'];
      $nama_lengkap = $hasil['nama_lengkap'];
      $_SESSION['nama_lengkap'] = $hasil['nama_lengkap'];
      $_SESSION['jenis_kelamin'] = $hasil['jenis_kelamin'];
      $_SESSION['email'] = $hasil['email'];
      $_SESSION['alamat'] = $hasil['alamat'];
      $_SESSION['hp'] = $hasil['hp'];
      $status_akun = $hasil['status_akun'];

      if ($status_akun === 'telah disetujui') {
        $_SESSION['id_user'] = $hasil['id_user'];
        // Anda bisa menambahkan informasi lain yang relevan untuk admin di sini
      } else {
        // Status akun tidak disetujui, tampilkan pesan kesalahan
        $errorMessage = "Akun staf anda belum diberi izin.";
      }
    } elseif ($row_admin > 0) {
      $hasil = mysqli_fetch_array($cek_data_admin);
      $login_user = $hasil['username'];
      $status = $hasil['status'];
      $status_akun = $hasil['status_akun'];
      $nama_lengkap = $hasil['nama_lengkap'];
      $_SESSION['nama_lengkap'] = $hasil['nama_lengkap'];

      if ($status_akun === 'telah disetujui') {
        $_SESSION['id_admin'] = $hasil['id_admin'];
        // Anda bisa menambahkan informasi lain yang relevan untuk admin di sini
      } else {
        // Status akun tidak disetujui, tampilkan pesan kesalahan
        $errorMessage = "Akun manager anda belum diberi izin.";
      }
    } elseif ($row_admin_utama > 0) {
      $hasil = mysqli_fetch_array($cek_data_admin_utama);
      $login_user = $hasil['username'];
      $status = $hasil['status'];
      $nama_lengkap = $hasil['nama_lengkap'];
      $_SESSION['nama_lengkap'] = $hasil['nama_lengkap'];

      $_SESSION['id_admin_utama'] = $hasil['id_admin_utama'];
      // Anda bisa menambahkan informasi lain yang relevan untuk admin_utama di sini
    }

    $_SESSION['login_user'] = $login_user;
    $_SESSION['username'] = $login_user;

    if ($status == 'admin' && $status_akun === 'telah disetujui') {
      // bentuk alert
      $loginSuccessMessage = "Selamat datang, $nama_lengkap! Anda berhasil login. Mohon Tunggu Sebentar";
      // Tampilkan pop-up login berhasil untuk admin
      echo '<script>
                document.getElementById("loginUsername").textContent = "' . $nama_lengkap . '";
                document.getElementById("loginSuccessModal").style.display = "block";
            </script>';
      // Redirect ke halaman admin setelah beberapa detik
      echo '<script>
    setTimeout(function() {
      window.location.href = "manager_admin.php";
    }, 2000);
</script>';
    } elseif ($status == 'user' && $status_akun === 'telah disetujui') {
      // bentuk alert
      $loginSuccessMessage = "Selamat datang, $nama_lengkap! Anda berhasil login. Mohon Tunggu Sebentar";
      // Tampilkan pop-up login berhasil untuk user
      echo '<script>
                document.getElementById("loginUsername").textContent = "' . $nama_lengkap . '";
                document.getElementById("loginSuccessModal").style.display = "block";
            </script>';
      // Redirect ke halaman user setelah beberapa detik
      echo '<script>
    setTimeout(function() {
      window.location.href = "staf_user.php";
    }, 2000);
</script>';
    } elseif ($status == 'admin_utama') {
      // bentuk alert
      $loginSuccessMessage = "Selamat datang, $nama_lengkap! Anda berhasil login. Mohon Tunggu Sebentar";
      // Tampilkan pop-up login berhasil untuk admin_utama
      echo '<script>
                document.getElementById("loginUsername").textContent = "' . $nama_lengkap . '";
                document.getElementById("loginSuccessModal").style.display = "block";
            </script>';
      // Redirect ke halaman admin_utama setelah beberapa detik
      echo '<script>
    setTimeout(function() {
      window.location.href = "admin_utama.php";
    }, 2000);
</script>';
    }
  } else {
    // Set pesan error
    $errorMessage = "Maaf, login Anda gagal. Silakan periksa kembali username dan password Anda.";
  }
}
?>



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
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css2/login_app.css">
  <link rel="stylesheet" type="text/css" href="css/popup.css">
  <link rel="stylesheet" type="text/css" href="css2/popup-login.css">    
  <link rel="icon" type="image/png" sizes="16x16" href="images/7.png">

  <title>Halaman Login</title>
</head>

<style>
  body {
    background-image: url('images/Background/bg4.jpg');
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
    <img src="images/4.png" alt="" width="100%">
    <hr>
    <form method="POST" action="">
      <!-- Tambahkan elemen untuk menampilkan pesan error -->
      <?php if (!empty($errorMessage)) : ?>
        <div class="alert alert-danger" id="closeError">
          <?php echo $errorMessage; ?>
        </div>
      <?php endif; ?>
      <!-- Tambahkan elemen untuk menampilkan pesan login berhasil -->
      <?php if (!empty($loginSuccessMessage)) : ?>
        <div class="alert alert-success">
          <?php echo $loginSuccessMessage; ?>
        </div>
      <?php endif; ?>
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
        <label for="exampleInputPassword1" class="text-black">Password</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text bg-primary text-white h-100" id="basic-addon1"><i class="fas fa-unlock-alt"></i></div>
          </div>
          <input type="password" class="form-control fromControl2" id="pass" name="password" placeholder="Masukan Password" required onblur="validatePassword(this.value)">
          <div class="input-group-append">
            <span class="input-group-text bg-white text-dark" onclick="togglePasswordVisibility()" id="togglePasswordVisibility"><i class="fas fa-eye"></i></span>
          </div>
        </div>
      </div>

      <div class="mb-3">
        <small><a href="register.php" class="keregis">Belum Punya Akun? Buat Akun Anda! </a></small>
      </div>
      <div class="row">
        <!-- <div class="col-6">
          <button type="reset" name="reset" class="btn btn-danger btn-block">RESET</button>
        </div> -->
        <div class="col-10">
          <button type="submit" name="submit" class="btn btn-primary btn-block ml-4">LOGIN</button>
        </div>
      </div>

    </form>

    <!-- Pop-up Login Berhasil -->
    <div class="modal animate__animated animate__fadeIn" id="loginSuccessModal">
      <div class="modal-content">
        <div class="d-flex justify-content-end">
          <button type="button" class="btn btn-close" aria-label="Close" onclick="closeLoginSuccessModal()"></button>
        </div>
        <img src="images/sukses.gif" alt="Deskripsi Gambar" class="notif mx-auto" id="gif1">
        <div class="naik">
          <h2>Login Berhasil</h2>
          <!-- Isi pesan login berhasil dengan JavaScript -->
          <p style="font-size: 1.3em;">Selamat datang, <span id="loginUsername"></span>! Anda berhasil login.</p>
        </div>
      </div>
    </div>

    <!-- Pop-up Login Gagal -->
    <div class="modal animate__animated animate__fadeIn" id="loginFailureModal">
      <div class="modal-content">
        <div class="d-flex justify-content-end">
          <button type="button" class="btn btn-close" aria-label="Close" onclick="closeLoginFailureModal()"></button>
        </div>
        <img src="images/gagal.gif" alt="Deskripsi Gambar" class="notif mx-auto" id="gif2">
        <div class="naik">
          <h2 style="font-weight: 600; font-size: 2.8em;">Login Gagal</h2>
          <!-- Tampilkan pesan kesalahan dari PHP -->
          <p style="font-size: 1.3em;"><?php echo $errorMessage; ?></p>
        </div>
      </div>
    </div>




    <script>
      function closeLoginSuccessModal() {
        document.getElementById("loginSuccessModal").style.display = "none";
      }

      function closeLoginFailureModal() {
        document.getElementById("loginFailureModal").style.display = "none";
      }
    </script>


    <!-- Eksekusi Form Login -->
    <?php if (!empty($errorMessage)) : ?>
      <script>
        document.getElementById("loginFailureModal").style.display = "block";

        // Tambahkan timeout 3 detik sebelum menghilangkan pesan login gagal
        setTimeout(function() {
          document.getElementById("loginFailureModal").style.display = "none";
        }, 3900);

        const fromControls = document.querySelectorAll(".fromControl1, .fromControl2");

        fromControls.forEach(function(fromControl) {
          fromControl.addEventListener('click', function() {
            const closeError = document.getElementById("closeError");
            closeError.style.marginTop = "-50px";
            closeError.style.opacity = "0";
            closeError.style.transition = "1s all";
            setTimeout(function() {
              closeError.style.display = "none";
            }, 1000);
          });
        });
      </script>
    <?php endif; ?>

    <!-- Eksekusi Pop-up Login Berhasil jika ada pesan login berhasil -->
    <?php if (!empty($loginSuccessMessage)) : ?>
      <script>
        // Isi pesan login berhasil ke dalam pop-up
        var loginUsername = "<?php echo $nama_lengkap; ?>";
        document.getElementById("loginUsername").textContent = loginUsername;

        // Tampilkan pop-up login berhasil
        document.getElementById("loginSuccessModal").style.display = "block";
      </script>
    <?php endif; ?>

  </div>
  <!-- Akhir Eksekusi Form Login -->



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