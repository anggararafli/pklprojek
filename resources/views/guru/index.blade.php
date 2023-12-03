@extends('layout.template')

@section('kontensiswa')
<div class="card">
<div class="card-body">
<h4 class="card-title">Data Guru</h4>
<a href="{{route('guru.create')}}" class="btn btn-primary mb-2">+ Tambah</a>
<table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
    <thead class="table-light">
        <tr>
            <th>No</th>
            <th>Nip</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            {{-- <th>Mata Pelajaran</th>
            <th>Kelas</th> --}}
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($guru as $u)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $u->nip }}</td>
                <td>{{ $u->nama_guru }}</td>
                <td>{{ $u->jenis_kelamin }}</td>
                <td>{{ $u->Agama }}</td>
                <td>{{ $u->Email }}</td>
                <td>
                    <a href="{{ route('guru.edit', $u->id_guru) }}" class="btn btn-warning">Edit</a>
                    {{-- <a href="{{ route('guru.destroy', $u->id_guru) }}" class="btn btn-danger">Hapus</a> --}}
                    <form action="{{ route('guru.destroy', $u->id_guru) }}" method="post" class="d-inline">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
@endsection