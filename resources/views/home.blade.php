@extends('teamplatedashboard')

@section('head')
<link href="dashboard/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="dashboard/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
<link href="dashboard/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="dashboard/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="dashboard/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="dashboard/assets/vendor/venobox/venobox.css" rel="stylesheet">
<link href="dashboard/assets/vendor/aos/aos.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="dashboard/assets/css/style.css" rel="stylesheet">
@endsection

@section('navbar')
        <li class="nav-item active">
            <a class="nav-link" href="{{url('/home')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
        </li>
    @if (auth()->user()->role->role == "Manager Gudang")
        <li class="nav-item">
            <a class="nav-link" href="{{url('/RekapPermintaan')}}">
                <i class="material-icons"></i>
                <p>Rekap Permintaan</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{url('/VerifikasiPermintaan')}}">
                <i class="material-icons"></i>
                <p>Verifikasi Permintaan</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{url('/StokPupuk')}}">
              <i class="material-icons"></i>
              <p>Stok Pupuk</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{url('/TambahPengiriman')}}">
              <i class="material-icons"></i>
              <p>Tambah Pengiriman</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{url('/RekapPengiriman')}}">
              <i class="material-icons"></i>
              <p>Rekap Pengiriman</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{url('/DataDriver')}}">
                <i class="material-icons"></i>
                <p>Data Driver</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{url('/DataAgen')}}">
                <i class="material-icons"></i>
                <p>Data Agen</p>
            </a>
        </li>
    @else
        @if (auth()->user()->role->role == "Agen")
        <li class="nav-item ">
            <a class="nav-link" href="{{url('/RiwayatPermintaan')}}">
                <i class="material-icons"></i>
                <p>Riwayat Permintaan</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{url('/TambahPermintaan')}}">
                <i class="material-icons"></i>
                <p>Tambah Permintaan</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{url('/RiwayatPengiriman')}}">
                <i class="material-icons"></i>
                <p>Riwayat Pengiriman</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{url('/VerifikasiPengiriman')}}">
                <i class="material-icons"></i>
                <p>Verifikasi Pengiriman</p>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{url('/LihatStok')}}">
                <i class="material-icons"></i>
                <p>Lihat Stok Pupuk</p>
            </a>
        </li>
        @else
        <li class="nav-item ">
            <a class="nav-link" href="{{url('/DataPengiriman')}}">
              <i class="material-icons"></i>
              <p>Data Pengiriman</p>
            </a>
        </li>
        @endif
    @endif
@endsection

@section('coba')
<h5 style="font-weight:bold; margin-left:18px;">Jam Operasional</h5>
<h6 style="margin-left:18px;">Senin - Jumat, 07.00 - 14.30 WIB</h6>
<h6 style="margin-left:18px;">Sabtu, 07.00 - 12.00 WIB</h6>
@endsection

@section('konten')
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Selamat Datang di Sistem Penjadwalan Distribusi Pupuk</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">Transaksi permintaan dan pengiriman pupuk bisa diajukan dan dilihat melalui website ini</h2>
        <div data-aos="fade-up" data-aos-delay="800">
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
        <img src="assets/img/hero-img.png" style="width:400px;" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section>
@endsection

@section('js')

  <!-- Vendor JS Files -->
  <script src="dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dashboard/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="dashboard/assets/vendor/php-email-form/validate.js"></script>
  <script src="dashboard/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="dashboard/assets/vendor/counterup/counterup.min.js"></script>
  <script src="dashboard/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="dashboard/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="dashboard/assets/vendor/venobox/venobox.min.js"></script>
  <script src="dashboard/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="dashboard/assets/js/main.js"></script>
@endsection
