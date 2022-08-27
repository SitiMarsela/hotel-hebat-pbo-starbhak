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
        $fasilitashotels = Hotel::latest()->get();

        return new HotelResource(true, 'List Data Fasilitas Hotel', $fasilitashotels);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_fasilitas_hotel'   => 'required',
            'deskripsi'              => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $fasilitashotel = Hotel::create([
            'nama_fasilitas_hotel' => $request->nama_fasilitas_hotel,
            'deskripsi'            => $request->deskripsi,
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
        ]);

         if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

            $fasilitashotel->update([
                'nama_fasilitas_hotel' => $request->nama_fasilitas_hotel,
                'deskripsi'            => $request->deskripsi,
            ]);
        // }

        return new HotelResource(true, 'Data Fasilitas Hotel Berhasil Diubah!', $fasilitashotel);
    }

    public function destroy(Hotel $fasilitashotel)
    {
        Storage::delete('public/kamar/'.$fasilitashotel->image);

        $fasilitashotel->delete();

        return new HotelResource(true, 'Data Fasilitas Hotel Berhasil Dihapus!', null);
    }    
}   