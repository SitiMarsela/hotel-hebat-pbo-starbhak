@extends('template')

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card-body">
                    <form action="{{ route('kamar.update',$datakamar->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group my-3">
                            <label class="form-label my-3">Type Kamar</label>
                            <input type="text" name="type_kamar" class="form-control" value="{{ $datakamar->type_kamar }}">
                        </div>
                        <div class="form-group my-3">
                            <label class="form-label my-3">Nama Fasilitas</label>
                            <input type="text" name="nama_fasilitas"  class="form-control" value="{{ $datakamar->nama_fasilitas }}">
                        </div>
                        <div class="form-group my-3">
                            <label class="form-label my-3">Jumlah Kamar</label>
                            <input type="text" name="jml_kamar"  class="form-control" value="{{ $datakamar->jml_kamar }}">
                        </div>
                        <button type="submit" class="btn btn-outline-primary my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection