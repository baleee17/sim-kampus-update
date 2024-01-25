@extends('layouts.main')

@section('container')
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a class="btn btn-primary btn-sm my-3" href="/sistem/create">Tambah data</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-1">Kode system</th>
                    <th class="col-md-1">Nama system</th>
                    <th class="col-md-1">tipe program</th>
                    <th class="col-md-1">status program</th>
                    <th class="col-md-1">Aksi</th>
                </tr>
            </thead>
            @forelse ($sistem as $index => $sistem)
                <tbody>
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $sistem->id }}</td>
                        <td>{{ $sistem->nama_sistem }}</td>
                        <td>{{ $sistem->tipe_program }}</td>
                        <td>{{ $sistem->status_program }}</td>
                        <td>
                            <form action="/sistem/{{ $sistem->id }}" method="POST">
                                <a href="/sistem/{{ $sistem->id }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="/sistem{{ $sistem->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                @method('delete')
                                @csrf
                                <input type="submit" value="delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td>Tidak ada data sistem</td>
                    </tr>
                </tbody>
            @endforelse
        </table>
    </div>
@endsection
