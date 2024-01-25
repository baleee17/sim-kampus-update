@extends('layouts.main')

@section('container')
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a class="btn btn-primary btn-sm my-3" href="/unit/create">Tambah data</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-3">Kode unit</th>
                    <th class="col-md-4">Nama unit</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            @forelse ($unit as $index => $unit)
                <tbody>
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $unit->id }}</td>
                        <td>{{ $unit->nama_unit }}</td>
                        <td>
                            <form action="/unit/{{ $unit->id }}" method="POST">
                                <a href="/unit/{{ $unit->id }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="/unit{{ $unit->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                @method('delete')
                                @csrf
                                <input type="submit" value="delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td>Tidak ada data unit</td>
                    </tr>
                </tbody>
            @endforelse
        </table>
    </div>
@endsection
