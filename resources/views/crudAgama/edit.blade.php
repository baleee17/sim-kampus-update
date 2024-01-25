@extends('layouts.main')

@section('container')
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="col-md-5">
            <form action="/agama/{{ $agama->id }}" method="POST">
                @csrf
                @method('put')

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <label for="kodeAgama">kode agama</label><br><br>
                    <input type="number" value="{{ $agama->id }}" class="form-control" id="kodeAgama" name="kodeAgama"
                        placeholder="kode agama"><br>
                </div>
                <div class="form-group">
                    <label for="namaAgama">nama agama</label><br><br>
                    <input type="text" value="{{ $agama->nama_agama }}" class="form-control" id="namaAgama"
                        name="namaAgama" placeholder="nama agama"><br>
                </div>

                <div class="text-center">
                <button class=" btn btn-warning" type="submit" >Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
