<?php
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
} else {
?>

    <!DOCTYPE html>
    <html dir="ltr" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
        <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
        <meta name="robots" content="noindex,nofollow">
        <title>Halaman Manager</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/7.png">
        <!-- Custom CSS -->
        <link href="assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
        <link href="assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
        <link href="dist/css/style.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <style>
            .loading-overlay {
                display: none;
                align-items: center;
                justify-content: center;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(255, 255, 255, 0.801);
                z-index: 1000;
                overflow: hidden;
            }

            .g1 {
                max-width: 20%;
                margin: 17% auto;
                animation: pulse 4s infinite;
            }

            @keyframes pulse {
                0% {
                    transform: scale(0.6);
                    opacity: 0.7;
                }

                50% {
                    transform: scale(1);
                    opacity: 1;
                }

                100% {
                    transform: scale(0.6);
                    opacity: 0.7;
                }
            }

            .user-info {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 50vh;
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
                @keyframes pulse {
                    0% {
                        transform: scale(1.4);
                        opacity: 0.5;
                    }

                    50% {
                        transform: scale(2.8);
                        opacity: 1;
                    }

                    100% {
                        transform: scale(1.4);
                        opacity: 0.5;
                    }
                }

                .user-info {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    height: 30vh;
                    margin-top: 55px;
                }

                .satu {
                    height: 45vh;
                }
            }
        </style>
    </head>

    <body>
        <!--loding  -->
        <div class="loading-overlay" id="loadingOverlay">
            <img src="images/6.png" alt="" class="g1">
        </div>
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

            <header class="topbar" data-navbarbg="skin5">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header" data-logobg="skin5">


                        <a class="navbar-brand" href="index.html">
                            <!-- Logo icon -->
                            <b class="logo-icon ps-2">
                                <!-- Dark Logo icon -->
                                <img src="images/7.png" alt="homepage" width="30px" class="light-logo" />

                            </b>
                            <!--End Logo icon -->

                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="images/10.png" width="130px" alt="homepage" class="light-logo2 mt-1" />
                            </span>
                        </a>

                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    </div>

                    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-start me-auto">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                            <!-- ============================================================== -->
                            <!-- create new -->
                            <!-- ============================================================== -->


                        </ul>
                        <!-- ============================================================== -->
                        <!-- Right side toggle and nav items -->
                        <!-- ============================================================== -->
                        <?php
                        // Masukkan file koneksi database di sini
                        include 'koneksi.php';

                        // Ambil id_user dari $_SESSION
                        $id = $_SESSION['id_admin'];

                        // Query untuk mendapatkan data pengguna
                        $query = "SELECT * FROM admin WHERE id_admin = $id";
                        $result = mysqli_query($koneksi, $query);

                        // Periksa apakah query berhasil dieksekusi
                        if ($result) {
                            // Ambil data pengguna dari hasil query
                            $user = mysqli_fetch_assoc($result);
                            $foto_profile = $user['foto_profile'];
                        ?>
                            <ul class="navbar-nav float-end">
                                <!-- ============================================================== -->
                                <!-- User profile and search -->
                                <!-- ============================================================== -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <!-- <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"> -->
                                        <?php
                                        if ($foto_profile) {
                                            // Jika ada foto_profile, gunakan foto_profile
                                            echo '<img src="foto_profile/' . $foto_profile . '" alt="user" width="31" class="rounded-circle">';
                                        } else {
                                            // Jika tidak ada foto_profile, gunakan gambar default
                                            echo '<img src="assets/images/users/1.jpg" alt="user" width="31" class="rounded-circle">';
                                        }
                                        ?>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="manager_profil.php"><i class="ti-user me-1 ms-1"></i>
                                            My Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <div class="ps-4 p-10"><a href="logout.php" class="btn btn-sm btn-danger btn-rounded text-white">Logout</a></div>
                                    </ul>
                                </li>
                            </ul>
                        <?php
                        } else {
                            // Handle kesalahan jika query tidak berhasil dieksekusi
                            echo "Error: " . mysqli_error($koneksi);
                        }

                        // Tutup koneksi ke database
                        mysqli_close($koneksi);
                        ?>
                    </div>
                </nav>
            </header>

            <aside class="left-sidebar" data-sidebarbg="skin5">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav" class="pt-4">
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="manager_admin.php" aria-expanded="false">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span class="hide-menu">Home</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="manager_kegiatan.php" aria-expanded="false">
                                    <i class="mdi mdi-calendar-check"></i>
                                    <span class="hide-menu">Kegiatan Staf</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="manager_berita.php" aria-expanded="false">
                                    <i class="mdi mdi-newspaper"></i>
                                    <span class="hide-menu">Berita</span>
                                </a>
                            </li>


                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    <i><?php
                                        if ($foto_profile) {
                                            // Jika ada foto_profile, gunakan foto_profile
                                            echo '<img src="foto_profile/' . $foto_profile . '" alt="user" width="25" class="rounded-circle" style="margin-bottom: 3px;">';
                                        } else {
                                            // Jika tidak ada foto_profile, gunakan gambar default
                                            echo '<img src="assets/images/users/1.jpg" alt="user" width="25" class="rounded-circle" style="margin-bottom: 3px;">';
                                        }
                                        ?>
                                    </i> <span class="hide-menu">Profile</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="manager_profil.php" class="sidebar-link">
                                            <i class="ti-user me-1 ms-1"></i> <!-- Tambahkan kelas ikon untuk Account Staf -->
                                            <span class="hide-menu">My Profile</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="logout.php" class="sidebar-link">
                                            <i class="fa fa-power-off me-1 ms-1"> </i><!-- Tambahkan kelas ikon untuk Account Manager -->
                                            <span class="hide-menu">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>

            <div class="page-wrapper">

                <!-- Container fluid  -->
                <div class="container-fluid">
                    <!-- Start Page Content -->
                    <div class="row">

                        <?php
                        // Masukkan file koneksi database di sini
                        include 'koneksi.php';

                        // Ambil id_user dari $_SESSION
                        $id = $_SESSION['id_admin'];

                        // Query untuk mendapatkan data pengguna
                        $query = "SELECT * FROM admin WHERE id_admin = $id";
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
                            <div class="card">
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
                                        <h4 class="text-black"><?php echo $nama_manager_potong; ?></h4>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Bootstrap -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Gambar Profil</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding: 5px; height: 30px; width: 30px; border-radius: 50%; background-color: #f8d7da; color: #721c24;">
                                                <span aria-hidden="true" style="font-size: 1.5rem; position: relative; bottom: 10px;">&times;</span>
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
                                            <button type="button" class="btn-close" dismiss="modal" aria-label="Close"></button>
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
                                            url: "update_tanggal_lahir_manager.php",
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
                                            url: "update_nama_lengkap_manager.php",
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
                                            url: "update_email_manager.php",
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
                                            url: "update_hp_manager.php",
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
                                            url: "update_alamat_manager.php",
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
                                            url: "update_password_manager.php",
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
                                                crop: function(event) {
                                                    // Menampilkan hasil potong sebagai gambar pratinjau
                                                    // (Opsional, Anda dapat menghilangkan ini jika tidak diperlukan)
                                                    // $('#previewImage').attr('src', cropper.getCroppedCanvas().toDataURL());
                                                }
                                            });

                                            $('#cropButton').on('click', function() {
                                                // Nonaktifkan tombol 'Simpan' setelah diklik
                                                $(this).prop('disabled', true);

                                                const croppedCanvas = cropper.getCroppedCanvas();

                                                // Convert data URL to Blob
                                                croppedCanvas.toBlob(function(blob) {
                                                    // Create FormData
                                                    const formData = new FormData();
                                                    formData.append('file', blob, 'cropped_image.png');

                                                    // Hapus file yang sudah ada sebelumnya
                                                    $.ajax({
                                                        url: 'delete_previous_image_manager.php',
                                                        type: 'POST',
                                                        data: {
                                                            id_admin: <?php echo $id; ?>
                                                        }, // Kirim id_admin ke server
                                                        success: function(response) {
                                                            // Handle server response (if needed)
                                                            console.log(response);

                                                            // Upload file yang baru
                                                            $.ajax({
                                                                url: 'upload_gambar_manager.php',
                                                                type: 'POST',
                                                                data: formData,
                                                                processData: false,
                                                                contentType: false,
                                                                success: function(uploadResponse) {
                                                                    // Handle server response (if needed)
                                                                    console.log(uploadResponse);

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
                    </div>
                <?php
                        } else {
                            // Handle kesalahan jika query tidak berhasil dieksekusi
                            echo "Error: " . mysqli_error($koneksi);
                        }

                        // Tutup koneksi ke database
                        mysqli_close($koneksi);
                ?>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const loadingOverlay = document.getElementById("loadingOverlay");

                        // Fungsi untuk menampilkan overlay loading
                        function showLoadingOverlay() {
                            loadingOverlay.style.display = "flex";
                        }

                        // Fungsi untuk menyembunyikan overlay loading
                        function hideLoadingOverlay() {
                            loadingOverlay.style.display = "none";
                        }

                        // Fungsi untuk mengeksekusi aksi yang memerlukan loading
                        function performLoadingAction() {
                            showLoadingOverlay();
                            setTimeout(() => {
                                hideLoadingOverlay();
                            }, 12000); // Ganti angka 3000 dengan waktu loading yang sesuai
                        }

                        // Tambahkan event listener untuk tombol atau kejadian lainnya yang memerlukan loading
                        const myButton = document.getElementById("myButton"); // Ganti dengan ID tombol Anda
                        if (myButton) {
                            myButton.addEventListener("click", performLoadingAction);
                        }

                        // Event listener untuk saat halaman dimuat ulang
                        window.addEventListener("beforeunload", () => {
                            showLoadingOverlay();
                        });
                    });
                </script>
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

                <!-- Tambahkan library Cropper.js -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" integrity="sha512-w5tjphJyXd7eEBc8rOCUQn+9x9KkSC5KAJNdRgi5JZ65+cVkXRmmY3ULg1m+40hxSLG6aQQgZkVn1lO7t/e7LA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js" integrity="sha512-5kh1mHr9DCh2Gnc2vbVK9I1JZGeQLz6CN6PLoEe7DkVAgUgr5lvBcI9gkU2vi9vSR6v5bf22gD1pTzQm5LMn0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


                <!-- All Jquery -->
                <script src="assets/libs/jquery/dist/jquery.min.js"></script>
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
                <script src="assets/libs/chart/matrix.interface.js"></script>
                <script src="assets/libs/chart/excanvas.min.js"></script>
                <script src="assets/libs/flot/jquery.flot.js"></script>
                <script src="assets/libs/flot/jquery.flot.pie.js"></script>
                <script src="assets/libs/flot/jquery.flot.time.js"></script>
                <script src="assets/libs/flot/jquery.flot.stack.js"></script>
                <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
                <script src="assets/libs/chart/jquery.peity.min.js"></script>
                <script src="assets/libs/chart/matrix.charts.js"></script>
                <script src="assets/libs/chart/jquery.flot.pie.min.js"></script>
                <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
                <script src="assets/libs/chart/turning-series.js"></script>
                <script src="dist/js/pages/chart/chart-page-init.js"></script>

    </body>

    </html>
<?php } ?>