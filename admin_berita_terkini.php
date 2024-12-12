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
        <!-- Custom CSS -->
        <link href="assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
        <link href="assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
        <link href="dist/css/style.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <title>Halaman Home</title>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <!-- Bootstrap JS -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/7.png">
        <!-- Custom CSS -->
        <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
        <link href="dist/css/style.min.css" rel="stylesheet">
        <!--slick.css-->
        <link rel="stylesheet" href="berita/css/slick.css">
        <link rel="stylesheet" href="berita/css/slick-theme.css">

        <!--style.css-->
        <link rel="stylesheet" href="berita/css/style_berita3.css">

        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/7.png">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!--font-family-->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="berita/css/font-awesome.min.css">

        <!--linear icon css-->
        <link rel="stylesheet" href="berita/css/linearicons.css">

        <!--animate.css-->
        <link rel="stylesheet" href="berita/css/animate.css">

        <!--flaticon.css-->
        <link rel="stylesheet" href="berita/css/flaticon.css">

        <!--responsive.css-->
        <link rel="stylesheet" href="berita/css/responsive.css">

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
            }


            .camera-icon1 {
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
                transition: .5s all;
                transform: scale(1.2);
                /* Optional: Add a subtle shadow for depth */
            }

            .camera-icon1:hover {
                transform: scale(1.4);
                box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.589);
            }

            .welcome-hero {
                /* Properti lainnya untuk welcome-hero */
                border: 2px solid transparent;
                filter: grayscale(0) sepia(0);
                /* Atur border default */
                transition: 0.5s;
                /* Efek transisi untuk border */
            }

            .kotak1 {
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

            .kotak1 {
                width: 80%;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .icon2 {
                position: relative;
                top: 250px;
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

                .icon2 {
                    position: relative;
                    top: 70px;
                }

                .welcome-hero {
                    height: 600px;
                }

                .satu {
                    height: 45vh;
                }
            }


            @media screen and (max-width: 508px) {

                .icon2 {
                    position: relative;
                    top: 70px;
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

                .icon2 {
                    position: relative;
                    top: 20px;
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

                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->

                        </ul>

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
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
                                            <i class="mdi mdi-account me-1 ms-1"></i>
                                            <!-- Tambahkan kelas ikon untuk Account Staf -->
                                            <span class="hide-menu">Account Staf</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="admin_akun_manajer.php" class="sidebar-link">
                                            <i class="mdi mdi-account-circle me-1 ms-1"></i>
                                            <!-- Tambahkan kelas ikon untuk Account Manager -->
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
                                            <i class="ti-user me-1 ms-1"></i>
                                            <!-- Tambahkan kelas ikon untuk Account Staf -->
                                            <span class="hide-menu">My Profile</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="logout.php" class="sidebar-link">
                                            <i class="fa fa-power-off me-1 ms-1"> </i>
                                            <!-- Tambahkan kelas ikon untuk Account Manager -->
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
                        include('koneksi.php');

                        $query = "SELECT * FROM berita";
                        $result = mysqli_query($koneksi, $query);
                        $row = mysqli_fetch_assoc($result);
                        $id_berita  =  $row['id_berita'];
                        $bagian1_judul =  $row['bagian1_judul'];
                        $bagian1_teks =  $row['bagian1_teks'];
                        $gambar = "berita/images/welcome-hero/" . $row['bagian1_gambar'];
                        $dgs = $row['bagian1_gambar'];
                        ?>

                        <style>
                            .welcome-hero {
                                background: url(<?php echo $gambar; ?>)no-repeat;
                                background-position: center;
                                background-size: cover;
                            }
                        </style>

                        <!--welcome-hero start -->
                        <section id="home" class="welcome-hero">
                            <div class="container fe">
                                <div class="welcome-hero-txt">
                                    <div class="kotak1" style="width: 80%; ">
                                        <h2><?php echo $bagian1_judul; ?></h2>
                                        <p>
                                            <?php echo $bagian1_teks; ?>
                                        </p>
                                    </div>
                                    <div class="user-info icon2">
                                        <span class="camera-icon1 pembatas1" data-bs-toggle="modal" data-bs-target="#editModalBagian1">
                                            <i class="fas fa-pencil-alt fa-lg"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var pembatas1 = document.querySelector('.pembatas1');
                                var pembatas2 = document.querySelector('.pembatas2');
                                var pembatas3 = document.querySelector('.pembatas3');
                                var pembatas4 = document.querySelector('.pembatas4');
                                var kotak1 = document.querySelector('.kotak1');
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

                            });
                        </script>


                        </section>
                        <!--/.works-->

                        <script>
                            function tambaBerita() {
                                var judul = $("#judul").val();
                                var kategory = $("#kategory").val();
                                var link = $("#link").val();
                                var tanggal = $("#tanggal").val();
                                var teks = $("#teks").val();
                                var gambar = $("#gambar")[0].files[0];

                                if (
                                    !kategory ||
                                    !link ||
                                    !judul ||
                                    !tanggal ||
                                    !teks ||
                                    !gambar ||
                                    (!dgs)
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
                                formData.append('judul', judul);
                                formData.append('kategory', kategory);
                                formData.append('link', link);
                                formData.append('tanggal', tanggal);
                                formData.append('teks', teks);
                                formData.append('gambar', gambar);

                                $.ajax({
                                    url: "proses_tamba_berita.php",
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
                                                    $("#tambahBerita").modal("hide");
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

                            function hapusBlog(id_blog) {
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
                                            url: 'proses_hapus_blog.php',
                                            method: 'POST',
                                            data: {
                                                id_blog: id_blog
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

                            function openEditBerita(id, kategori, link, judul, tanggal, teks, gambar) {
                                document.getElementById('edit_id_blog').value = id;
                                document.getElementById('edit_kategory').value = kategori;
                                document.getElementById('edit_link').value = link;
                                document.getElementById('edit_judul').value = judul;
                                document.getElementById('edit_tanggal').value = tanggal;
                                document.getElementById('edit_teks').value = teks;
                                document.getElementById('data_gambar_sebelumnya').value = gambar;
                                // Membuka modal
                                $('#editBerita').modal('show');
                            }

                            function editBerita() {
                                // Retrieve values from the modal
                                const editedId = document.getElementById('edit_id_blog').value;
                                const editedKategori = document.getElementById('edit_kategory').value;
                                const editedLink = document.getElementById('edit_link').value;
                                const editedJudul = document.getElementById('edit_judul').value;
                                const editedTanggal = document.getElementById('edit_tanggal').value;
                                const editedTeks = document.getElementById('edit_teks').value;
                                const dgs = document.getElementById('data_gambar_sebelumnya').value;
                                const editedGambar = document.getElementById('edit_gambar').files[0]; // File input requires using the 'files' property

                                // Validation
                                if (
                                    !editedKategori ||
                                    !editedLink ||
                                    !editedJudul ||
                                    !editedTanggal ||
                                    !editedTeks ||
                                    !editedGambar ||
                                    (!dgs)
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
                                formData.append('id_blog', editedId);
                                formData.append('kategory', editedKategori);
                                formData.append('link', editedLink);
                                formData.append('judul', editedJudul);
                                formData.append('tanggal', editedTanggal);
                                formData.append('teks', editedTeks);
                                formData.append('dgs', dgs);
                                formData.append('gambar', editedGambar);

                                $.ajax({
                                    url: "proses_edit_berita.php",
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
                                                    $('#editBerita').modal('hide');
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

                            function editBagian1() {
                                // Retrieve values from the modal
                                const idBerita = document.getElementById('id_berita').value;
                                const dgsKonten1 = document.getElementById('dgs_konten1').value;
                                const bagian1Judul = document.getElementById('bagian1_judul').value;
                                const bagian1Teks = document.getElementById('bagian1_teks').value;
                                const bagian1Gambar = document.getElementById('bagian1_gambar').files[0]; // File input requires using the 'files' property

                                // Validation
                                if (
                                    !bagian1Judul ||
                                    !bagian1Teks ||
                                    !bagian1Gambar
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
                                formData.append('dgsKonten1', dgsKonten1);
                                formData.append('bagian1Judul', bagian1Judul);
                                formData.append('bagian1Teks', bagian1Teks);
                                formData.append('gambar', bagian1Gambar);

                                $.ajax({
                                    url: "proses_edit_konten1.php",
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
                                                    $('#editModalBagian1').modal('hide');
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

                        <!-- Elemen modal -->
                        <div id="editModalBagian1" class="modal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Konten 1</h5>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <form enctype="multipart/form-data">
                                        <input type="hidden" id="id_berita" class="form-control" value="<?php echo $id_berita; ?>" name="id_berita" placeholder="id Berita" required>
                                        <input type="hidden" id="dgs_konten1" class="form-control" value="<?php echo $dgs; ?>" name="dgs_konten1" placeholder="id Berita" required>
                                        <div class="modal-body center-block">
                                            <div class="form-row mt-2">
                                                <label for="bagian1_judul">Judul Konten :</label><br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-link"></i></span>
                                                    </div>
                                                    <input type="text" value="<?php echo $bagian1_judul; ?>" id="bagian1_judul" class="form-control" name="bagian1_judul" placeholder="Judul Konten" required>
                                                </div>
                                            </div>
                                            <div class="form-row mt-2">
                                                <label for="bagian1_teks">Teks Konten :</label><br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-file-alt"></i></span>
                                                    </div>
                                                    <textarea class="form-control" id="bagian1_teks" name="bagian1_teks" placeholder="Silakan Isi Teks Konten" aria-label="With textarea" rows="2" required><?php echo $bagian1_teks; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row mt-2">
                                                <label for="bagian1_gambar">Gambar Konten :</label><br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="far fa-image"></i></span>
                                                    </div>
                                                    <input type="file" id="bagian1_gambar" class="form-control" name="bagian1_gambar" placeholder="Gambar Konten" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" id="btnEditBagian1" onclick="editBagian1()">Edit</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <!-- Elemen modal untuk hasil potong -->
                        <div id="tambahBerita" class="modal" style="display: none;">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Berita</h5>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <form enctype="multipart/form-data">
                                        <div class="modal-body center-block">
                                            <div class="form-row mt-2">
                                                <label for="kategory">Kategori Berita :</label><br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-cogs"></i></span>
                                                    </div>
                                                    <select id="kategory" class="form-control" name="kategory">
                                                        <option value="" selected>SILAKAN PILIH!</option>
                                                        <option value="terkini">Berita Terkini</option>
                                                        <option value="inovasi">Inovasi Listrik</option>
                                                        <option value="aspek">Aspek Listrik</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row mt-2">
                                                <label for="link">Link Berita :</label><br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-link"></i></span>
                                                    </div>
                                                    <input type="text" id="link" class="form-control" name="link" placeholder="Link Berita" required>
                                                </div>
                                            </div>
                                            <div class="form-row mt-2">
                                                <label for="judul">Judul Berita :</label><br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-heading"></i></span>
                                                    </div>
                                                    <input type="text" id="judul" class="form-control" name="judul" placeholder="Judul Berita" required>
                                                </div>
                                            </div>
                                            <div class="form-row mt-2">
                                                <label for="tanggal">Tanggal Berita :</label><br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-calendar"></i></span>
                                                    </div>
                                                    <input type="date" id="tanggal" class="form-control" name="tanggal" placeholder="Tanggal Berita" required>
                                                </div>
                                            </div>
                                            <div class="form-row mt-2">
                                                <label for="teks">Teks Berita :</label><br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-file-alt"></i></span>
                                                    </div>
                                                    <textarea class="form-control" id="teks" name="teks" placeholder="Penanganan Untuk Alat Yang Rusak" aria-label="With textarea" rows="2" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row mt-2">
                                                <label for="gambar">Gambar Berita :</label><br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="far fa-image"></i></span>
                                                    </div>
                                                    <input type="file" id="gambar" class="form-control" name="gambar" placeholder="Gambar Berita" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" id="btnSimpan" onclick="tambaBerita()">Simpan</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <!-- Elemen modal -->
                        <div id="editBerita" class="modal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Berita</h5>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <form enctype="multipart/form-data">
                                        <input type="hidden" id="edit_id_blog" class="form-control" value="" name="edit_id_blog" placeholder="id Berita" required>
                                        <input type="hidden" id="data_gambar_sebelumnya" class="form-control" value="" name="data_gambar_sebelumnya" placeholder="id Berita" required>
                                        <div class="modal-body center-block">
                                            <div class="form-row mt-2">
                                                <label for="kategory">Kategori Berita :</label><br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-cogs"></i></span>
                                                    </div>
                                                    <select id="edit_kategory" class="form-control" name="edit_kategory">
                                                        <option value="" selected>SILAKAN PILIH!</option>
                                                        <option value="terkini">Berita Terkini</option>
                                                        <option value="inovasi">Inovasi Listrik</option>
                                                        <option value="aspek">Aspek Listrik</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row mt-2">
                                                <label for="link">Link Berita :</label><br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-link"></i></span>
                                                    </div>
                                                    <input type="text" id="edit_link" value="" class="form-control" name="edit_link" placeholder="Link Berita" required>
                                                </div>
                                            </div>
                                            <div class="form-row mt-2">
                                                <label for="judul">Judul Berita :</label><br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-heading"></i></span>
                                                    </div>
                                                    <input type="text" id="edit_judul" class="form-control" name="edit_judul" placeholder="Judul Berita" required>
                                                </div>
                                            </div>
                                            <div class="form-row mt-2">
                                                <label for="tanggal">Tanggal Berita :</label><br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-calendar"></i></span>
                                                    </div>
                                                    <input type="date" id="edit_tanggal" class="form-control" name="edit_tanggal" placeholder="Tanggal Berita" required>
                                                </div>
                                            </div>
                                            <div class="form-row mt-2">
                                                <label for="teks">Teks Berita :</label><br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-file-alt"></i></span>
                                                    </div>
                                                    <textarea class="form-control" id="edit_teks" name="edit_teks" placeholder="Penanganan Untuk Alat Yang Rusak" aria-label="With textarea" rows="2" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-row mt-2">
                                                <label for="gambar">Gambar Berita :</label><br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="far fa-image"></i></span>
                                                    </div>
                                                    <input type="file" id="edit_gambar" class="form-control" name="edit_gambar" placeholder="Gambar Berita" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" id="btnEdit" onclick="editBerita()">Edit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!--blog start -->
                        <section id="blog" class="blog" style="position: relative; bottom: 150px; z-index: 8;">
                            <div class="container">
                                <div class="blog-content">
                                    <button type="button mb-5" style="font-size: 16px;" class="btn btn-info text-white mb-5" data-bs-toggle="modal" data-bs-target="#tambahBerita">
                                        <i class="fas fa-plus"></i> Tambah Berita
                                    </button>
                                    <a href="admin_berita.php" type="button mb-5" style="font-size: 16px;" class="btn btn-danger text-white mb-5">
                                        Kembali
                                    </a>
                                    <hr>
                                    <style>
                                        .pembungkus {
                                            display: flex;
                                            flex-wrap: wrap;
                                            gap: 10px;
                                            /* Jarak antar elemen */
                                        }

                                        .dibungkus {
                                            flex: 1;
                                            /* Menggunakan flex untuk penyesuaian lebar responsif */
                                            max-width: 48%;
                                            /* Lebar maksimum elemen */
                                        }
                                    </style>
                                    <div class="form-row pembungkus mt-2">
                                        <div class="form-group dibungkus col-md-3">
                                            <label for="jumlah_div">LIHAT JUMLAH DATA</label>
                                            <div class="input-group">
                                                <!-- <label for="jumlah_div">Lihat data:</label> -->
                                                <select class="form-control" name="jumlah_div" id="jumlah_div" onchange="tampilkanBerita()">
                                                    <?php
                                                    $selected_3 = (isset($_GET['jumlah_div']) && $_GET['jumlah_div'] == 3) ? 'selected' : '';
                                                    $selected_6 = (isset($_GET['jumlah_div']) && $_GET['jumlah_div'] == 6) ? 'selected' : '';
                                                    $selected_9 = (isset($_GET['jumlah_div']) && $_GET['jumlah_div'] == 9) ? 'selected' : '';
                                                    $selected_12 = (isset($_GET['jumlah_div']) && $_GET['jumlah_div'] == 12) ? 'selected' : '';
                                                    $selected_24 = (isset($_GET['jumlah_div']) && $_GET['jumlah_div'] == 24) ? 'selected' : '';
                                                    ?>

                                                    <option value="3" <?php echo $selected_3; ?>>Lihat 3 Data</option>
                                                    <option value="6" <?php echo $selected_6; ?>>Lihat 6 Data</option>
                                                    <option value="9" <?php echo $selected_9; ?>>Lihat 9 Data</option>
                                                    <option value="12" <?php echo $selected_12; ?>>Lihat 12 Data</option>
                                                    <option value="24" <?php echo $selected_24; ?>>Lihat 24 Data</option>
                                                    <!-- Sesuaikan opsi dengan jumlah yang diinginkan -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group dibungkus col-2">
                                            <label for="cariData">CARI DATA</label><br>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="cariData" name="cariData" placeholder="Silakan Cari Data" value="<?php echo isset($_POST['cariData']) ? $_POST['cariData'] : ''; ?>">
                                                <div class="input-group-append" style="cursor: pointer;">
                                                    <button type="button" class="input-group-text" style="cursor: pointer;" onclick="tampilkanBerita()">
                                                        <i class="fas fa-search" style="padding: 3px;"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row" id="tampilanBerita">
                                        <?php
                                        include 'koneksi.php';

                                        // Ambil nilai jumlah_div dari elemen dropdown
                                        $jumlah_div = isset($_GET['jumlah_div']) ? $_GET['jumlah_div'] : 3;

                                        // Ambil nilai halaman dari parameter URL
                                        $halaman = isset($_GET['halaman']) ? $_GET['halaman'] : 1;

                                        // Tentukan jumlah data yang ditampilkan per halaman
                                        $data_per_halaman = $jumlah_div;

                                        // Hitung batas data
                                        $batas_data = ($halaman - 1) * $data_per_halaman;

                                        // Ambil nilai cariData
                                        $cariData = isset($_GET['cariData']) ? mysqli_real_escape_string($koneksi, $_GET['cariData']) : '';

                                        if (!empty($cariData)) {
                                            $query = "SELECT * FROM blog WHERE (kategory = 'terkini') AND (DATE_FORMAT(tanggal, '%d-%b-%Y') LIKE '%$cariData%' OR judul LIKE '%$cariData%' OR link LIKE '%$cariData%' OR teks LIKE '%$cariData%' OR gambar LIKE '%$cariData%') LIMIT $batas_data, $data_per_halaman";
                                        } else {
                                            $query = "SELECT * FROM blog WHERE kategory = 'terkini' LIMIT $batas_data, $data_per_halaman";
                                        }

                                        $result = mysqli_query($koneksi, $query);

                                        // Loop untuk menampilkan setiap baris data
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $id_blog = $row['id_blog'];
                                            $gambar = "berita/images/blog/" . $row['gambar'];
                                            $editGambar = $row['gambar'];
                                            $judul = $row['judul'];
                                            $tanggal = $row['tanggal'];
                                            $dataTanggal = date('d-M-Y', strtotime($row['tanggal'])); // Ubah format tanggal
                                            $teks = $row['teks'];
                                            $namaKategori = $row['kategory'];
                                            $link = $row['link'];
                                            $panjang_judul = 20;
                                            $panjang_teks = 190;
                                            $panjang_data_judul = strlen($judul) > $panjang_judul ? substr($judul, 0, $panjang_judul) . '...' : $judul;
                                            $panjang_data_teks = strlen($teks) > $panjang_teks ? substr($teks, 0, $panjang_teks) . '...' : $teks;

                                            // Tampilkan HTML untuk setiap baris data
                                            echo '
<div class="col-md-4 col-sm-6">
    <div class="single-blog-item">
        <div class="single-blog-item-img">
            <img src="' . $gambar . '" alt="gambar blog">
        </div>
        <div class="single-blog-item-txt">
            <h2><a href="' . $link . '">' . $panjang_data_judul . '</a></h2>
            <h4>diposting <span>oleh</span> <a href="#">admin</a><span>' . $dataTanggal . '</span></h4>
            <p>' . $panjang_data_teks . '</p>
            <div class="col-12 mt-3">
                <button type="button" class="btn btn-success text-white" style="font-size: 12px;" onclick="openEditBerita(' . $id_blog . ', \'' . $namaKategori . '\', \'' . $link . '\', \'' . $judul . '\', \'' . $tanggal . '\', \'' . $teks . '\', \'' . $editGambar . '\')">
                    <i class="fas fa-edit"></i> Edit
                </button>
                <button type="button" class="btn btn-danger text-white" style="font-size: 12px; margin-left: 10px;" onclick="hapusBlog(' . $id_blog . ')">
                    <i class="fas fa-trash"></i> Hapus
                </button>
            </div>
        </div>
    </div>
</div>';
                                        }
                                        if (mysqli_num_rows($result) == 0 && !empty($cariData)) {
                                            echo "<h1 class='text-center'><i class='fas fa-info-circle' style='width: 350px;''></i> <br> Data tidak ditemukan</h1>";
                                        }
                                        // Hitung total halaman hanya untuk kategori "terkini"
                                        $query_jumlah_data = "SELECT COUNT(*) AS jumlah FROM blog WHERE kategory = 'terkini'";
                                        $result_jumlah_data = mysqli_query($koneksi, $query_jumlah_data);
                                        $row_jumlah_data = mysqli_fetch_assoc($result_jumlah_data);
                                        $total_data = $row_jumlah_data['jumlah'];
                                        $total_halaman = ceil($total_data / $data_per_halaman);
                                        ?>

                                    </div>
                                    <br>
                                    <hr>
                                    <!-- Tampilkan pagination dengan Bootstrap -->
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-center">
                                            <?php
                                            // Tampilkan tombol "Previous" jika bukan halaman pertama
                                            if ($halaman > 1) {
                                                echo '<li class="page-item"><a class="page-link" href="?jumlah_div=' . $jumlah_div . '&halaman=' . ($halaman - 1) . '" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
                                            } else {
                                                echo '<li class="page-item disabled"><span class="page-link" aria-hidden="true">&laquo;</span></li>';
                                            }

                                            // Tampilkan halaman-halaman
                                            for ($i = 1; $i <= $total_halaman; $i++) {
                                                if ($i == $halaman) {
                                                    echo '<li class="page-item active"><span class="page-link">' . $i . '<span class="sr-only">(current)</span></span></li>';
                                                } else {
                                                    echo '<li class="page-item"><a class="page-link" href="?jumlah_div=' . $jumlah_div . '&halaman=' . $i . '">' . $i . '</a></li>';
                                                }
                                            }

                                            // Tampilkan tombol "Next" jika bukan halaman terakhir
                                            if ($halaman < $total_halaman) {
                                                echo '<li class="page-item"><a class="page-link" href="?jumlah_div=' . $jumlah_div . '&halaman=' . ($halaman + 1) . '" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
                                            } else {
                                                echo '<li class="page-item disabled"><span class="page-link" aria-hidden="true">&raquo;</span></li>';
                                            }
                                            ?>
                                        </ul>
                                    </nav>
                                    <hr>
                                    <!-- Tutup koneksi database -->
                                    <?php
                                    mysqli_close($koneksi);
                                    ?>
                                </div>
                            </div>
                    </div>
                    <!--/.container-->
                    </section>
                    <!--/.blog-->

                    <script>
                        function tampilkanBerita() {
                            var jumlah_div = document.getElementById("jumlah_div").value;
                            var cariData = document.getElementById("cariData").value;
                            // Redirect ke halaman yang sama dengan nilai jumlah_div sebagai parameter
                            window.location.href = window.location.pathname + '?jumlah_div=' + jumlah_div + '&cariData=' + cariData;
                        }
                    </script>


                    <!--footer start-->
                    <footer id="footer" class="footer">
                        <div class="container">
                            <div class="hm-footer-copyright">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p>
                                            &copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
                                        </p>
                                        <!--/p-->
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="footer-social">
                                            <span><i class="fa fa-phone"> +1 (222) 777 8888</i></span>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--/.hm-footer-copyright-->
                        </div>
                        <!--/.container-->

                        <div id="scroll-Top">
                            <div class="return-to-top">
                                <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
                            </div>

                        </div>
                        <!--/.scroll-Top-->

                    </footer>
                    <!--/.footer-->
                    <!--footer end-->

                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- <script type="text/javascript" src="js2/registerUser.js"></script> -->

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