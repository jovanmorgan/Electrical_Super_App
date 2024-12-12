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

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
        <!-- css sendiri -->
        <link rel="stylesheet" type="text/css" href="css2/nav-staf7.css">
        <link rel="stylesheet" type="text/css" href="css2/user1.css">
        <link rel="stylesheet" type="text/css" href="css2/loding_ESA.css">
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

        <link rel="stylesheet" type="text/css" href="kontak.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

        <style>
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
                border-radius: 0 0 50% 50%;
            }

            .custom-bulat1 {
                position: absolute;
                border: 30px solid #d2f3ef;
                border-radius: 50%;
                left: -10%;
                top: 12%;
                width: 200px;
                /* Sesuaikan lebar dan tinggi sesuai kebutuhan */
                height: 200px;
                text-align: center;
                line-height: 200px;
                /* Ini adalah untuk mengatur teks di tengah div */
                z-index: 0px;
                opacity: 0;
            }

            .custom-bulat2 {
                position: absolute;
                border: 30px solid #d2f3ef;
                border-radius: 50%;
                right: -10%;
                top: 32%;
                width: 200px;
                /* Sesuaikan lebar dan tinggi sesuai kebutuhan */
                height: 200px;
                text-align: center;
                line-height: 200px;
                /* opacity: 0.8; */
                opacity: 0;
                /* Ini adalah untuk mengatur teks di tengah div */
                z-index: 0px;
            }

            .custom-bulat3 {
                position: absolute;
                border: 30px solid #ffffff;
                border-radius: 50%;
                left: -10%;
                top: 52%;
                width: 200px;
                /* Sesuaikan lebar dan tinggi sesuai kebutuhan */
                height: 200px;
                text-align: center;
                line-height: 200px;
                /* opacity: 0.8; */
                opacity: 0;
                /* Ini adalah untuk mengatur teks di tengah div */
                z-index: 0px;
            }

            .custom-bulat4 {
                position: absolute;
                border: 30px solid #ffffff;
                border-radius: 50%;
                right: -10%;
                top: 72%;
                width: 200px;
                /* Sesuaikan lebar dan tinggi sesuai kebutuhan */
                height: 200px;
                text-align: center;
                line-height: 200px;
                opacity: 0;
                /* Ini adalah untuk mengatur teks di tengah div */
                z-index: 0px;
            }

            .ustom-form {
                z-index: 10px;
            }

            @media screen and (max-width: 790px) {
                .card {
                    border-radius: 50px;
                    border: 10px solid #d2f3ef;
                    position: relative;
                    bottom: 530px;
                    z-index: 50;
                    border: solid 2px #d4d4d4;
                    color: #000000;
                }

                .satu {
                    border-radius: 0 0 30% 30%;
                }

                .btn {
                    padding: 10px;
                }

                .custom-bulat1 {
                    width: 130px;
                    /* Sesuaikan lebar dan tinggi sesuai kebutuhan pada tampilan mobile */
                    height: 130px;
                    line-height: 100px;
                    left: -23%;
                    top: 9%;
                    opacity: 1;
                    /* Ini adalah untuk mengatur teks di tengah div */
                }


                .custom-bulat2 {
                    width: 130px;
                    /* Sesuaikan lebar dan tinggi sesuai kebutuhan pada tampilan mobile */
                    height: 130px;
                    line-height: 100px;
                    right: -23%;
                    top: 35%;
                    opacity: 1;
                    /* Ini adalah untuk mengatur teks di tengah div */
                }

                .custom-bulat3 {
                    width: 130px;
                    /* Sesuaikan lebar dan tinggi sesuai kebutuhan pada tampilan mobile */
                    height: 130px;
                    line-height: 100px;
                    left: -23%;
                    top: 55%;
                    opacity: 1;
                    /* Ini adalah untuk mengatur teks di tengah div */
                }

                .custom-bulat4 {
                    width: 130px;
                    /* Sesuaikan lebar dan tinggi sesuai kebutuhan pada tampilan mobile */
                    height: 130px;
                    line-height: 100px;
                    right: -23%;
                    top: 75%;
                    opacity: 1;
                    /* Ini adalah untuk mengatur teks di tengah div */
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
        <div class="satu">
            <img class="bulat1" src="images/donat1.png" alt="" class="g1" style="display: none;">
            <img class="bulat2" src="images/donat1.png" alt="" class="g1" style="display: none;">
        </div>
        <!-- Akhir Navbar -->

        <form method="POST" id="dataForm" enctype="multipart/form-data">
            <!-- <form method="POST" action="simpan_kegiatan.php"> -->
            <div class="container kotak1" id="kotak1">
                <div class="card p-5 mb-5" style="margin-top: 60px; ">

                    <div class="custom-bulat1"></div>
                    <div class="custom-bulat2"></div>
                    <div class="custom-bulat3"></div>
                    <div class="custom-bulat4"></div>

                    <div class="custom-form">
                        <!-- Tombol close hanya tampil di desktop -->
                        <div class="close">
                        </div>
                        <h3 class="text-center text-black">MASUKAN KEGIATAN</h3>
                        <hr>

                        <div class="form-row mt-2">
                            <div class="form-group col-md-6">
                                <label for="jenis_peralatan">UNIT/TITIK PERALATAN</label><br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-toolbox"></i>
                                        </span>
                                    </div>
                                    <select id="jp" class="form-control" name="jenis_peralatan[]" required>
                                        <option value="<?php echo $_SESSION['jenis_peralatan']; ?>">(<?php echo $_SESSION['jenis_peralatan']; ?>)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="barisInput">NAMA PERALATAN</label><br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-charging-station"></i>
                                        </span>
                                    </div>
                                    <select id="np" class="form-control baris" name="nama_peralatan[]" required>
                                        <option value="<?php echo $_SESSION['nama_peralatan']; ?>">(<?php echo $_SESSION['nama_peralatan']; ?>)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-12" id="bentuk_peralatan_container" style="display: none;">
                                <label for="barisInput">DETAIL PERALATAN</label><br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-cogs"></i>
                                        </span>
                                    </div>
                                    <select id="dp" class="form-control" name="detail_peralatan[]">
                                        <option value="" selected>SILAKAN PILIH!</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-row mt-2">
                            <div class="form-group col-md-6">
                                <label for="todoInput" class="details">JUMLAH ALAT BAIK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-check-circle"></i></span>
                                    </div>
                                    <input type="number" min="0" class="form-control todo" value="<?php echo $_SESSION['jumlah_alat_baik']; ?>" id="jumlah_alat_baik" name="jumlah_alat_baik[]" placeholder="Jumlah Alat Yang Baik" required>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="namaInput">JUMLAH ALAT RUSAK</label><br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-times-circle"></i>
                                        </span>
                                    </div>
                                    <input type="number" min="0" id="jumlah_alat_rusak" value="<?php echo $_SESSION['jumlah_alat_rusak']; ?>" class="form-control nama" name="jumlah_alat_rusak[]" placeholder="Masukan Jumlah Alat Rusak" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row mt-2">
                            <div class="form-group col-md-6">
                                <label for="tgl_kegagalan" class="details">TANGGAL MULAI KEGAGALAN</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="far fa-calendar-times"></i></span>
                                    </div>
                                    <?php
                                    // Ambil data tgl_kegagalan dari $_SESSION
                                    $tgl_kegagalan = $_SESSION['tgl_kegagalan'];

                                    // Konversi format tanggal ke format YYYY-MM-DD
                                    $tgl_kegagalan_formatted = date('Y-m-d', strtotime($tgl_kegagalan));
                                    $tgl_kegagalan_sesion = date('d/m/Y', strtotime($tgl_kegagalan));
                                    ?>
                                    <input type="date" class="form-control tmk" id="tgl_kegagalan" value="<?php echo $tgl_kegagalan_formatted; ?>" name="tgl_kegagalan[]" placeholder="Jumlah Alat Yang Baik" required>
                                </div>
                            </div>


                            <div class="form-group col-md-6">
                                <label for="kategory_kerusakan">KATEGORY KERUSAKAN</label><br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-tags"></i>
                                        </span>
                                    </div>
                                    <input type="text" id="kategory_kerusakan" class="form-control kk" value="<?php echo $_SESSION['kategory_kerusakan']; ?>" name="kategory_kerusakan[]" placeholder="Masukan Kategory Kerusakan" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row mt-2">
                            <div class="form-group col-md-6">
                                <label for="jenis_kegagalan" class="details">JENIS KEGAGALAN</label>
                                <div class="input-group">
                                    <div class="input-group">
                                        <span class="input-group-text bg-success text-white mma2"><i class="fas fa-exclamation-circle"></i></span>
                                        <textarea id="jenis_kegagalan" class="form-control jk" name="jenis_kegagalan[]" placeholder="Masukan Jenis Kegagalan Alat" aria-label="With textarea" rows="2" required><?php echo $_SESSION['jenis_kegagalan']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="penanganan" class="details">PENANGANAN/TINDAK LANJUT</label>
                                <div class="input-group">
                                    <div class="input-group">
                                        <span class="input-group-text bg-success text-white mma2"><i class="fas fa-wrench"></i></span>
                                        <textarea class="form-control penanganan" id="penanganan" name="penanganan[]" placeholder="Penanganan Untuk Alat Yang Rusak" aria-label="With textarea" rows="2" required><?php echo $_SESSION['penanganan']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row mt-2">
                            <div class="form-group col-md-6">
                                <label for="tgl_perbaikan" class="details">TANGGAL SELESAI PERBAIKAN</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="far fa-calendar-check"></i></span>
                                    </div>
                                    <?php
                                    // Ambil data tgl_kegagalan dari $_SESSION
                                    $tgl_perbaikan = $_SESSION['tgl_perbaikan'];

                                    // Konversi format tanggal ke format YYYY-MM-DD
                                    $tgl_perbaikan_formatted = date('Y-m-d', strtotime($tgl_perbaikan));
                                    ?>
                                    <input type="date" class="form-control tsp" id="tgl_perbaikan" value="<?php echo $tgl_perbaikan_formatted; ?>" name="tgl_perbaikan[]" placeholder="Tanggal Selesai Perbaikan Alat" required>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="lama_kegagalan">LAMA KEGAGALAN (Jam)</label><br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="far fa-clock"></i>
                                        </span>
                                    </div>
                                    <input type="number" id="lama_kegagalan" value="<?php echo $_SESSION['lama_kegagalan']; ?>" class="form-control lk" name="lama_kegagalan[]" placeholder="Masukan Lama Kerusakan (Jam)" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row mt-2">
                            <div class="form-group col-md-6">
                                <label for="frekuensi_kegagalan" class="details">FREKUENSI KEGAGALAN (Kali)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-history"></i></span>
                                    </div>
                                    <input type="number" min="0" value="<?php echo $_SESSION['frekuensi_kegagalan']; ?>" class="form-control fk" id="frekuensi_kegagalan" name="frekuensi_kegagalan[]" placeholder="Frekuensi Kegagalan (Kali)" required>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="waktu_pemeliharaan">WAKTU PEMELIHARAAN (Jam)</label><br>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="far fa-clock"></i>
                                        </span>
                                    </div>
                                    <input type="number" id="waktu_pemeliharaan" value="<?php echo $_SESSION['waktu_pemeliharaan']; ?>" class="form-control wp" name="waktu_pemeliharaan[]" placeholder="Masukan Lama Waktu Pemeliharaan (Jam)" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row mt-2">
                            <div class="form-group col-md-12">
                                <label for="keterangan" class="details">KETERANGAN</label>
                                <div class="input-group">
                                    <div class="input-group">
                                        <span class="input-group-text bg-success text-white mma2"><i class="far fa-comment" required></i></span>
                                        <textarea class="form-control keterangan" id="keterangan" name="keterangan[]" placeholder="Masukan Keterangan" aria-label="With textarea" rows="2" required><?php echo $_SESSION['keterangan']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Form pertama -->
                        <div class="form-row mt-2">
                            <div class="form-group col-md-12">
                                <label for="gambar1" class="details">GAMBAR KEGIATAN</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white"><i class="far fa-image"></i></span>
                                    </div>
                                    <div class="custom-file" style="overflow: hidden;">
                                        <input type="file" id="gambar1" class="form-control gambar" name="gambar[]" required>
                                        <label class="custom-file-label" for="gambar1">Pilih Gambar Kegiatan</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" id="kode" value="" class="form-control kode" name="kode[]">
                        <input type="hidden" id="status" value="tidak ada" class="form-control status" name="status[]">

                        <script>
                            // Event listener untuk input file
                            document.getElementById('gambar1').addEventListener('change', function() {
                                // Update label custom file dengan nama file yang dipilih
                                var fileName = this.files[0].name;
                                var label = document.querySelector('.custom-file-label');
                                label.innerHTML = fileName;
                            });

                            // Fungsi untuk menghasilkan kode unik
                            function generateUniqueCode() {
                                // Implementasi logika untuk menghasilkan kode unik sesuai kebutuhan Anda
                                // Contoh: Menggunakan timestamp
                                return Date.now().toString(36);
                            }

                            // Fungsi untuk mengisi nilai kode unik ke dalam input
                            function setUniqueCode() {
                                var kodeInput = document.getElementById('kode');
                                kodeInput.value = generateUniqueCode();
                            }

                            // Panggil fungsi setUniqueCode() saat halaman dimuat
                            window.onload = setUniqueCode;
                        </script>


                    </div>
                </div>
            </div>
            </div>

            <div class="container kotak2">
                <div class="card p-4 mb-5">
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col-6">
                            <button type="button" class="btn btn-success d-grid gap-2 col-12 mt-4 btn2" onclick="addNewForm()">Tambah Data</button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="add btn btn-primary d-grid gap-2 col-12 mt-4 btn2" onclick="addData()">Simpan Data</button>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <a type="button" href="staf_status.php" class="btn btn-danger d-grid gap-2 col-6 mt-4 btn2">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--loding  -->
        <div class="loading-overlay" id="loadingOverlay">
            <img src="images/6.png" alt="" class="g1">
        </div>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            let apiBulanJanuari = "https://script.google.com/macros/s/AKfycbzCvpIM2KTUcDwVW5PK6i3D78q523pMjOqq3iosZC3LKiUwJWGlLivV0ztolqNNhiJT1Q/exec"
            let apiBulanFebruari = "https://script.google.com/macros/s/AKfycbz2RHhZBJFGQ371BAm3vnWu5G7g6Ng7R5yYNg2WzFUbZp5FMN6ASGlO9SuKM0nhSxlLcg/exec"
            let apiBulanMaret = "https://script.google.com/macros/s/AKfycbygqMPi8zf-ELg-xfJBCCk1c4JKUhRh2PppZplamZ_ieZElD2rK9yrxuPfHWEMr5hWlPg/exec"
            let apiBulanApril = "https://script.google.com/macros/s/AKfycbzKg5-jAobuTr02QWeQ8IWhrsRFZUEChq4hxgJM7LMS7hWK8DJ3bUJfUEc7gLIplkEf/exec"
            let apiBulanMei = "https://script.google.com/macros/s/AKfycbwbcF-HDiGJcvhIlom6ZTKDEzxqOtKcmJbO74ggHUieKs1LB7DNC2XiWAEpeSIziGhE/exec"
            let apiBulanJuni = "https://script.google.com/macros/s/AKfycbz6WgjPwDLYUAAGuB5YX9qL4ZLFjz69jrbcDEVW5ywHluXhZ_wlY8dx6_hwU94Je2RGRw/exec"
            let apiBulanJuli = "https://script.google.com/macros/s/AKfycbxstAjzGYh7frlwq7IuCxKWbTbVqVp4QGz4RS3GmnNf3zg8v6Dnx9a4u4cnRxXF3GedmQ/exec"
            let apiBulanAgustus = "https://script.google.com/macros/s/AKfycbxoXqo4uLqSQblGeuNau5brPfXElykGIu8lLO4HpUpj_f4krXLuz8Bch3WDDahhsI0N/exec"
            let apiBulanSeptember = "https://script.google.com/macros/s/AKfycby-_sKZSrRcea35hhDIXkqxMASFwvYU58tZag_qmwiuXoVJmluEkExohrFiZYi3hfdG/exec"
            let apiBulanOktober = "https://script.google.com/macros/s/AKfycbz_V4_S_vysrNUi0nZg_DXvom6ryBROc_wtR0vrtRFEkZJx7eiT0mBQN53eKEEE-cTE/exec"
            let apiBulanNovember = "https://script.google.com/macros/s/AKfycbxtVbZujW1kljUyCqaYY7XbuTBJXtwhzNOkazGAADNm_Y-KTmmKCpMmYpE-M73oCJ_b/exec"
            let apiBulanDesember = "https://script.google.com/macros/s/AKfycbzhCIgWRaah4ybpnUMMtjCyUr_AIaoZXpIJAVeoWDADtBYRYG3RGNCe7wKah-jV1TP2FA/exec"

            let api = "";

            // Fungsi untuk mendapatkan bulan dari tanggal
            function getMonthFromDate(dateString) {
                const date = new Date(dateString);
                const month = date.getMonth() + 1; // Bulan dimulai dari 0
                return month;
            }

            // Mendengarkan perubahan pada input tanggal
            document.getElementById('tgl_kegagalan').addEventListener('change', function() {
                const selectedDate = this.value;
                const selectedMonth = getMonthFromDate(selectedDate);

                // Pilih API berdasarkan bulan
                if (selectedMonth === 1) { // Bulan November (0-11)
                    api = apiBulanJanuari;
                } else if (selectedMonth === 2) { // Bulan Desember
                    api = apiBulanFebruari;
                } else if (selectedMonth === 3) { // Bulan Desember
                    api = apiBulanMaret;
                } else if (selectedMonth === 4) { // Bulan Desember
                    api = apiBulanApril;
                } else if (selectedMonth === 5) { // Bulan Desember
                    api = apiBulanMei;
                } else if (selectedMonth === 6) { // Bulan Desember
                    api = apiBulanJuni;
                } else if (selectedMonth === 7) { // Bulan Desember
                    api = apiBulanJuli;
                } else if (selectedMonth === 8) { // Bulan Desember
                    api = apiBulanAgustus;
                } else if (selectedMonth === 9) { // Bulan Desember
                    api = apiBulanSeptember;
                } else if (selectedMonth === 10) { // Bulan Desember
                    api = apiBulanOktober;
                } else if (selectedMonth === 11) { // Bulan Desember
                    api = apiBulanNovember;
                } else if (selectedMonth === 12) { // Bulan Desember
                    api = apiBulanDesember;
                } else {
                    // Setel ke nilai default jika bulan tidak sesuai
                    api = "";
                }

                console.log('API yang dipilih:', api);
            });


            let form = document.querySelector("form");
            let add = document.querySelector(".add");
            let update = document.getElementById("update");
            let tbody = document.querySelector("tbody");

            function addData() {
                // Menonaktifkan tombol saat proses loading
                var form = document.getElementById("dataForm");
                var loadingOverlay = document.getElementById("loadingOverlay");
                loadingOverlay.style.display = "flex";
                add.disabled = true;
                add.textContent = "Loading..";

                // Mengumpulkan nilai input todo, nama, dan baris kelas
                let todos = document.querySelectorAll('.todo');
                let nama = document.querySelectorAll('.nama');
                let tmk = document.querySelectorAll('.tmk');
                let jk = document.querySelectorAll('.jk');
                let penanganan = document.querySelectorAll('.penanganan');
                let kk = document.querySelectorAll('.kk');
                let tsp = document.querySelectorAll('.tsp');
                let lk = document.querySelectorAll('.lk');
                let fk = document.querySelectorAll('.fk');
                let wp = document.querySelectorAll('.wp');
                let keterangan = document.querySelectorAll('.keterangan');
                let baris = document.querySelectorAll('.baris');
                let gambar = document.querySelectorAll('.gambar');
                let status = document.querySelectorAll('.status');
                let kode = document.querySelectorAll('.kode');

                // Pemeriksaan apakah semua input telah diisi
                if (!validateInputs(todos) || !validateInputs(nama) || !validateInputs(tmk) || !validateInputs(jk) ||
                    !validateInputs(penanganan) || !validateInputs(kk) || !validateInputs(tsp) || !validateInputs(lk) ||
                    !validateInputs(fk) || !validateInputs(wp) || !validateInputs(keterangan) || !validateInputs(kode) || !validateInputs(baris)) {
                    // Jika ada input yang belum diisi, tampilkan alert
                    Swal.fire({
                        icon: 'warning',
                        title: 'Peringatan',
                        text: 'Semua inputan harus diisi!',
                    });
                    // Mengaktifkan kembali tombol setelah proses selesai
                    add.textContent = "Tambah Data";
                    loadingOverlay.style.display = "none";
                    add.disabled = false;
                    return;
                }

                // Mendapatkan nilai tanggal kegagalan
                let selectedDate = document.getElementById('tgl_kegagalan').value;
                let tgl_kegagalan_session = "<?php echo $tgl_kegagalan_sesion; ?>";

                // Menggunakan tanggal dari sesion jika tanggal tidak dipilih
                if (!selectedDate && tgl_kegagalan_session) {
                    selectedDate = tgl_kegagalan_session;
                }

                let selectedMonth = getMonthFromDate(selectedDate);

                // Pilih API berdasarkan bulan
                if (selectedMonth === 1) { // Bulan November (0-11)
                    api = apiBulanJanuari;
                } else if (selectedMonth === 2) { // Bulan Desember
                    api = apiBulanFebruari;
                } else if (selectedMonth === 3) { // Bulan Desember
                    api = apiBulanMaret;
                } else if (selectedMonth === 4) { // Bulan Desember
                    api = apiBulanApril;
                } else if (selectedMonth === 5) { // Bulan Desember
                    api = apiBulanMei;
                } else if (selectedMonth === 6) { // Bulan Desember
                    api = apiBulanJuni;
                } else if (selectedMonth === 7) { // Bulan Desember
                    api = apiBulanJuli;
                } else if (selectedMonth === 8) { // Bulan Desember
                    api = apiBulanAgustus;
                } else if (selectedMonth === 9) { // Bulan Desember
                    api = apiBulanSeptember;
                } else if (selectedMonth === 10) { // Bulan Desember
                    api = apiBulanOktober;
                } else if (selectedMonth === 11) { // Bulan Desember
                    api = apiBulanNovember;
                } else if (selectedMonth === 12) { // Bulan Desember
                    api = apiBulanDesember;
                } else {
                    // Setel ke nilai default jika bulan tidak sesuai
                    api = "";
                }

                console.log('API yang dipilih:', api);

                let dataToSend = [];

                // Iterasi melalui elemen-elemen dengan class 'todo'
                todos.forEach((todo, index) => {
                    let todoValue = todo.value;
                    let namaValue = nama[index].value;
                    let tmkValue = tmk[index].value;
                    let jkValue = jk[index].value;
                    let penangananValue = penanganan[index].value;
                    let kkValue = kk[index].value;
                    let tspValue = tsp[index].value;
                    let lkValue = lk[index].value;
                    let fkValue = fk[index].value;
                    let wpValue = wp[index].value;
                    let keteranganValue = keterangan[index].value;
                    let gambarValue = gambar[index].value;
                    let kodeValue = kode[index].value;
                    let statusValue = status[index].value;
                    let barisValue = baris[index].value;

                    // Membuat objek dengan nilai input
                    let obj = {
                        baris: barisValue,
                        todo: todoValue,
                        nama: namaValue,
                        tmk: tmkValue,
                        jk: jkValue,
                        penanganan: penangananValue,
                        kk: kkValue,
                        tsp: tspValue,
                        lk: lkValue,
                        fk: fkValue,
                        wp: wpValue,
                        keterangan: keteranganValue,
                        gambar: gambarValue,
                        status: statusValue,
                        kode: kodeValue
                    };

                    // Menambahkan objek ke array dataToSend
                    dataToSend.push(obj);
                });
                var formData = new FormData(form);
                // Kirim data ke server
                Promise.all([
                        fetch(api, {
                            method: "POST",
                            body: JSON.stringify(dataToSend)
                        }),
                        fetch('simpan_kegiatan.php', {
                            method: "POST",
                            body: formData
                        })
                    ])
                    .then(([googleSheetsRes, simpanKegiatanRes]) => {
                        // Handle respons dari Google Sheets (googleSheetsRes)
                        if (googleSheetsRes.ok) {
                            console.log("Data berhasil disimpan di Google Sheets");
                            // Tambahkan logika atau tindakan setelah berhasil di Google Sheets
                        } else {
                            console.error("Gagal menyimpan data di Google Sheets");
                            // Tambahkan logika atau tindakan jika gagal di Google Sheets
                        }

                        // Handle respons dari simpan_kegiatan.php (simpanKegiatanRes)
                        if (simpanKegiatanRes.ok) {
                            console.log("Data berhasil disimpan di simpan_kegiatan.php");
                            // Tambahkan logika atau tindakan setelah berhasil di simpan_kegiatan.php
                        } else {
                            console.error("Gagal menyimpan data di simpan_kegiatan.php");
                            // Tambahkan logika atau tindakan jika gagal di simpan_kegiatan.php
                        }

                        // Tambahkan logika atau tindakan setelah keduanya berhasil
                        readData();
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Data berhasil disimpan'
                        });
                    })
                    .catch(error => {
                        // Handle jika salah satu atau kedua fetch mengalami kesalahan
                        console.error("Gagal mengirim data:", error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Terjadi kesalahan. Data gagal disimpan.'
                        });
                    })
                    .finally(() => {
                        // Mengaktifkan kembali tombol setelah proses selesai
                        add.textContent = "Tambah Data";
                        loadingOverlay.style.display = "none";
                        add.disabled = false;
                        document.getElementById('dataForm').reset();

                        // Memuat ulang halaman setelah tombol OK ditekan pada pesan sukses
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Data berhasil disimpan'
                        }).then((result) => {
                            if (result.isConfirmed || result.isDismissed) {
                                location.reload();
                            }
                        });
                    });

            }

            // Fungsi untuk memeriksa apakah semua input telah diisi
            function validateInputs(inputs) {
                for (let input of inputs) {
                    if (!input.value) {
                        return false;
                    }
                }
                return true;
            }
        </script>

        <script>
            let formCounter = 1;

            function addNewForm() {
                formCounter++;
                const clonedForm = document.querySelector('.card').cloneNode(true);
                clonedForm.querySelectorAll('input, select, textarea').forEach((element) => {
                    element.value = ''; // Clear input values in the cloned form
                });

                // Update the select elements with unique IDs
                const jpSelect = clonedForm.querySelector('#jp');
                const npSelect = clonedForm.querySelector('#np');
                const dpSelect = clonedForm.querySelector('#dp');
                const bentukPeralatanContainer = clonedForm.querySelector("#bentuk_peralatan_container");
                const jumlahAlatBaik = clonedForm.querySelector('#jumlah_alat_baik');
                const jumlahAlatRusak = clonedForm.querySelector('#jumlah_alat_rusak');
                const tglKegagalan = clonedForm.querySelector('#tgl_kegagalan');
                const jenisKegagalan = clonedForm.querySelector('#jenis_kegagalan');
                const Penanganan = clonedForm.querySelector('#penanganan');
                const kategoryKerusakan = clonedForm.querySelector('#kategory_kerusakan');
                const tglPerbaikan = clonedForm.querySelector('#tgl_perbaikan');
                const lamaKegagalan = clonedForm.querySelector('#lama_kegagalan');
                const frekuensiKegagalan = clonedForm.querySelector('#frekuensi_kegagalan');
                const waktuPemeliharaan = clonedForm.querySelector('#waktu_pemeliharaan');
                const Keterangan = clonedForm.querySelector('#keterangan');
                const status = clonedForm.querySelector('#status');
                const gambar = clonedForm.querySelector('.gambar');
                const customFileLabel = clonedForm.querySelector('.custom-file-label');
                const kode = clonedForm.querySelector('#kode');

                // Assign unique IDs to the select elements
                bentukPeralatanContainer.name = 'bentukPeralatanContainer[' + formCounter + ']';
                jpSelect.name = 'jenis_peralatan[' + formCounter + ']';
                npSelect.name = 'nama_peralatan[' + formCounter + ']';
                dpSelect.name = 'detail_peralatan[' + formCounter + ']';
                jumlahAlatBaik.name = 'jumlah_alat_baik[' + formCounter + ']';
                jumlahAlatRusak.name = 'jumlah_alat_rusak[' + formCounter + ']';
                tglKegagalan.name = 'tgl_kegagalan[' + formCounter + ']';
                jenisKegagalan.name = 'jenis_kegagalan[' + formCounter + ']';
                Penanganan.name = 'penanganan[' + formCounter + ']';
                kategoryKerusakan.name = 'kategory_kerusakan[' + formCounter + ']';
                tglPerbaikan.name = 'tgl_perbaikan[' + formCounter + ']';
                lamaKegagalan.name = 'lama_kegagalan[' + formCounter + ']';
                frekuensiKegagalan.name = 'frekuensi_kegagalan[' + formCounter + ']';
                waktuPemeliharaan.name = 'waktu_pemeliharaan[' + formCounter + ']';
                Keterangan.name = 'keterangan[' + formCounter + ']';
                status.name = 'status[' + formCounter + ']';
                status.value = 'tidak ada';
                gambar.id = 'gambar' + formCounter;
                gambar.name = 'gambar[' + formCounter + ']';
                kode.name = 'kode[' + formCounter + ']';
                kode.value = generateUniqueCode();

                // Assign unique names to the select elements
                bentukPeralatanContainer.name = 'bentukPeralatanContainer[]';
                jpSelect.name = 'jenis_peralatan[]';
                npSelect.name = 'nama_peralatan[]';
                dpSelect.name = 'detail_peralatan[]';
                jumlahAlatBaik.name = 'jumlah_alat_baik[]';
                jumlahAlatRusak.name = 'jumlah_alat_rusak[]';
                tglKegagalan.name = 'tgl_kegagalan[]';
                jenisKegagalan.name = 'jenis_kegagalan[]';
                Penanganan.name = 'penanganan[]';
                kategoryKerusakan.name = 'kategory_kerusakan[]';
                tglPerbaikan.name = 'tgl_perbaikan[]';
                lamaKegagalan.name = 'lama_kegagalan[]';
                frekuensiKegagalan.name = 'frekuensi_kegagalan[]';
                waktuPemeliharaan.name = 'waktu_pemeliharaan[]';
                Keterangan.name = 'keterangan[]';
                status.name = 'status[]';
                gambar.name = 'gambar[]';
                kode.name = 'kode[]';

                customFileLabel.setAttribute('for', 'gambar' + formCounter);

                // Event listener untuk input file di setiap form
                gambar.addEventListener('change', function() {
                    // Update label custom file dengan nama file yang dipilih
                    var fileName = this.files[0].name;
                    customFileLabel.innerHTML = fileName;
                });

                function generateUniqueCode() {
                    // Implementasi logika untuk menghasilkan kode unik sesuai kebutuhan Anda
                    // Contoh: Menggunakan timestamp
                    return Date.now().toString(36);
                }

                // Event listener saat jp berubah
                jpSelect.addEventListener("change", () => {
                    const selectedjp = jpSelect.value;
                    npSelect.innerHTML = '';
                    dpSelect.innerHTML = '';
                    bentukPeralatanContainer.style.display = "none";

                    for (let np of npOptions[selectedjp]) {
                        const option = document.createElement("option");
                        option.text = np;
                        option.value = np;

                        // Menonaktifkan "MPH" dan "Terminal Eksisting"
                        if (np === "MPH" || np === "Terminal Eksisting" || np === "Perkantoran" || np ===
                            "Terminal Baru" || np === "Flood Light" || np === "Lampu Perimeter") {
                            option.disabled = true;
                            option.style.backgroundColor = "#e0e0e0";
                            option.style.textAlign = "center";
                        }

                        npSelect.appendChild(option);
                    }
                });

                npSelect.addEventListener("change", () => {
                    const selectednp = npSelect.value;
                    dpSelect.innerHTML = '';

                    for (let dp of dpOptions[selectednp]) {
                        const option = document.createElement("option");
                        option.text = dp;
                        option.value = dp;
                        dpSelect.appendChild(option);
                    }
                    bentukPeralatanContainer.style.display = "block";
                });

                // Add a "Hapus" button to the cloned form
                const deleteButton = document.createElement('button');
                deleteButton.textContent = 'Delete';
                deleteButton.className = 'btn btn-danger mt-5';
                deleteButton.onclick = function() {
                    clonedForm.remove(); // Remove the cloned form on button click
                    updateLabels(); // Update the labels after removal
                };

                clonedForm.appendChild(deleteButton);
                document.getElementById('kotak1').appendChild(clonedForm);

                updateLabels();
            }


            function updateLabels() {
                const forms = document.querySelectorAll('.card');
                formCounter = 0; // Reset the formCounter
                forms.forEach((form, index) => {
                    formCounter = index + 1; // Update formCounter based on the current index
                    const label = form.querySelector('.t1');
                    label.textContent = `MASUKAN KEGIATAN KE ${formCounter}`;
                });
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
        <!-- js options select -->
        <script>
            const jpSelect = document.getElementById("jp");
            const npSelect = document.getElementById("np");
            const dpSelect = document.getElementById("dp");
            const bentukPeralatanContainer = document.getElementById("bentuk_peralatan_container");

            const jpOptions = {
                "CATU DAYA UTAMA": "CATU DAYA UTAMA",
                "SISTEM PEMBANGKIT": "SISTEM PEMBANGKIT",
                "PANEL TEGANGAN MENENGAH": "PANEL TEGANGAN MENENGAH",
                "PANEL TEGANGAN RENDAH": "PANEL TEGANGAN RENDAH",
                "TRANSFORMATOR": "TRANSFORMATOR",
                "UPS DAN DC POWER SUPPLY": "UPS DAN DC POWER SUPPLY",
                "AERONAUTICAL GROUND LIGHTING": "AERONAUTICAL GROUND LIGHTING"
            };

            const npOptions = {
                "CATU DAYA UTAMA": ["", "Penyulang Penfui", "Penyulang Oesao"],
                "SISTEM PEMBANGKIT": ["", "Genset I Deutz 500 KVA", "Genset II Deutz 500 KVA",
                    "Genset III 250 KVA", "Genset IV Perkins 1250 KVA", "Genset V Perkins 1250 KVA"
                ],
                "PANEL TEGANGAN MENENGAH": ["", "PANEL TM 24KV, 630A 16KA Out going Beban MPH",
                    "PANEL TM 24KV, 630A 16KA Metering", "PANEL TM 24KV,630A 16KA Out going ke Gardu B",
                    "PANEL TM 24KV,630A 16KA Incoming Cubicle DVOR",
                    "PANEL TM 24KV,630A 16KA Outgoing Cubicle DVOR",
                    "PANEL TM 24KV,630A 16KA Outgoing Gardu A", "PANEL TM 24KV,630A 16KA Incoming Genset 500 KVA",
                    "PANEL TM 24KV,630A 16KA Incoming PLN", "PANEL TM 24KV,630A 16KA Outgoing ke Panel ALS",
                    "PANEL TM 24KV,630A 16KA Incoming Panel ALS",
                    "PANEL TM 24KV,630A 16KA Incoming Genset 1250 KVA",
                    "PANEL TM 24KV,630A 16KA Outgoing MPH 2", "PANEL TM 24KV,630A 16KA Outgoing Gardu A2",
                    "PANEL TM 24KV,630A 16KA Spare", "PANEL TM 24KV,630A 16KA Incoming Gardu A",
                    "PANEL TM 24KV,630A 16KA Outgoing Gardu B", "PANEL TM 24KV,630A 16KA Incoming Trafo MPH",
                    "PANEL TM 24KV,630A 16KA Outgoing Trafo 2 (1000A)",
                    "PANEL TM 24KV,630A 16KA Outgoing Trafo 1 (1000A)",
                    "PANEL TM 24KV,630A 16KA Loop Gardu B", "PANEL TM 24KV,630A 16KA Incoming Panel A2",
                    "PANEL TM 24KV,630A 16KA Incoming MPH", "PANEL TM 24KV,630A 16KA Outgoing Trafo A",
                    "PANEL TM 24KV,630A 16KA Incoming Gardu A", "PANEL TM 24KV,630A 16KA Coupler",
                    "PANEL TM 24KV,630A 16KA Incoming Gardu B", "PANEL TM 24KV,630A 16KA Outgoing Trafo B",
                    "PANEL TM 24KV,630A 16KA Metering", "PANEL TM 24KV,630A 16KA Arrester",
                    "PANEL TM 24KV,630A 16KA Outgoing Gardu A ke Gardu C",
                    "PANEL TM 24KV,630A 16KA Outgoing Gardu B ke Gardu C",
                    "PANEL TM 24KV,630A 16KA Metering", "PANEL TM 24KV,630A 16KA Outgoing",
                    "PANEL TM 24KV,630A 16KA Incoming Genset IV", "PANEL TM 24KV,630A 16KA Incoming Genset V"
                ],
                "PANEL TEGANGAN RENDAH": ["", "MPH", "LVMDP MPH", "P. Outgoing MPH", "P. AFL", "Panel Kontrol Genset",
                    "Terminal Eksisting", "LVMDP Gardu A", "P. SDP1", "P. SDP2", "P. SDP3", "Perkantoran",
                    "P. SDP Perkantoran", "P. SDP Perkantoran",
                    "Terminal Baru", "LVMDP Gardu C", "P. Capasitor Bank 750 kvar ",
                    "P. PFFS", "P. SDP SITE", "P. Chiller 1", "P. Chiller 2", "P. Chiller 3 ", "P. KWH GF",
                    "P. POWER GF", "P. SDP A-GF", "P. SDP B-GF", "P. KWH FF", "P. SDP FF", "P. POWER FF"
                ],
                "TRANSFORMATOR": ["", "TRAFO 1000 KVA STEP DOWN UTAMA TERMINAL LAMA",
                    "TRAFO 1000 KVA STEP DOWN BACKUP TERMINAL LAMA",
                    "TRAFO 800 KVA STEP DOWN BACKUP MPH", "TRAFO 1250 KVA STEP UP SINKRON GENSET 2X1250",
                    "TRAFO 1250 KVA STEP UP SINKRON GENSET 2X1250", "TRAFO 800 KVA STEP DOWN UTAMA MPH ",
                    "TRAFO 500 KVA STEP DOWN GARDU B", "TRAFO I 2500 KVA STEP DOWN TERMINAL BARU",
                    "TRAFO II 2500 KVA STEP DOWN TERMINAL BARU", "TRAFO 1250 KVA STEP UP SINKRON GENSET 2X500"
                ],
                "UPS DAN DC POWER SUPPLY": ["", "UPS ONLINE 100 KVA TERMINAL", "UPS ONLINE 100 KVA AFL",
                    "UPS ONLINE 75 KVA MODULAR UP TO 200 KVA"
                ],
                "AERONAUTICAL GROUND LIGHTING": ["", "Runway Lighting", "CCR Runway Lighting",
                    "Approach Lighting", "CCR Approach Lighting",
                    "Precision Approach Path Indicator", "CCR Precision Approach Path Indicator",
                    "Sequence Flashing Light", "Threshold dan Runway End Light",
                    "Taxiway Lighting", "CCR Taxiway Light",
                    "Runway Threshold Identification Light", "Taxiway Guidance Sign",
                    "Apron Light", "Rotating Beacon",
                    "Flood Light", "Timur (Baru)", "Barat (Eksisting)", "Lampu Perimeter", "Arah DVOR",
                    "Arah Pertamina"
                ]
            };

            const dpOptions = {
                "MPH": ["", "LVMDP MPH", "P. Outgoing MPH", "P. AFL", "Panel Kontrol Genset"],
                "Terminal Eksisting": ["", "LVMDP Gardu A", "P. SDP1", "P. SDP2", "P. SDP3 "],
                "Perkantoran": ["", "P. SDP Perkantoran", "P. SDP Perkantoran"],
                "Terminal Baru": ["", "LVMDP Gardu C", "P. Capasitor Bank 750 kvar ",
                    "P. PFFS", "P. SDP SITE", "P. Chiller 1", "P. Chiller 2", "P. Chiller 3 ", "P. KWH GF",
                    "P. POWER GF", "P. SDP A-GF", "P. SDP B-GF", "P. KWH FF", "P. SDP FF", "P. POWER FF"
                ],
                "Flood Light": ["", "Timur (Baru)", "Barat (Eksisting)"],
                "Lampu Perimeter": ["", "Arah DVOR", "Arah Pertamina"]
            };

            // Mengisi opsi jp saat halaman dimuat
            for (let jp in jpOptions) {
                const option = document.createElement("option");
                option.text = jpOptions[jp];
                option.value = jp;
                jpSelect.appendChild(option);
            }

            // Event listener saat jp berubah
            jpSelect.addEventListener("change", () => {
                const selectedjp = jpSelect.value;
                npSelect.innerHTML = '';
                dpSelect.innerHTML = '';
                bentukPeralatanContainer.style.display = "none";

                for (let np of npOptions[selectedjp]) {
                    const option = document.createElement("option");
                    option.text = np;
                    option.value = np;

                    // Menonaktifkan "MPH" dan "Terminal Eksisting"
                    if (np === "MPH" || np === "Terminal Eksisting" || np === "Perkantoran" || np ===
                        "Terminal Baru" || np === "Flood Light" || np === "Lampu Perimeter") {
                        option.disabled = true;
                        option.style.backgroundColor = "#e0e0e0";
                        option.style.textAlign = "center";
                    }

                    npSelect.appendChild(option);

                }
            });

            npSelect.addEventListener("change", () => {
                const selectednp = npSelect.value;
                dpSelect.innerHTML = '';

                for (let dp of dpOptions[selectednp]) {
                    const option = document.createElement("option");
                    option.text = dp;
                    option.value = dp;
                    dpSelect.appendChild(option);
                }

                bentukPeralatanContainer.style.display = "block";

            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
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
        <script type="text/javascript" src="js2/navbar_app.js"></script>
        <script type="text/javascript" src="js2/loding_ESA.js"></script>
    </body>

    </html>
<?php } ?>