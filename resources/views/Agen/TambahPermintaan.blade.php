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
<li class="nav-item active">
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
    <form action="{{url('/TambahPermintaan/proses')}}" method="POST" >
        @csrf
        <div class="form-group">
          <label for="pupuk" style="font-size:14pt;">Nama Pupuk</label>
          <select class="form-control" name="pupuk">
            <option selected disabled></option>
            <option value="urea">Urea</option>
            <option value="ZA">ZA (Zwavelzure Amonium)</option>
            <option value="SP-36">SP-36 (super phosphate)</option>
            <option value="KCl">KCl (Kalium Klorida)</option>
            <option value="NPK">NPK (Nitrogen Phospate Kalium)</option>
            <option value="Dolomite">Dolomite (Kapur Karbonat)</option>
            <option value="ZK">ZK (Zwavelzure Kali)</option>
          </select>
        </div>
        <div class="form-group">
          <label for="permintaan" style="font-size:14pt;">Jumlah Permintaan</label><br>
          <input type="number" class="form-control" name="permintaan" >
          <input type="hidden" name="id_pengguna" value="{{auth()->user()->id}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
