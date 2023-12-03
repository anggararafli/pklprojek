@extends('layout.template')

@section('kontensiswa')

<h4 class="card-title mb-4">Edit Data</h4>
<form class="outer-repeater" action='{{ url ('guru/'.$gurus->nip) }}' method='post'>
@csrf
@method('PUT')
<a href="{{ url('guru') }}" class="btn btn-secondary"><< kembali</a>
                            <div class="form-group row mb-4">
                                <label for="nip" class="col-form-label col-lg-2">NIP</label>
                                <div class="col-lg-10">
                                    {{ $gurus->nip }}
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="username_guru" class="col-form-label col-lg-2">Username</label>
                                <div class="col-lg-10">
                                    <input id="username_guru" name="username_guru" type="text" value="{{ $gurus->username_guru }}" class="form-control" placeholder="Masukan Username">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="email_guru" class="col-form-label col-lg-2">Email</label>
                                <div class="col-lg-10">
                                    <input id="email_guru" name="email_guru" type="email" value="{{ $gurus->email_guru }}" class="form-control" placeholder="Masukan Email">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="passwors_guru" class="col-form-label col-lg-2">Password</label>
                                <div class="col-lg-10">
                                    <input id="passwors_guru" name="passwors_guru" type="password" value="{{ $gurus->passwors_guru }}" class="form-control" placeholder="Masukan Password">
                                </div>
                            </div>
                <div class="row justify-content-end">
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
           
@endsection