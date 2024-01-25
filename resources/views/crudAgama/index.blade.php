@extends('layouts.main')

@section('container')
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a class="btn btn-primary btn-sm my-3" href="/agama/tampil">Tambah data</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-3">Kode Agama</th>
                    <th class="col-md-4">Nama Agama</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            @forelse ($agama as $index => $agama)
                <tbody>
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $agama->id }}</td>
                        <td>{{ $agama->nama_agama }}</td>
                        <td>
                            <form action="/agama/{{ $agama->id }}" method="POST">
                                <a href="/agama/{{ $agama->id }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="/agama{{ $agama->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                @method('delete')
                                @csrf
                                <input type="submit" value="delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td>Tidak ada data Agama</td>
                    </tr>
                </tbody>
            @endforelse
        </table>
    </div>
@endsection
