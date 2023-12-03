@extends('layout.template')
@section('kontensiswa')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Tambah Data</h4>
            <form class="outer-repeater" action='{{ url('agenda') }}' method='post'>
                @csrf
                <a href="{{ url('agenda') }}" class="btn btn-secondary mb-2">kembali</a>
                <div class="form-group row mb-4 d-none">
                    <label for="nama_kelas" class="col-form-label col-lg-2">Tanggal</label>
                    <div class="col-lg-10">
                        <input id="nama_kelas" name="tanggal" type="hidden" class="form-control" value="{{ Carbon\Carbon::today() }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="jurusan" class="col-form-label col-lg-2">Guru</label>
                    <div class="col-lg-10">
                        <select name="id_guru" id="" class="form-control">
                            @foreach ($guru as $u)
                            <option value="{{ $u->id_guru }}">{{ $u->nama_guru }}</option>                            
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="jurusan" class="col-form-label col-lg-2">Kelas</label>
                    <div class="col-lg-10">
                        <select name="id_kelas" id="" class="form-control">
                            @foreach ($kelas as $u)
                            <option value="{{ $u->id_kelas }}">{{ $u->nama_kelas }}</option>                            
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="jurusan" class="col-form-label col-lg-2">Jam ke</label>
                    <div class="col-lg-10">
                        <input id="jam_ke" name="jam_ke" type="text" class="form-control" placeholder="masukan Jam ke">
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
