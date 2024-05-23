<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Klinik - Sehat</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="landing_page/img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="landing_page/lib/animate/animate.min.css" rel="stylesheet" />
  <link href="landing_page/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="landing_page/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="landing_page/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="landing_page/css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Topbar Start -->
  <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 d-none d-lg-flex">
      <div class="col-lg-7 px-5 text-start">
        <div class="h-100 d-inline-flex align-items-center py-3 me-4">
          <small class="fa fa-map-marker-alt text-primary me-2"></small>
          <small>Jl. Jatimekar No. 123, Jatiasih, Kota Bekasi</small> <!-- Ubah alamat sesuai dengan lokasi Puskesmas -->
        </div>
        <div class="h-100 d-inline-flex align-items-center py-3">
          <small class="far fa-clock text-primary me-2"></small>
          <small>Senin - Minggu: 24 Jam</small> <!-- Sesuaikan dengan jam operasional Puskesmas -->
        </div>
      </div>
      <div class="col-lg-5 px-5 text-end">
        <div class="h-100 d-inline-flex align-items-center py-3 me-4">
          <small class="fa fa-phone-alt text-primary me-2"></small>
          <small>0-8967-1160-99</small> <!-- Ganti dengan nomor telepon Puskesmas -->
        </div>
        <div class="h-100 d-inline-flex align-items-center">
          <!-- Ganti link URL sosial media sesuai dengan akun Puskesmas -->
          <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href="#"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href="#"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href="#"><i class="fab fa-linkedin-in"></i></a>
          <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->


  <!-- Navbar Start -->
  <nav id="index" class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="#index" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <h1 class="m-0 text-primary">
        <i class="far fa-hospital me-3"></i>Puskesmas
      </h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="#index" class="nav-item nav-link active">Beranda</a>
        <a href="#about" class="nav-item nav-link">Tentang</a>
        <a href="#service" class="nav-item nav-link">Layanan</a>
        <a href="#fitur" class="nav-item nav-link">Fitur</a>
        <a href="#dokter" class="nav-item nav-link">Dokter</a>
        <a href="#contact" class="nav-item nav-link">Kontak</a>
        <a href="#testimoni" class="nav-item nav-link">Testimoni</a>

      </div>
      <a href="login.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Header Start -->
  <div class="container-fluid header bg-primary p-0 mb-5">
    <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
      <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
        <h1 class="display-4 text-white mb-5">
          Kesehatan Baik Adalah Akar dari Semua Kebahagiaan
        </h1>
        <div class="row g-4">
          <div class="col-sm-4">
            <div class="border-start border-light ps-4">
              <h2 class="text-white mb-1" data-toggle="counter-up">24</h2>
              <p class="text-light mb-0">Dokter Ahli</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="border-start border-light ps-4">
              <h2 class="text-white mb-1" data-toggle="counter-up">45</h2>
              <p class="text-light mb-0">Staf Medis</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="border-start border-light ps-4">
              <h2 class="text-white mb-1" data-toggle="counter-up">82</h2>
              <p class="text-light mb-0">Total Pasien</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <div class="owl-carousel header-carousel">
          <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="landing_page/img/carousel-1.jpg" alt="" />
            <div class="owl-carousel-text">
              <h1 class="display-1 text-white mb-0">Kardiologi</h1>
            </div>
          </div>
          <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="landing_page/img/carousel-2.jpg" alt="" />
            <div class="owl-carousel-text">
              <h1 class="display-1 text-white mb-0">Neurologi</h1>
            </div>
          </div>
          <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="landing_page/img/carousel-3.jpg" alt="" />
            <div class="owl-carousel-text">
              <h1 class="display-1 text-white mb-0">Pulmonologi</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->

  <!-- About Start -->
  <div id="about" class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
          <div class="d-flex flex-column">
            <img class="img-fluid rounded w-75 align-self-end" src="landing_page/img/about-1.jpg" alt="Tentang Kami" />
            <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="landing_page/img/about-2.jpg" alt="Tentang Kami" style="margin-top: -25%" />
          </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
          <p class="d-inline-block border rounded-pill py-1 px-4">Tentang Kami</p>
          <h1 class="mb-4">Mengapa Anda Harus Percaya Pada Kami? Kenali Kami!</h1>
          <p>
            Kami adalah klinik yang berkomitmen untuk memberikan pelayanan kesehatan berkualitas kepada semua pasien kami. Dengan tim dokter dan staf yang berkualifikasi, kami siap memberikan yang terbaik untuk kesehatan Anda.
          </p>
          <p class="mb-4">
            Kesehatan merupakan aset berharga yang harus dijaga dengan baik. Kami memahami pentingnya kesehatan bagi kebahagiaan Anda. Oleh karena itu, kami menyediakan layanan medis yang komprehensif dan terpercaya.
          </p>
          <p>
            <i class="far fa-check-circle text-primary me-3"></i>Kualitas Pelayanan Kesehatan
          </p>
          <p>
            <i class="far fa-check-circle text-primary me-3"></i>Hanya Dokter Berkualifikasi
          </p>
          <p>
            <i class="far fa-check-circle text-primary me-3"></i>Profesional Penelitian Medis
          </p>
          <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Baca Lebih Lanjut</a>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->


  <!-- Service Start -->
  <div id="service" class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
        <p class="d-inline-block border rounded-pill py-1 px-4">Layanan</p>
        <h1>Solusi Perawatan Kesehatan</h1>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item bg-light rounded h-100 p-5">
            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px">
              <i class="fa fa-heartbeat text-primary fs-4"></i>
            </div>
            <h4 class="mb-3">Kardiologi</h4>
            <p class="mb-4">
              Layanan kardiologi kami menawarkan perawatan jantung yang komprehensif, termasuk diagnosis, pengobatan, dan pencegahan penyakit jantung.
            </p>
            <a class="btn" href="#!"><i class="fa fa-plus text-primary me-3"></i>Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item bg-light rounded h-100 p-5">
            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px">
              <i class="fa fa-x-ray text-primary fs-4"></i>
            </div>
            <h4 class="mb-3">Pulmonologi</h4>
            <p class="mb-4">
              Layanan pulmonologi kami menyediakan diagnosis dan perawatan penyakit paru-paru, termasuk pneumonia, asma, dan KOPD.
            </p>
            <a class="btn" href="#!"><i class="fa fa-plus text-primary me-3"></i>Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="service-item bg-light rounded h-100 p-5">
            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px">
              <i class="fa fa-brain text-primary fs-4"></i>
            </div>
            <h4 class="mb-3">Neurologi</h4>
            <p class="mb-4">
              Tim neurologi kami terdiri dari para ahli yang berpengalaman dalam diagnosis dan pengobatan berbagai gangguan saraf.
            </p>
            <a class="btn" href="#!"><i class="fa fa-plus text-primary me-3"></i>Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item bg-light rounded h-100 p-5">
            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px">
              <i class="fa fa-wheelchair text-primary fs-4"></i>
            </div>
            <h4 class="mb-3">Ortopedi</h4>
            <p class="mb-4">
              Tim ortopedi kami menyediakan perawatan ortopedi yang komprehensif, termasuk pemeriksaan, diagnosis, dan pengobatan cedera dan gangguan tulang dan sendi.
            </p>
            <a class="btn" href="#!"><i class="fa fa-plus text-primary me-3"></i>Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item bg-light rounded h-100 p-5">
            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px">
              <i class="fa fa-tooth text-primary fs-4"></i>
            </div>
            <h4 class="mb-3">Bedah Gigi</h4>
            <p class="mb-4">
              Layanan bedah gigi kami mencakup berbagai prosedur bedah mulut dan gigi, termasuk pencabutan gigi, pemasangan implan, dan perawatan akar gigi.
            </p>
            <a class="btn" href="#!"><i class="fa fa-plus text-primary me-3"></i>Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="service-item bg-light rounded h-100 p-5">
            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px">
              <i class="fa fa-vials text-primary fs-4"></i>
            </div>
            <h4 class="mb-3">Laboratorium</h4>
            <p class="mb-4">
              Layanan laboratorium kami menyediakan berbagai tes diagnostik dan analisis laboratorium untuk membantu diagnosis dan pengobatan penyakit.
            </p>
            <a class="btn" href="#!"><i class="fa fa-plus text-primary me-3"></i>Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->


  <!-- Feature Start -->
  <div id="fitur" class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
    <div class="container feature px-lg-0">
      <div class="row g-0 mx-lg-0">
        <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
          <div class="p-lg-5 ps-lg-0">
            <p class="d-inline-block border rounded-pill text-light py-1 px-4">
              Fitur-fitur
            </p>
            <h1 class="text-white mb-4">Mengapa Memilih Kami</h1>
            <p class="text-white mb-4 pb-2">
              Kami adalah pilihan terbaik untuk Anda karena kami memberikan layanan kesehatan berkualitas tinggi dengan tenaga medis yang berpengalaman dan konsultasi positif selama 24 jam.
            </p>
            <div class="row g-4">
              <div class="col-6">
                <div class="d-flex align-items-center">
                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px">
                    <i class="fa fa-user-md text-primary"></i>
                  </div>
                  <div class="ms-4">
                    <p class="text-white mb-2">Pengalaman</p>
                    <h5 class="text-white mb-0">Dokter</h5>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="d-flex align-items-center">
                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px">
                    <i class="fa fa-check text-primary"></i>
                  </div>
                  <div class="ms-4">
                    <p class="text-white mb-2">Kualitas</p>
                    <h5 class="text-white mb-0">Layanan</h5>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="d-flex align-items-center">
                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px">
                    <i class="fa fa-comment-medical text-primary"></i>
                  </div>
                  <div class="ms-4">
                    <p class="text-white mb-2">Konsultasi</p>
                    <h5 class="text-white mb-0">Positif</h5>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="d-flex align-items-center">
                  <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px">
                    <i class="fa fa-headphones text-primary"></i>
                  </div>
                  <div class="ms-4">
                    <p class="text-white mb-2">Dukungan</p>
                    <h5 class="text-white mb-0">24 Jam</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px">
          <div class="position-relative h-100">
            <img class="position-absolute img-fluid w-100 h-100" src="landing_page/img/feature.jpg" style="object-fit: cover" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Feature End -->

  <!-- Team Start -->
  <div id="dokter" class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
        <p class="d-inline-block border rounded-pill py-1 px-4">Dokter</p>
        <h1>Dokter Berpengalaman Kami</h1>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item position-relative rounded overflow-hidden">
            <div class="overflow-hidden">
              <img class="img-fluid" src="landing_page/img/team-1.jpg" alt="" />
            </div>
            <div class="team-text bg-light text-center p-4">
              <h5>Dokter Iqbal</h5>
              <p class="text-primary">Kardiologi</p>
              <div class="team-social text-center">
                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="team-item position-relative rounded overflow-hidden">
            <div class="overflow-hidden">
              <img class="img-fluid" src="landing_page/img/team-2.jpg" alt="" />
            </div>
            <div class="team-text bg-light text-center p-4">
              <h5>Dokter Deni</h5>
              <p class="text-primary">Pulmonologi</p>
              <div class="team-social text-center">
                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="team-item position-relative rounded overflow-hidden">
            <div class="overflow-hidden">
              <img class="img-fluid" src="landing_page/img/team-3.jpg" alt="" />
            </div>
            <div class="team-text bg-light text-center p-4">
              <h5>Dokter Lestari</h5>
              <p class="text-primary">Neurologi</p>
              <div class="team-social text-center">
                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
          <div class="team-item position-relative rounded overflow-hidden">
            <div class="overflow-hidden">
              <img class="img-fluid" src="landing_page/img/team-4.jpg" alt="" />
            </div>
            <div class="team-text bg-light text-center p-4">
              <h5>Dokter Aditya</h5>
              <p class="text-primary">Ortopedi</p>
              <div class="team-social text-center">
                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Team End -->

  <!-- Appointment Start -->
  <div id="contact" class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <p class="d-inline-block border rounded-pill py-1 px-4">
            Kontak
          </p>
          <h1 class="mb-4">Buat Janji Temu Untuk Mengunjungi Dokter Kami</h1>
          <p class="mb-4">
            Segera atur janji temu Anda untuk berkonsultasi dengan salah satu dokter kami. Kami siap memberikan layanan terbaik untuk kesehatan Anda.
          </p>
          <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
            <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px">
              <i class="fa fa-phone-alt text-primary"></i>
            </div>
            <div class="ms-4">
              <p class="mb-2">Hubungi Kami Sekarang</p>
              <h5 class="mb-0">+012 345 6789</h5>
            </div>
          </div>
          <div class="bg-light rounded d-flex align-items-center p-5">
            <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px">
              <i class="fa fa-envelope-open text-primary"></i>
            </div>
            <div class="ms-4">
              <p class="mb-2">Kirim Email Sekarang</p>
              <h5 class="mb-0">info@Puskesmas.com</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="bg-light rounded h-100 d-flex align-items-center p-5">
            <form>
              <div class="row g-3">
                <div class="col-12 col-sm-6">
                  <input type="text" class="form-control border-0" placeholder="Nama Anda" style="height: 55px" />
                </div>
                <div class="col-12 col-sm-6">
                  <input type="email" class="form-control border-0" placeholder="Email Anda" style="height: 55px" />
                </div>
                <div class="col-12 col-sm-6">
                  <input type="text" class="form-control border-0" placeholder="Nomor Telepon Anda" style="height: 55px" />
                </div>
                <div class="col-12 col-sm-6">
                  <select class="form-select border-0" style="height: 55px">
                    <option selected>Pilih Dokter</option>
                    <option value="1">Dokter 1</option>
                    <option value="2">Dokter 2</option>
                    <option value="3">Dokter 3</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="date" id="date" data-target-input="nearest">
                    <input type="text" class="form-control border-0 datetimepicker-input" placeholder="Pilih Tanggal" data-target="#date" data-toggle="datetimepicker" style="height: 55px" />
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="time" id="time" data-target-input="nearest">
                    <input type="text" class="form-control border-0 datetimepicker-input" placeholder="Pilih Waktu" data-target="#time" data-toggle="datetimepicker" style="height: 55px" />
                  </div>
                </div>
                <div class="col-12">
                  <textarea class="form-control border-0" rows="5" placeholder="Deskripsikan masalah Anda"></textarea>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100 py-3" type="submit">
                    Buat Janji Temu
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Appointment End -->

  <!-- Testimonial Start -->
  <div id="testimoni" class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
        <p class="d-inline-block border rounded-pill py-1 px-4">
          Testimoni
        </p>
        <h1>Apa Kata Pasien Kami!</h1>
      </div>
      <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
        <div class="testimonial-item text-center">
          <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="landing_page/img/testimonial-1.jpg" style="width: 100px; height: 100px" />
          <div class="testimonial-text rounded text-center p-4">
            <p>
              Saya merasa sangat puas dengan pelayanan yang diberikan. Dokter-dokter di sini sangat ramah dan kompeten.
            </p>
            <h5 class="mb-1">Lia Fitriani</h5>
            <span class="fst-italic">Wirausaha</span>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="landing_page/img/testimonial-2.jpg" style="width: 100px; height: 100px" />
          <div class="testimonial-text rounded text-center p-4">
            <p>
              Terima kasih kepada tim medis yang telah membantu saya pulih dari penyakit saya. Saya sangat merekomendasikan tempat ini kepada teman-teman saya.
            </p>
            <h5 class="mb-1">Ahmad Fauzi</h5>
            <span class="fst-italic">Pegawai Kantor</span>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="landing_page/img/testimonial-3.jpg" style="width: 100px; height: 100px" />
          <div class="testimonial-text rounded text-center p-4">
            <p>
              Pengalaman saya berkonsultasi di sini sangat menyenangkan. Dokter sangat sabar dan menjelaskan dengan detail mengenai kondisi saya.
            </p>
            <h5 class="mb-1">Edi Putra</h5>
            <span class="fst-italic">Pelajar</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Testimonial End -->

  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <h5 class="text-light mb-4">Alamat</h5>
          <p class="mb-2">
            <i class="fa fa-map-marker-alt me-3"></i>Jl. Jatimekar No. 123, Jatiasih, Kota Bekasi
          </p>
          <p class="mb-2">
            <i class="fa fa-phone-alt me-3"></i>+628 1234 5678 90
          </p>
          <p class="mb-2">
            <i class="fa fa-envelope me-3"></i>info@puskesmas.com
          </p>
          <div class="d-flex pt-2">
            <a class="btn btn-outline-light btn-social rounded-circle" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-light btn-social rounded-circle" href="#!"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light btn-social rounded-circle" href="#!"><i class="fab fa-youtube"></i></a>
            <a class="btn btn-outline-light btn-social rounded-circle" href="#!"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5 class="text-light mb-4">Layanan</h5>
          <a class="btn btn-link" href="#!">Kardiologi</a>
          <a class="btn btn-link" href="#!">Paru-paru</a>
          <a class="btn btn-link" href="#!">Neurologi</a>
          <a class="btn btn-link" href="#!">Ortopedi</a>
          <a class="btn btn-link" href="#!">Laboratorium</a>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5 class="text-light mb-4">Tautan Cepat</h5>
          <a class="btn btn-link" href="#!">Tentang Kami</a>
          <a class="btn btn-link" href="#!">Hubungi Kami</a>
          <a class="btn btn-link" href="#!">Layanan Kami</a>
          <a class="btn btn-link" href="#!">Syarat & Ketentuan</a>
          <a class="btn btn-link" href="#!">Dukungan</a>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5 class="text-light mb-4">Newsletter</h5>
          <p>Dapatkan berita terbaru dari Puskesmas kami.</p>
          <div class="position-relative mx-auto" style="max-width: 400px">
            <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Email Anda" />
            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
              SignUp
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            &copy; <a class="border-bottom" href="#!">Rizqy Fadila</a>, Semua Hak
            Dilindungi.
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="landing_page/lib/wow/wow.min.js"></script>
  <script src="landing_page/lib/easing/easing.min.js"></script>
  <script src="landing_page/lib/waypoints/waypoints.min.js"></script>
  <script src="landing_page/lib/counterup/counterup.min.js"></script>
  <script src="landing_page/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="landing_page/lib/tempusdominus/js/moment.min.js"></script>
  <script src="landing_page/lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="landing_page/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="landing_page/js/main.js"></script>
</body>

</html>