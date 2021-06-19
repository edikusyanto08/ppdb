<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name', 'Laravel') }} || <?php echo date("Y"), "/",date('Y')+1;?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('frontend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- DataTaables --->
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/datatables/datatables.min.css') }}"/>

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="{{ url('/') }}">SIPeDa</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="{{ url('/') }}">Home</a></li>
              <li><a href="#alur">Alur</a></li>
              <li><a href="#quota">Daya Tampung</a></li>
              <li><a href="#pendaftar">Pendaftar</a></li>
              <li><a href="#">Pengumuman</a></li>
              <li><a href="#contact">Contact</a></li>

            </ul>
          </nav><!-- .nav-menu -->

          <a href="{{ route('login') }}" class="get-started-btn scrollto">Masuk</a>
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>SMKN 5 Kabupaten Tangerang</h1>
          <h2>Sistem Informasi Pendaftaran Peserta Didik Baru (SIPeDa)<br>Tahun Pelajaran <?php echo date('Y');?>/<?php echo date('Y')+1;?></h2>
            @if($tutupdaftar == 1)
          <div><a href="{{ route('register') }}" class="btn-get-started scrollto">Daftar di Sini</a></div>
          @endif
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="{{ asset('frontend/img/hero-img.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="alur" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
            <img src="{{ asset('frontend/img/about.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Alur Pendaftaran Peserta Didik Baru Tahun Pelajaran <?=  date('Y'), "/", date('Y')+1;?></h3>
            <p class="font-italic">
              
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Calon Pendaftar mengakses laman PPDB SMKN 5 Kabupaten Tangerang di https://ppdb.smkn5kabtangerangmauk.sch.id.</li>
              <li><i class="icofont-check-circled"></i> Calon Pendaftar membuat akun pada tombol <b><a herf="">Daftar Di Sini</a></b>.</li>
              <li><i class="icofont-check-circled"></i> Calon Pendaftar melengkapi Formulir online.</li>
              <li><i class="icofont-check-circled"></i> Calon Pendaftar mencetak bukti pendaftaran untuk lampiran Dokumen Pendaftaran.</li>
              <li><i class="icofont-check-circled"></i> Calon Pendaftar <b>WAJIB</b> datang ke SMKN 5 Kabupaten Tangerang dengan membawa semua Dokumen yang di syaratkan sesuai dengan jadwal yang di peroleh dari bukti pendaftaran.</li>
              <li><i class="icofont-check-circled"></i> Calon Pendaftar menyerahkan Dokumen persyaratan kepada Panitia.</li>
              <li><i class="icofont-check-circled"></i> Calon Pendaftar mengikuti Tes Fisik.</li>
              <li><i class="icofont-check-circled"></i> Calon Pendaftar mengikuti Tes Potensi Akademik.</li>
              <li><i class="icofont-check-circled"></i> Calon Pendaftar menunggu hasil seleksi pada tanggal 30 Juni 2021 melalui laman https://ppdb.bantenprov.go.id dan https://ppdb.smkn5kabtangerangmauk.sch.id</li>
            </ul>
            @if($tutupdaftar == '1')
            <a href="{{ url('/register') }}" class="read-more">Daftar di Sini <i class="icofont-user-plus"></i></a>
            @endif
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Daya Tampung Section ======= -->
    <section id="quota" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Daya Tampung Per Kompetensi Keahlian</h2>
        </div>
        <div class="table-responsive collapsed">
          <table  class="table table-bordered table-striped table-hover">
              <tr>
                  <th>No.</th>
                  <th>Nama Kompetensi</th>
                  <th>Singkatan</th>
                  <th>Daya Tampung</th>
              </tr>
              <?php $no = 1; ?>
              @foreach($jurusans as $jurus)
              <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $jurus->namajurusan }}</td>
                  <td>{{ $jurus->kodejurusan }}</td>
                  <td class="counters" data-toggle="counter-up">{{ $jurus->quota }}</td>
              </tr>
              
              @endforeach
          </table>
        </div>

      </div>
    </section><!-- End Daya Tampung Section -->


    <!-- ======= List Pendaftar Section ======= -->
    <section id="pendaftar" class="services section-bg">
      <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>List Pendaftar</h2>
          </div>

          <div class="card table-responsive collapsed">
                <div class="card-body">
                  <table id="listpendaftar" class="table-bordered table-striped table-hover responsive display nowrap">
                    <thead>
                    <tr>
                      <!--th data-priority="1">No.</th-->
                      <th>NISN</th>
                      <th data-priority="2">Nama Lengkap</th>
                      <th>Sekolah Asal</th>
                      <th>Pilihan Jurusan 1</th>
                      <th>Pilihan Jurusan 2</th>
                      <th>Keterangan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; 
                    
                    ?>
                    @foreach($pendaftar as $siswa)
                        <?php 
                        $jurusan2 = $siswa->jurusan2;
                        $jurusan1 = $siswa->jurusan1;
                        if($jurusan1 == 1){
                            $jurusan1 = "Teknik Pemesinan";
                        } elseif($jurusan1 == 2){
                            $jurusan1 = "Teknik Kendaraan Ringan Otomotif";
                        } elseif($jurusan1 == 3){
                            $jurusan1 = "Teknik dan Bisnis Sepeda Motor";
                        } elseif($jurusan1 == 4){
                            $jurusan1 = "Teknik Komputer dan Jaringan";
                        } elseif($jurusan1 == 5){
                            $jurusan1 = "Multimedia";
                        } elseif($jurusan1 == 6){
                            $jurusan1 = "Rekayasa Prangkat Lunak";
                        } elseif($jurusan1 == 7){
                            $jurusan1 = "Otomatisasi dan Tata Kelola Perkantoran";
                        } elseif($jurusan1 == 8){
                            $jurusan1 = "Akuntansi dan Keuangan Lembaga";
                        } elseif($jurusan1 == 9){
                            $jurusan1 = "Agribisnis Pengolahan Hasil Perikanan";
                        } elseif($jurusan1 == 10){
                            $jurusan1 = "Perhotelan";
                        };
                        if($jurusan2 == 1){
                            $jurusan2 = "Teknik Pemesinan";
                        } elseif($jurusan2 == 2){
                            $jurusan2 = "Teknik Kendaraan Ringan Otomotif";
                        } elseif($jurusan2 == 3){
                            $jurusan2 = "Teknik dan Bisnis Sepeda Motor";
                        } elseif($jurusan2 == 4){
                            $jurusan2 = "Teknik Komputer dan Jaringan";
                        } elseif($jurusan2 == 5){
                            $jurusan2 = "Multimedia";
                        } elseif($jurusan2 == 6){
                            $jurusan2 = "Rekayasa Prangkat Lunak";
                        } elseif($jurusan2 == 7){
                            $jurusan2 = "Otomatisasi dan Tata Kelola Perkantoran";
                        } elseif($jurusan2 == 8){
                            $jurusan2 = "Akuntansi dan Keuangan Lembaga";
                        } elseif($jurusan2 == 9){
                            $jurusan2 = "Agribisnis Pengolahan Hasil Perikanan";
                        } elseif($jurusan2 == 10){
                            $jurusan2 = "Perhotelan";
                        };
                        ?>
                    <tr>
                      <!--td>{{ $no++ }}</td-->
                      <td>{{ $siswa->nisn }}</td>
                      <td>{{ $siswa->nama_lengap }}</td>
                      <td>{{ $siswa->sekolahasal }}</td>
                      <td>{{ $jurusan1 }}</td>
                      <td>{{ $jurusan2 }}</td>
                      <td></td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>

                    </tfoot>
                  </table>
                </div>
          </div>
      </div>
    </section><!-- End List Pendaftar Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions (FAQ)</h2>
        </div>

        <div class="faq-list">
          <!--ul>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul-->
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p>Jalan Ir. Sutami KM. 1,2 Mauk</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>smkn5kabtangerang@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telepon</h3>
              <p>021 59330830</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-12 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15560.300282300048!2d106.4994892!3d-6.054034049999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfef2055b68b067a5!2sSMKN%205%20Kab.Tangerang!5e1!3m2!1sid!2sid!4v1623146313878!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    <div class="container">
      <div class="copyright-wrap d-md-flex py-4">
        <div class="mr-md-auto text-center text-md-left">
          <div class="copyright">
            &copy; Copyright 2020<?php echo "-",date('Y');?> || <strong><span>SMKN 5 Kabupaten Tangerang</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            by <a href="#">Genay GCS</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <!--div id="preloader"></div-->

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('frontend/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/vendor/venobox/venobox.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('frontend/vendor/aos/aos.js') }}"></script>

  <!-- DataTables ---->
  <script src="{{ asset('frontend/vendor/datatables/datatables.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/js/main.js') }}"></script>
  <script>
    $(document).ready(function() {
        var table = $('#listpendaftar').DataTable( {
            responsive: true
        } );
    
        new $.fn.dataTable.FixedHeader( table );
    } );
    </script>
</body>

</html>