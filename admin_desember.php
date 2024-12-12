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
        <title>Halaman Admin Utama</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/7.png">
        <!-- Custom CSS -->
        <link href="assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
        <link href="assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
        <link href="dist/css/style.min.css" rel="stylesheet">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
        <link href="dist/css/style.min.css" rel="stylesheet">

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

            <div class="page-wrapper">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center">Tabel Kegiatan</h1>
                        <hr>
                        <!-- Ganti elemen untuk menampilkan pesan jika data tidak ditemukan dengan alert danger Bootstrap -->
                        <div id="noDataMessage" class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none; margin-top: 10px;">
                            <h4 class="alert-heading"><i class="fas fa-exclamation-circle" style="color: red;"></i> Data tidak ditemukan</h4>
                            <p>Mohon maaf, data yang Anda cari tidak ditemukan.</p>
                            <hr>
                            <p class="mb-0">Silakan coba kembali dengan kata kunci atau pencarian lain.</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>


                        <div class="form-row pembungkus mt-2">
                            <!-- Bagian HTML -->
                            <label for="cariData">CARI DATA</label><br>
                            <div class="input-group">
                                <input type="text" class="form-control" id="cariData" name="cariData" placeholder="Silakan Cari Data" value="<?php echo isset($_POST['cariData']) ? $_POST['cariData'] : ''; ?>">
                                <div class="input-group-append" style="cursor: pointer;">
                                    <button type="button" class="input-group-text" style="cursor: pointer;" onclick="cariData()">
                                        <i class="fas fa-search" style="padding: 3px;"></i>
                                    </button>
                                </div>
                            </div>


                            <div class="form-group dibungkus col-md-3">
                                <label for="jenis_peralatan"> DATA BULAN</label><br>
                                <div class="input-group">
                                    <select name="dataBulan" class="form-control" id="dataBulan" onchange="onChangeDataBulan()">
                                        <option value="" selected disabled>PILIH BULAN</option>
                                        <option value="januari">JANUARI</option>
                                        <option value="februari">FEBRUARI</option>
                                        <option value="maret">MARET</option>
                                        <option value="april">APRIL</option>
                                        <option value="mei">MEI</option>
                                        <option value="juni">JUNI</option>
                                        <option value="juli">JULI</option>
                                        <option value="agustus">AGUSTUS</option>
                                        <option value="september">SEPTEMBER</option>
                                        <option value="oktober">OKTOVER</option>
                                        <option value="november">NOVEMBER</option>
                                        <option value="desember">DESEMBER</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group dibungkus col-md-3">
                                <label for="jenis_peralatan">DATA MINGGU</label><br>
                                <select name="dataMinggu" class="form-control" id="dataMinggu" onchange="onChangeDataMinggu()">
                                    <option value="semuaData">SEMUA MINGGU</option>
                                    <option value="data1">MINGGU KE 1</option>
                                    <option value="data2">MINGGU KE 2</option>
                                    <option value="data3">MINGGU KE 3</option>
                                    <option value="data4">MINGGU KE 4</option>
                                </select>
                            </div>
                        </div>
                        <script>
                            function onChangeDataBulan() {
                                var selectedMonth = document.getElementById('dataBulan').value;
                                if (selectedMonth === 'januari') {
                                    window.location.href = 'admin_januari.php';
                                } else if (selectedMonth === 'februari') {
                                    window.location.href = 'admin_februari.php';
                                } else if (selectedMonth === 'maret') {
                                    window.location.href = 'admin_maret.php';
                                } else if (selectedMonth === 'april') {
                                    window.location.href = 'admin_april.php';
                                } else if (selectedMonth === 'mei') {
                                    window.location.href = 'admin_mei.php';
                                } else if (selectedMonth === 'juni') {
                                    window.location.href = 'admin_juni.php';
                                } else if (selectedMonth === 'juli') {
                                    window.location.href = 'admin_juli.php';
                                } else if (selectedMonth === 'agustus') {
                                    window.location.href = 'admin_agustus.php';
                                } else if (selectedMonth === 'september') {
                                    window.location.href = 'admin_september.php';
                                } else if (selectedMonth === 'oktober') {
                                    window.location.href = 'admin_oktober.php';
                                } else if (selectedMonth === 'november') {
                                    window.location.href = 'admin_november.php';
                                } else if (selectedMonth === 'desember') {
                                    window.location.href = 'admin_desember.php';
                                }
                            }
                        </script>

                        <div class="table-responsive">
                            <!-- <form method="post" action="https://script.google.com/macros/s/AKfycbz0L0_AqOVOXsi4821INqseCFWRNPdrn2cCBacuaGJltKODsFCOL2L0ipltJYg4kVdY/exec" id="my-form"> -->
                            <table id="" class="table table-striped table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Peralatan</th>
                                        <th>Jumlah Alat Baik</th>
                                        <th>Jumlah Alat Rusak</th>
                                        <th>Tanggal Mulai Kegagalan</th>
                                        <th>Jenis Kegagalan</th>
                                        <th>Penanganan</th>
                                        <th>Kategory Kerusakan</th>
                                        <th>Tanggal Perbaikan</th>
                                        <th>Lama Kegagalan (Jam)</th>
                                        <th>Frekuensi Kegagalan (Kali)</th>
                                        <th>Waktu Pemeliharaan (Jam)</th>
                                        <th>Keterangan</th>
                                        <th>Gambar Kegiatan</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <style>
                                    td .gbr {
                                        transition: 0.5s;
                                        /* Efek transisi */
                                        border: 2px solid #3498db;
                                        /* Warna border biru */
                                        box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.233);
                                        /* Efek bayangan */
                                        border-radius: 5px;
                                    }

                                    td .gbr:hover {
                                        transform: scale(1.1);
                                        /* Memperbesar gambar saat dihover */
                                        cursor: pointer;
                                        /* Menampilkan cursor pointer saat dihover */
                                        border: 2px solid #2980b9;
                                        /* Warna border biru yang berbeda saat dihover */
                                        box-shadow: 5px 8px 11px rgba(0, 0, 0, 0.425);
                                        /* Efek bayangan yang berbeda saat dihover */
                                    }

                                    td .btn {
                                        transition: 0.2s;
                                        /* Efek transisi */
                                        box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.233);
                                        /* Efek bayangan */
                                        border-radius: 5px;
                                    }

                                    td .btn:hover {
                                        transform: scale(1.1);
                                        box-shadow: 5px 8px 11px rgba(0, 0, 0, 0.425);
                                    }

                                    .tooltip-link {
                                        position: relative;
                                        display: inline-block;
                                    }

                                    .tooltip-text {
                                        visibility: hidden;
                                        width: 120px;
                                        background-color: #333;
                                        color: #fff;
                                        text-align: center;
                                        border-radius: 6px;
                                        padding: 5px;
                                        position: absolute;
                                        z-index: 1;
                                        bottom: 125%;
                                        /* Atur posisi tooltip di atas gambar */
                                        left: 50%;
                                        margin-left: -60px;
                                        opacity: 0;
                                        transition: opacity 0.3s;
                                    }

                                    .tooltip-link:hover .tooltip-text {
                                        visibility: visible;
                                        opacity: 1;
                                    }

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

                                    @media (max-width: 767px) {
                                        .dibungkus {
                                            max-width: 100%;
                                            /* Mengisi lebar 100% pada layar kecil */
                                        }
                                    }

                                    /* Gaya lainnya tetap seperti sebelumnya */
                                    td .gbr {
                                        transition: 0.5s;
                                        border: 2px solid #3498db;
                                        box-shadow: 3px 4px 8px rgba(0, 0, 0, 0.233);
                                        border-radius: 5px;
                                    }
                                </style>
                                <!-- Modal Edit -->
                                <div class='modal fade' id='editModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                    <div class='modal-dialog'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h5 class='modal-title' id='exampleModalLabel'>Edit Data</h5>
                                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                            </div>
                                            <div class='modal-body'>
                                                <form method='post' id="editForm" enctype="multipart/form-data">

                                                    <input type="hidden" class="form-control" id="kode" name="kode" value="">

                                                    <div class='form-group'>
                                                        <label for='jumlah_alat_baik'>Jumlah Alat Baik</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-check-circle"></i></span>
                                                            </div>
                                                            <input type="number" class="form-control" id="editTodo" name="jumlah_alat_baik" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='jumlah_alat_rusak'>Jumlah Alat Rusak</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-times-circle"></i>
                                                                </span>
                                                            </div>
                                                            <input type="number" id="editNama" class="form-control" name="jumlah_alat_rusak" value="" required>
                                                        </div>
                                                    </div>
                                                    <!-- lanjutan data input lainnya -->
                                                    <div class='form-group'>
                                                        <label for='tgl_kegagalan'>Tanggal Kegagalan</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="far fa-calendar-times"></i></span>
                                                            </div>
                                                            <input type="date" class="form-control" id="editTanggal" name="tgl_kegagalan" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='jenis_kegagalan'>Jenis Kegagalan</label>
                                                        <div class="input-group">
                                                            <div class="input-group">
                                                                <span class="input-group-text bg-success text-white mma2"><i class="fas fa-exclamation-circle"></i></span>
                                                                <textarea id="editJenis" class="form-control" name="jenis_kegagalan" placeholder="" aria-label="With textarea" rows="2" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='penanganan'>Penanganan</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text bg-success text-white mma2"><i class="fas fa-wrench"></i></span>
                                                            <textarea class="form-control" id="editPenanganan" name="penanganan" placeholder="" aria-label="With textarea" rows="2" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='kategory_kerusakan'>Kategory Kerusakan</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-tags"></i>
                                                                </span>
                                                            </div>
                                                            <input type="text" id="editKategory" class="form-control" name="kategory_kerusakan" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='tgl_perbaikan'>Tanggal Selesai Perbaikan</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="far fa-calendar-check"></i></span>
                                                            </div>
                                                            <input type="date" class="form-control" id="editTsp" name="tgl_perbaikan" value='' required>
                                                        </div>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='lama_kegagalan'>Lama Kegagalan</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="far fa-clock"></i>
                                                                </span>
                                                            </div>
                                                            <input type="number" id="editLk" class="form-control" name="lama_kegagalan" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='frekuensi_kegagalan'>Frekuensi Kegagalan</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="fas fa-history"></i></span>
                                                            </div>
                                                            <input type="number" class="form-control" id="editFek2" name="frekuensi_kegagalan" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='waktu_pemeliharaan'>Waktu Pemeliharaan</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text bg-success text-white h-100" id="basic-addon1"><i class="far fa-clock"></i>
                                                                </span>
                                                            </div>
                                                            <input type="text" id="editPemeliharaan" class="form-control" name="waktu_pemeliharaan" value="" required>
                                                        </div>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for="keterangan">Keterangan</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text bg-success text-white mma2"><i class="far fa-comment"></i></span>
                                                            <textarea class="form-control" id="editKeterangan" name="keterangan" placeholder="" aria-label="With textarea" rows="2" required></textarea>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" id="setujui" class="form-control" value="setujui">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary" id="update">Update
                                                            Data</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--loding  -->
                                <div class="loading-overlay" id="loadingOverlay">
                                    <img src="images/6.png" alt="" class="g1">
                                </div>

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
                                </style>

                                <tbody>
                                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                                    <script>
                                        let api =
                                            "https://script.google.com/macros/s/AKfycbzhCIgWRaah4ybpnUMMtjCyUr_AIaoZXpIJAVeoWDADtBYRYG3RGNCe7wKah-jV1TP2FA/exec";
                                        let form = document.querySelector("form");
                                        let add = document.querySelector(".add");
                                        let update = document.getElementById("update");
                                        let tbody = document.querySelector("tbody");


                                        function cariData() {
                                            // Mendapatkan nilai pencarian dari elemen input
                                            let keyword = document.getElementById("cariData").value.toLowerCase();

                                            // Mengarahkan ulang ke halaman yang sama dengan parameter pencarian
                                            window.location.href = `admin_desember.php?cariData=${keyword}`;
                                        }

                                        function onChangeDataMinggu() {
                                            // Mendapatkan nilai terpilih dari elemen select
                                            let selectedValue = document.getElementById("dataMinggu").value;

                                            // Memanggil fungsi readData dengan parameter sesuai dengan nilai terpilih
                                            readData(selectedValue);
                                        }

                                        // Memanggil readData tanpa parameter saat halaman dimuat
                                        document.addEventListener("DOMContentLoaded", function() {
                                            // Mendapatkan nilai pencarian dari parameter URL
                                            let urlParams = new URLSearchParams(window.location.search);
                                            let cariData = urlParams.get('cariData');

                                            // Mengatur nilai input cariData sesuai dengan parameter URL
                                            document.getElementById("cariData").value = cariData;

                                            // Memanggil fungsi readData dengan parameter pencarian
                                            readData("semuaData", cariData);
                                        });

                                        function readData(selectedData, keyword) {
                                            var loadingOverlay = document.getElementById("loadingOverlay");
                                            loadingOverlay.style.display = "flex";

                                            fetch(api)
                                                .then(res => res.json())
                                                .then(data => {
                                                    let todo = data[selectedData];
                                                    let counter = 1;
                                                    // Menerapkan pencarian dengan filter data berdasarkan kata kunci
                                                    let filteredData = todo.filter(each => {
                                                        let searchData = `${each.join(' ').toLowerCase()} ${formatDate(each[5]).toLowerCase()} ${formatDate(each[9]).toLowerCase()}`;
                                                        return searchData.includes(keyword);
                                                    });

                                                    // Mengatur data yang akan ditampilkan berdasarkan hasil pencarian
                                                    let displayData = keyword ? filteredData : todo;

                                                    // Menampilkan pesan jika data tidak ditemukan
                                                    if (displayData.length === 0) {
                                                        document.getElementById("noDataMessage").style.display = "block";
                                                    } else {
                                                        document.getElementById("noDataMessage").style.display = "none";
                                                    }

                                                    let trtd = displayData.map(each => {
                                                        if (each[5] && !isNaN(new Date(each[5])) && each[6]) {
                                                            let gambar = each[41];
                                                            let currentCounter = counter++;
                                                            return `

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
                                                                        </style>

                                                                        <tr>
                                                                        <td class="counter">${currentCounter}</td>
                                                                            <td class="nama_peralatan">${each[1]}</td>
                                                                            <td class="jumlah_alat_baik">${each[3]}</td>
                                                                            <td class="jumlah_alat_rusak">${each[4]}</td>
                                                                            <td class="tgl_kegagalan">${formatDate(each[5])}</td>
                                                                            <td class="jenis_kegagalan">${each[6]}</td>
                                                                            <td class="penanganan">${each[7]}</td>
                                                                            <td class="kategory_kerusakan">${each[8]}</td>
                                                                            <td class="tgl_perbaikan">${formatDate(each[9])}</td>
                                                                            <td class="lama_kegagalan">${each[10]}</td>
                                                                            <td class="frekuensi_kegagalan">${each[12]}</td>
                                                                            <td class="waktu_pemeliharaan">${each[15]}</td>
                                                                            <td class="keterangan">${each[24]}</td>
                                                                            <td>
                                                                            ${gambar
                                                                                    ? `<a href='#' data-bs-toggle='modal' data-bs-target='#gambarModal${each[42]}' class='tooltip-link'>
                                                                                        <img src='uploads/${gambar}' alt='gambar_kegiatan' class='gbr' width='100'>
                                                                                        <span class='tooltip-text'>Tekan Untuk Melihat Gambar</span>
                                                                                    </a>`
                                                                                    : "Gambar Tidak Tersedia"}
                                                                            </td>
                                                                            <td>
                                                                                <button class="edit btn btn-success" type="button" onclick="openEditModal('${each[42]}', '${each[3]}', '${each[4]}', '${each[5]}', '${each[6]}', '${each[7]}', '${each[8]}', '${each[9]}', '${each[10]}', '${each[12]}', '${each[15]}', '${each[24]}')">Edit</button>
                                                                            </td>
                                                                            <td>
                                                                                <button class="delete btn btn-danger" type="button" onclick="delData('${each[42]}', '${each[5]}')">Delete</button>
                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                        </table>
                                                                    <div class="modal fade" id="gambarModal${each[42]}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Gambar Kegiatan</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <img src='uploads/${gambar}' style='width: 100%;' class='img-fluid' alt='${gambar}'>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <!-- Tombol download gambar -->
                                                                                <a href="uploads/${gambar}" download="gambar_kegiatan.jpg" class="btn btn-success">Download</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                    `;
                                                        } else {
                                                            return ''; // Jika data tidak ada, kolom F kosong, atau baris di atas 14, tidak menambahkan baris ke tabel
                                                        }
                                                    });
                                                    tbody.innerHTML = trtd.join("");
                                                    loadingOverlay.style.display = "none";
                                                });
                                        }

                                        // Fungsi untuk memformat tanggal
                                        function formatDate(dateString) {
                                            const options = {
                                                year: 'numeric',
                                                month: 'short',
                                                day: 'numeric'
                                            };
                                            const formattedDate = new Date(dateString).toLocaleDateString('id-ID', options);
                                            return formattedDate;
                                        }

                                        readData();

                                        function delData(kode, tmk) {
                                            Swal.fire({
                                                title: 'Apakah Anda yakin?',
                                                text: 'Data yang telah dihapus tidak dapat kembali!',
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Ya, hapus!',
                                                cancelButtonText: 'Batal',
                                                reverseButtons: true
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    // Menampilkan loading overlay setelah pengguna menekan "Ya, hapus!"
                                                    var loadingOverlay = document.getElementById("loadingOverlay");
                                                    loadingOverlay.style.display = "flex";

                                                    // Fetch pertama untuk menghapus data di Google Sheet
                                                    let googleSheetRequest = fetch(api + `?del=true&kode=${kode}&tmk=${tmk}`)
                                                        .then(res => res.text())
                                                        .then(data => {
                                                            if (data === "success") {
                                                                return Promise.resolve("Data dihapus dari Google Sheet");
                                                            } else {
                                                                return Promise.reject("Gagal menghapus data di Google Sheet");
                                                            }
                                                        });

                                                    // Fetch kedua untuk menghapus data di database lokal
                                                    let localDatabaseRequest = $.ajax({
                                                        url: "proses_hapus_kegiatan.php",
                                                        type: "POST",
                                                        data: {
                                                            kode: kode
                                                        },
                                                        dataType: 'json',
                                                    });

                                                    // Menggabungkan kedua promise dengan Promise.allSettled
                                                    Promise.allSettled([googleSheetRequest, localDatabaseRequest])
                                                        .then(results => {
                                                            console.log('Results:', results);

                                                            // Cek hasil dari masing-masing promise
                                                            let googleSheetResult = results[0];
                                                            let localDatabaseResult = results[1];

                                                            if (googleSheetResult.status === 'fulfilled') {
                                                                console.log('Google Sheet Response:', googleSheetResult.value);
                                                            } else {
                                                                console.error('Error deleting from Google Sheet:', googleSheetResult.reason);
                                                            }

                                                            if (localDatabaseResult.status === 'fulfilled') {
                                                                console.log('Local Database Response:', localDatabaseResult.value);
                                                            } else {
                                                                console.error('Error deleting from Local Database:', localDatabaseResult.reason);
                                                            }

                                                            // Memanggil kembali data setelah penghapusan
                                                            let selectedValue = document.getElementById("dataMinggu").value;
                                                            readData(selectedValue);
                                                            loadingOverlay.style.display = "none";
                                                            Swal.fire({
                                                                icon: 'success',
                                                                title: 'Success',
                                                                text: 'Data Berhasil Dihapus!'
                                                            }).then((result) => {
                                                                readData(selectedValue);
                                                            });
                                                            // Menyembunyikan loading overlay setelah operasi selesai
                                                            loadingOverlay.style.display = "none";
                                                        })
                                                        .catch(error => {
                                                            // Jika ada kesalahan dalam salah satu promise
                                                            Swal.fire({
                                                                icon: 'error',
                                                                title: 'Error',
                                                                text: 'Terjadi kesalahan. Data gagal dihapus.',
                                                            });
                                                            console.error('Error:', error);
                                                            // Menyembunyikan loading overlay setelah operasi selesai
                                                            loadingOverlay.style.display = "none";
                                                        });
                                                }
                                            });
                                        }

                                        function openEditModal(kode, todoText, namaText, tanggalText, jenisText, penanganaText, kategoryText, tspText,
                                            lkText, fekText, pemText, ketText) {
                                            // Menetapkan nilai ke input dalam modal
                                            document.getElementById('kode').value = kode;
                                            document.getElementById('editTodo').value = todoText;
                                            document.getElementById('editNama').value = namaText;
                                            document.getElementById('editTanggal').value = formatDateForInputDate(tanggalText);
                                            document.getElementById('editJenis').value = jenisText;
                                            document.getElementById('editPenanganan').value = penanganaText;
                                            document.getElementById('editKategory').value = kategoryText;
                                            document.getElementById('editTsp').value = formatDateForInputDate(tspText);
                                            document.getElementById('editLk').value = lkText;
                                            document.getElementById('editFek2').value = fekText;
                                            document.getElementById('editPemeliharaan').value = pemText;
                                            document.getElementById('editKeterangan').value = ketText;
                                            // Menetapkan fungsi updateData dengan kode sebagai parameter
                                            update.setAttribute("onclick", `updateData('${kode}')`);
                                            // Menyimpan kode pada elemen tombol update untuk referensi nanti
                                            document.getElementById('update').setAttribute("data-kode", kode);

                                            // Membuka modal
                                            $('#editModal').modal('show');
                                        }

                                        // Fungsi untuk memformat tanggal untuk input type "date"
                                        function formatDateForInputDate(dateString) {
                                            const formattedDate = new Date(dateString).toISOString().split('T')[0];
                                            return formattedDate;
                                        }

                                        function updateData() {
                                            let updatedTodo = document.getElementById('editTodo').value;
                                            let updatedNama = document.getElementById('editNama').value;
                                            let updatedTanggal = document.getElementById('editTanggal').value;
                                            let updatedJenis = document.getElementById('editJenis').value;
                                            let updatedPenanganan = document.getElementById('editPenanganan').value;
                                            let updatedKategory = document.getElementById('editKategory').value;
                                            let updatedTsp = document.getElementById('editTsp').value;
                                            let updatedLk = document.getElementById('editLk').value;
                                            let updatedFek = document.getElementById('editFek2').value;
                                            let updatedPemeliharaan = document.getElementById('editPemeliharaan').value;
                                            let updatedKeterangan = document.getElementById('editKeterangan').value;
                                            let status = document.getElementById('setujui').value;
                                            let kode = document.getElementById('update').getAttribute("data-kode");
                                            let loadingOverlay = document.getElementById("loadingOverlay");

                                            update.disabled = true;
                                            update.textContent = "Updating..";
                                            loadingOverlay.style.display = "flex";
                                            $('#editModal').modal('hide');

                                            // Fetch pertama: Mengirim data ke API
                                            fetch(api + `?update=true&kode=${kode}&data=${updatedTodo}&nama=${updatedNama}&tmk=${updatedTanggal}&jk=${updatedJenis}&penanganan=${updatedPenanganan}&kk=${updatedKategory}&tsp=${updatedTsp}&lk=${updatedLk}&fk=${updatedFek}&wp=${updatedPemeliharaan}&keterangan=${updatedKeterangan}`)
                                                .then(res => res.text())
                                                .then(data => {
                                                    // Memanggil kembali data setelah penghapusan
                                                    let selectedValue = document.getElementById("dataMinggu").value;
                                                    readData(selectedValue);
                                                    loadingOverlay.style.display = "none";
                                                    Swal.fire({
                                                        icon: 'success',
                                                        title: 'Success',
                                                        text: data
                                                    }).then((result) => {
                                                        readData(selectedValue);
                                                    });
                                                    // Menyembunyikan loading overlay setelah operasi selesai
                                                    loadingOverlay.style.display = "none";
                                                    fetch("proses_edit_kegiatan.php", {
                                                            method: "POST",
                                                            headers: {
                                                                "Content-Type": "application/x-www-form-urlencoded"
                                                            },
                                                            body: `kode=${kode}&jumlah_alat_baik=${updatedTodo}&jumlah_alat_rusak=${updatedNama}&tgl_kegagalan=${updatedTanggal}&jenis_kegagalan=${updatedJenis}&penanganan=${updatedPenanganan}&kategory_kerusakan=${updatedKategory}&tgl_perbaikan=${updatedTsp}&lama_kegagalan=${updatedLk}&frekuensi_kegagalan=${updatedFek}&waktu_pemeliharaan=${updatedPemeliharaan}&keterangan=${updatedKeterangan}`,
                                                        })
                                                        .then(res => res.text())
                                                        .then(data => {

                                                            form.reset();
                                                            update.disabled = false;
                                                            update.textContent = "Update Data";
                                                            $('#editModal').modal('hide');

                                                        });
                                                    loadingOverlay.style.display = "none";
                                                });
                                        }

                                        function hapusSemuaData() {
                                            // Menampilkan konfirmasi menggunakan SweetAlert
                                            Swal.fire({
                                                title: 'Anda yakin?',
                                                text: 'Semua data akan dihapus dan tidak dapat dikembalikan!',
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Ya, hapus semua data!'
                                            }).then((result) => {
                                                // Jika pengguna mengonfirmasi penghapusan
                                                if (result.isConfirmed) {
                                                    // Menyusun URL API untuk menghapus semua data
                                                    let deleteAllApi = `${api}?delAll=true`;

                                                    var loadingOverlay = document.getElementById("loadingOverlay");
                                                    loadingOverlay.style.display = "flex";

                                                    // Melakukan fetch ke API untuk menghapus semua data
                                                    fetch(deleteAllApi)
                                                        .then(res => res.json())
                                                        .then(data => {
                                                            // Memanggil kembali data setelah penghapusan
                                                            let selectedValue = document.getElementById("dataMinggu").value;
                                                            readData(selectedValue);
                                                            loadingOverlay.style.display = "none";

                                                            // Menampilkan notifikasi berdasarkan status yang diterima dari server
                                                            if (data && data.status === "success") {
                                                                Swal.fire({
                                                                    icon: 'success',
                                                                    title: 'Sukses!',
                                                                    text: 'Semua data berhasil dihapus!',
                                                                    showConfirmButton: true, // Show OK button
                                                                }).then((result) => {
                                                                    readData(selectedValue);
                                                                });
                                                                // Menyembunyikan loading overlay setelah operasi selesai
                                                                loadingOverlay.style.display = "none";
                                                            } else {
                                                                Swal.fire({
                                                                    icon: 'error',
                                                                    title: 'Oops...',
                                                                    text: 'Terjadi kesalahan saat menghapus semua data!',
                                                                    showConfirmButton: true, // Show OK button
                                                                });
                                                            }
                                                        })
                                                        .catch(error => {
                                                            console.error('Error:', error);
                                                            loadingOverlay.style.display = "none";

                                                            // Menampilkan notifikasi jika terjadi kesalahan fetch
                                                            Swal.fire({
                                                                icon: 'error',
                                                                title: 'Oops...',
                                                                text: 'Terjadi kesalahan saat menghapus semua data!',
                                                                showConfirmButton: true, // Show OK button
                                                            });
                                                        });
                                                }
                                            });
                                        }
                                    </script>
                            </table>
                            <button type="button" class="btn btn-danger" id="hapusSemuaData" onclick="hapusSemuaData()" style="position: absolute; bottom: -60px; width: 70%; left: 15%; padding: 10px; color: #fff; border-radius: 30px; font-size: 1em;">Hapus Semua Data</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <script>
                function populateOptions() {
                    const jpSelect = document.getElementById("jenis_peralatan");
                    const npSelect = document.getElementById("nama_peralatan");

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


                    // Populate opsi jenis peralatan
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
                        // dpSelect.innerHTML = '';

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

                    // Event listener saat nama peralatan berubah
                    npSelect.addEventListener("change", () => {
                        const selectednp = npSelect.value;
                        // dpSelect.innerHTML = '';

                        for (let dp of dpOptions[selectednp]) {
                            const option = document.createElement("option");
                            option.text = dp;
                            option.value = dp;
                            // dpSelect.appendChild(option);
                        }
                    });
                }

                // Panggil fungsi untuk menginisialisasi opsi
                populateOptions();
            </script>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://apis.google.com/js/api.js"></script>

            <script>
                const showPopupButton = document.getElementById("showPopupButton");

                showPopupButton.addEventListener("click", function() {
                    Swal.fire({
                        title: 'Pilih Data',
                        html: '<button class="swal2-confirm swal2-styled" onclick="downloadPDF()">Download PDF</button>' +
                            '<button class="swal2-confirm swal2-styled" onclick="downloadExcel()">Download Excel</button>' +
                            '<button class="swal2-confirm swal2-styled" onclick="importGoogleSheet()">Impor ke Google Spreadsheet</button>',
                        showCancelButton: false,
                        showCloseButton: true,
                        showConfirmButton: false, // Tombol "OK" dihapus
                        focusConfirm: false,
                        icon: 'question' // Mengganti ikon "warning" dengan "question"
                    });
                });

                function downloadPDF() {
                    // Logic untuk mengunduh PDF
                    // Misalnya, Anda dapat mengarahkan pengguna ke tautan PDF atau menghasilkan PDF di sini.
                    window.location.href = "link-ke-download-pdf.php";
                }

                function downloadExcel() {
                    // Logic untuk mengunduh Excel
                    // Misalnya, Anda dapat mengarahkan pengguna ke tautan Excel atau menghasilkan Excel di sini.
                    window.location.href = "download_excel.php";
                }

                function importGoogleSheet() {
                    // Logic untuk mengimpor ke Google Spreadsheet
                    // Anda perlu mengganti ini dengan logika sebenarnya untuk mengimpor ke Google Spreadsheet.
                    window.open("https://docs.google.com/spreadsheets/d/1YvSgU_EjMrNNIpUbmZKSMpPdVhkqJZI4ZfMJWAOv-Ug/edit?hl=id#gid=0", "_blank");
                }
            </script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.6.1/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
            <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
            <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
            <script>
                $('#zero_config').DataTable();
            </script>


    </body>

    </html>
<?php } ?>