@extends('teamplatedashboard')

@section('navbar')
<li class="nav-item ">
    <a class="nav-link" href="{{url('/home')}}">
      <i class="material-icons">dashboard</i>
      <p>Dashboard</p>
    </a>
</li>
<li class="nav-item active">
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
    <a class="nav-link" href="./typography.html">
        <i class="material-icons"></i>
        <p></p>
    </a>
</li>
@endsection

@section('konten')
<div class="card-body">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">ID Transaksi</th>
            <th scope="col">ID pengguna</th>
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
            <td>{{$T->id_pengguna}}</td>
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
