<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Order;
use Carbon\Carbon;

use App\TransaksiPermintaan;
use App\StokPupuk;
use App\TransaksiPengiriman;
use App\User;
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
      $this->validate($request,[
          'nama_pupuk'          => ['required'],
          'id_pengguna'         => ['required'],
          'jumlah_permintaan'   => ['required'],
      ]);
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
      $tambah = TransaksiPermintaan::where('status_verifikasi', "Belum Diverifikasi")->get();
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
    public function rekap_permintaan1(Request $request)
    {
      $awal = explode(' - ' ,request()->awal);
      $akhir = explode(' - ' ,request()->akhir);
      $start = Carbon::parse($awal[0])->format('Y-m-d');
      $end = Carbon::parse($akhir[0])->format('Y-m-d');
      $tambah = TransaksiPermintaan::whereBetween('tanggal_transaksi', [$start, $end])->get();
      return view('/Manager Gudang/RekapPermintaan', compact('tambah'));
    }

//View Riwayat Permintaan
    public function riwayat_permintaan(Request $request)
    {
      $tambah = TransaksiPermintaan::where('id_pengguna', auth()->user()->id)->get();
      return view('/Agen/RiwayatPermintaan', compact('tambah'));
    }
    public function riwayat_permintaan1(Request $request)
    {
      $awal = explode(' - ' ,request()->awal);
      $akhir = explode(' - ' ,request()->akhir);
      $start = Carbon::parse($awal[0])->format('Y-m-d');
      $end = Carbon::parse($akhir[0])->format('Y-m-d');
      $tambah = TransaksiPermintaan::whereBetween('tanggal_transaksi', [$start, $end])->Where('id_pengguna', auth()->user()->id)->get();
      return view('/Agen/RiwayatPermintaan', compact('tambah'));
    }

//View Stok pupuk
    public function stok_pupuk()
    {
      $tambah = StokPupuk::all();
      return view('/Manager Gudang/StokPupuk', compact('tambah'));
    }

//View Update Stok Pupuk
    public function index_stok()
    {
      $tambah = StokPupuk::all();
      return view('/Manager Gudang/TambahStok', compact('tambah'));
    }

    public function store_stok(Request $request)
    {
      $tambah = StokPupuk::all();
      $this->validate($request,[
        'nama_pupuk'    => ['required'],
        'jumlah_stok'   => ['required'],
      ]);
      StokPupuk::where('nama_pupuk', $request->nama_pupuk)->increment([
          'jumlah_stok', $request->jumlah_stok,
      ]);
        return redirect('/StokPupuk');
    }

//View Tambah Stok Pupuk
    public function index_item()
    {
      $tambah = StokPupuk::all();
      return view('/Manager Gudang/TambahItem', compact('tambah'));
    }

    public function store_item(Request $request)
    {
      $tambah = StokPupuk::all();
      $this->validate($request,[
        'nama_pupuk'    => ['required'],
        'jumlah_stok'   => ['required'],
      ]);
      StokPupuk::create([
          'nama_pupuk'          => $request->nama_pupuk,
          'jumlah_stok'         => $request->jumlah_stok,
      ]);
        return redirect('/StokPupuk');
    }

//View Tambah Pengiriman
    public function index_pengiriman()
    {
      $tambah = TransaksiPengiriman::all();
      return view('/Manager Gudang/TambahPengiriman', compact('tambah'));
    }
    public function store_pengiriman(Request $request)
    {
      $tambah = StokPupuk::all();
      $this->validate($request,[
          'id_agen'             => ['required'],
          'nama_pupuk'          => ['required'],
          'jumlah_pengiriman'   => ['required'],
          'id_driver'           => ['required'],
      ]);
      TransaksiPengiriman::create([
          'id_agen'             => $request->id_agen,
          'nama_pupuk'          => $request->nama_pupuk,
          'jumlah_pengiriman'   => $request->jumlah_pengiriman,
          'id_driver'           => $request->id_driver,
          'tanggal_transaksi'   => date('Y-m-d H:i:s')
      ]);
      StokPupuk::where('nama_pupuk', $request->nama_pupuk)->decrement([
          'jumlah_stok', $request->jumlah_pengiriman,
      ]);
        return redirect('/TambahPengiriman');
    }

//View Rekap Pengiriman
public function rekap_pengiriman()
    {
      $tambah = TransaksiPengiriman::all();
      return view('/Manager Gudang/RekapPengiriman', compact('tambah'));
    }
    public function rekap_pengiriman1(Request $request)
    {
      $awal = explode(' - ' ,request()->awal);
      $akhir = explode(' - ' ,request()->akhir);
      $start = Carbon::parse($awal[0])->format('Y-m-d');
      $end = Carbon::parse($akhir[0])->format('Y-m-d');
      $tambah = TransaksiPengiriman::whereBetween('tanggal_transaksi', [$start, $end])->get();
      return view('/Manager Gudang/RekapPengiriman', compact('tambah'));
    }

//View Riwayat Pengiriman
    public function riwayat_pengiriman(Request $request)
    {
      $tambah = TransaksiPengiriman::where('id_agen', auth()->user()->id)->get();
      return view('/Agen/RiwayatPengiriman', compact('tambah'));
    }
    public function riwayat_pengiriman1(Request $request)
    {
      $awal = explode(' - ' ,request()->awal);
      $akhir = explode(' - ' ,request()->akhir);
      $start = Carbon::parse($awal[0])->format('Y-m-d');
      $end = Carbon::parse($akhir[0])->format('Y-m-d');
      $tambah = TransaksiPengiriman::whereBetween('tanggal_transaksi', [$start, $end])->Where('id_agen', auth()->user()->id)->get();
      return view('/Agen/RiwayatPengiriman', compact('tambah'));
    }

// View Verifikasi Pengiriman
    public function verifikasi_pengiriman()
    {
      $tambah = TransaksiPengiriman::where('id_agen', auth()->user()->id)->Where('status_pengiriman', "Belum Diterima")->get();
      return view('/Agen/VerifikasiPengiriman', compact('tambah'));
    }

    public function sudah_pengiriman(Request $request)
    {
      $tambah = TransaksiPengiriman::all();
      TransaksiPengiriman::where('id_pengiriman', $request->id_pengiriman)->update([
        'status_pengiriman' => 'Sudah Diterima',
        ]);
        return redirect('/VerifikasiPengiriman');
    }

//View Data Pengiriman
    public function data_pengiriman()
        {
          $tambah = TransaksiPengiriman::all();
          return view('/Driver/DataPengiriman', compact('tambah'));
        }
        public function data_pengiriman1(Request $request)
        {
          $awal = explode(' - ' ,request()->awal);
          $akhir = explode(' - ' ,request()->akhir);
          $start = Carbon::parse($awal[0])->format('Y-m-d');
          $end = Carbon::parse($akhir[0])->format('Y-m-d');
          $tambah = TransaksiPengiriman::whereBetween('tanggal_transaksi', [$start, $end])->get();
          return view('/Driver/DataPengiriman', compact('tambah'));
        }

//View Lihat Stok
        public function lihat_stok()
        {
          $tambah = StokPupuk::all();
          return view('/Agen/LihatStok', compact('tambah'));
        }

//View Lihat Profil
        public function profil()
        {
          $tambah = User::where('id', auth()->user()->id)->get();
          return view('/profil', compact('tambah'));
        }

//View Update Profil
        public function update_profil()
        {
          $tambah = User::where('id', auth()->user()->id)->get();
          return view('/UpdateProfil', compact('tambah'));
        }
        public function store_update(Request $request)
        {
          $tambah = User::all();
          $this->validate($request,[
            'name' => ['required'],
            'email' => ['required'],
            'alamat'=> ['required'],
            'no_telepon' => ['required'],
          ]);
          User::where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'alamat'=> $request->alamat,
            'no_telepon' => $request->no_telepon,
            ]);
            return redirect('/profil');
        }

//View Lihat Driver
        public function data_driver()
        {
          $tambah = User::where('role_id', "3")->get();
          return view('/Manager Gudang/DataDriver', compact('tambah'));
        }

//View Tambah Driver
        public function index_driver()
        {
          $tambah = User::all();
          return view('/Manager Gudang/TambahDriver', compact('tambah'));
        }

        public function store_driver(Request $request)
        {
          $tambah =User::all();
          User::create([
              'role_id'        => "3",
              'name'           => $request->name,
              'email'          => $request->email,
              'password'       => Hash::make($request->password),
              'alamat'         => $request->alamat,
              'no_telepon'     => $request->no_telepon,
          ]);
            return redirect('/DataDriver');
        }

//View Lihat Agen
        public function data_agen()
        {
          $tambah = User::where('role_id', "2")->get();
          return view('/Manager Gudang/DataAgen', compact('tambah'));
        }
}
