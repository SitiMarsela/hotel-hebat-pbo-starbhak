<?php

namespace App\Http\Controllers\Api;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PemesananResource;
use Illuminate\Support\Facades\Validator;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::with('kamar')->get();

        return new PemesananResource(true, 'List Data Pemesanan', $pemesanan);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_pemesan'   => 'required',
            'email'          => 'required',
            'telp'           => 'required',
            'kamar_id'       => 'required',
            'nama_tamu'      => 'required',
            'tgl_checkin'    => 'required',
            'tgl_checkout'   => 'required',
            'jumlah'         => 'required',
            'status'         => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        
        $pemesanan = Pemesanan::create([
            'nama_pemesan'   => $request->nama_pemesan,
            'email'          => $request->email,
            'telp'           => $request->telp,
            'kamar_id'       => $request->kamar_id,
            'nama_tamu'      => $request->nama_tamu,
            'tgl_checkin'    => $request->tgl_checkin,
            'tgl_checkout'   => $request->tgl_checkout,
            'jumlah'         => $request->jumlah,
            'status'         => $request->status,
        ]);

        return new PemesananResource(true, 'Data Pemesanan Berhasil Ditambahkan!', $pemesanan);
    }   

    public function show(Pemesanan $pemesanan)
    {
        return new PemesananResource(true, 'Data Pemesanan Ditemukan!', $pemesanan);
    }

    public function update(Request $request, Pemesanan $pemesanan)
    {
        $validator = Validator::make($request->all(), [
            'nama_pemesan'   => 'required',
            'email'          => 'required',
            'telp'           => 'required',
            'kamar_id'       => 'required',
            'nama_tamu'      => 'required',
            'tgl_checkin'    => 'required',
            'tgl_checkout'   => 'required',
            'jumlah'         => 'required',
            'status'         => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        
        $pemesanan->update([
            'nama_pemesan'   => $request->nama_pemesan,
            'email'          => $request->email,
            'telp'           => $request->telp,
            'kamar_id'       => $request->kamar_id,
            'nama_tamu'      => $request->nama_tamu,
            'tgl_checkin'    => $request->tgl_checkin,
            'tgl_checkout'   => $request->tgl_checkout,
            'jumlah'         => $request->jumlah,
            'status'         => $request->status,
        ]);

        return new PemesananResource(true, 'Data Pemesanan Berhasil Diubah!', $pemesanan);
    }

    public function destroy(Pemesanan $pemesanan)
    {
        $pemesanan->delete();

        return new PemesananResource(true, 'Data Kamar Berhasil Dihapus!', null);
    }
}
