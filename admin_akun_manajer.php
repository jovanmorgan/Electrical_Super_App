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

        <!-- Sertakan jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <!-- Sertakan DataTables CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

        <!-- Sertakan DataTables JS -->
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

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
            <?php
            include('koneksi.php');

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $query = "SELECT id_admin FROM admin";
                $id_admins = mysqli_query($koneksi, $query);

                if (!$id_admins) {
                    die("Query gagal: " . mysqli_error($koneksi));
                }

                $updatedCheckboxStatus = array();

                while ($row = mysqli_fetch_assoc($id_admins)) {
                    $id = $row['id_admin'];
                    $checkboxName = "checkbox_" . $id;

                    if (isset($_POST[$checkboxName]) && $_POST[$checkboxName] == 'on') {
                        $updatedCheckboxStatus[$id] = 'telah disetujui';
                    } else {
                        $updatedCheckboxStatus[$id] = 'belum disetujui';
                    }
                }

                foreach ($updatedCheckboxStatus as $id => $status) {
                    $updateQuery = "UPDATE admin SET status_akun='$status' WHERE id_admin='$id'";
                    $updateResult = mysqli_query($koneksi, $updateQuery);

                    if (!$updateResult) {
                        die("Gagal memperbarui status akun: " . mysqli_error($koneksi));
                    }
                }
            }

            $jumlah_data = isset($_GET['jumlah_data']) ? $_GET['jumlah_data'] : 5;
            $halaman = isset($_GET['halaman']) ? $_GET['halaman'] : 1;
            $data_per_halaman = $jumlah_data;
            $batas_data = ($halaman - 1) * $data_per_halaman;

            // Ambil nilai cariData
            $cariData = isset($_GET['cariData']) ? mysqli_real_escape_string($koneksi, $_GET['cariData']) : '';

            if (!empty($cariData)) {
                $query = "SELECT * FROM admin WHERE username LIKE '%$cariData%' OR password LIKE '%$cariData%' OR nama_lengkap LIKE '%$cariData%' OR email LIKE '%$cariData%' OR jenis_kelamin LIKE '%$cariData%' OR tanggal_lahir LIKE '%$cariData%' OR alamat LIKE '%$cariData%' OR hp LIKE '%$cariData%' LIMIT $batas_data, $data_per_halaman";
            } else {
                $query = "SELECT * FROM admin LIMIT $batas_data, $data_per_halaman";
            }

            $result = mysqli_query($koneksi, $query);

            if (!$result) {
                die("Query gagal: " . mysqli_error($koneksi));
            }

            $no = 1;
            ?>
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

            <div class="page-wrapper">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center">Tabel Manager</h1>
                        <hr>
                        <div class="form-row pembungkus mt-2">
                            <div class="form-group dibungkus col-md-3">
                                <label for="lihatJumlahData"> LIHAT JUMLAH DATA</label><br>
                                <div class="input-group">
                                    <select class="form-control" name="jumlah_data" id="jumlah_data" onchange="tampilkanBerita()">
                                        <?php
                                        $selected_5 = (isset($_GET['jumlah_data']) && $_GET['jumlah_data'] == 5) ? 'selected' : '';
                                        $selected_10 = (isset($_GET['jumlah_data']) && $_GET['jumlah_data'] == 10) ? 'selected' : '';
                                        $selected_25 = (isset($_GET['jumlah_data']) && $_GET['jumlah_data'] == 25) ? 'selected' : '';
                                        $selected_50 = (isset($_GET['jumlah_data']) && $_GET['jumlah_data'] == 12) ? 'selected' : '';
                                        $selected_100 = (isset($_GET['jumlah_data']) && $_GET['jumlah_data'] == 100) ? 'selected' : '';
                                        ?>

                                        <option value="5" <?php echo $selected_10; ?>>Lihat 5 Data</option>
                                        <option value="10" <?php echo $selected_10; ?>>Lihat 10 Data</option>
                                        <option value="25" <?php echo $selected_25; ?>>Lihat 25 Data</option>
                                        <option value="50" <?php echo $selected_50; ?>>Lihat 50 Data</option>
                                        <option value="100" <?php echo $selected_100; ?>>Lihat 100 Data</option>
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
                        <div class="table-responsive">
                            <form method="post">
                                <table id="" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="customcheckbox mb-3">
                                                    <input type="checkbox" id="mainCheckbox" />
                                                    <span class="checkmark"></span>
                                                </label>
                                            </th>
                                            <th>No</th>
                                            <th>Nip-Username</th>
                                            <th>Password</th>
                                            <th>Nama Lengkap</th>
                                            <th>Email</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Asal Bandara</th>
                                            <th>No Hp</th>
                                            <th>Akun</th>
                                            <th>Status Akun</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            // Mengisi data ke dalam tabel HTML
                                            $id = $row['id_admin'];
                                            echo "<tr>";
                                            echo "<td>"; // Tambahkan kolom checkbox di sini
                                            echo '<label class="customcheckbox">';
                                            $checkboxName = "checkbox_" . $row['id_admin']; // Gunakan id_admin sebagai bagian dari nama input checkbox
                                            $checked = ($row['status_akun'] == 'telah disetujui') ? 'checked' : '';
                                            echo "<input type='checkbox' class='listCheckbox' name='$checkboxName' $checked />";
                                            echo '<span class="checkmark"></span>';
                                            echo '</label>';
                                            echo "</td>";
                                            echo "<td>" . $no . "</td>";
                                            echo "<td>" . $row['username'] . "</td>";
                                            echo "<td>" . $row['password'] . "</td>";
                                            echo "<td>" . $row['nama_lengkap'] . "</td>";
                                            echo "<td>" . $row['email'] . "</td>";
                                            echo "<td>" . $row['jenis_kelamin'] . "</td>";
                                            echo "<td>" . $row['tanggal_lahir'] . "</td>";
                                            echo "<td>" . $row['alamat'] . "</td>";
                                            echo "<td>" . $row['hp'] . "</td>";
                                            echo "<td>" . $row['status'] . "-manager" . "</td>";
                                            echo "<td>" . $row['status_akun'] . "</td>";
                                            echo "<td><button type='button' class='btn btn-success text-white' data-bs-toggle='modal' data-bs-target='#editModal$id'>Edit</button></td>";
                                            echo "<!-- Tambahkan atribut data-id ke tombol Hapus -->
                                            <td><button type='button' class='btn btn-danger text-white delete-btn' data-bs-toggle='modal' data-bs-target='#hapusModal$id' data-id='$id'>Hapus</button></td>
                                            ";
                                            echo "</tr>";

                                            // Modal Edit
                                            echo "<div class='modal fade' id='editModal$id' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                                            echo "<div class='modal-dialog'>";
                                            echo "<div class='modal-content'>";
                                            echo "<div class='modal-header'>";
                                            echo "<h5 class='modal-title' id='exampleModalLabel'>Edit Data</h5>";
                                            echo "<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
                                            echo "</div>";
                                            echo "<div class='modal-body'>";
                                            echo "<form method='post'>";
                                            echo "<input type='hidden' name='id' value='$id'>";

                                            echo "<div class='form-group'>";
                                            echo "<label for='username$id'>Nip-Username</label>";
                                            echo "<input type='text' class='form-control' id='username$id' name='username' value='" . $row["username"] . "'>";
                                            echo "</div>";

                                            echo "<div class='form-group'>";
                                            echo "<label for='password$id'>Password</label>";
                                            echo "<input type='text' class='form-control' id='password$id' name='password' value='" . $row["password"] . "'>";
                                            echo "</div>";

                                            echo "<div class='form-group'>";
                                            echo "<label for='nama_lengkap$id'>Nama Lengkap</label>";
                                            echo "<input type='text' class='form-control' id='nama_lengkap$id' name='nama_lengkap' value='" . $row["nama_lengkap"] . "'>";
                                            echo "</div>";

                                            echo "<div class='form-group'>";
                                            echo "<label for='email$id'>Email</label>";
                                            echo "<input type='text' class='form-control' id='email$id' name='email' value='" . $row["email"] . "'>";
                                            echo "</div>";

                                            echo "<div class='form-group'>";
                                            echo "<label for='jenis_kelamin$id'>Jenis Kelamin</label><br>";
                                            echo "<div class='form-check form-check-inline'>";
                                            echo "<input class='form-check-input' type='radio' name='jenis_kelamin' id='jk_l' value='Laki-Laki' " . ($row["jenis_kelamin"] == 'Laki-Laki' ? 'checked' : '') . " required>";
                                            echo "<label class='form-check-label' for='jenis_kelamin$id'>Laki-Laki</label>";
                                            echo "</div>";
                                            echo "<div class='form-check form-check-inline'>";
                                            echo "<input class='form-check-input' type='radio' name='jenis_kelamin' id='jk_p' value='Perempuan' " . ($row["jenis_kelamin"] == 'Perempuan' ? 'checked' : '') . " required>";
                                            echo "<label class='form-check-label' for='jenis_kelamin$id'>Perempuan</label>";
                                            echo "</div>";
                                            echo "</div>";

                                            echo "<div class='form-group'>";
                                            echo "<label for='tanggal_lahir$id'>Tanggal lahir</label>";
                                            echo "<input type='date' class='form-control' id='tanggal_lahir$id' name='tanggal_lahir' value='" . $row["tanggal_lahir"] . "'>";
                                            echo "</div>";

                                            echo "<div class='form-group'>";
                                            echo "<label for='alamat$id'>Asal Bandara</label>";
                                            echo "<input type='text' class='form-control' id='alamat$id' name='alamat' value='" . $row["alamat"] . "'>";
                                            echo "</div>";

                                            echo "<div class='form-group'>";
                                            echo "<label for='hp$id'>No Hp</label>";
                                            echo "<input type='number' class='form-control' id='hp$id' name='hp' value='" . $row["hp"] . "'>";
                                            echo "</div>";

                                            echo "</form>";
                                            echo "</div>";
                                            echo "<div class='modal-footer'>";
                                            echo "<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Tutup</button>";
                                            // Tambahkan atribut id ke tombol "Simpan"
                                            echo "<button type='button' class='btn btn-primary' id='simpanButton$id'>Simpan</button>";
                                            echo "</div>";
                                            echo "</div>";
                                            echo "</div>";
                                            echo "</div>";
                                            $no++; // Increment nomor urut
                                        }
                                        if (mysqli_num_rows($result) == 0 && !empty($cariData)) {
                                            echo "<tr><td colspan='12' class='text-center'><i class='fas fa-info-circle' style='width: 350px;''></i> <br> Data tidak ditemukan</td></tr>";
                                        }


                                        // Hitung total halaman
                                        $query_jumlah_data = "SELECT COUNT(*) AS jumlah FROM blog";
                                        $result_jumlah_data = mysqli_query($koneksi, $query_jumlah_data);
                                        $row_jumlah_data = mysqli_fetch_assoc($result_jumlah_data);
                                        $total_data = $row_jumlah_data['jumlah'];
                                        $total_halaman = ceil($total_data / $data_per_halaman);

                                        ?>
                                    </tbody>
                                </table>

                                <button type="submit" class="btn btn-primary" style="position: absolute; bottom: -60px; width: 70%; left: 15%; padding: 10px; color: #fff; border-radius: 30px; font-size: 1em;">Simpan Status Akun</button>

                            </form>
                        </div>
                    </div>
                    <!-- Tampilkan pagination dengan Bootstrap -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <?php
                            // Tampilkan tombol "Previous" jika bukan halaman pertama
                            if ($halaman > 1) {
                                echo '<li class="page-item"><a class="page-link" href="?jumlah_data=' . $jumlah_data . '&halaman=' . ($halaman - 1) . '" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
                            } else {
                                echo '<li class="page-item disabled"><span class="page-link" aria-hidden="true">&laquo;</span></li>';
                            }

                            // Tampilkan halaman-halaman
                            for ($i = 1; $i <= $total_halaman; $i++) {
                                if ($i == $halaman) {
                                    echo '<li class="page-item active"><span class="page-link">' . $i . '<span class="sr-only">(current)</span></span></li>';
                                } else {
                                    echo '<li class="page-item"><a class="page-link" href="?jumlah_data=' . $jumlah_data . '&halaman=' . $i . '">' . $i . '</a></li>';
                                }
                            }

                            // Tampilkan tombol "Next" jika bukan halaman terakhir
                            if ($halaman < $total_halaman) {
                                echo '<li class="page-item"><a class="page-link" href="?jumlah_data=' . $jumlah_data . '&halaman=' . ($halaman + 1) . '" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
                            } else {
                                echo '<li class="page-item disabled"><span class="page-link" aria-hidden="true">&raquo;</span></li>';
                            }
                            ?>
                        </ul>
                    </nav>

                    <!-- Tutup koneksi database -->
                    <?php
                    mysqli_close($koneksi);
                    ?>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <script>
                function tampilkanBerita() {
                    var jumlah_data = document.getElementById("jumlah_data").value;
                    var cariData = document.getElementById("cariData").value;

                    // Redirect ke halaman yang sama dengan nilai jumlah_data dan cariData sebagai parameter
                    window.location.href = window.location.pathname + '?jumlah_data=' + jumlah_data + '&cariData=' + cariData;
                }
            </script>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    $("button[id^='simpanButton']").click(function() {
                        var id = $(this).attr("id").replace("simpanButton", "");
                        var username = $("#username" + id).val();
                        var password = $("#password" + id).val();
                        var nama_lengkap = $("#nama_lengkap" + id).val();
                        var email = $("#email" + id).val();
                        var jenis_kelamin = $("#editModal" + id).find('input[name="jenis_kelamin"]:checked').val();
                        var tanggal_lahir = $("#tanggal_lahir" + id).val();
                        var alamat = $("#alamat" + id).val();
                        var hp = $("#hp" + id).val();
                        // Ambil data dari input lain sesuai kebutuhan

                        $.ajax({
                            url: "proses_edit_manajer.php",
                            type: "POST",
                            data: {
                                id: id,
                                username: username,
                                password: password,
                                nama_lengkap: nama_lengkap,
                                email: email,
                                jenis_kelamin: jenis_kelamin,
                                tanggal_lahir: tanggal_lahir,
                                alamat: alamat,
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
                                            $("#editModal" + id).modal("hide");
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
            </script>

            <script>
                // Tambahkan script jQuery untuk menampilkan pesan konfirmasi
                $(document).ready(function() {
                    // ...

                    // Script untuk menampilkan pesan konfirmasi saat tombol Hapus diklik
                    $(".delete-btn").click(function() {
                        var id = $(this).data("id");
                        Swal.fire({
                            title: 'Apakah Anda yakin ingin menghapus data ini?',
                            text: "Data yang dihapus tidak dapat dikembalikan!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d33',
                            cancelButtonColor: '#3085d6',
                            confirmButtonText: 'Ya, Hapus',
                            cancelButtonText: 'Batal'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Jika pengguna menekan Ya, hapus data
                                $.ajax({
                                    url: "proses_hapus_manajer.php",
                                    type: "POST",
                                    data: {
                                        id: id
                                    },
                                    dataType: 'json',
                                    success: function(response) {
                                        if (response.status === "success") {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Sukses!',
                                                text: response.message,
                                                confirmButtonText: 'OK'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
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
                        });
                    });

                    // ...
                });
            </script>




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
    </body>

    </html>
<?php } ?>