@extends('teamplatedashboard')

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

@section('konten')
<div class="card-body">
    <form action="" method="GET" >
        <h2 style="text-align:center; margin-bottom:30px; font-weight:bold;">Profile Saya</h2>
        <div class="form-group">
          <label for="pengiriman" style="font-size:14pt;">ID Pengguna</label><br>
          <input type="number" class="form-control" style="font-size:12pt;" name="id" value="{{auth()->user()->id}}" disabled>
        </div>
        <div class="form-group">
          <label for="pengiriman" style="font-size:14pt;">Nama</label><br>
          <input type="text" class="form-control" style="font-size:12pt;" name="name" value="{{auth()->user()->name}}" disabled>
        </div>
        <div class="form-group">
          <label for="pengiriman" style="font-size:14pt;">Email</label><br>
          <input type="text" class="form-control" style="font-size:12pt;" name="email" value="{{auth()->user()->email}}" disabled>
        </div>
        <div class="form-group">
          <label for="pengiriman" style="font-size:14pt;">Alamat</label><br>
          <input type="textarea" class="form-control" style="font-size:12pt;" name="alamat" value="{{auth()->user()->alamat}}" disabled>
        </div>
        <div class="form-group">
          <label for="pengiriman" style="font-size:14pt;">No.Telp</label><br>
          <input type="text" class="form-control" style="font-size:12pt;" name="no_telepon" value="{{auth()->user()->no_telepon}}" disabled>
        </div>
        <a href="{{url('/UpdateProfil')}}" class="btn btn-info">Edit Profil</a>
    </form>
</div>
@endsection
