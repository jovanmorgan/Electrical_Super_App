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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="home3.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

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
        display: none;
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
          bottom: 590px;
          z-index: 50;
          border: solid 2px #d4d4d4;
          color: #000000;
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
      <!-------Banner Start------->
      <section class="banner" data-scroll-index='0'>
        <div class="banner-overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-sm-12">
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
              <div class="col-md-4 col-sm-12" data-aos="fade-up" data-aos-delay="5000" data-aos-duration="2000"> <img src="images/esa1.png" class="img-fluid wow fadeInUp" /> </div>
            </div>
          </div>
        </div>
        <span class="svg-wave">
          <div class="svg-hero"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 204.8" style="enable-background:new 0 0 1920 204.8;" xml:space="preserve" preserveAspectRatio="none">
              <path class="st0" d="M367,41.4c235-43.3,518-74.9,736.8,23.9c121.4,54.9,250.6,103.2,395.6,103.2c116.1,0,242.4-31,383.1-114.4
	c13.4-7.9,25.9-15.3,37.5-22.2v173H0l0-172C0,32.8,132,84.6,367,41.4z" />
            </svg></div>
        </span>
      </section>
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
            <div class="section-content text-center">
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

      <script type="text/javascript" src="js2/loding_ESA.js"></script>
      <script type="text/javascript" src="js2/navbar_app.js"></script>
  </body>

  </html>
<?php } ?>