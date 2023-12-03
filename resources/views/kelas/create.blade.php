@extends('layout.template')
@section('kontensiswa')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Tambah Data</h4>
            <form class="outer-repeater" action='{{ url('kelas') }}' method='post'>
                @csrf
                <a href="{{ url('kelas') }}" class="btn btn-secondary mb-2">kembali</a>
                <div class="form-group row mb-4">
                    <label for="nama_kelas" class="col-form-label col-lg-2">Nama Kelas</label>
                    <div class="col-lg-10">
                        <input id="nama_kelas" name="nama_kelas" type="text" class="form-control" placeholder="masukan Nama Kelas">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="jurusan" class="col-form-label col-lg-2">Jurusan</label>
                    <div class="col-lg-10">
                        <input id="jurusan" name="jurusan" type="text" class="form-control" placeholder="masukan Jurusan">
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
