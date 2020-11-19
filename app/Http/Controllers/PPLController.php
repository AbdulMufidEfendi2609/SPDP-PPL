<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\TransaksiPermintaan;
use File;

class PPLController extends Controller
{

//View Tambah Permintaan
    public function index_permintaan()
    {
      $tambah = TransaksiPermintaan::all();
      return view('/Agen/TambahPermintaan', compact('tambah'));
    }

    public function store_permintaan(Request $request)
    {
      TransaksiPermintaan::create([
          'nama_pupuk'          => $request->pupuk,
          'id_pengguna'         => $request->id_pengguna,
          'jumlah_permintaan'   => $request->permintaan,
          'tanggal_transaksi'   => date('Y-m-d H:i:s'),
      ]);
        return redirect('/TambahPermintaan');
    }

//View Verifikasi Permintaan
    public function verifikasi_permintaan()
    {
      $tambah = TransaksiPermintaan::all();
      return view('/Manager Gudang/VerifikasiPermintaan', compact('tambah'));
    }

    public function setuju_verifikasi(Request $request)
    {
      $tambah = TransaksiPermintaan::all();
      TransaksiPermintaan::where('id_transaksi', $request->id_transaksi)->update([
        'status_verifikasi' => 'Disetujui',
        ]);
        return redirect('/VerifikasiPermintaan');
    }

    public function tolak_verifikasi(Request $request)
    {
      $tambah = TransaksiPermintaan::all();
      TransaksiPermintaan::where('id_transaksi', $request->id_transaksi)->update([
        'status_verifikasi' => 'Ditolak',
        ]);
        return redirect('/VerifikasiPermintaan');
    }

//View Rekap Permintaan
    public function rekap_permintaan()
    {
      $tambah = TransaksiPermintaan::all();
      return view('/Manager Gudang/RekapPermintaan', compact('tambah'));
    }

//View Riwayat Permintaan
    public function riwayat_permintaan()
    {
      $tambah = TransaksiPermintaan::all();
      return view('/Agen/RiwayatPermintaan', compact('tambah'));
    }
}
