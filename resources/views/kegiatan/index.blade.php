@extends('layout.template')

@section('kontensiswa')
<div class="card">
<div class="card-body">
<h4 class="card-title mb-4">Agenda Harian</h4>
<form class="outer-repeater" action='{{ url ('guru') }}' method='post'>
@csrf
                            <div class="form-group row mb-4">
                                <label for="nip" class="col-form-label col-lg-2">Hari, Tanggal</label>
                                <div class="col-lg-10">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="nama_guru" class="col-form-label col-lg-2">Jam Ke-</label>
                                <div class="col-lg-10">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="jenis_kelamin" class="col-form-label col-lg-2">Kelas</label>
                                <div class="col-lg-10">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="Tempat_Tanggal_Lahir" class="col-form-label col-lg-2">Uraian Kegiatan</label>
                                <div class="col-lg-10">
                                    <input type="textarea" id="Tempat_Tanggal_Lahir" name="Tempat_Tanggal_Lahir" class="form-control" placeholder="masukan uraian kegiatan">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="Alamat" class="col-form-label col-lg-2">Bukti</label>
                                <div class="col-lg-10">
                                    <input type="file" id="Alamat" name="Alamat" class="form-control" placeholder="masukan alamat">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="Agama" class="col-form-label col-lg-2">Tanda Tangan</label>
                                <div class="col-lg-10">
                                    <input type="textarea" id="" name="" class="form-control">
                                </div>
                            </div>
                <div class="row justify-content-end">
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>
</div>
</div>
           
@endsection