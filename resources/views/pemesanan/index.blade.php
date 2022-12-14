@extends('template-b')

@section('isi')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Tamu</th>
                <th scope="col">Tanggal Check In</th>
                <th scope="col">Tanggal Check Out</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datapesanan as $pesanan)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $pesanan->nama_tamu}}</td>
                <td>{{ $pesanan->tgl_checkin}}</td>
                <td>{{ $pesanan->tgl_checkout}}</td>
                <td>{{ $pesanan->status}}</td>
                <td>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection