@extends('layouts.main')

@section('container')
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a class="btn btn-primary btn-sm my-3" href="/status/tampil">Tambah data</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-3">Kode Status</th>
                    <th class="col-md-4">Nama Status</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            @forelse ($status as $index => $status)
                <tbody>
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $status->id }}</td>
                        <td>{{ $status->namastatus }}</td>
                        <td>
                            <form action="/status/{{ $status->id }}" method="POST">
                                <a href="/status/{{ $status->id }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="/status{{ $status->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                @method('delete')
                                @csrf
                                <input type="submit" value="delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td>Tidak ada data Status</td>
                    </tr>
                </tbody>
            @endforelse
        </table>
    </div>
@endsection
