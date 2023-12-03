@extends('layout.template')

@section('kontensiswa')
<div class="card">
<div class="card-body">
<h4 class="card-title">Data Guru</h4>
<a href="{{route('kelas.create')}}" class="btn btn-primary mb-2">+ Tambah</a>
<table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
    <thead class="table-light">
        <tr>
            <th>No</th>
            <th>Nama Kelas</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kelas as $u)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $u->nama_kelas }}</td>
                <td>{{ $u->jurusan }}</td>
                <td>
                    <a href="{{ route('kelas.edit', $u->id_kelas) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('kelas.destroy', $u->id_kelas) }}" method="post" class="d-inline">
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