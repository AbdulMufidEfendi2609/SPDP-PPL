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
<li class="nav-item active">
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
@endsection

@section('konten')
<div class="card-body">
                          @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                          @endif
                            <br>
    <form action="{{url('/TambahItem/proses')}}" method="POST" >
        @csrf
        <div class="form-group">
          <label for="permintaan" style="font-size:14pt;">Nama Pupuk</label><br>
          <input type="text" class="form-control" name="nama_pupuk">
        </div>
        <div class="form-group">
          <label for="permintaan" style="font-size:14pt;">Jumlah Stok</label><br>
          <input type="number" class="form-control" name="jumlah_stok">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{url('/StokPupuk')}}" class="btn btn-info">Batal</a>
      </form>
</div>
@endsection
