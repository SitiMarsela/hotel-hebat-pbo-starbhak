@extends('template')

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card-body">
                    <form action="{{ route('kamar.store') }}" method="post">
                        @csrf
                        <div class="form-group my-3">
                            <label class="form-label my-3">Type Kamar</label>
                            <input type="text" name="type_kamar"  class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label class="form-label my-3">Nama Fasilitas</label>
                            <input type="text" name="nama_fasilitas"  class="form-control">
                        </div>
                        <div class="form-group my-3">
                            <label class="form-label my-3">Jumlah Kamar</label>
                            <input type="text" name="jml_kamar"  class="form-control">
                        </div>
                        <button type="submit" class="btn btn-outline-primary my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
@endsection