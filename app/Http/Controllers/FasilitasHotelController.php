<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class FasilitasHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datahotel = Hotel::latest()->paginate(5);
        return view ('fasilitas-hotel.index',compact('datahotel'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fasilitas-hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama_barang' => 'required',
        //     'stok' => 'required',
        // ]);

        Hotel::create($request->all());

        return redirect()->route('fasilitas-hotel.index')->with('success','Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $datahotel = Hotel::find($id);
        return view('fasilitas-hotel.edit',compact('datahotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        $hotel->update($request->all());
        
        return redirect()->route('fasilitas-hotel.index')->with('success','Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //
    }
}
