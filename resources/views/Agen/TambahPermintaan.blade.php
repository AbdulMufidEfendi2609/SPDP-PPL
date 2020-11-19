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
    <a class="nav-link" href="./typography.html">
        <i class="material-icons"></i>
        <p></p>
    </a>
</li>
@endsection

@section('konten')
<div class="card-body">
    <form action="{{url('/TambahPermintaan/proses')}}" method="POST" >
        @csrf
        <div class="form-group">
          <label for="pupuk">Nama Pupuk</label>
          <select class="form-control" name="pupuk">
            <option selected disabled>Masukkan jenis pupuk</option>
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
          <label for="permintaan">Jumlah Permintaan</label>
          <input type="number" class="form-control" name="permintaan" placeholder="Masukkan jumlah permintaan">
          <input type="hidden" name="id_pengguna" value="{{auth()->user()->id}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
