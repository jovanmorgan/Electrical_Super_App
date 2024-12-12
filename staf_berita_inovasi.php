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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <!--font-family-->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="berita/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="home3.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <!-- Font Google -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

        <!--linear icon css-->
        <link rel="stylesheet" href="berita/css/linearicons.css">

        <!--animate.css-->
        <link rel="stylesheet" href="berita/css/animate.css">

        <!--flaticon.css-->
        <link rel="stylesheet" href="berita/css/flaticon.css">

        <!--slick.css-->
        <link rel="stylesheet" href="berita/css/slick.css">
        <link rel="stylesheet" href="berita/css/slick-theme.css">

        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="berita/css/bootstrap.min.css">

        <!-- bootsnav -->
        <link rel="stylesheet" href="berita/css/bootsnav.css">

        <!--style.css-->
        <link rel="stylesheet" href="berita/css/style_berita3.css">

        <!--responsive.css-->
        <link rel="stylesheet" href="berita/css/responsive.css">


        <!-- ===== Boxicons CSS ===== -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.25.0/font/bootstrap-icons.css">

        <!-- css sendiri -->
        <link rel="stylesheet" type="text/css" href="css2/nav-staf7.css">
        <link rel="stylesheet" type="text/css" href="css2/user1.css">
        <link rel="stylesheet" type="text/css" href="css2/loding_ESA.css">

        <!-- ===== link font ===== -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="16x16" href="images/7.png">
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

            .welcome-hero-txt {
                padding: 120px;
                position: relative;
                top: 120px;
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

                .welcome-hero-txt {
                    padding: 0px;
                    top: 200px;
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
                    height: 0px;
                }
            }


            @media screen and (max-width: 508px) {
                .welcome-hero-txt {
                    padding: 0px;
                }

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
                        <span class="logo mt-2"><a href="staf_user.php"><img src="images/10.png" alt="" class="gbr2" width="70%" style="position: relative; right: 110px;"></a></span>
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

                    <div class="searchBox">
                        <div class="searchToggle">
                            <i class='bx bx-x cancel'></i>
                            <i class='bx bx-search search'></i>
                        </div>

                        <div class="search-field">
                            <input type="text" id="cariData" placeholder="Search..." name="cariData" value="<?php echo isset($_POST['cariData']) ? $_POST['cariData'] : ''; ?>">
                            <i class='bx bx-search' onclick="tampilkanBerita()"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="satu" style="height: 0px;">
            <img class="bulat1" src="images/donat1.png" alt="" class="g1" style="display: none;">
            <img class="bulat2" src="images/donat1.png" alt="" class="g1" style="display: none;">
        </div>
        <!-- Akhir Navbar -->

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
        $bagian2_judul = $row['bagian2_judul'];
        $bagian2_teks = $row['bagian2_teks'];
        $icon1_judul = $row['icon1_judul'];
        $icon1_teks = $row['icon1_teks'];
        $icon2_judul = $row['icon2_judul'];
        $icon2_teks = $row['icon2_teks'];
        $icon3_judul = $row['icon3_judul'];
        $icon3_teks = $row['icon3_teks'];
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
            <div class="container">
                <div class="welcome-hero-txt">
                    <h2><?php echo $bagian1_judul; ?></h2>
                    <p>
                        <?php echo $bagian1_teks; ?>
                    </p>
                </div>
            </div>
        </section>

        <?php
        mysqli_close($koneksi); // Tutup koneksi ke database
        ?>
        <!--blog start -->
        <section id="blog" class="blog" style="position: relative; bottom: 150px; z-index: 8;">
            <div class="container">
                <div class="blog-content">
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
                                <select class="form-control" style="height: 40px; width: 150px;" name="jumlah_div" id="jumlah_div" onchange="tampilkanBerita()">
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
                            $query = "SELECT * FROM blog WHERE (kategory = 'inovasi') AND (DATE_FORMAT(tanggal, '%d-%b-%Y') LIKE '%$cariData%' OR judul LIKE '%$cariData%' OR link LIKE '%$cariData%' OR teks LIKE '%$cariData%' OR gambar LIKE '%$cariData%') LIMIT $batas_data, $data_per_halaman";
                        } else {
                            $query = "SELECT * FROM blog WHERE kategory = 'inovasi' LIMIT $batas_data, $data_per_halaman";
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
</div>
</div>
</div>
</div>';
                        }
                        if (mysqli_num_rows($result) == 0 && !empty($cariData)) {
                            echo "<h1 class='text-center'><i class='fas fa-info-circle' style='width: 350px;''></i> <br> Data tidak ditemukan</h1>";
                        }

                        // Hitung total halaman
                        $query_jumlah_data = "SELECT COUNT(*) AS jumlah FROM blog";
                        $result_jumlah_data = mysqli_query($koneksi, $query_jumlah_data);
                        $row_jumlah_data = mysqli_fetch_assoc($result_jumlah_data);
                        $total_data = $row_jumlah_data['jumlah'];
                        $total_halaman = ceil($total_data / $data_per_halaman);

                        ?>
                    </div>
                    <br>
                    <hr>
                    <!-- Tampilkan pagination dengan Bootstrap -->
                    <div class="text-center" style="display: block;">
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
                    </div>
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
        <!--blog end -->
        <script>
            function tampilkanBerita() {
                var jumlah_div = document.getElementById("jumlah_div").value;
                var cariData = document.getElementById("cariData").value;
                // Redirect ke halaman yang sama dengan nilai cariData sebagai parameter
                window.location.href = window.location.pathname + '?jumlah_div=' + jumlah_div + '&cariData=' + cariData;
            }
        </script>


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
        <script src="berita/js/jquery.js"></script>

        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

        <!--bootstrap.min.js-->
        <script src="berita/js/bootstrap.min.js"></script>

        <!-- bootsnav js -->
        <script src="berita/js/bootsnav.js"></script>

        <!--feather.min.js-->
        <script src="berita/js/feather.min.js"></script>

        <!-- counter js -->
        <script src="berita/js/jquery.counterup.min.js"></script>
        <script src="berita/js/waypoints.min.js"></script>

        <!--slick.min.js-->
        <script src="berita/js/slick.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <!--Custom JS-->
        <script src="berita/js/custom.js"></script>

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

        <script type="text/javascript" src="js2/loding_ESA.js"></script>
        <script type="text/javascript" src="js2/navbar_app.js"></script>
    </body>

    </html>
<?php } ?>