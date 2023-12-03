@extends('layout.template')

@section('kontensiswa')
<div class="card">
<div class="card-body">
<h4 class="card-title mb-4">Tambah Data</h4>
<form class="outer-repeater" action='{{ url ('guru') }}' method='post'>
@csrf
<a href="{{ url('guru') }}" class="btn btn-secondary"><< kembali</a>
                            <div class="form-group row mb-4">
                                <label for="nip" class="col-form-label col-lg-2">NIP</label>
                                <div class="col-lg-10">
                                    <input id="nip" name="nip" type="text" class="form-control" placeholder="masukan NIP">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="nama_guru" class="col-form-label col-lg-2">Nama</label>
                                <div class="col-lg-10">
                                    <input id="nama_guru" name="nama_guru" type="text" class="form-control" placeholder="masukan nama">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="jenis_kelamin" class="col-form-label col-lg-2">Jenis Kelamin</label>
                                <div class="col-lg-10">
                                    <input type="radio" id="laki-laki" name="jenis_kelamin">Laki-Laki<br>
                                    <input type="radio" id="perempuan" name="jenis_kelamin">Perempuan
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="Tempat_Tanggal_Lahir" class="col-form-label col-lg-2">Tempat Tanggal Lahir</label>
                                <div class="col-lg-10">
                                    <input id="Tempat_Tanggal_Lahir" name="Tempat_Tanggal_Lahir" type="text" class="form-control" placeholder="masukan tempat lahir">
                                    <input id="Tempat_Tanggal_Lahir" name="Tempat_Tanggal_Lahir" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="Alamat" class="col-form-label col-lg-2">Alamat</label>
                                <div class="col-lg-10">
                                    <input id="Alamat" name="Alamat" type="text" class="form-control" placeholder="masukan alamat">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="Agama" class="col-form-label col-lg-2">Agama</label>
                                <div class="col-lg-10">
                                    <select name="Agama">
                                        <option selected>Agama</option>
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
                                    <input id="Email" name="Email" type="email" class="form-control" placeholder="masukan email">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="username_guru" class="col-form-label col-lg-2">Username</label>
                                <div class="col-lg-10">
                                    <input id="username_guru" name="username_guru" type="email" class="form-control" placeholder="masukan username">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="password_guru" class="col-form-label col-lg-2">Password</label>
                                <div class="col-lg-10">
                                    <input id="password_guru" name="password_guru" type="password" class="form-control" placeholder="masukan password">
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