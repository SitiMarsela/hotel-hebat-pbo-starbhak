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
        //get posts
        $kamar = Kamar::latest()->paginate(5);

        //return collection of posts as a resource
        return new KamarResource(true, 'List Data Kamar', $kamar);
    }

    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'type_kamar'     => 'required',
            'url_gambar'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_fasilitas'   => 'required',
            'harga'   => 'required',
            'deskripsi'   => 'required',
            'jml_kamar'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        $image = $request->file('url_gambar');
        $image->storeAs('public/kamar', $image->hashName());

        //create post
        $kamar = Kamar::create([
            'type_kamar'     => $request->type_kamar,
            'url_gambar'     => $image->hashName(),
            'nama_fasilitas'   => $request->nama_fasilitas,
            'harga'  => $request->harga,
            'deskripsi' => $request->deskripsi,
            'jml_kamar'  => $request->jml_kamar,
        ]);

        //return response
        return new KamarResource(true, 'Data Kamar Berhasil Ditambahkan!', $kamar);
    }

    public function show(Kamar $kamar)
    {
        //return single post as a resource
        return new KamarResource(true, 'Data Kamar Ditemukan!', $kamar);
    }

    public function update(Request $request, Kamar $kamar)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'type_kamar'     => 'required',
            'url_gambar'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_fasilitas'   => 'required',
            'harga'   => 'required',
            'deskripsi'   => 'required',
            'jml_kamar'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //check if image is not empty
        if ($request->hasFile('url_gambar')) {

            //upload image
            $image = $request->file('url_gambar');
            $image->storeAs('public/kamar', $image->hashName());

            //delete old image
            Storage::delete('public/kamar/'.$kamar->image);

            //update post with new image
            $kamar->update([
                'type_kamar'     => $request->type_kamar,
                'url_gambar'     => $image->hashName(),
                'nama_fasilitas'   => $request->nama_fasilitas,
                'harga'  => $request->harga,
                'deskripsi' => $request->deskripsi,
                'jml_kamar'  => $request->jml_kamar,
            ]);

        } else {

            //update post without image
            $kamar->update([
                'type_kamar'     => $request->type_kamar,
                'nama_fasilitas'   => $request->nama_fasilitas,
                'harga'  => $request->harga,
                'deskripsi' => $request->deskripsi,
                'jml_kamar'  => $request->jml_kamar,
            ]);
        }

        //return response
        return new KamarResource(true, 'Data Kamar Berhasil Diubah!', $kamar);
    }

    public function destroy(Kamar $kamar)
    {
        //delete image
        Storage::delete('public/kamar/'.$kamar->image);

        //delete post
        $kamar->delete();

        //return response
        return new KamarResource(true, 'Data Kamar Berhasil Dihapus!', null);
    }
}
