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
            }

            .card {
                border-radius: 50px;
                position: relative;
                bottom: 555px;
                z-index: 50;
                border: solid 2px #d4d4d4;
                color: #000000;
                overflow: hidden;
                background-image: linear-gradient(180deg, #ffffff 5%, #d2f3ef 100%);
            }

            .btn {
                border-radius: 20px;
                padding: 10px;
                transition: 0.2s;
                /* Efek transisi */
                box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.233);
            }

            .btn:hover {
                transform: scale(1.1);
                box-shadow: 5px 8px 11px rgba(0, 0, 0, 0.425);
            }

            .satu {
                display: none;
            }

            .ustom-form {
                z-index: 10px;
            }

            .left-sidebar {
                position: fixed;
                z-index: 10;
            }

            @media screen and (max-width: 790px) {
                .card {
                    border-radius: 50px;
                    border: 10px solid #d2f3ef;
                    position: relative;
                    bottom: 590px;
                    z-index: 50;
                    border: solid 2px #d4d4d4;
                    color: #000000;
                }

                .btn {
                    padding: 10px;
                }

            }

            @media screen and (max-width: 385px) {
                .gbr1 {
                    /* position: relative; */
                    /* position: absolute;
                    left: -80px;
                    bottom: -30px; */
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


                        <!-------Banner Start------->
                        <section class="banner" data-scroll-index='0'>
                            <div class="banner-overlay">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-12">
                                            <div class="banner-text">
                                                <h2 class="white" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">Selamat Datang di Electrical Super App</h2>
                                                <h6 class="white" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">Aplikasi Terbaik untuk Mengirim dan Mengelola Kegiatan pada Google sheet Anda</h6>
                                                <p class="banner-text white" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">Dengan Electrical Super App, Anda dapat dengan mudah mencatat dan mengelola kegiatan sehari-hari Anda. Temukan kenyamanan dalam mencatat setiap data penting.</p>
                                                <ul data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                    <li><a href="#"><img src="images/bumn.png" class="wow fadeInUp" /></a></li>
                                                    <li><a href="#"><img src="images/angkasapura.png" class="wow fadeInUp" /></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000"> <img src="images/esa2.png" class="img-fluid wow fadeInUp" /> </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-------Banner End------->

                        <!-------About End------->
                        <section class="about section-padding prelative">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="p1 sectioner-header text-center" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                            <h3>Kenali Kami Lebih Dekat</h3>
                                            <span class="line"></span>
                                            <p>Electrical Super App hadir untuk memudahkan setiap langkah Anda dalam mencatat aktivitas sehari-hari. Ditenagai oleh dedikasi, cinta, dan inovasi, kami berkomitmen untuk memberikan pengalaman terbaik kepada komunitas pengguna kami.</p>
                                        </div>
                                        <div class="section-content text-center">
                                            <div class="row">
                                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                    <div class="p1 icon-box wow fadeInUp"> <i class="fa fa-life-ring" aria-hidden="true"></i>
                                                        <h5>Dukungan 24/7</h5>
                                                        <p>Melayani Anda dengan dukungan penuh 24 jam sehari, 7 hari seminggu. Kami di sini untuk membantu menjawab setiap pertanyaan dan memastikan Anda tetap mendapatkan manfaat maksimal dari aplikasi kami.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                    <div class="p1 icon-box wow fadeInUp"> <i class="fa fa-mobile" aria-hidden="true"></i>
                                                        <h5>Cross Platform</h5>
                                                        <p>Dirancang untuk mendukung penggunaan lintas platform, Electrical Super App memberikan fleksibilitas tanpa batas. Gunakan aplikasi ini di perangkat apa pun, di mana pun Anda berada.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                                    <div class="p1 icon-box wow fadeInUp"> <i class="fa fa-bolt" aria-hidden="true"></i>
                                                        <h5>Kecepatan Tanpa Batas</h5>
                                                        <p>Menghadirkan kinerja cepat dan tanpa hambatan, Electrical Super App memastikan setiap tindakan Anda diselesaikan dengan efisiensi tinggi. Karena waktu Anda berharga,</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
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
                                    <h3>Tonton Tutorial</h3>
                                    <i class="fa fa-play" id="video-icon" aria-hidden="true"></i>
                                    <div class="video-popup">
                                        <div class="video-src">
                                            <div class="iframe-src">
                                                <iframe src="https://www.youtube.com/embed/Ku52zNnft8k?rel=0&amp;showinfo=0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-------Video End------->

                        <!-------Features Start------->
                        <section class="feature section-padding" data-scroll-index='2'>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="p1 sectioner-header text-center" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                            <h3>Fitur Unggulan</h3>
                                            <span class="line"></span>
                                            <p>Hadirlah dalam kecepatan dan daya tahan tinggi. Kami membawa fitur-fitur canggih untuk memastikan pengalaman Anda lebih dari sekadar luar biasa.</p>
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
                                                        <img src="images/esa2.png" class="img-fluid wow fadeInUp" />
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

                        <!-------Team Start------->
                        <section class="team section-padding">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="p1 sectioner-header text-center" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">
                                            <h3>Tim Kami</h3>
                                            <span class="line"></span>
                                            <p>Kami adalah tim yang berkomitmen untuk memberikan layanan terbaik kepada Anda. Setiap anggota tim kami memiliki keahlian di bidangnya masing-masing dan bersatu untuk menciptakan pengalaman luar biasa untuk pengguna kami.</p>
                                        </div>
                                        <div class="section-content text-center">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="team-detail wow bounce" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000"> <img src="assets/images/users/1.jpg" class="img-fluid" />
                                                        <h4>Nama</h4>
                                                        <p>Jabatan</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="team-detail wow bounce" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000"> <img src="assets/images/users/1.jpg" class="img-fluid" />
                                                        <h4>Nama</h4>
                                                        <p>Jabatan</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="team-detail wow bounce" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000"> <img src="assets/images/users/1.jpg" class="img-fluid" />
                                                        <h4>Nama</h4>
                                                        <p>Jabatan</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="team-detail wow bounce" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000"> <img src="assets/images/users/1.jpg" class="img-fluid" />
                                                        <h4>Nama</h4>
                                                        <p>Jabatan</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="team-detail wow bounce" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000"> <img src="assets/images/users/1.jpg" class="img-fluid" />
                                                        <h4>Nama</h4>
                                                        <p>Jabatan</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="team-detail wow bounce" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000"> <img src="images/fp.png" class="img-fluid" />
                                                        <h4>Jovandry Morgan</h4>
                                                        <p>Pengembang Aplikasi Web</p>
                                                    </div>
                                                </div>
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

                                                    <p>Electrical Super App hadir untuk memudahkan Anda dalam mencatat kegiatan sehari-hari terkait listrik. <a href="/keuntungan" target="_blank">Selengkapnya...</a></p>
                                                </div>
                                                <div class="p1 col-md-6 faq-content wow fadeInUp" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">

                                                    <h4>Bagaimana cara mengakses aplikasi ini?</h4>

                                                    <p>Anda dapat mengakses Electrical Super App langsung melalui web browser Anda tanpa perlu melakukan unduhan. <a href="/cara-mengakses" target="_blank">Selengkapnya...</a></p>
                                                </div>
                                                <div class="p1 col-md-6 faq-content wow fadeInUp" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">

                                                    <h4>Apakah aplikasi ini kompatibel dengan berbagai perangkat?</h4>

                                                    <p>Ya, Electrical Super App mendukung penggunaan lintas platform, memastikan kenyamanan Anda dalam mengakses aplikasi ini dari berbagai perangkat. <a href="/kompatibilitas" target="_blank">Selengkapnya...</a></p>
                                                </div>
                                                <div class="p1 col-md-6 faq-content wow fadeInUp" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">

                                                    <h4>Apakah aplikasi ini memerlukan biaya?</h4>

                                                    <p>Untuk penggunaan dasar, Electrical Super App dapat diakses secara gratis. Namun, terdapat fitur-fitur tambahan yang mungkin memerlukan biaya langganan. <a href="/biaya" target="_blank">Selengkapnya...</a></p>
                                                </div>
                                                <div class="p1 col-md-6 faq-content wow fadeInUp" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">

                                                    <h4>Bagaimana cara mendapatkan dukungan teknis?</h4>

                                                    <p>Kami menyediakan dukungan pelanggan 24/7 melalui berbagai saluran komunikasi. Anda dapat menghubungi tim dukungan kami melalui fitur bantuan di aplikasi. <a href="/dukungan-teknis" target="_blank">Selengkapnya...</a></p>
                                                </div>
                                                <div class="p1 col-md-6 faq-content wow fadeInUp" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000">

                                                    <h4>Bagaimana cara mendapatkan pembaruan aplikasi?</h4>

                                                    <p>Electrical Super App akan secara otomatis memperbarui dirinya untuk memastikan Anda selalu mendapatkan fitur terbaru dan perbaikan keamanan. <a href="/pembaruan" target="_blank">Selengkapnya...</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-------FAQ End------->

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
                                                    <div class="contact-info white">
                                                        <div class="contact-item media" data-aos="fade-down" data-aos-delay="5000" data-aos-duration="2000">
                                                            <i class="fa fa-map-marker-alt media-left media-right-margin"></i>
                                                            <div class="media-body">
                                                                <p class="text-uppercase">Address</p>
                                                                <p class="text-uppercase">INDONESIA, NUSA TENGGARA TIMUR, KUPANG</p>
                                                            </div>
                                                        </div>
                                                        <div class="contact-item media" data-aos="fade-down" data-aos-delay="5000" data-aos-duration="2000">
                                                            <i class="fa fa-mobile media-left media-right-margin"></i>
                                                            <div class="media-body">
                                                                <p class="text-uppercase">Phone</p>
                                                                <p class="text-uppercase"><a class="text-white" href="tel:+15173977100">009900990099</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="contact-item media" data-aos="fade-down" data-aos-delay="5000" data-aos-duration="2000">
                                                            <i class="fa fa-envelope media-left media-right-margin"></i>
                                                            <div class="media-body">
                                                                <p class="text-uppercase">E-mail</p>
                                                                <p class="text-uppercase"><a class="text-down" href="mailto:abcdefg@gmail.com">van.now@gmail.com</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="contact-item media" data-aos="fade-down" data-aos-delay="5000" data-aos-duration="2000">
                                                            <i class="fa fa-clock media-left media-right-margin"></i>
                                                            <div class="media-body">
                                                                <p class="text-uppercase">Jadwal Aplikasi</p>
                                                                <p class="text-uppercase">Mon-Fri 9.00 AM to 5.00PM.</p>
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