@extends('layouts.main')

@section('container')

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a class="btn btn-primary btn-sm my-3" href="/periode/create">Tambah data</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-sm-1">No</th>
                    <th class="col-md-1">Kode periode</th>
                    <th class="col-md-1">bulan awal</th>
                    <th class="col-md-1">bulan akhir</th>
                    <th class="col-md-1">tgl mulai</th>
                    <th class="col-md-1">tgl akhir</th>
                    <th class="col-md-1">Aksi</th>
                </tr>
            </thead>
            @forelse ($periode as $index => $periode)
                <tbody>
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $periode->id }}</td>
                        <td>{{ $periode->bulanawal }}</td>
                        <td>{{ $periode->bulanakhir }}</td>
                        <td>{{ $periode->tgl_mulai }}</td>
                        <td>{{ $periode->tgl_akhir }}</td>
                        <td>
                            <form action="/periode/{{ $periode->id }}" method="POST">
                                {{-- <a href="/periode/{{ $periode->id }}" class="btn btn-info btn-sm">Detail</a> --}}
                                <a href="/periode{{ $periode->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                @method('delete')
                                @csrf
                                <input type="submit" value="delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td>Tidak ada data periode</td>
                    </tr>
                </tbody>
            @endforelse
        </table>
    </div>
@endsection
