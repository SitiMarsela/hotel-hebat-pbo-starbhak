<?php

namespace App\Http\Controllers\Api;

use App\Models\Kamar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\KamarResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KamarController extends Controller
{
    public function index()
    {
        $kamars = Kamar::latest()->get();

        return new KamarResource(true, 'List Data Kamar', $kamars);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type_kamar'     => 'required',
            'nama_fasilitas'   => 'required',
            'harga'   => 'required',
            'deskripsi'   => 'required',
            'jml_kamar'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $kamar = Kamar::create([
            'type_kamar'     => $request->type_kamar,
            'nama_fasilitas'   => $request->nama_fasilitas,
            'harga'  => $request->harga,
            'deskripsi' => $request->deskripsi,
            'jml_kamar'  => $request->jml_kamar,
        ]);

        return new KamarResource(true, 'Data Kamar Berhasil Ditambahkan!', $kamar);
    }

    public function show(Kamar $kamar)
    {
        return new KamarResource(true, 'Data Kamar Ditemukan!', $kamar);
    }

    public function update(Request $request, Kamar $kamar)
    {
        $validator = Validator::make($request->all(), [
            'type_kamar'     => 'required',
            'nama_fasilitas'   => 'required',
            'harga'   => 'required',
            'deskripsi'   => 'required',
            'jml_kamar'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $kamar->update([
            'type_kamar'     => $request->type_kamar,
            'nama_fasilitas'   => $request->nama_fasilitas,
            'harga'  => $request->harga,
            'deskripsi' => $request->deskripsi,
            'jml_kamar'  => $request->jml_kamar,
        ]);
        // }

        return new KamarResource(true, 'Data Kamar Berhasil Diubah!', $kamar);
    }

    public function destroy(Kamar $kamar)
    {
        Storage::delete('public/kamar/'.$kamar->image);

        $kamar->delete();

        return new KamarResource(true, 'Data Kamar Berhasil Dihapus!', null);
    }
}