<?php

namespace App\Http\Controllers\Api;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\HotelResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{

    public function index()
    {
        $fasilitashotel = Hotel::latest()->paginate(5);

        return new HotelResource(true, 'List Data Fasilitas Hotel', $fasilitashotel);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_fasilitas_hotel'   => 'required',
            'deskripsi'              => 'required',
            'url_gambar'             => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $image = $request->file('url_gambar');
        $image->storeAs('public/hotel', $image->hashName());

        $fasilitashotel = Hotel::create([
            'nama_fasilitas_hotel' => $request->nama_fasilitas_hotel,
            'deskripsi'            => $request->deskripsi,
            'url_gambar'           => $image->hashName(),
        ]);

        return new HotelResource(true, 'Data Fasilitas Hotel Berhasil Ditambahkan!', $fasilitashotel);
    }

    public function show(Hotel $fasilitashotel)
    {
        return new HotelResource(true, 'Data Fasilitas Hotel Ditemukan!', $fasilitashotel);
    }

    public function update(Request $request, Hotel $fasilitashotel)
    {
        $validator = Validator::make($request->all(), [
            'nama_fasilitas_hotel'   => 'required',
            'deskripsi'              => 'required',
            'url_gambar'             => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

         if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if ($request->hasFile('url_gambar')) {

            $image = $request->file('url_gambar');
            $image->storeAs('public/hotel', $image->hashName());

            Storage::delete('public/hotel/'.$fasilitashotel->image);

            $fasilitashotel->update([
                'nama_fasilitas_hotel' => $request->nama_fasilitas_hotel,
                'deskripsi'            => $request->deskripsi,
                'url_gambar'           => $image->hashName(),
            ]);

        } else {

            $fasilitashotel->update([
                'nama_fasilitas_hotel' => $request->nama_fasilitas_hotel,
                'deskripsi'            => $request->deskripsi,
            ]);
        }

        return new HotelResource(true, 'Data Fasilitas Hotel Berhasil Diubah!', $fasilitashotel);
    }

    public function destroy(Hotel $fasilitashotel)
    {
        Storage::delete('public/kamar/'.$fasilitashotel->image);

        $fasilitashotel->delete();

        return new HotelResource(true, 'Data Fasilitas Hotel Berhasil Dihapus!', null);
    }    
}   