@extends('layout.template')
@section('kontensiswa')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title mb-4">Tambah Data</h4>
            <form class="outer-repeater" action='{{ route('guru.update', $guru->id_guru) }}' method='post'>
                @csrf
                @method('PUT')
                <a href="{{ route('guru.index') }}" class="btn btn-secondary">kembali</a>
                <div class="form-group row mb-4">
                    <label for="nip" class="col-form-label col-lg-2">NIP</label>
                    <div class="col-lg-10">
                        <input id="nip" name="nip" type="text" class="form-control" placeholder="masukan NIP" value="{{ $guru->nip }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="nama_guru" class="col-form-label col-lg-2">Nama</label>
                    <div class="col-lg-10">
                        <input id="nama_guru" name="nama_guru" type="text" class="form-control"
                            placeholder="masukan nama" value="{{ $guru->nama_guru }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="jenis_kelamin" class="col-form-label col-lg-2">Jenis Kelamin</label>
                    <div class="col-lg-10">
                        <input type="radio" id="laki-laki" name="jenis_kelamin" value="laki-laki" >Laki-Laki<br>
                        <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" >Perempuan
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="Tempat_Tanggal_Lahir" class="col-form-label col-lg-2">Tempat Tanggal Lahir</label>
                    <div class="col-lg-10">
                        <input id="Tempat_Tanggal_Lahir" name="Tempat_Lahir" type="text" class="form-control"
                            placeholder="masukan tempat lahir" value="{{ $guru->Tempat_Lahir }}">
                        <input id="Tempat_Tanggal_Lahir" name="Tanggal_Lahir" type="date" class="form-control" value="{{ $guru->Tanggal_Lahir }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="Alamat" class="col-form-label col-lg-2">Alamat</label>
                    <div class="col-lg-10">
                        <input id="Alamat" name="Alamat" type="text" class="form-control"
                            placeholder="masukan alamat" value="{{ $guru->Alamat }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="Agama" class="col-form-label col-lg-2">Agama</label>
                    <div class="col-lg-10">
                        <select name="Agama" class="form-control">
                            <option value="{{ $guru->Agama }}">default | {{ $guru->Agama }}</option>
                            <option hidden>Agama</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="Email" class="col-form-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                        <input id="Email" name="Email" type="email" class="form-control"
                            placeholder="masukan email" value="{{ $guru->Email }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="username_guru" class="col-form-label col-lg-2">Username</label>
                    <div class="col-lg-10">
                        <input id="username_guru" name="username_guru" type="text" class="form-control"
                            placeholder="masukan username" value="{{ $guru->username_guru }}">
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
