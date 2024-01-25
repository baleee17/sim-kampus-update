@extends('layouts.main')

@section('container')
<div class="main d-flex flex-column justify-content-center align-items-center">
    <div class="col-md-5">
    <form action="/agama/tampil" method="POST">
        @csrf
        {{-- validation --}}
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
            <input type="text" class="form-control" id="kodeAgama" name="kodeAgama" placeholder="kode agama"><br>
        </div>
        <div class="form-group">
            <label for="namaAgama">nama agama</label><br><br>
            <input type="text" class="form-control" id="namaAgama" name="namaAgama" placeholder="nama agama"><br>
        </div>           

        <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</div>
@endsection
