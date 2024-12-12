<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css2/popup.css">
  <link rel="stylesheet" type="text/css" href="css2/registerApp.css">
  <link rel="stylesheet" type="text/css" href="css/popup.css">


  <title>Halaman Registrasi</title>
</head>

<style>
  body {
    background-image: url('images/Background/bg7.jpg');
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

  .t1 {
    position: relative;
    bottom: 10px;
  }
</style>

<body>
  <!-- Form Registrasi -->
  <div class="container">
    <div class="card p-5 mb-5" style="margin-top: 60px;">
      <!-- Tombol close hanya tampil di desktop -->
      <div class="close">
        <!-- Tombol close hanya tampil di desktop -->
        <a type="button" class="btn btn-close float-end" href="login.php" aria-label="Close"></a>
      </div>
      <h3 class="text-center text-black t1">SILAKAN REGISTRASI</h3>
      <hr>
      <div id="error-message" class="alert alert-danger" style="display: none;"></div>
      <div id="email-error" class="alert alert-danger" style="display: none;"></div>
      <div id="username-error" class="alert alert-danger" style="display: none;"></div>
      <form method="POST" action="simpan_register.php">

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="user" class="details">Nip-Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text bg-info text-white h-100" id="basic-addon1"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" class="form-control" id="user" name="username" placeholder="Masukan Nip-Username anda, contoh : 1593152-W" required onblur="validateUsername(this.value); checkUsernameAvailability(this.value);">
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="pass" class="details">Password</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text bg-info text-white h-100" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
              </div>
              <input type="password" class="form-control" id="pass" name="password" placeholder="Masukan Password, contoh : Abc1234" required onblur="validatePassword(this.value)">
              <div class="input-group-append">
                <span class="input-group-text bg-white text-dark" onclick="togglePasswordVisibility()" id="togglePasswordVisibility"><i class="fas fa-eye"></i></span>
              </div>
            </div>
          </div>
        </div>


        <div class="form-row">

          <div class="form-group col-md-6">
            <label for="sts">Status Jabatan</label><br>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-user-tie"></i>
                </span>
              </div>
              <select id="sts" class="form-control" name="status" required>
                <option value="" selected>Pilih Jabatan</option>
                <option value="user">Staf</option>
                <option value="admin">Manager</option>
              </select>
            </div>
          </div>

          <div class="form-group col-md-6">
            <label for="user" class="details">Nama Lengkap</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-pencil-alt"></i></span>
              </div>
              <input type="text" class="form-control" id="nama" name="nama_lengkap" placeholder="Masukan Nama Lengkap" required>
            </div>
          </div>
        </div>


        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail" class="details">Email</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text bg-warning text-white h-100" id="basic-addon1"><i class="fas fa-at"></i></span>
              </div>
              <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Masukan Email anda contoh : name@gmail.com" required onblur="validateEmail(this.value); checkEmailAvailability(this.value);">
            </div>
          </div>

          <div class="form-group col-md-6">
            <label for="tgl" class="details">Tanggal Lahir</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text bg-warning text-white h-100" id="basic-addon1"><i class="fas fa-calendar-check"></i></span>
              </div>
              <input type="date" class="form-control" id="tgl" name="tanggal_lahir" required>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="rumah">Asal Bandara</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-white h-100" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
              </div>
              <input type="text" class="form-control" id="rumah" name="alamat" placeholder="Masukan Asal Bandara" required>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="telp">No. Telephone</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-white h-100" id="basic-addon1"><i class="fas fa-phone"></i></span>
              </div>
              <input type="number" class="form-control" id="telp" name="hp" placeholder="No. Telephone" required>
            </div>
          </div>
          <div class="form-group col-md-12">
            <label for="jk">Jenis Kelamin</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" value="Laki-Laki" required>
              <label class="form-check-label" for="jk">Laki-Laki</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" value="Perempuan" required>
              <label class="form-check-label" for="jk">Perempuan</label>
            </div>
          </div>

          <input type="hidden" name="status_akun" value="belum disetujui">

          <button type="reset" class="btn btn-danger d-grid gap-2 col-5 mx-auto mt-4 btn2">Reset</button>
          <button type="submit" class="btn btn-primary d-grid gap-2 col-5 mx-auto mt-4 btn2">Register</button>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
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

  <!-- js sendiri -->
  <script type="text/javascript" src="js/mata.js"></script>
  <script type="text/javascript" src="js2/registerUser.js"></script>
  <!-- <script type="text/javascript" src="js2/kode.js"></script> -->
  <div class="modal" id="passwordModal" tabindex="-1" aria-labelledby="passwordModalLabel" aria-hidden="true" data-backdrop="static" style="z-index: 100;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="passwordModalLabel" style="position: absolute;  left:70px;">Masukkan Kata Sandi Admin</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; top: 12px; right: 12px;"></button>
        </div>

        <!-- Elemen untuk menampilkan pesan kesalahan -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Kembali Keuser</button>
        <button type="button" class="btn btn-primary" onclick="checkAdminPassword()">Verifikasi</button>
      </div>
    </div>
  </div>
  </div>

  <style>
    .modal-backdrop {
      display: none;
    }

    .modal-content {
      width: 80%;
    }
  </style>

</body>

</html>