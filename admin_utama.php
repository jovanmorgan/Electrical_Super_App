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

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="home_admin.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <!-- Font Google -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

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


        <title>Halaman Home</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/7.png">
        <!-- Custom CSS -->
        <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
        <link href="dist/css/style.min.css" rel="stylesheet">
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
                margin-bottom: 10px;
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

            .cropper-container {
                max-width: 100%;
                height: auto;
            }

            #cropperImage {
                max-width: 100%;
                height: auto;
            }

            .left-sidebar {
                position: fixed;
                z-index: 10;
            }

            .user-info {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 2vh;
                margin-top: 40px;
                z-index: 50;
            }


            .camera-icon1 {
                margin-top: 30px;
                background-color: #ffb835;
                color: #ffffff;
                border-radius: 50%;
                padding: 13px;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.39);
                transition: .5s all;
                transform: scale(1.2);
                /* Optional: Add a subtle shadow for depth */
            }

            .camera-icon1:hover {
                transform: scale(1.4);
                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.589);
            }

            .kotak1 {
                /* Properti lainnya untuk kotak1 */
                border: 2px solid transparent;
                /* Atur border default */
                filter: grayscale(0) sepia(0);
                transition: 0.5s;
                /* Efek transisi untuk border */
            }

            .kotak2 {
                /* Properti lainnya untuk kotak1 */
                border: 2px solid transparent;
                /* Atur border default */
                filter: grayscale(0) sepia(0);
                transition: 0.5s;
                /* Efek transisi untuk border */
            }

            .kata1 {
                /* Properti lainnya untuk kotak1 */
                border: 2px solid transparent;
                /* Atur border default */
                filter: grayscale(0) sepia(0);
                transition: 0.5s;
                /* Efek transisi untuk border */
            }

            .kata2 {
                /* Properti lainnya untuk kotak1 */
                border: 2px solid transparent;
                /* Atur border default */
                filter: grayscale(0) sepia(0);
                transition: 0.5s;
                /* Efek transisi untuk border */
            }

            .kata3 {
                /* Properti lainnya untuk kotak1 */
                border: 2px solid transparent;
                /* Atur border default */
                filter: grayscale(0) sepia(0);
                transition: 0.5s;
                /* Efek transisi untuk border */
            }

            .ktk {
                border: 2px solid #f7bd1e;
                background-color: #1fa1ec52;
                filter: grayscale(15%) sepia(30%);
                /* Tentukan border saat .camera-icon1 dihover */
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

                .section-header {
                    margin-top: 50px
                }

                .user-info {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    height: 30vh;
                    position: relative;
                    bottom: 70px;
                }

                .welcome-hero {
                    height: 600px;
                }

                .satu {
                    height: 45vh;
                }
            }

            @media screen and (max-width: 406px) {
                .welcome-hero {
                    height: 500px;
                }

                .welcome-hero-txt h2 {
                    font-size: 22px;
                }

                .welcome-hero-txt p {
                    font-size: 14px;
                }
            }
        </style>
    </head>

    <body>

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
                        <?php
                        // Masukkan file koneksi database di sini
                        include 'koneksi.php';

                        // Ambil id_user dari $_SESSION
                        $id = $_SESSION['id_admin_utama'];

                        // Query untuk mendapatkan data pengguna
                        $query = "SELECT * FROM admin_utama WHERE id_admin_utama = $id";
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
                                        <a class="dropdown-item" href="admin_profil.php"><i class="ti-user me-1 ms-1"></i>
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
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin_utama.php" aria-expanded="false">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span class="hide-menu">Home</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin_berita.php" aria-expanded="false">
                                    <i class="mdi mdi-newspaper"></i>
                                    <span class="hide-menu">Tambah Berita</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin_kegiatan.php" aria-expanded="false">
                                    <i class="mdi mdi-calendar-check"></i>
                                    <span class="hide-menu">Kegiatan Staf</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    <i class="mdi mdi-account-key"></i>
                                    <span class="hide-menu">Verification Account</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="admin_akun_staf.php" class="sidebar-link">
                                            <i class="mdi mdi-account me-1 ms-1"></i> <!-- Tambahkan kelas ikon untuk Account Staf -->
                                            <span class="hide-menu">Account Staf</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="admin_akun_manajer.php" class="sidebar-link">
                                            <i class="mdi mdi-account-circle me-1 ms-1"></i> <!-- Tambahkan kelas ikon untuk Account Manager -->
                                            <span class="hide-menu">Account Manager</span>
                                        </a>
                                    </li>
                                </ul>
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
                                    </i>
                                    <span class="hide-menu">Profile</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="admin_profil.php" class="sidebar-link">
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
            <?php
            // Masukkan file koneksi database di sini
            include 'koneksi.php';
            // Query untuk mendapatkan data pengguna
            $query = "SELECT * FROM home";
            $result = mysqli_query($koneksi, $query);

            // Periksa apakah query berhasil dieksekusi
            if ($result) {
                // Ambil data pengguna dari hasil query
                $user = mysqli_fetch_assoc($result);
                $id_home = $user['id_home'];
                $konten1_judul = $user['konten1_judul'];
                $konten1_judul2 = $user['konten1_judul2'];
                $konten1_text = $user['konten1_text'];
                $konten2_judul = $user['konten2_judul'];
                $konten2_text = $user['konten2_text'];
                $konten2_judul1 = $user['konten2_judul1'];
                $konten2_text1 = $user['konten2_text1'];
                $konten2_judul2 = $user['konten2_judul2'];
                $konten2_text2 = $user['konten2_text2'];
                $konten2_judul3 = $user['konten2_judul3'];
                $konten2_text3 = $user['konten2_text3'];
                $link_vidio = $user['link_vidio'];
                $konten3_judul = $user['konten3_judul'];
                $konten3_text = $user['konten3_text'];
            ?>

                <div class="page-wrapper">
                    <!-- Container fluid  -->
                    <div class="container-fluid">
                        <!-- Start Page Content -->
                        <div class="row">

                            <!-------Banner Start------->
                            <section class="banner" data-scroll-index='0'>
                                <div class="banner-overlay">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-12">
                                                <div class="kotak1">
                                                    <div class="banner-text">
                                                        <h2 class="white" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000"><?php echo $konten1_judul; ?></h2>
                                                        <h6 class="white" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000"><?php echo $konten1_judul2; ?></h6>
                                                        <p class="banner-text white" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000"><?php echo $konten1_text; ?></p>
                                                        <ul data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                            <li><a href="#"><img src="images/bumn.png" class="wow fadeInUp" /></a></li>
                                                            <li><a href="#"><img src="images/angkasapura.png" class="wow fadeInUp" /></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000"> <img src="images/esa1.png" class="img-fluid wow fadeInUp" /> </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="user-info">
                                <span class="camera-icon1 pembatas1" data-bs-toggle="modal" data-bs-target="#editKonten1">
                                    <i class="fas fa-pencil-alt fa-lg"></i>
                                </span>
                            </div>

                            <div id="editKonten1" class="modal" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Konten Ke 1</h5>
                                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                        </div>
                                        <form enctype="multipart/form-data">
                                            <div class="modal-body center-block">
                                                <input value="<?php echo $id_home; ?>" type="hidden" id="id_home" class="form-control" name="id_home" placeholder="Judul Berita" required>
                                                <div class="form-row mt-2">
                                                    <label for="konten1_judul">Judul :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-heading"></i></span>
                                                        </div>
                                                        <input value="<?php echo $konten1_judul; ?>" type="text" id="konten1_judul" class="form-control" name="konten1_judul" placeholder="Sambutan" required>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-2">
                                                    <label for="konten1_judul2">Keterangan :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-heading"></i></span>
                                                        </div>
                                                        <input value="<?php echo $konten1_judul2; ?>" type="text" id="konten1_judul2" class="form-control" name="konten1_judul2" placeholder="Keterangan" required>
                                                    </div>
                                                </div>
                                                <div class="konten1_judul2"></div>
                                                <div class="form-row mt-2">
                                                    <label for="teks">Teks :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-file-alt"></i></span>
                                                        </div>
                                                        <textarea class="form-control" id="konten1_text" name="konten1_text" placeholder="Text.." aria-label="With textarea" rows="2" required><?php echo $konten1_text; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" id="btnSimpan" onclick="konten1()">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-------Banner End------->

                            <!-------About End------->
                            <section class="about section-padding prelative" style="z-index: 5;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 kata1">
                                            <div class="p1 sectioner-header text-center" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                <h3><?php echo $konten2_judul; ?></h3>
                                                <span class="line"></span>
                                                <p><?php echo $konten2_text; ?></p>
                                            </div>
                                            <div class="section-content text-center">
                                                <div class="row">
                                                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                        <div class="p1 icon-box wow fadeInUp"> <i class="fa fa-life-ring" aria-hidden="true"></i>
                                                            <h5><?php echo $konten2_judul1; ?></h5>
                                                            <p><?php echo $konten2_text1; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                        <div class="p1 icon-box wow fadeInUp"> <i class="fa fa-mobile" aria-hidden="true"></i>
                                                            <h5><?php echo $konten2_judul2; ?></h5>
                                                            <p><?php echo $konten2_text2; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                        <div class="p1 icon-box wow fadeInUp"> <i class="fa fa-bolt" aria-hidden="true"></i>
                                                            <h5><?php echo $konten2_judul3; ?></h5>
                                                            <p><?php echo $konten2_text3; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="user-info">
                                                <span class="camera-icon1 pembatas2" data-bs-toggle="modal" data-bs-target="#editKonten2">
                                                    <i class="fas fa-pencil-alt fa-lg"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div id="editKonten2" class="modal" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Konten Ke 2</h5>
                                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                        </div>
                                        <form enctype="multipart/form-data">
                                            <div class="modal-body center-block">
                                                <input value="<?php echo $id_home; ?>" type="hidden" id="id_home" class="form-control" name="id_home" placeholder="Judul Berita" required>
                                                <div class="form-row mt-2">
                                                    <label for="konten2_judul">Judul :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-heading"></i></span>
                                                        </div>
                                                        <input value="<?php echo $konten2_judul; ?>" type="text" id="konten2_judul" class="form-control" name="konten2_judul" placeholder="Sambutan" required>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-2">
                                                    <label for="teks">teks :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-file-alt"></i></span>
                                                        </div>
                                                        <textarea class="form-control" id="konten2_text" name="konten2_text" placeholder="Text.." aria-label="With textarea" rows="2" required><?php echo $konten2_text; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-2">
                                                    <label for="konten2_judul1">Judul Icon 1 :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-heading"></i></span>
                                                        </div>
                                                        <input value="<?php echo $konten2_judul1; ?>" type="text" id="konten2_judul1" class="form-control" name="konten2_judul1" placeholder="Sambutan" required>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-2">
                                                    <label for="konten2_text1">teks Icon 1 :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-file-alt"></i></span>
                                                        </div>
                                                        <textarea class="form-control" id="konten2_text1" name="konten2_text1" placeholder="Text.." aria-label="With textarea" rows="2" required><?php echo $konten2_text1; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-2">
                                                    <label for="konten2_judul2">Judul Icon 2 :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-heading"></i></span>
                                                        </div>
                                                        <input value="<?php echo $konten2_judul2; ?>" type="text" id="konten2_judul2" class="form-control" name="konten2_judul2" placeholder="Sambutan" required>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-2">
                                                    <label for="konten2_text2">teks Icon 2 :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-file-alt"></i></span>
                                                        </div>
                                                        <textarea class="form-control" id="konten2_text2" name="konten2_text2" placeholder="Text.." aria-label="With textarea" rows="2" required><?php echo $konten2_text2; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-2">
                                                    <label for="konten2_judul3">Judul Icon 3 :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-heading"></i></span>
                                                        </div>
                                                        <input value="<?php echo $konten2_judul3; ?>" type="text" id="konten2_judul3" class="form-control" name="konten2_judul3" placeholder="Sambutan" required>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-2">
                                                    <label for="konten2_text3">teks Icon 3 :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-file-alt"></i></span>
                                                        </div>
                                                        <textarea class="form-control" id="konten2_text3" name="konten2_text3" placeholder="Text.." aria-label="With textarea" rows="2" required><?php echo $konten2_text3; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="btnSimpan" onclick="konten2()">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-------About End------->
                            <style>
                                @media all and (max-width:337px) {
                                    .banner-text ul li a img {
                                        width: 120px;
                                        border-radius: 7px;
                                    }

                                    .video-section h3 {
                                        font-weight: 600;
                                        font-size: 30px;
                                    }
                                }
                            </style>

                            <!-------Video Start------->
                            <section class="video-section prelative text-center white">
                                <div class="section-padding video-overlay">
                                    <div class="container">
                                        <div class="kata2">
                                            <h3>Tonton Tutorial</h3>
                                            <i class="fa fa-play" id="video-icon" aria-hidden="true"></i>
                                        </div>
                                        <div class="video-popup">
                                            <div class="video-src">
                                                <div class="iframe-src">
                                                    <!-- Ganti URL 'https://www.youtube.com/embed/' dengan URL yang sesuai -->
                                                    <iframe id="iframeSrc" src="https://www.youtube.com/embed/<?php echo $link_vidio; ?>?rel=0&amp;showinfo=0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <div class="user-info">
                                <span class="camera-icon1 pembatas3" data-bs-toggle="modal" data-bs-target="#editKonten3">
                                    <i class="fas fa-pencil-alt fa-lg"></i>
                                </span>
                            </div>
                            <div id="editKonten3" class="modal" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Konten Ke 3</h5>
                                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                        </div>
                                        <form enctype="multipart/form-data">
                                            <div class="modal-body center-block">
                                                <input value="<?php echo $id_home; ?>" type="hidden" id="id_home" class="form-control" name="id_home" placeholder="Judul Berita" required>
                                                <div class="form-row mt-2">
                                                    <label for="link_vidio">Link Yutube :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-link"></i></span>
                                                        </div>
                                                        <input value="<?php echo $link_vidio; ?>" type="text" id="link_vidio" class="form-control" name="link_vidio" placeholder="Link Youtube" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="btnSimpan" onclick="konten3()">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-------Video End------->

                            <!-------Features Start------->
                            <section class="feature section-padding" data-scroll-index='2'>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="p1 sectioner-header text-center" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                <h3><?php echo $konten3_judul; ?></h3>
                                                <span class="line"></span>
                                                <p><?php echo $konten3_text; ?></p>
                                            </div>
                                            <div class="section-content text-center">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="media single-feature wow fadeInUp" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                            <div class="media-body text-right media-right-margin">
                                                                <h5>Proses Cepat</h5>
                                                                <p>Nikmati kecepatan tak tertandingi dalam pengolahan data. Kami memastikan setiap tindakan diambil dengan kilat.</p>
                                                            </div>
                                                            <div class="media-right icon-border"> <span class="fa fa-bolt" aria-hidden="true"></span> </div>
                                                        </div>
                                                        <div class="media single-feature wow fadeInUp" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                            <div class="media-body text-right media-right-margin">
                                                                <h5>Hemat Daya</h5>
                                                                <p>Dengan konsumsi daya yang rendah, aplikasi kami dirancang untuk membuat pengalaman pengguna efisien dan ramah lingkungan.</p>
                                                            </div>
                                                            <div class="media-right icon-border"> <span class="fa fa-battery-full" aria-hidden="true"></span> </div>
                                                        </div>
                                                        <div class="media single-feature wow fadeInUp" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                            <div class="media-body text-right media-right-margin">
                                                                <h5>Kompatibilitas Wifi</h5>
                                                                <p>Terhubung dengan mudah. Aplikasi kami sepenuhnya kompatibel dengan jaringan WiFi, memberikan konektivitas yang lancar.</p>
                                                            </div>
                                                            <div class="media-right icon-border"> <span class="fa fa-wifi" aria-hidden="true"></span> </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <!-- Gambar Esa (untuk layar besar) -->
                                                        <div class="feature-desktop">
                                                            <img src="images/esa1.png" class="img-fluid wow fadeInUp" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <!-- Fitur 4 -->
                                                        <div class="media single-feature wow fadeInUp" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                            <div class="media-left icon-border media-right-margin"> <span class="fa fa-check-double" aria-hidden="true"></span> </div>
                                                            <div class="media-body text-left">
                                                                <h5>Pembaruan Rutin</h5>
                                                                <p>Kami selalu berinovasi. Dapatkan fitur terbaru dan pembaruan secara rutin untuk memastikan aplikasi selalu menjadi yang terbaik.</p>
                                                            </div>
                                                        </div>
                                                        <!-- Fitur 5 -->
                                                        <div class="media single-feature wow fadeInUp" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                            <div class="media-left icon-border media-right-margin"> <span class="fa fa-dollar-sign" aria-hidden="true"></span> </div>
                                                            <div class="media-body text-left">
                                                                <h5>Hemat Kota dan Penyimpanan</h5>
                                                                <p>Manfaatkan efisiensi kami untuk menghemat lebih banyak paket data dan ruang penyimpanan di perangkat Anda. Tanpa perlu mendownload aplikasi, nikmati kemudahan langsung melalui browser. Aplikasi kami dirancang untuk memberikan nilai maksimal dengan biaya minimal.</p>
                                                            </div>
                                                        </div>
                                                        <!-- Fitur 6 -->
                                                        <div class="media single-feature wow fadeInUp" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                            <div class="media-left icon-border media-right-margin"> <span class="fa fa-hdd" aria-hidden="true"></span> </div>
                                                            <div class="media-body text-left">
                                                                <h5>Pengiriman Data Tanpa Batas</h5>
                                                                <p>Bebaskan dalam penyimpanan data kegiatan. Dapatkan ruang penyimpanan tak terbatas untuk menyimpan data kegiatan Anda dengan aman.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12">
                                                        <!-- Gambar Esa (untuk layar kecil) -->
                                                        <div class="feature-mobile"> <img src="images/esa1.png" class="img-fluid wow fadeInUp" /> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-------Features End------->
                            <div id="editKonten4" class="modal" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Konten Ke 4</h5>
                                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                        </div>
                                        <form enctype="multipart/form-data">
                                            <div class="modal-body center-block">
                                                <input value="<?php echo $id_home; ?>" type="hidden" id="id_home" class="form-control" name="id_home" placeholder="Judul Berita" required>
                                                <div class="form-row mt-2">
                                                    <label for="konten3_judul">Judul :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-heading"></i></span>
                                                        </div>
                                                        <input value="<?php echo $konten3_judul; ?>" type="text" id="konten3_judul" class="form-control" name="konten3_judul" placeholder="Sambutan" required>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-2">
                                                    <label for="konten3_text">Teks :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-file-alt"></i></span>
                                                        </div>
                                                        <textarea class="form-control" id="konten3_text" name="konten3_text" placeholder="Text.." aria-label="With textarea" rows="2" required><?php echo $konten3_text; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" id="btnSimpan" onclick="konten4()">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div id="tambahDataTim" class="modal" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah Tim</h5>
                                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                        </div>
                                        <form enctype="multipart/form-data">
                                            <div class="modal-body center-block">
                                                <div class="form-row mt-2">
                                                    <label for="nama">Nama Tim :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-heading"></i></span>
                                                        </div>
                                                        <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama Tim" required>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-2">
                                                    <label for="jabatan">Jabatan Tim :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-calendar"></i></span>
                                                        </div>
                                                        <input type="Text" id="jabatan" class="form-control" name="jabatan" placeholder="Jabatan Tim" required>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-2">
                                                    <label for="foto_profile">Foto Profile :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="far fa-image"></i></span>
                                                        </div>
                                                        <input type="file" id="foto_profile" class="form-control" name="foto_profile" placeholder="Foto Profile Tim" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" id="btnSimpan" onclick="tambahTim()">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div id="editModalTim" class="modal" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Tim</h5>
                                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                        </div>
                                        <form enctype="multipart/form-data">
                                            <div class="modal-body center-block">
                                                <input type="hidden" id="edit_id_tim" class="form-control" name="edit_id_tim" placeholder="id Tim">
                                                <input type="hidden" id="edit_dgs" class="form-control" name="edit_dgs" placeholder="dgs Tim" required>
                                                <div class="form-row mt-2">
                                                    <label for="edit_nama">Nama Tim :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-heading"></i></span>
                                                        </div>
                                                        <input type="text" id="edit_nama" class="form-control" name="edit_nama" placeholder="Nama Tim" required>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-2">
                                                    <label for="edit_jabatan">Jabatan Tim :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-calendar"></i></span>
                                                        </div>
                                                        <input type="Text" id="edit_jabatan" class="form-control" name="edit_jabatan" placeholder="Jabatan Tim" required>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-2">
                                                    <label for="edit_foto_profile">Foto Profile :</label><br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="far fa-image"></i></span>
                                                        </div>
                                                        <input type="file" id="edit_foto_profile" class="form-control" name="edit_foto_profile" placeholder="Foto Profile Tim" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" id="btnSimpan" onclick="editTim()">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-------Team Start------->
                            <section class="team section-padding">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="p1 sectioner-header text-center kata3" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                <h3><?php echo $konten3_judul; ?></h3>
                                                <span class="line"></span>
                                                <p><?php echo $konten3_text; ?></p>
                                            </div>
                                        <?php
                                    } else {
                                        // Handle kesalahan jika query tidak berhasil dieksekusi
                                        echo "Error: " . mysqli_error($koneksi);
                                    }

                                    // Tutup koneksi ke database
                                    mysqli_close($koneksi);
                                        ?>

                                        <div class="user-info icon">
                                            <span class="camera-icon1 pembatas4" data-bs-toggle="modal" data-bs-target="#editKonten4">
                                                <i class="fas fa-pencil-alt fa-lg"></i>
                                            </span>
                                        </div>
                                        <div class="section-content text-center">
                                            <hr>
                                            <button type="button mb-5" style="font-size: 16px;" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#tambahDataTim">
                                                <i class="fas fa-plus"></i> Tambah Tim
                                            </button>
                                            <hr>
                                            <div class="row">
                                                <?php
                                                include 'koneksi.php';
                                                $query = "SELECT * FROM tim";
                                                $result = mysqli_query($koneksi, $query);
                                                // Loop untuk menampilkan setiap baris data
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $id_tim  = $row['id_tim'];
                                                    $gambar = "images/" . $row['foto_profile'];
                                                    $foto_profile = $row['foto_profile'];
                                                    $nama = $row['nama'];
                                                    $jabatan = $row['jabatan'];
                                                    echo '
                                                <div class="col-md-4">
                                                    <div class="team-detail wow bounce" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000"> <img src="' . $gambar . '" class="img-fluid" />
                                                        <h4>' . $nama . '</h4>
                                                        <p>' . $jabatan . '</p>
                                                        <button type="button" class="btn btn-danger" id="btnHapus" onclick="hapusTim(' . $id_tim . ')">Hapus</button>
                                                        <button type="button" class="btn btn-success" id="btnEdit" onclick="openEditTim(' . $id_tim . ', \'' . $foto_profile . '\', \'' . $nama . '\', \'' . $jabatan . '\')">Edit</button>
                                                    </div>
                                                </div>
                                                ';
                                                }
                                                mysqli_close($koneksi);
                                                ?>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-------Team End------->

                            <!-------FAQ Start------->
                            <section class="faq section-padding prelative">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="p1 sectioner-header text-center" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                <h3>Pertanyaan yang Sering Diajukan</h3>
                                                <span class="line"></span>
                                                <p>Berikut adalah beberapa pertanyaan yang sering diajukan tentang Electrical Super App.</p>
                                            </div>
                                            <div class="section-content">
                                                <div class="row">
                                                    <div class="p1 col-md-6 faq-content wow fadeInUp" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                        <h4>Apa keuntungan menggunakan Electrical Super App?</h4>
                                                        <p class="short-content">
                                                            Electrical Super App hadir untuk memudahkan Anda dalam mencatat kegiatan sehari-hari terkait listrik. Manfaatkan fitur pencatatan yang intuitif dan integrasi langsung dengan Google Sheet untuk menyimpan data dengan mudah dan efisien.
                                                        </p>
                                                    </div>
                                                    <div class="p1 col-md-6 faq-content wow fadeInUp" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                        <h4>Bagaimana cara mengakses aplikasi ini?</h4>
                                                        <p>
                                                            Akses Electrical Super App langsung melalui web browser Anda tanpa perlu melakukan unduhan. Nikmati kemudahan mengelola data Anda, yang otomatis disinkronkan dengan Google Sheet, sehingga Anda bisa mengaksesnya dari mana saja dan kapan saja.
                                                        </p>
                                                    </div>
                                                    <div class="p1 col-md-6 faq-content wow fadeInUp" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                        <h4>Apakah aplikasi ini kompatibel dengan berbagai perangkat?</h4>
                                                        <p>
                                                            Ya, Electrical Super App mendukung penggunaan lintas platform, memastikan kenyamanan Anda dalam mengakses aplikasi ini dari berbagai perangkat. Integrasi Google Sheet mempermudah berbagi data antar perangkat, sehingga pengalaman pengguna tetap seragam.
                                                        </p>
                                                    </div>
                                                    <div class="p1 col-md-6 faq-content wow fadeInUp" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                        <h4>Apakah aplikasi ini memerlukan biaya?</h4>
                                                        <p>
                                                            Untuk penggunaan dasar, Electrical Super App dapat diakses secara gratis. Namun, untuk menikmati fitur-fitur premium dan integrasi lebih dalam dengan Google Sheet, terdapat opsi langganan yang memberikan nilai tambah bagi pengalaman pengguna Anda.
                                                        </p>
                                                    </div>
                                                    <div class="p1 col-md-6 faq-content wow fadeInUp" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                        <h4>Bagaimana cara mendapatkan dukungan teknis?</h4>
                                                        <p>
                                                            Kami menyediakan dukungan pelanggan 24/7 melalui berbagai saluran komunikasi. Untuk pertanyaan teknis lebih dalam, manfaatkan fitur bantuan di aplikasi yang terhubung langsung dengan tim dukungan kami, atau temukan solusi di basis pengetahuan kami yang terintegrasi dengan Google Sheet.
                                                        </p>
                                                    </div>
                                                    <div class="p1 col-md-6 faq-content wow fadeInUp" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                        <h4>Bagaimana cara mendapatkan pembaruan aplikasi?</h4>
                                                        <p>
                                                            Electrical Super App akan secara otomatis memperbarui dirinya untuk memastikan Anda selalu mendapatkan fitur terbaru dan perbaikan keamanan. Fitur ini terhubung dengan Google Sheet, memastikan data Anda tetap up-to-date dan aman.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-------FAQ End------->

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



                                <div id="editKonten5" class="modal" style="display: none;">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Konten Ke 5</h5>
                                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                            </div>
                                            <form enctype="multipart/form-data">
                                                <div class="modal-body center-block">
                                                    <input value="<?php echo $id_kontak; ?>" type="hidden" id="id_kontak" class="form-control" name="id_kontak" placeholder="Judul Berita" required>
                                                    <div class="form-row mt-2">
                                                        <label for="teks">Alamat :</label><br>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-file-alt"></i></span>
                                                            </div>
                                                            <textarea class="form-control" id="alamat" name="alamat" placeholder="Text.." aria-label="With textarea" rows="2" required><?php echo $alamat; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mt-2">
                                                        <label for="konten1_judul">HP :</label><br>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-heading"></i></span>
                                                            </div>
                                                            <input value="<?php echo $hp; ?>" type="text" id="hp" class="form-control" name="hp" placeholder="Silakan Isi No.Hp" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mt-2">
                                                        <label for="konten1_judul">Email :</label><br>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-heading"></i></span>
                                                            </div>
                                                            <input value="<?php echo $email; ?>" type="text" id="email" class="form-control" name="email" placeholder="Silakan Isi Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mt-2">
                                                        <label for="konten1_judul">Jadwal Aplikasi :</label><br>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-heading"></i></span>
                                                            </div>
                                                            <input value="<?php echo $jadwal; ?>" type="text" id="jadwal" class="form-control" name="jadwal" placeholder="Silakan Isi Jadwal Aplikasi" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary" id="btnSimpan" onclick="konten5()">Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Contact Start -->
                                <section class="contact section-padding" data-scroll-index='6'>
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
                                                                        <p class="text-uppercase">Address</p>
                                                                        <p class="text-uppercase"><?php echo $alamat; ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="contact-item media" data-aos="fade-down" data-aos-delay="5000" data-aos-duration="2000">
                                                                    <i class="fa fa-mobile media-left media-right-margin"></i>
                                                                    <div class="media-body">
                                                                        <p class="text-uppercase">Phone</p>
                                                                        <!-- Tambahkan atribut "href" dengan "tel:" -->
                                                                        <p class="text-uppercase"><a class="text-white" href="tel:+<?php echo $hp; ?>"><?php echo $hp; ?></a> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="contact-item media" data-aos="fade-down" data-aos-delay="5000" data-aos-duration="2000">
                                                                    <i class="fa fa-envelope media-left media-right-margin"></i>
                                                                    <div class="media-body">
                                                                        <p class="text-uppercase">E-mail</p>
                                                                        <!-- Tambahkan atribut "href" dengan "mailto:" -->
                                                                        <p class="text-uppercase"><a class="text-down" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="contact-item media" data-aos="fade-down" data-aos-delay="5000" data-aos-duration="2000">
                                                                    <i class="fa fa-clock media-left media-right-margin"></i>
                                                                    <div class="media-body">
                                                                        <p class="text-uppercase">Jadwal Aplikasi</p>
                                                                        <p class="text-uppercase"><?php echo $jadwal; ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            } else {
                                // Handle kesalahan jika query tidak berhasil dieksekusi
                                echo "Error: " . mysqli_error($koneksi);
                            }

                            // Tutup koneksi ke database
                            mysqli_close($koneksi);
                                ?>
                                <div class="user-info">
                                    <span class="camera-icon1 pembatas5" data-bs-toggle="modal" data-bs-target="#editKonten5">
                                        <i class="fas fa-pencil-alt fa-lg"></i>
                                    </span>
                                </div>
                                </section>
                                <!-- Contact End -->

                                <!-------Download End------->
                                <section class="download section-padding">
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
                        </div>
                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
                    <!-- scrollIt js -->
                    <script src="js/scrollIt.min.js"></script>
                    <script>
                        function updateIframe() {
                            var linkVidioInput = document.getElementById("link_vidio");
                            var iframeSrc = document.getElementById("iframeSrc");

                            iframeSrc.src = "https://www.youtube.com/embed/" + getYouTubeVideoId(linkVidioInput.value) + "?rel=0&amp;showinfo=0";
                        }

                        function getYouTubeVideoId(url) {
                            var videoId = "";

                            var patterns = [
                                /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/,
                                /(?:https?:\/\/)?(?:www\.)?youtu\.be\/([a-zA-Z0-9_-]{11})/
                            ];

                            for (var i = 0; i < patterns.length; i++) {
                                var match = url.match(patterns[i]);
                                if (match && match[1]) {
                                    videoId = match[1];
                                    break;
                                }
                            }

                            return videoId;
                        }

                        // Panggil fungsi updateIframe saat nilai input berubah
                        document.getElementById("link_vidio").addEventListener("input", updateIframe);

                        // Panggil fungsi updateIframe pada saat halaman dimuat
                        window.addEventListener("load", updateIframe);

                        function editBagian2() {
                            // Retrieve values from the modal
                            const idBerita = document.getElementById('id_berita').value;
                            const bagian2Judul = document.getElementById('bagian2_judul').value;
                            const bagian2Teks = document.getElementById('bagian2_teks').value;

                            // Validation
                            if (
                                !bagian2Judul ||
                                !bagian2Teks
                            ) {
                                Swal.fire({
                                    icon: 'info',
                                    title: 'Gagal!',
                                    text: 'Harap isi semua data yang diperlukan.',
                                    confirmButtonText: 'OK'
                                });
                                return;
                            }

                            // Create a FormData object to send the data as a multipart form
                            const formData = new FormData();
                            formData.append('idBerita', idBerita);
                            formData.append('bagian2Judul', bagian2Judul);
                            formData.append('bagian2Teks', bagian2Teks);

                            $.ajax({
                                url: "proses_edit_konten2.php",
                                type: "POST",
                                data: formData,
                                contentType: false,
                                processData: false,
                                dataType: 'json', // Use JSON as the response data type
                                success: function(response) {
                                    if (response.status === "success") {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Sukses!',
                                            text: response.message,
                                            confirmButtonText: 'OK'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                $('#editModalBagian2').modal('hide');
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
                        }

                        function konten3() {
                            // Retrieve values from the modal
                            const idHome = document.getElementById('id_home').value;
                            const linkVidioInput = document.getElementById('link_vidio');

                            // Validation
                            if (!linkVidioInput.value) {
                                Swal.fire({
                                    icon: 'info',
                                    title: 'Gagal!',
                                    text: 'Harap isi semua data yang diperlukan.',
                                    confirmButtonText: 'OK'
                                });
                                return;
                            }

                            // Get YouTube video ID directly from the input link
                            const videoId = getYouTubeVideoId(linkVidioInput.value);

                            // Construct the YouTube embed URL
                            const embedUrl = `https://www.youtube.com/embed/${videoId}?rel=0&amp;showinfo=0`;

                            // Update the iframe source
                            document.getElementById("iframeSrc").src = embedUrl;

                            const formData = new FormData();
                            formData.append('idHome', idHome);
                            formData.append('linkVidio', videoId);

                            $.ajax({
                                url: "update_konten3.php",
                                type: "POST",
                                data: formData,
                                contentType: false,
                                processData: false,
                                dataType: 'json', // Use JSON as the response data type
                                success: function(response) {
                                    if (response.status === "success") {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Sukses!',
                                            text: response.message,
                                            confirmButtonText: 'OK'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                $('#editKonten3').modal('hide');
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
                        }

                        function konten1() {
                            // Create a FormData object to send the data as a multipart form
                            const formData = new FormData();

                            // Retrieve values from the modal
                            const idHome = document.getElementById('id_home').value;
                            const konten1Judul = document.getElementById('konten1_judul').value;
                            const konten1Judul2 = document.getElementById('konten1_judul2').value;
                            const konten1Text = document.getElementById('konten1_text').value;

                            // Validation
                            if (!konten1Judul || !konten1Judul2 || !konten1Text) {
                                Swal.fire({
                                    icon: 'info',
                                    title: 'Gagal!',
                                    text: 'Harap isi semua data yang diperlukan.',
                                    confirmButtonText: 'OK'
                                });
                                return;
                            }

                            formData.append('idHome', idHome);
                            formData.append('konten1Judul', konten1Judul);
                            formData.append('konten1Judul2', konten1Judul2);
                            formData.append('konten1Text', konten1Text);

                            $.ajax({
                                url: "update_konten1.php",
                                type: "POST",
                                data: formData,
                                contentType: false,
                                processData: false,
                                dataType: 'json', // Use JSON as the response data type
                                success: function(response) {
                                    if (response.status === "success") {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Sukses!',
                                            text: response.message,
                                            confirmButtonText: 'OK'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                $('#editKonten1').modal('hide');
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
                        }

                        function konten2() {
                            // Create a FormData object to send the data as a multipart form
                            const formData = new FormData();

                            // Retrieve values from the modal
                            const idHome = document.getElementById('id_home').value;
                            const konten2Judul = document.getElementById('konten2_judul').value;
                            const konten2Text = document.getElementById('konten2_text').value;
                            const konten2Judul1 = document.getElementById('konten2_judul1').value;
                            const konten2Text1 = document.getElementById('konten2_text1').value;
                            const konten2Judul2 = document.getElementById('konten2_judul2').value;
                            const konten2Text2 = document.getElementById('konten2_text2').value;
                            const konten2Judul3 = document.getElementById('konten2_judul3').value;
                            const konten2Text3 = document.getElementById('konten2_text3').value;

                            // Validation
                            if (!konten2Judul || !konten2Text || !konten2Judul1 || !konten2Text1 || !konten2Judul2 || !konten2Text2 || !konten2Judul3 || !konten2Text3) {
                                Swal.fire({
                                    icon: 'info',
                                    title: 'Gagal!',
                                    text: 'Harap isi semua data yang diperlukan.',
                                    confirmButtonText: 'OK'
                                });
                                return;
                            }

                            formData.append('id_home', idHome);
                            formData.append('konten2_judul', konten2Judul);
                            formData.append('konten2_text', konten2Text);
                            formData.append('konten2_judul1', konten2Judul1);
                            formData.append('konten2_text1', konten2Text1);
                            formData.append('konten2_judul2', konten2Judul2);
                            formData.append('konten2_text2', konten2Text2);
                            formData.append('konten2_judul3', konten2Judul3);
                            formData.append('konten2_text3', konten2Text3);

                            $.ajax({
                                url: "update_konten2.php",
                                type: "POST",
                                data: formData,
                                contentType: false,
                                processData: false,
                                dataType: 'json', // Use JSON as the response data type
                                success: function(response) {
                                    if (response.status === "success") {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Sukses!',
                                            text: response.message,
                                            confirmButtonText: 'OK'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                $('#editKonten2').modal('hide');
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
                        }

                        function konten4() {
                            // Create a FormData object to send the data as a multipart form
                            const formData = new FormData();

                            // Retrieve values from the modal
                            const idHome = document.getElementById('id_home').value;
                            const konten3Judul = document.getElementById('konten3_judul').value;
                            const konten3Text = document.getElementById('konten3_text').value;

                            // Validation
                            if (!konten3Judul || !konten3Text) {
                                Swal.fire({
                                    icon: 'info',
                                    title: 'Gagal!',
                                    text: 'Harap isi semua data yang diperlukan.',
                                    confirmButtonText: 'OK'
                                });
                                return;
                            }

                            formData.append('idHome', idHome);
                            formData.append('konten3Judul', konten3Judul);
                            formData.append('konten3Text', konten3Text);

                            $.ajax({
                                url: "update_konten4.php",
                                type: "POST",
                                data: formData,
                                contentType: false,
                                processData: false,
                                dataType: 'json', // Use JSON as the response data type
                                success: function(response) {
                                    if (response.status === "success") {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Sukses!',
                                            text: response.message,
                                            confirmButtonText: 'OK'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                $('#editKonten4').modal('hide');
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
                        }

                        function konten5() {
                            // Create a FormData object to send the data as a multipart form
                            const formData = new FormData();

                            // Retrieve values from the modal
                            const idKontak = document.getElementById('id_kontak').value;
                            const dataAlamat = document.getElementById('alamat').value;
                            const dataHp = document.getElementById('hp').value;
                            const dataEmail = document.getElementById('email').value;
                            const dataJadwal = document.getElementById('jadwal').value;

                            // Validation
                            if (!dataAlamat || !dataHp || !dataEmail || !dataJadwal) {
                                Swal.fire({
                                    icon: 'info',
                                    title: 'Gagal!',
                                    text: 'Harap isi semua data yang diperlukan.',
                                    confirmButtonText: 'OK'
                                });
                                return;
                            }

                            formData.append('id_kontak', idKontak);
                            formData.append('alamat', dataAlamat);
                            formData.append('hp', dataHp);
                            formData.append('email', dataEmail);
                            formData.append('jadwal', dataJadwal);

                            $.ajax({
                                url: "update_konten5.php",
                                type: "POST",
                                data: formData,
                                contentType: false,
                                processData: false,
                                dataType: 'json', // Use JSON as the response data type
                                success: function(response) {
                                    if (response.status === "success") {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Sukses!',
                                            text: response.message,
                                            confirmButtonText: 'OK'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                $('#editKonten5').modal('hide');
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
                        }

                        function tambahTim() {
                            var nama = $("#nama").val();
                            var jabatan = $("#jabatan").val();
                            var foto_profile = $("#foto_profile")[0].files[0];

                            if (
                                !nama ||
                                !jabatan ||
                                !foto_profile
                            ) {
                                Swal.fire({
                                    icon: 'info',
                                    title: 'Gagal!',
                                    text: 'Harap isi semua data yang diperlukan.',
                                    confirmButtonText: 'OK'
                                });
                                return;
                            }

                            var formData = new FormData();
                            formData.append('nama', nama);
                            formData.append('jabatan', jabatan);
                            formData.append('gambar', foto_profile);

                            $.ajax({
                                url: "proses_tamba_tim.php",
                                type: "POST",
                                data: formData,
                                contentType: false,
                                processData: false,
                                success: function(response) {
                                    if (response.status === "success") {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Sukses!',
                                            text: response.message,
                                            confirmButtonText: 'OK'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                $("#tambahDataTim").modal("hide");
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
                                error: function(xhr, status, error) {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Gagal!',
                                        text: 'Terjadi kesalahan saat mengirim data ke server. ' + error,
                                        confirmButtonText: 'OK'
                                    });
                                },
                                complete: function() {}
                            });
                        }

                        function hapusTim(id_tim) {
                            Swal.fire({
                                title: 'Apakah Anda yakin?',
                                text: 'Anda tidak akan dapat mengembalikan data ini!',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#d33',
                                cancelButtonColor: '#3085d6',
                                confirmButtonText: 'Ya, hapus!',
                                cancelButtonText: 'Batal'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Kirim permintaan penghapusan ke server
                                    $.ajax({
                                        url: 'proses_hapus_tim.php',
                                        method: 'POST',
                                        data: {
                                            id_tim: id_tim
                                        },
                                        success: function(response) {
                                            if (response.status === "success") {
                                                Swal.fire(
                                                    'Terhapus!',
                                                    'Data telah dihapus.',
                                                    'success'
                                                ).then((result) => {
                                                    if (result.isConfirmed) {
                                                        location.reload();
                                                    }
                                                });
                                            } else {
                                                Swal.fire(
                                                    'Gagal!',
                                                    'Terjadi kesalahan saat menghapus data.',
                                                    'error'
                                                );
                                            }
                                        },
                                        error: function() {
                                            Swal.fire(
                                                'Gagal!',
                                                'Terjadi kesalahan saat mengirim data ke server.',
                                                'error'
                                            );
                                        }
                                    });
                                }
                            });
                        }

                        function openEditTim(id, dgs, nama, jabatan) {
                            document.getElementById('edit_id_tim').value = id;
                            document.getElementById('edit_dgs').value = dgs;
                            document.getElementById('edit_nama').value = nama;
                            document.getElementById('edit_jabatan').value = jabatan;
                            // Membuka modal
                            $('#editModalTim').modal('show');
                        }

                        function editTim() {
                            // Retrieve values from the modal
                            const editIdTim = document.getElementById('edit_id_tim').value;
                            const editDgs = document.getElementById('edit_dgs').value;
                            const editNama = document.getElementById('edit_nama').value;
                            const editJabatan = document.getElementById('edit_jabatan').value;
                            const fotoPofile = document.getElementById('edit_foto_profile').files[0]; // File input requires using the 'files' property

                            // Validation
                            if (!editNama || !editJabatan || !fotoPofile) {
                                Swal.fire({
                                    icon: 'info',
                                    title: 'Gagal!',
                                    text: 'Harap isi semua data yang diperlukan.',
                                    confirmButtonText: 'OK'
                                });
                                return;
                            }

                            // Create a FormData object to send the data as a multipart form
                            const formData = new FormData();
                            formData.append('editIdTim', editIdTim);
                            formData.append('editDgs', editDgs);
                            formData.append('editNama', editNama);
                            formData.append('editJabatan', editJabatan);
                            formData.append('gambar', fotoPofile);

                            $.ajax({
                                url: "proses_edit_tim.php",
                                type: "POST",
                                data: formData,
                                contentType: false,
                                processData: false,
                                dataType: 'json', // Use JSON as the response data type
                                success: function(response) {
                                    if (response.status === "success") {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Sukses!',
                                            text: response.message,
                                            confirmButtonText: 'OK'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                $('#editModalTim').modal('hide');
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
                        }
                    </script>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var pembatas1 = document.querySelector('.pembatas1');
                            var pembatas2 = document.querySelector('.pembatas2');
                            var pembatas3 = document.querySelector('.pembatas3');
                            var pembatas4 = document.querySelector('.pembatas4');
                            var pembatas5 = document.querySelector('.pembatas5');
                            var kotak1 = document.querySelector('.kotak1');
                            var kotak2 = document.querySelector('.kotak2');
                            var kata1 = document.querySelector('.kata1');
                            var kata2 = document.querySelector('.kata2');
                            var kata3 = document.querySelector('.kata3');
                            var welcomeHero = document.querySelector('.welcome-hero');

                            pembatas1.addEventListener('mouseover', function() {
                                kotak1.classList.add('ktk');
                                welcomeHero.classList.add('ktk');
                            });

                            pembatas1.addEventListener('mouseout', function() {
                                kotak1.classList.remove('ktk');
                                welcomeHero.classList.remove('ktk');
                            });

                            pembatas5.addEventListener('mouseover', function() {
                                kotak2.classList.add('ktk');
                                welcomeHero.classList.add('ktk');
                            });

                            pembatas5.addEventListener('mouseout', function() {
                                kotak2.classList.remove('ktk');
                                welcomeHero.classList.remove('ktk');
                            });

                            pembatas2.addEventListener('mouseover', function() {
                                kata1.classList.add('ktk');
                            });

                            pembatas2.addEventListener('mouseout', function() {
                                kata1.classList.remove('ktk');
                            });

                            pembatas3.addEventListener('mouseover', function() {
                                kata2.classList.add('ktk');
                            });

                            pembatas3.addEventListener('mouseout', function() {
                                kata2.classList.remove('ktk');
                            });

                            pembatas4.addEventListener('mouseover', function() {
                                kata3.classList.add('ktk');
                            });

                            pembatas4.addEventListener('mouseout', function() {
                                kata3.classList.remove('ktk');
                            });
                        });
                    </script>

                    <script>
                        $(document).ready(function(e) {

                            $('#video-icon').on('click', function(e) {
                                e.preventDefault();
                                $('.video-popup').css('display', 'flex');
                                $('.iframe-src').slideDown();
                            });
                            $('.video-popup').on('click', function(e) {
                                var $target = e.target.nodeName;
                                var video_src = $(this).find('iframe').attr('src');
                                if ($target != 'IFRAME') {
                                    $('.video-popup').fadeOut();
                                    $('.iframe-src').slideUp();
                                    $('.video-popup iframe').attr('src', " ");
                                    $('.video-popup iframe').attr('src', video_src);
                                }
                            });

                            $('.slider').bxSlider({
                                pager: false
                            });
                        });
                    </script>

                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                    <!--loding  -->
                    <div class="loading-overlay" id="loadingOverlay">
                        <img src="images/6.png" alt="" class="g1">
                    </div>

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
                    <!-- All Jquery -->

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