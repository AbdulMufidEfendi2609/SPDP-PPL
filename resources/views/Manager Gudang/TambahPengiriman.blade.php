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
<li class="nav-item active">
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
    <form action="{{url('/TambahPengiriman/proses')}}" method="POST" >
        @csrf
        <div class="form-group">
          <label for="id" style="font-size:14pt">ID Agen</label>
          <select class="form-control" name="id_agen">
            <option selected disabled></option>
            <option value="2">2</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="11">11</option>
          </select>
        </div>
        <div class="form-group">
          <label for="nama_pupuk" style="font-size:14pt">Nama Pupuk</label>
          <select class="form-control" name="nama_pupuk">
            <option selected disabled></option>
            <option value="urea">Urea</option>
            <option value="ZA (Zwavelzure Amonium)">ZA (Zwavelzure Amonium)</option>
            <option value="SP-36 (super phosphate)">SP-36 (super phosphate)</option>
            <option value="KCl (Kalium Klorida)">KCl (Kalium Klorida)</option>
            <option value="NPK (Nitrogen Phospate Kalium)">NPK (Nitrogen Phospate Kalium)</option>
            <option value="Dolomite (Kapur Karbonat)">Dolomite (Kapur Karbonat)</option>
            <option value="ZK (Zwavelzure Kali)">ZK (Zwavelzure Kali)</option>
          </select>
        </div>
        <div class="form-group">
          <label for="pengiriman" style="font-size:14pt">Jumlah Pengiriman</label><br>
          <input type="number" class="form-control" name="jumlah_pengiriman" >
          <input type="hidden" name="id_pengguna" value="{{auth()->user()->id}}">
        </div>
        <div class="form-group">
          <label for="id" style="font-size:14pt">ID Driver</label>
          <select class="form-control" name="id_driver">
            <option selected disabled></option>
            <option value="3">3</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection
