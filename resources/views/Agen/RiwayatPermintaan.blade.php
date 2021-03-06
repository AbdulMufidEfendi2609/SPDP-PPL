@extends('teamplatedashboard')

@section('navbar')
<li class="nav-item ">
    <a class="nav-link" href="{{url('/home')}}">
      <i class="material-icons">dashboard</i>
      <p>Dashboard</p>
    </a>
</li>
<li class="nav-item active">
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
@endsection

@section('konten')
<div class="card-body">
    <form method="GET" action="{{url('/RiwayatPermintaan1')}}">
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
            <th scope="col">ID Transaksi</th>
            <th scope="col">Nama Pupuk</th>
            <th scope="col">Jumlah Permintaan</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Status Verifikasi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 0; ?>
          @foreach($tambah as $T)
          <?php $no++; ?>
          <tr>
            <td scope="row">{{$no}}</td>
            <td>{{$T->id_transaksi}}</th>
            <td>{{$T->nama_pupuk}}</td>
            <td>{{$T->jumlah_permintaan}}</td>
            <td>{{$T->tanggal_transaksi}}</td>
            <td>{{$T->status_verifikasi}}</td>
          </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection
