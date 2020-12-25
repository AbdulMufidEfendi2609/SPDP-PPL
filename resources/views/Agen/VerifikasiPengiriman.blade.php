@extends('teamplatedashboard')

@section('navbar')
<li class="nav-item ">
    <a class="nav-link" href="{{url('/home')}}">
      <i class="material-icons">dashboard</i>
      <p>Dashboard</p>
    </a>
</li>
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
<li class="nav-item active">
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
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">ID Pengiriman</th>
            <th scope="col">Nama Pupuk</th>
            <th scope="col">Jumlah Pengiriman</th>
            <th scope="col">Tanggal</th>
            <th scope="col">ID Driver</th>
            <th scope="col">Status Pengiriman</th>
            <th scope="col">Button Status</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 0; ?>
          @foreach($tambah as $T)
          <?php $no++; ?>
          <tr>
            <td scope="row">{{$no}}</td>
            <td>{{$T->id_pengiriman}}</th>
            <td>{{$T->nama_pupuk}}</td>
            <td>{{$T->jumlah_pengiriman}}</td>
            <td>{{$T->tanggal_transaksi}}</td>
            <td>{{$T->id_driver}}</td>
            <td>{{$T->status_pengiriman}}</td>
            <td align="center">
              @if ($T->status_pengiriman == 'Belum Diterima')
                @csrf
                  <form action="{{url('/yes')}}" method="GET">
                    <input type="hidden" name="id_pengiriman" value="{{$T->id_pengiriman}}">
                    <button type="submit" style=" color:white; background-color:green; border-radius:5px;">Sudah Diterima</button>
                  </form>
              @endif
            </td>
          </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection
