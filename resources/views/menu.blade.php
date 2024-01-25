@extends('layouts.main', ['title' => 'menu'])

@section('container')
    @forelse ($posts as $index => $post)
        <tbody>
            {{-- <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $post->nama }}</td><br>
                <td>{{ $post->description }}</td><br>
                <td>
                </td>
            </tr> --}}

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">nomor</th>
                        <th scope="col">nama</th>
                        <th scope="col">deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $post->nama }}</td><br>
                        <td>{{ $post->description }}</td><br>
                    </tr>
                </tbody>
            </table>
        @empty
            <tr>
                <td>Tidak ada data Post</td>
            </tr>
        </tbody>
    @endforelse
@endsection
