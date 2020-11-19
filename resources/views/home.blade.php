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
            <a class="nav-link" href="./typography.html">
                <i class="material-icons"></i>
                <p></p>
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
            <a class="nav-link" href="./typography.html">
                <i class="material-icons"></i>
                <p></p>
            </a>
        </li>
        @else
            Driver
        @endif    
    @endif
@endsection
