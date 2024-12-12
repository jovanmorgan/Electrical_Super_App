<?php
include('koneksi.php');

session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
    exit();
} else {
?>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Custom CSS -->
        <link href="assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
        <link href="assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
        <link href="dist/css/style.min.css" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

        <!-- ===== Boxicons CSS ===== -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.25.0/font/bootstrap-icons.css">

        <!-- ===== link font ===== -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="16x16" href="images/7.png">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <link rel="stylesheet" type="text/css" href="kontak.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

        <!-- css sendiri -->
        <link rel="stylesheet" type="text/css" href="css2/nav-staf7.css">
        <link rel="stylesheet" type="text/css" href="css2/user1.css">
        <link rel="stylesheet" type="text/css" href="css2/loding_ESA.css">

        <style>
            .text-overflow-ellipsis {
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;
            }

            .card {
                border-radius: 10px;
                position: relative;
                z-index: 50;
                border: solid 1px #d4d4d4;
                color: #000000;
                overflow: hidden;
                background-image: linear-gradient(180deg, #ffffff 5%, #d2f3ef 100%);
            }

            .btn {
                border-radius: 5px;
                padding: 10px;
            }

            .satu {
                display: flex;
                flex-direction: column;
                height: 80%;
            }

            .container {
                position: relative;
                top: 65px;
                margin-top: auto;
            }

            .user-info {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin-top: 60px;

            }

            .camera-icon {
                margin-top: -30px;
                background-color: #ffb835;
                color: #ffffff;
                border-radius: 50%;
                padding: 13px;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.39);
                position: relative;
                left: 50px;
                bottom: 30px;
                transition: .5s all;
                transform: scale(1.2);
                /* Optional: Add a subtle shadow for depth */
            }

            .camera-icon:hover {
                transform: scale(1.4);
                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.589);
            }

            .icon {
                transition: .5s all;
                filter: drop-shadow(0 0 7px rgba(0, 0, 0, 0.39));
                cursor: pointer;
                color: #ffb835;
            }

            .icon:hover {
                filter: drop-shadow(1px 1px 4px rgba(0, 0, 0, 0.589));
                color: #e09913;
            }

            .edit-icon {
                margin-left: 5px;
                /* Adjust the margin as needed */
                cursor: pointer;
                color: #ffb835;
                /* Set the color of the edit icon */
            }

            .modal-backdrop.show {
                opacity: 0.5;
                background-color: #000000;
            }

            .modal-body {
                text-align: center;
            }

            .cropper-container {
                max-width: 100%;
                height: auto;
            }

            #cropperImage {
                max-width: 100%;
                height: auto;
            }

            @media screen and (max-width: 790px) {
                .card {
                    border-radius: 10px;
                    position: relative;
                    z-index: 50;
                    border: solid 2px #d4d4d4;
                    color: #000000;
                }

                .satu {
                    /* border-radius: 0 0 40% 40%; */
                    height: 50%;
                }

                .container {
                    position: relative;
                    top: 65px;
                    margin-top: auto;
                }

                .btn {
                    padding: 7px;
                }

                .user-info {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    height: 100vh;
                    margin-top: 80px;
                }
            }

            @media screen and (max-width: 385px) {
                .gbr1 {
                    width: 120px;
                }
            }

            @media screen and (max-width: 335px) {
                .gbr1 {
                    position: absolute;
                    left: -60px;
                    bottom: -20px;
                }
            }

            @media screen and (max-width: 307px) {
                .gbr1 {
                    display: none;
                }
            }
        </style>
        <title>Halama Staf | Electrical SuperApp</title>
    </head>

    <body>

        <nav id="untuk_scrol_navbar">
            <div class="nav-bar">
                <!-- bentuk animasi -->
                <div id="animasi" class="menu-tombol">
                    <input class="siderbarOpen" type="checkbox">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <style>

                </style>
                <span class="logo navLogo"><a class="han" href="staf_user.php"><img src="images/10.png" class="mt-2 gbr1" alt="" width="170px"></a></span>
                <div class="menu">
                    <div class="logo-toggle">
                        <span class="logo mt-2"><a href="staf_user.php"><img src="images/10.png" alt="" class="gbr2" width="70%" style="position: relative; right: 70px;"></a></span>
                        <!--  di sini saya memakai onclik untuk reset di js -->
                    </div>
                    <ul class="nav-links">
                        <li><a href="staf_user.php" id="home-link">HOME</a></li>
                        <li><a href="staf_kegiatan.php" id="kegiatan-link">KEGIATAN</a></li>
                        <li><a href="staf_status.php" id="status-link">STATUS</a></li>
                        <li><a href="staf_berita.php" id="berita-link">BERITA</a></li>
                        <li><a href="staf_akun.php" id="akun-link">AKUN</a></li>
                        <li><a href="logout.php" id="logout-link">LOGOUT</a></li>
                    </ul>
                </div>
                <div class="darkLight-searchBox">
                    <div class="dark-light">
                        <i class='bx bx-moon moon'></i>
                        <i class='bx bx-sun sun'></i>
                    </div>

                    <div class="searchBox" style="display: none;">
                        <div class="searchToggle">
                            <i class='bx bx-x cancel'></i>
                            <i class='bx bx-search search'></i>
                        </div>

                        <div class="search-field">
                            <input type="text" id="hapus" placeholder="Search...">
                            <i class='bx bx-search'></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <?php
        // Masukkan file koneksi database di sini
        include 'koneksi.php';

        // Ambil id_user dari $_SESSION
        $id = $_SESSION['id_user'];

        // Query untuk mendapatkan data pengguna
        $query = "SELECT * FROM user WHERE id_user = $id";
        $result = mysqli_query($koneksi, $query);

        // Periksa apakah query berhasil dieksekusi
        if ($result) {
            // Ambil data pengguna dari hasil query
            $user = mysqli_fetch_assoc($result);

            $nama_user = $user['nama_lengkap'];
            $foto_profile = $user['foto_profile'];
            $tanggal_lahir = date('d-m-Y', strtotime($user['tanggal_lahir']));
            $panjang_nama_user = 17;
            $nama_manager_potong = strlen($nama_user) > $panjang_nama_user ? substr($nama_user, 0, $panjang_nama_user) . '...' : $nama_user;
        ?>
            <div class="satu">
                <img class="bulat1" src="images/donat1.png" alt="" class="g1" style="display: none;">
                <img class="bulat2" src="images/donat1.png" alt="" class="g1" style="display: none;">
                <div class="user-info">
                    <div class="p-2">
                        <?php
                        if ($foto_profile) {
                            // Jika ada foto_profile, gunakan foto_profile
                            echo '<img src="foto_profile/' . $foto_profile . '" alt="user" width="150" class="rounded-circle" data-toggle="modal" data-target="#myModal">';
                        } else {
                            // Jika tidak ada foto_profile, gunakan gambar default
                            echo '<img src="assets/images/users/1.jpg" alt="user" width="150" class="rounded-circle">';
                        }
                        ?>

                    </div>
                    <span class="camera-icon" onclick="openCropper()">
                        <i class="fas fa-camera"></i>
                    </span>
                    <h4 class="text-white"><?php echo $nama_manager_potong; ?></h4>
                </div>
            </div>

            <!-- Modal Bootstrap -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Gambar Profil</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Sumber gambar akan ditetapkan menggunakan JavaScript -->
                            <img src="foto_profile/<?php echo $foto_profile; ?>" alt="user" class="img-fluid" id="modalImage">
                        </div>
                    </div>
                </div>
            </div>

            <input type="file" name="file" id="fileInput" style="display: none;">

            <div class="container" id="">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center p-1">Detail Profile</h2>
                        <hr>
                    </div>
                    <div class="custom-form">
                        <div class="comment-widgets scrollable">
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row mt-0 my-0 border border-right-0 border-left-0 border-bottom-0">
                                <div class="p-2"><i class="fas fa-user-circle fa-3x"></i></div>
                                <div class="comment-text w-100 p-2">
                                    <h6 class="font-14">Nama</h6>
                                    <span class="mb-3 d-block font-18"><?php echo $user['nama_lengkap']; ?></span>
                                </div>
                                <div class="position-absolute top-0 end-0 p-2 icon" data-bs-toggle="modal" data-bs-target="#editNama<?php echo $id; ?>">
                                    <i class="fas fa-pencil-alt fa-lg"></i>
                                </div>
                            </div>

                            <div class="d-flex flex-row comment-row mt-0 my-0 border border-right-0 border-left-0 border-top-0 position-relative">
                                <div class="p-2"><i class="fas fa-lock fa-3x"></i></div>
                                <div class="comment-text w-100 p-2">
                                    <h6 class="font-14">Password</h6>
                                    <span class="mb-3 d-block text-justify font-18"><?php echo $user['password']; ?></span>
                                </div>
                                <div class="position-absolute top-0 end-0 p-2 icon" data-bs-toggle="modal" data-bs-target="#editPassword<?php echo $id; ?>">
                                    <i class="fas fa-pencil-alt fa-lg"></i>
                                </div>
                            </div>

                            <div class="d-flex flex-row comment-row mt-0 my-0 border border-right-0 border-left-0 border-top-0 position-relative">
                                <div class="p-2"><i class="fas fa-calendar-alt fa-3x"></i></div>
                                <div class="comment-text w-100 p-2">
                                    <h6 class="font-14">Tanggal Lahir</h6>
                                    <?php
                                    // Memeriksa apakah tanggal lahir tidak kosong
                                    if (!empty($user['tanggal_lahir'])) {
                                        // Mengonversi format tanggal
                                        echo '<span class="mb-3 d-block text-justify font-18">' . $tanggal_lahir . '</span>';
                                    } else {
                                        echo '<span class="mb-3 d-block text-justify font-18">Tanggal lahir tidak tersedia</span>';
                                    }
                                    ?>
                                </div>
                                <div class="position-absolute top-0 end-0 p-2 icon" data-bs-toggle="modal" data-bs-target="#editTanggalModal<?php echo $id; ?>">
                                    <i class="fas fa-pencil-alt fa-lg"></i>
                                </div>
                            </div>

                            <div class="d-flex flex-row comment-row mt-0 my-0 border border-right-0 border-left-0 border-top-0 position-relative">
                                <div class="p-2"><i class="fas fa-envelope fa-3x"></i></div>
                                <div class="comment-text w-100 p-2">
                                    <h6 class="font-14">Email</h6>
                                    <span class="mb-3 d-block text-justify font-18"><?php echo $user['email']; ?></span>
                                </div>
                                <div class="position-absolute top-0 end-0 p-2 icon" data-bs-toggle="modal" data-bs-target="#editEmail<?php echo $id; ?>">
                                    <i class="fas fa-pencil-alt fa-lg"></i>
                                </div>
                            </div>

                            <div class="d-flex flex-row comment-row mt-0 my-0 border border-right-0 border-left-0 border-top-0 position-relative">
                                <div class="p-2"><i class="fas fa-phone fa-3x"></i></div>
                                <div class="comment-text w-100 p-2">
                                    <h6 class="font-14">No. Hp</h6>
                                    <span class="mb-3 d-block text-justify font-18"><?php echo $user['hp']; ?></span>
                                </div>
                                <div class="position-absolute top-0 end-0 p-2 icon" data-bs-toggle="modal" data-bs-target="#editHp<?php echo $id; ?>">
                                    <i class="fas fa-pencil-alt fa-lg"></i>
                                </div>
                            </div>

                            <div class="d-flex flex-row comment-row mt-0 my-0 border border-right-0 border-left-0 position-relative">
                                <div class="p-2"><i class="fas fa-map-marker-alt fa-3x"></i></div>
                                <div class="comment-text w-100 p-2">
                                    <h6 class="font-14">Alamat Bandara</h6>
                                    <span class="mb-3 d-block text-justify font-18"><?php echo $user['alamat']; ?></span>
                                </div>
                                <div class="position-absolute top-0 end-0 p-2 icon" data-bs-toggle="modal" data-bs-target="#editAlamat<?php echo $id; ?>">
                                    <i class="fas fa-pencil-alt fa-lg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Elemen modal untuk hasil potong -->
            <div id="cropperModal" class="modal" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Gambar</h5>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class="modal-body center-block">
                            <img id="cropperImage" src="#" alt="Preview" style="width: 100%;">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="cropButton">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal untuk mengedit nama -->
            <div id="editNama<?php echo $id; ?>" class="modal" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Nama Pengguna</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php
                            echo "<div class='form-group'>";
                            echo "<label for='nama_lengkap$id'>Nama Pengguna</label>";
                            echo "<input type='text' class='form-control' id='nama_lengkap$id' name='nama_lengkap' value='" . $user["nama_lengkap"] . "'>";
                            echo "</div>";
                            ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary" id="simpanEditNama<?php echo $id; ?>">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal untuk mengedit password -->
            <div id="editPassword<?php echo $id; ?>" class="modal" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Password</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="error-message" class="alert alert-danger" style="display: none;"></div>
                            <?php
                            echo "<div class='form-group'>";
                            echo "<label for='password$id'>Password</label>";
                            echo "<input type='text' class='form-control pass' id='password$id' name='password' onblur='validatePassword(this.value)' value='" . $user["password"] . "' required>";
                            echo "</div>";
                            ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary simpanEditPassword" id="simpanEditPassword<?php echo $id; ?>">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal untuk mengedit tanggal lahir -->
            <div id="editTanggalModal<?php echo $id; ?>" class="modal" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Tanggal Lahir</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php
                            echo "<div class='form-group'>";
                            echo "<label for='tanggal_lahir$id'>Tanggal lahir</label>";
                            echo "<input type='date' class='form-control' id='tanggal_lahir$id' name='tanggal_lahir' value='" . $user["tanggal_lahir"] . "'>";
                            echo "</div>";
                            ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary" id="simpanEditTanggal<?php echo $id; ?>">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal untuk mengedit email -->
            <div id="editEmail<?php echo $id; ?>" class="modal" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Email</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="error-message2" class="alert alert-danger" style="display: none;"></div>
                            <div id="email-error" class="alert alert-danger" style="display: none;"></div>
                            <?php
                            echo "<div class='form-group'>";
                            echo "<label for='email$id'>Nama Email</label>";
                            echo "<input type='email' class='form-control' id='email$id' name='email' required onblur='validateEmail(this.value); checkEmailAvailability(this.value);' value='" . $user["email"] . "'>";
                            echo "</div>";
                            ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary simpanEditEmail" id="simpanEditEmail<?php echo $id; ?>">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal untuk mengedit hp -->
            <div id="editHp<?php echo $id; ?>" class="modal" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit No. Hp</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php
                            echo "<div class='form-group'>";
                            echo "<label for='hp$id'>No. Hp</label>";
                            echo "<input type='number' class='form-control' id='hp$id' name='hp' value='" . $user["hp"] . "'>";
                            echo "</div>";
                            ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary" id="simpanEditHp<?php echo $id; ?>">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal untuk mengedit hp -->
            <div id="editAlamat<?php echo $id; ?>" class="modal" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Alamat Bandara</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php
                            echo "<div class='form-group'>";
                            echo "<label for='alamat$id'>Alamat Bandara</label>";
                            echo "<input type='text' class='form-control' id='alamat$id' name='alamat' value='" . $user["alamat"] . "'>";
                            echo "</div>";
                            ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary" id="simpanEditAlamat<?php echo $id; ?>">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function showError2(emailInputId, message) {
                    var errorMessage = document.getElementById("error-message2");
                    document.querySelector(".simpanEditEmail").disabled = true;
                    errorMessage.innerHTML = message;
                    errorMessage.style.display = "block";
                    document.getElementById(emailInputId).focus();
                }

                function validateEmail(email) {
                    var emailInputId = "email<?php echo $id; ?>";

                    if (email === "" || !/^\S+@\S+\.\S+$/.test(email)) {
                        showError2(emailInputId, 'Format email tidak valid atau email tidak diisi');
                    } else {
                        document.getElementById("error-message2").style.display = "none";
                        document.querySelector(".simpanEditEmail").disabled = false;
                    }
                }

                function showError(passwordInputId, message) {
                    var errorMessage = document.getElementById("error-message");
                    document.querySelector(".simpanEditPassword").disabled = true;
                    errorMessage.innerHTML = message;
                    errorMessage.style.display = "block";
                    document.getElementsByClassName("passwordInputId").focus();
                }

                function validatePassword(password) {
                    if (password.length < 8) {
                        showError("pass", 'Password harus lebih dari 7 karakter');
                    } else if (!/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)/.test(password)) {
                        showError("pass", 'Password hanya boleh mengandung setidaknya satu huruf kecil, satu huruf besar, dan satu angka');
                    } else {
                        document.getElementById("error-message").style.display = "none";
                        document.querySelector(".simpanEditPassword").disabled = false;
                    }
                }

                $(document).ready(function() {
                    $("button[id^='simpanEditTanggal']").click(function() {
                        var id = $(this).attr("id").replace("simpanEditTanggal", "");
                        var tanggal_lahir = $("#tanggal_lahir" + id).val();

                        $.ajax({
                            url: "update_tanggal_lahir.php",
                            type: "POST",
                            data: {
                                id: id,
                                tanggal_lahir: tanggal_lahir,
                                // Tambahkan data lainnya sesuai kebutuhan
                            },
                            dataType: 'json', // Menggunakan JSON sebagai tipe data respons
                            success: function(response) {
                                if (response.status === "success") {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Sukses!',
                                        text: response.message,
                                        confirmButtonText: 'OK'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            $("#editTanggalModal" + id).modal("hide");
                                            location.reload();
                                        }
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Gagal!',
                                        text: response.message,
                                        confirmButtonText: 'OK'
                                    });
                                }
                            },
                            error: function() {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal!',
                                    text: 'Terjadi kesalahan saat mengirim data ke server.',
                                    confirmButtonText: 'OK'
                                });
                            }
                        });
                    });
                });

                $(document).ready(function() {
                    $("button[id^='simpanEditNama']").click(function() {
                        var id = $(this).attr("id").replace("simpanEditNama", "");
                        var nama_lengkap = $("#nama_lengkap" + id).val();

                        $.ajax({
                            url: "update_nama_lengkap.php",
                            type: "POST",
                            data: {
                                id: id,
                                nama_lengkap: nama_lengkap,
                                // Tambahkan data lainnya sesuai kebutuhan
                            },
                            dataType: 'json', // Menggunakan JSON sebagai tipe data respons
                            success: function(response) {
                                if (response.status === "success") {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Sukses!',
                                        text: response.message,
                                        confirmButtonText: 'OK'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            $("#editNama" + id).modal("hide");
                                            location.reload();
                                        }
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Gagal!',
                                        text: response.message,
                                        confirmButtonText: 'OK'
                                    });
                                }
                            },
                            error: function() {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal!',
                                    text: 'Terjadi kesalahan saat mengirim data ke server.',
                                    confirmButtonText: 'OK'
                                });
                            }
                        });
                    });
                });

                $(document).ready(function() {
                    $("button[id^='simpanEditEmail']").click(function() {
                        var id = $(this).attr("id").replace("simpanEditEmail", "");
                        var email = $("#email" + id).val();

                        $.ajax({
                            url: "update_email.php",
                            type: "POST",
                            data: {
                                id: id,
                                email: email,
                                // Tambahkan data lainnya sesuai kebutuhan
                            },
                            dataType: 'json', // Menggunakan JSON sebagai tipe data respons
                            success: function(response) {
                                if (response.status === "success") {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Sukses!',
                                        text: response.message,
                                        confirmButtonText: 'OK'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            $("#editEmail" + id).modal("hide");
                                            location.reload();
                                        }
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Gagal!',
                                        text: response.message,
                                        confirmButtonText: 'OK'
                                    });
                                }
                            },
                            error: function() {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal!',
                                    text: 'Terjadi kesalahan saat mengirim data ke server.',
                                    confirmButtonText: 'OK'
                                });
                            }
                        });
                    });
                });

                $(document).ready(function() {
                    $("button[id^='simpanEditHp']").click(function() {
                        var id = $(this).attr("id").replace("simpanEditHp", "");
                        var hp = $("#hp" + id).val();

                        $.ajax({
                            url: "update_hp.php",
                            type: "POST",
                            data: {
                                id: id,
                                hp: hp,
                                // Tambahkan data lainnya sesuai kebutuhan
                            },
                            dataType: 'json', // Menggunakan JSON sebagai tipe data respons
                            success: function(response) {
                                if (response.status === "success") {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Sukses!',
                                        text: response.message,
                                        confirmButtonText: 'OK'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            $("#editHp" + id).modal("hide");
                                            location.reload();
                                        }
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Gagal!',
                                        text: response.message,
                                        confirmButtonText: 'OK'
                                    });
                                }
                            },
                            error: function() {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal!',
                                    text: 'Terjadi kesalahan saat mengirim data ke server.',
                                    confirmButtonText: 'OK'
                                });
                            }
                        });
                    });
                });

                $(document).ready(function() {
                    $("button[id^='simpanEditAlamat']").click(function() {
                        var id = $(this).attr("id").replace("simpanEditAlamat", "");
                        var alamat = $("#alamat" + id).val();

                        $.ajax({
                            url: "update_alamat.php",
                            type: "POST",
                            data: {
                                id: id,
                                alamat: alamat,
                                // Tambahkan data lainnya sesuai kebutuhan
                            },
                            dataType: 'json', // Menggunakan JSON sebagai tipe data respons
                            success: function(response) {
                                if (response.status === "success") {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Sukses!',
                                        text: response.message,
                                        confirmButtonText: 'OK'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            $("#editAlamat" + id).modal("hide");
                                            location.reload();
                                        }
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Gagal!',
                                        text: response.message,
                                        confirmButtonText: 'OK'
                                    });
                                }
                            },
                            error: function() {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal!',
                                    text: 'Terjadi kesalahan saat mengirim data ke server.',
                                    confirmButtonText: 'OK'
                                });
                            }
                        });
                    });
                });

                $(document).ready(function() {
                    $("button[id^='simpanEditPassword']").click(function() {
                        var id = $(this).attr("id").replace("simpanEditPassword", "");
                        var password = $("#password" + id).val();

                        $.ajax({
                            url: "update_password.php",
                            type: "POST",
                            data: {
                                id: id,
                                password: password,
                                // Tambahkan data lainnya sesuai kebutuhan
                            },
                            dataType: 'json', // Menggunakan JSON sebagai tipe data respons
                            success: function(response) {
                                if (response.status === "success") {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Sukses!',
                                        text: response.message,
                                        confirmButtonText: 'OK'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            $("#simpanEditPassword" + id).modal("hide");
                                            location.reload();
                                        }
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Gagal!',
                                        text: response.message,
                                        confirmButtonText: 'OK'
                                    });
                                }
                            },
                            error: function() {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal!',
                                    text: 'Terjadi kesalahan saat mengirim data ke server.',
                                    confirmButtonText: 'OK'
                                });
                            }
                        });
                    });
                });

                let cropper; // Declare cropper variable outside the function

                function openCropper() {
                    // Membuka pop-up edit gambar
                    $('#fileInput').click();
                }

                $('#fileInput').on('change', function() {
                    const input = this;
                    const file = input.files[0];

                    if (file) {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            // Menampilkan gambar yang dipilih di dalam modal
                            $('#cropperModal').modal('show');
                            $('#cropperImage').attr('src', e.target.result);

                            // Destroy previous cropper instance if exists
                            if (cropper) {
                                cropper.destroy();
                            }

                            cropper = new Cropper(document.getElementById('cropperImage'), {
                                aspectRatio: 1,
                                viewMode: 1,
                                crop: function(event) {}
                            });

                            $('#cropButton').on('click', function() {
                                // Nonaktifkan tombol 'Simpan' setelah diklik
                                $(this).prop('disabled', true);

                                const croppedCanvas = cropper.getCroppedCanvas();
                                var loadingOverlay = document.getElementById("loadingOverlay");
                                loadingOverlay.style.display = "flex";

                                // Convert data URL to Blob
                                croppedCanvas.toBlob(function(blob) {
                                    // Create FormData
                                    const formData = new FormData();
                                    formData.append('file', blob, 'cropped_image.png');

                                    // Hapus file yang sudah ada sebelumnya
                                    $.ajax({
                                        url: 'delete_previous_image.php',
                                        type: 'POST',
                                        data: {
                                            id_user: <?php echo $id; ?>
                                        }, // Kirim id_user ke server
                                        success: function(response) {
                                            // Handle server response (if needed)
                                            console.log(response);

                                            // Upload file yang baru
                                            $.ajax({
                                                url: 'upload_gambar.php',
                                                type: 'POST',
                                                data: formData,
                                                processData: false,
                                                contentType: false,
                                                success: function(uploadResponse) {
                                                    // Handle server response (if needed)
                                                    console.log(uploadResponse);
                                                    loadingOverlay.style.display = "none";
                                                    // Show success alert using SweetAlert2
                                                    Swal.fire({
                                                        icon: 'success',
                                                        title: 'Upload successful!',
                                                        showConfirmButton: true
                                                    }).then((result) => {
                                                        // Refresh the page after the user clicks "OK"
                                                        if (result.isConfirmed || result.dismiss === Swal.DismissReason.backdrop) {
                                                            location.reload();
                                                        }
                                                    });
                                                },
                                                error: function(uploadError) {
                                                    // Handle errors (if needed)
                                                    console.error(uploadError);
                                                }
                                            });
                                        },
                                        error: function(deleteError) {
                                            // Handle errors (if needed)
                                            console.error(deleteError);
                                        }
                                    });

                                    // Close the modal after saving
                                    $('#cropperModal').modal('hide');
                                }, 'image/png');
                            });
                        };

                        reader.readAsDataURL(file);
                    }
                });

                // Clear Cropper instance when modal is closed
                $('#cropperModal').on('hidden.bs.modal', function() {
                    if (cropper) {
                        cropper.destroy();
                    }

                    // Aktifkan kembali tombol 'Simpan'
                    $('#cropButton').prop('disabled', false);
                });
            </script>
        <?php
        } else {
            // Handle kesalahan jika query tidak berhasil dieksekusi
            echo "Error: " . mysqli_error($koneksi);
        }

        // Tutup koneksi ke database
        mysqli_close($koneksi);
        ?>


        <?php
        // Masukkan file koneksi database di sini
        include 'koneksi.php';

        // Query untuk mendapatkan data pengguna
        $query = "SELECT * FROM kontak";
        $result = mysqli_query($koneksi, $query);

        // Periksa apakah query berhasil dieksekusi
        if ($result) {
            // Ambil data pengguna dari hasil query
            $user = mysqli_fetch_assoc($result);
            $id_kontak = $user['id_kontak'];
            $alamat = $user['alamat'];
            $hp = $user['hp'];
            $email = $user['email'];
            $jadwal = $user['jadwal'];
        ?>
            <!-- Contact Start -->
            <section class="contact section-padding" style="margin-top: 100px; color: #ffffff;" data-scroll-index='6'>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="overflow: hidden;">
                            <div class="sectioner-header text-center" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                <h3>Contact Us</h3>
                                <span class="line"></span>
                                <p>Jika Anda memiliki pertanyaan atau memerlukan bantuan, silakan hubungi kami. Kami siap membantu Anda.</p>
                            </div>
                            <div class="section-content">
                                <div class="row justify-content-center"> <!-- Menggunakan justify-content-center agar berada di tengah -->
                                    <div class="col-lg-6"> <!-- Menyesuaikan lebar agar tetap 4 pada layar besar -->
                                        <div class="contact-info white kotak2">
                                            <div class="contact-item media" data-aos="fade-down" data-aos-delay="5000" data-aos-duration="2000">
                                                <i class="fa fa-map-marker-alt media-left media-right-margin"></i>
                                                <div class="media-body">
                                                    <p class="text-uppercase text-white">Address</p>
                                                    <p class="text-uppercase text-white"><?php echo $alamat; ?></p>
                                                </div>
                                            </div>
                                            <div class="contact-item media" data-aos="fade-down" data-aos-delay="5000" data-aos-duration="2000">
                                                <i class="fa fa-mobile media-left media-right-margin"></i>
                                                <div class="media-body">
                                                    <p class="text-uppercase text-white">Phone</p>
                                                    <!-- Tambahkan atribut "href" dengan "tel:" -->
                                                    <p class="text-uppercase text-white"><a class="text-white" href="tel:+<?php echo $hp; ?>"><?php echo $hp; ?></a> </p>
                                                </div>
                                            </div>
                                            <div class="contact-item media" data-aos="fade-down" data-aos-delay="5000" data-aos-duration="2000">
                                                <i class="fa fa-envelope media-left media-right-margin"></i>
                                                <div class="media-body">
                                                    <p class="text-uppercase text-white">E-mail</p>
                                                    <!-- Tambahkan atribut "href" dengan "mailto:" -->
                                                    <p class="text-uppercase text-white"><a class="text-down text-white" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a> </p>
                                                </div>
                                            </div>
                                            <div class="contact-item media" data-aos="fade-down" data-aos-delay="5000" data-aos-duration="2000">
                                                <i class="fa fa-clock media-left media-right-margin"></i>
                                                <div class="media-body">
                                                    <p class="text-uppercase text-white">Jadwal Aplikasi</p>
                                                    <p class="text-uppercase text-white"><?php echo $jadwal; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact End -->
        <?php
        } else {
            // Handle kesalahan jika query tidak berhasil dieksekusi
            echo "Error: " . mysqli_error($koneksi);
        }

        // Tutup koneksi ke database
        mysqli_close($koneksi);
        ?>
        <!-------Download End------->
        <section class="download section-padding" style="margin-top: 200px; color: #ffffff;">
            <div class="container">
                <div class="row" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                    <div class="col-md-12">
                        <div class="sectioner-header text-center white">
                            <h3>Keterangan Aplikasi Kami</h3>
                            <span class="line"></span>
                            <p class="white">Aplikasi ini didukung oleh Angkasa Pura dan Badan Usaha Milik Negara (BUMN), memberikan keandalan dan kualitas terbaik.</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="section-content text-center">
                            <ul>
                                <li><a href="#"><img src="images/bumn.png" class="wow fadeInUp" data-wow-delay="0.4s" /></a></li>
                                <li><a href="#"><img src="images/angkasapura.png" class="wow fadeInUp" data-wow-delay="0.7s" /></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-------Download End------->

        <footer class="footer-copy">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <p>2020 &copy; Electrical Super App. Website App by Jovandry Morgan</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- js options select -->

        <!--loding  -->
        <div class="loading-overlay" id="loadingOverlay">
            <img src="images/6.png" alt="" class="g1">
        </div>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- <script type="text/javascript" src="js2/registerUser.js"></script> -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- node js -->
        <script src="js2/navonscroll.js"></script>
        <script>
            hide_on_scroll({
                //ini id dari navbar kita di atas
                nav_id: 'untuk_scrol_navbar',
                //ini adalah onscroll moile 
                hide_onscroll_mobile: true,
                // dan ini adalah waktu kecepatan nabarnya naik dan turun
                nav_offset: 10,

            });
        </script>
        <script>
            AOS.init();
        </script>
        <!-- Tambahkan library Cropper.js -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" integrity="sha512-w5tjphJyXd7eEBc8rOCUQn+9x9KkSC5KAJNdRgi5JZ65+cVkXRmmY3ULg1m+40hxSLG6aQQgZkVn1lO7t/e7LA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js" integrity="sha512-5kh1mHr9DCh2Gnc2vbVK9I1JZGeQLz6CN6PLoEe7DkVAgUgr5lvBcI9gkU2vi9vSR6v5bf22gD1pTzQm5LMn0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- All Jquery -->
        <script src="assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="dist/js/jquery.ui.touch-punch-improved.js"></script>
        <script src="dist/js/jquery-ui.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="assets/extra-libs/sparkline/sparkline.js"></script>
        <!--Wave Effects -->
        <script src="dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="dist/js/custom.min.js"></script>
        <!-- this page js -->
        <script src="assets/libs/moment/min/moment.min.js"></script>
        <script src="assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
        <script src="dist/js/pages/calendar/cal-init.js"></script>

        <script type="text/javascript" src="js2/loding_ESA.js"></script>
        <script type="text/javascript" src="js2/navbar_app.js"></script>
    </body>

    </html>
<?php } ?>