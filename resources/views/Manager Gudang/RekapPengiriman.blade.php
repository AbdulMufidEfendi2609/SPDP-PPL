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
<li class="nav-item active">
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
@endsection

@section('konten')
<div class="card-body">
    <form method="GET" action="{{url('/RekapPengiriman1')}}">
      <div class="row">
        <div class="col">
          <input type="date" class="form-control" name="awal" placeholder="awal">
        </div>
        <div class="col">
          <input type="date" class="form-control" name="akhir" placeholder="akhir">
        </div>
        <div class="col">
          <input type="submit" value="cari" style="background-color:aqua; border-radius:5px;">
        </div>
      </div>
    </form>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">ID Pengiriman</th>
            <th scope="col">ID Agen</th>
            <th scope="col">Nama Pupuk</th>
            <th scope="col">Jumlah Pengiriman</th>
            <th scope="col">Tanggal</th>
            <th scope="col">ID Driver</th>
            <th scope="col">Status Pengiriman</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 0; ?>
          @foreach($tambah as $T)
          <?php $no++; ?>
          <tr>
            <td scope="row">{{$no}}</td>
            <td>{{$T->id_pengiriman}}</th>
            <td>{{$T->id_agen}}</td>
            <td>{{$T->nama_pupuk}}</td>
            <td>{{$T->jumlah_pengiriman}}</td>
            <td>{{$T->tanggal_transaksi}}</td>
            <td>{{$T->id_driver}}</td>
            <td>{{$T->status_pengiriman}}</td>
          </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection
