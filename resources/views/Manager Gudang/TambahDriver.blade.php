@extends('teamplatedashboard')

@section('navbar')
<li class="nav-item ">
    <a class="nav-link" href="{{url('/home')}}">
      <i class="material-icons">dashboard</i>
      <p>Dashboard</p>
    </a>
</li>
<li class="nav-item ">
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
<li class="nav-item active">
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
@endsection

@section('konten')
<div class="card-body">
    <form action="{{url('/TambahDriver/proses')}}" method="POST" >
        @csrf
        <div class="form-group">
          <label for="name" style="font-size:14pt;">Nama</label><br>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
          <label for="email" style="font-size:14pt;">Email</label><br>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
          <label for="password" style="font-size:14pt;">Password</label><br>
          <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
          <label for="alamat" style="font-size:14pt;">Alamat</label><br>
          <input type="textarea" class="form-control" name="alamat">
        </div>
        <div class="form-group">
          <label for="no_telepon" style="font-size:14pt;">No.Telp</label><br>
          <input type="text" class="form-control" name="no_telepon">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{url('/DataDriver')}}" class="btn btn-info">Batal</a>
      </form>
</div>
@endsection
