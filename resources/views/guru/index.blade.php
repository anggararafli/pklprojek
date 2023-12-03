@extends('layout.template')

@section('kontensiswa')
<div class="card">
<div class="card-body">
<h4 class="card-title">Data Guru</h4>
<a href="{{route('guru.create')}}" class="btn btn-primary">+Tambah</a>
<table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
    <thead class="table-light">
    <tr></tr>
    <tr></tr>
    <tr>
        <th>No</th>
        <th>Nip</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Mata Pelajaran</th>
        <th>Kelas</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</div>
</div>
@endsection