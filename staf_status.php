<?php
include('koneksi.php');

session_start();
if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
    // exit();
} else {

?>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
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

        <!-- css sendiri -->
        <link rel="stylesheet" type="text/css" href="css2/nav-staf7.css">
        <link rel="stylesheet" type="text/css" href="css2/user1.css">
        <link rel="stylesheet" type="text/css" href="css2/loding_ESA.css">

        <link rel="stylesheet" type="text/css" href="kontak.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

        <style>
            .text-overflow-ellipsis {
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;
            }

            .dad {
                border-radius: 50px;
                position: relative;
                top: 40%;
                border: solid 2px #d4d4d4;
                color: #000000;
                overflow: hidden;
                background-image: linear-gradient(180deg, #ffffff 5%, #d2f3ef 100%);
            }

            .btn {
                transition: 0.2s;
                /* Efek transisi */
                box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.233);
                /* Efek bayangan */
                border-radius: 5px;
            }

            .btn:hover {
                transform: scale(1.1);
                box-shadow: 5px 8px 11px rgba(0, 0, 0, 0.425);
            }

            .satu {
                border-radius: 0 0 50% 50%;
            }

            .mad {
                z-index: 100;
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
                z-index: 0;
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
                z-index: 0;

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
                z-index: 0;
            }

            .wad {
                text-align: left;
                background-color: #ffffff;
                color: #000000;
                transition: .5;
                padding: 10px;
            }

            .wad h5 {
                font-size: 1.3em;
            }

            .wad:hover {
                background-color: #d2f3ef83;
                transition: .5;
                padding: 10px;
            }

            @media screen and (max-width: 790px) {
                .dad {
                    border-radius: 50px;
                    border: 10px solid #d2f3ef;
                    position: relative;
                    top: 40%;
                    z-index: 50;
                    border: solid 2px #d4d4d4;
                    color: #000000;
                }

                .wad h5 {
                    font-size: 1.3em;
                }

                .wad p {
                    font-size: 1em;
                }

                .satu {
                    border-radius: 0 0 30% 30%;
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
                    height: 130px;
                    line-height: 100px;
                    right: -23%;
                    top: 75%;
                    opacity: 1;
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
        <!-- Menambahkan perizinan push notification -->
        <script>
            if ('serviceWorker' in navigator) {
                navigator.serviceWorker.register('service-worker.js')
                    .then(function(registration) {
                        console.log('Service Worker berhasil didaftarkan:', registration);
                    })
                    .catch(function(error) {
                        console.error('Gagal mendaftarkan Service Worker:', error);
                    });
            }
        </script>
        <script>
            if ('Notification' in window) {
                Notification.requestPermission().then(function(permission) {
                    if (permission === 'granted') {
                        console.log('Izin notifikasi diberikan');
                    }
                });
            }
        </script>
        <script src="service-worker.js"></script>
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
            <!-- Akhir Navbar -->
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                function hapusData(id) {
                    // Tampilkan konfirmasi penghapusan menggunakan SweetAlert2
                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Data yang dihapus tidak bisa dikembalikan!",
                        icon: "question",
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal',
                        reverseButtons: true,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Jika pengguna mengonfirmasi, kirim data ke proses_hapus_laporan.php
                            fetch('proses_hapus_laporan.php?id=' + id)
                                .then(response => response.json())
                                .then(data => {
                                    if (data.status === 'success') {
                                        // Jika penghapusan berhasil, tampilkan alert success
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Success',
                                            text: data.message
                                        }).then(() => {
                                            // Refresh halaman setelah menekan tombol OK pada alert success
                                            location.reload();
                                        });
                                    } else {
                                        // Jika terjadi error, tampilkan alert gagal
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Error',
                                            text: data.message
                                        });
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                });
                        }
                    });
                }

                function infoData(id, jenis_peralatan, nama_peralatan, jumlah_alat_baik, jumlah_alat_rusak, tgl_kegagalan, jenis_kegagalan, penanganan, kategory_kerusakan, tgl_perbaikan, lama_kegagalan, frekuensi_kegagalan, waktu_pemeliharaan, keterangan) {
                    // Tampilkan pop-up informasi menggunakan SweetAlert2
                    Swal.fire({
                        title: 'Informasi Peralatan <hr>',
                        html: ` <div class="info-popup">
                                    <div class="wad">
                                        <h5>Jenis Peralatan :</h5>
                                        <p class="text-warning">${jenis_peralatan}</p>
                                    </div>
                                    <div class="wad">
                                        <h5>Nama Peralatan :</h5>
                                        <p class="text-warning">${nama_peralatan}</p>
                                    </div>
                                    <div class="wad">
                                        <h5>Jumlah Alat Baik :</h5>
                                        <p class="text-warning">${jumlah_alat_baik}</p>
                                    </div>
                                    <div class="wad">
                                        <h5>Jumlah Alat Rusak :</h5>
                                        <p class="text-warning">${jumlah_alat_rusak}</p>
                                    </div>
                                    <div class="wad">
                                        <h5>Tanggal Mulai Kegagalan :</h5>
                                        <p class="text-warning">${tgl_kegagalan}</p>
                                    </div>
                                    <div class="wad">
                                        <h5>Jenis Kegagalan :</h5>
                                        <p class="text-warning">${jenis_kegagalan}</p>
                                    </div>
                                    <div class="wad">
                                        <h5>Penanganan :</h5>
                                        <p class="text-warning">${penanganan}</p>
                                    </div>
                                    <div class="wad">
                                        <h5>Kategory Kerusakan :</h5>
                                        <p class="text-warning">${kategory_kerusakan}</p>
                                    </div>
                                    <div class="wad">
                                        <h5>Tanggal Perbaikan :</h5>
                                        <p class="text-warning">${tgl_perbaikan}</p>
                                    </div>
                                    <div class="wad">
                                        <h5>Lama Kegagalan :</h5>
                                        <p class="text-warning">${lama_kegagalan}</p>
                                    </div>
                                    <div class="wad">
                                        <h5>Frekuensi Kegagalan :</h5>
                                        <p class="text-warning">${frekuensi_kegagalan}</p>
                                    </div>
                                    <div class="wad">
                                        <h5>Waktu Pemeliharaan :</h5>
                                        <p class="text-warning">${waktu_pemeliharaan}</p>
                                    </div>
                                    <div class="wad">
                                        <h5>Keterangan :</h5>
                                        <p class="text-warning">${keterangan}</p>
                                    </div>
                                </div>
                                <hr>`,
                        icon: 'info',
                        confirmButtonText: 'Edit',
                        confirmButtonColor: '#28a745',
                        showCancelButton: true,
                        cancelButtonText: 'Tutup',
                        cancelButtonColor: '#dc3545',
                        showCloseButton: true,
                        reverseButtons: true,
                        showClass: {
                            popup: 'animate__animated animate__fadeInUp animate__faster'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutDown animate__faster'
                        }, // Tambahkan event handler untuk tombol 'Edit'
                        preConfirm: function() {
                            // Menggunakan AJAX untuk mengirim data ke halaman PHP
                            return $.ajax({
                                type: "POST",
                                url: "proses_data.php", // Ganti dengan URL ke halaman PHP yang sesuai
                                data: {
                                    id: id,
                                    jenis_peralatan: jenis_peralatan,
                                    nama_peralatan: nama_peralatan,
                                    jumlah_alat_baik: jumlah_alat_baik,
                                    jumlah_alat_rusak: jumlah_alat_rusak,
                                    tgl_kegagalan: tgl_kegagalan,
                                    jenis_kegagalan: jenis_kegagalan,
                                    penanganan: penanganan,
                                    kategory_kerusakan: kategory_kerusakan,
                                    tgl_perbaikan: tgl_perbaikan,
                                    lama_kegagalan: lama_kegagalan,
                                    frekuensi_kegagalan: frekuensi_kegagalan,
                                    waktu_pemeliharaan: waktu_pemeliharaan,
                                    keterangan: keterangan
                                },
                                success: function(response) {
                                    console.log(response); // Tampilkan response dari server (opsional)
                                    // Arahkan ke halaman proses_data.php setelah berhasil
                                    window.location.href = "staf_kegiatan_edit.php";
                                }
                            });
                        }
                    });
                }
            </script>
            <div class="container" id="">
                <div class="card dad">
                    <div class="card-body" style="z-index: 10;">
                        <h2 class="card-title text-center p-4">Status Kegiatan</h2>
                        <hr>
                    </div>
                    <div class="custom-bulat1"></div>
                    <div class="custom-bulat2"></div>
                    <div class="custom-bulat3"></div>
                    <div class="custom-bulat4"></div>
                    <div class="custom-form">
                        <div class="comment-widgets scrollable">
                            <?php
                            // Ambil data dari tabel laporan dengan melakukan JOIN
                            $query = "SELECT laporan.*, admin.nama_lengkap, admin.foto_profile FROM laporan
                            INNER JOIN admin ON laporan.id_manager = admin.id_admin
                            ORDER BY laporan.tanggal DESC";
                            $result = mysqli_query($koneksi, $query);
                            $jumlah_data = mysqli_num_rows($result);
                            // Mengecek apakah ada data di tabel laporan
                            if ($jumlah_data > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $nama_manager = $row['nama_lengkap'];
                                    $foto_profile = $row['foto_profile'];
                                    $laporan_kegiatan = $row['laporan_kegiatan'];
                                    $id_laporan = $row['id_laporan'];
                                    $tanggal = $row['tanggal'];
                                    $jenis_peralatan = $row['jenis_peralatan'];
                                    $nama_peralatan = $row['nama_peralatan'];
                                    $jumlah_alat_baik = $row['jumlah_alat_baik'];
                                    $jumlah_alat_rusak = $row['jumlah_alat_rusak'];
                                    $tgl_kegagalan = $row['tgl_kegagalan'];
                                    $jenis_kegagalan = $row['jenis_kegagalan'];
                                    $penanganan = $row['penanganan'];
                                    $kategory_kerusakan = $row['kategory_kerusakan'];
                                    $tgl_perbaikan = $row['tgl_perbaikan'];
                                    $lama_kegagalan = $row['lama_kegagalan'];
                                    $frekuensi_kegagalan = $row['frekuensi_kegagalan'];
                                    $waktu_pemeliharaan = $row['waktu_pemeliharaan'];
                                    $keterangan = $row['keterangan'];

                                    date_default_timezone_set('Asia/Makassar'); // Set zona waktu sesuai dengan lokasi Anda

                                    // Waktu saat ini
                                    $waktu_sekarang = time();

                                    // Waktu data dikirim (gantilah dengan waktu sesuai dengan data Anda)
                                    $waktu_data_dikirim = strtotime($tanggal);

                                    // Hitung selisih waktu dalam detik
                                    $selisih_waktu = $waktu_sekarang - $waktu_data_dikirim;

                                    // Menentukan pesan waktu
                                    if ($selisih_waktu < 60) {
                                        $pesan_waktu = "Baru saja";
                                    } elseif ($selisih_waktu < 3600) {
                                        $pesan_waktu = floor($selisih_waktu / 60) . " menit yang lalu";
                                    } elseif ($selisih_waktu < 86400) {
                                        $pesan_waktu = floor($selisih_waktu / 3600) . " jam yang lalu";
                                    } else {
                                        $pesan_waktu = date("d M Y H:i", $waktu_data_dikirim);
                                    }

                                    // Memotong teks
                                    $panjang_nama_manager = 20;
                                    $panjang_laporan_kegiatan = 250;
                                    $nama_manager_potong = strlen($nama_manager) > $panjang_nama_manager ? substr($nama_manager, 0, $panjang_nama_manager) . '...' : $nama_manager;
                                    $laporan_kegiatan_potong = strlen($laporan_kegiatan) > $panjang_laporan_kegiatan ? substr($laporan_kegiatan, 0, $panjang_laporan_kegiatan) . '...' : $laporan_kegiatan;
                            ?>
                                    <!-- Comment Row -->
                                    <div class="d-flex flex-row comment-row mt-0 mad" style="border-top: 1px solid #ddd; padding-top: 10px;">
                                        <div class="p-2">
                                            <?php
                                            if ($foto_profile) {
                                                // Jika ada foto_profile, gunakan foto_profile
                                                echo '<img src="foto_profile/' . $foto_profile . '" alt="user" width="50" class="rounded-circle">';
                                            } else {
                                                // Jika tidak ada foto_profile, gunakan gambar default
                                                echo '<img src="assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle">';
                                            }
                                            ?>
                                        </div>
                                        <div class="comment-text w-100 p-2">
                                            <h6 class="font-18"><?php echo $nama_manager_potong; ?></h6>
                                            <span class="mb-3 d-block font-14" style="word-spacing: 5px; font-family: 'Poppins', sans-serif;"><?php echo $laporan_kegiatan; ?></span>
                                            <div class="comment-footer">
                                                <button type="button" class="btn btn-danger btn-sm text-white" onclick="hapusData('<?php echo $id_laporan; ?>')"><i class="fas fa-trash-alt"></i></button>
                                                <button type="button" class="btn btn-warning btn-sm text-white" onclick="infoData('<?php echo $id_laporan; ?>','<?php echo $jenis_peralatan; ?>','<?php echo $nama_peralatan; ?>','<?php echo $jumlah_alat_baik; ?>','<?php echo $jumlah_alat_rusak; ?>','<?php echo $tgl_kegagalan; ?>','<?php echo $jenis_kegagalan; ?>','<?php echo $penanganan; ?>','<?php echo $kategory_kerusakan; ?>','<?php echo $tgl_perbaikan; ?>','<?php echo $lama_kegagalan; ?>','<?php echo $frekuensi_kegagalan; ?>','<?php echo $waktu_pemeliharaan; ?>','<?php echo $keterangan; ?>')"><i class="fas fa-info-circle"></i></button>
                                                <span class="text-muted float-end mt-4" style="position: relative; left: 10px;"><?php echo $pesan_waktu; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        function showNotification() {
                                            if ('Notification' in window && Notification.permission === 'granted') {
                                                var options = {
                                                    icon: 'images/7.png',
                                                    body: 'Data laporan direvisi oleh manager <?php echo $nama_manager_potong; ?>.',
                                                };

                                                navigator.serviceWorker.ready.then(function(registration) {
                                                    registration.showNotification('Anda memiliki 1 laporan', options);
                                                });
                                            }
                                        }

                                        // Panggil fungsi untuk menampilkan pemberitahuan jika ada data baru dan data masih belum lewat 24 jam
                                        if (Notification.permission === 'granted' && <?php echo $selisih_waktu; ?> < 86400) {
                                            showNotification();
                                        }
                                    </script>

                            <?php
                                }
                            }
                            if ($jumlah_data <= 1) {
                                echo '
                <style>
                    @media screen and (max-width: 790px) {
                        .custom-bulat1, .custom-bulat2, .custom-bulat3, .custom-bulat4 {
                            opacity: 0;
                        }
    
                        .card {
                            border-radius: 30px;
                            border: 10px solid #d2f3ef;
                            position: relative;
                            bottom: 400px;
                            z-index: 50;
                            border: solid 2px #d4d4d4;
                            color: #000000;
                        }
    
                        .satu {
                            border-radius: 0 0 50% 50%;
                            height: 80%;
                        }
                    }
                </style>';
                            }

                            // Tampilkan pesan jika tabel laporan kosong
                            if ($jumlah_data == 0) {
                                echo '<div class="text-center mb-4">Tidak ada laporan.</div>
                <style>
                    @media screen and (max-width: 790px) {
                        .custom-bulat1, .custom-bulat2, .custom-bulat3, .custom-bulat4 {
                            opacity: 0;
                        }

                        .card {
                            border-radius: 30px;
                            border: 10px solid #d2f3ef;
                            position: relative;
                            bottom: 300px;
                            z-index: 50;
                            border: solid 2px #d4d4d4;
                            color: #000000;
                        }

                        .satu {
                            border-radius: 0 0 50% 50%;
                            height: 70%;
                        }
                    }
                </style>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dr" style="height: 10vh;"></div>
        <!-- js options select -->
        <!--loding  -->
        <div class="loading-overlay" id="loadingOverlay">
            <img src="images/6.png" alt="" class="g1">
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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