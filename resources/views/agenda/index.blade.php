@extends('layout.template')

@section('kontensiswa')
<div class="card">
<div class="card-body">
<h4 class="card-title">Agenda Harian Guru</h4>
<a href="{{ route('agenda.create') }}" class="btn btn-primary mb-2">+ Tambah</a>
<table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
    <thead class="table-light">
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Jam Ke-</th>
        <th>Guru</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($agenda as $a)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $a->tanggal }}</td>
                <td>{{ $a->jam_ke }}</td>
                <td>{{ $a->guru->nama_guru }}</td>
                <td>{{ $a->kelas->nama_kelas }}</td>
                <td>
                    <a href="{{ route('agenda.edit', $a->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('agenda.destroy', $a->id) }}" method="post" class="d-inline">
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