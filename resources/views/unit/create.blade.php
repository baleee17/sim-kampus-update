@extends('layouts.main')

@section('container')
    <form action="/unit/create" method="POST">
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
            <label for="kodeunit">kode unit</label><br><br>
            <input type="number" class="form-control" id="kodeunit" name="kodeunit" placeholder="kode unit"><br>
        </div>
        <div class="form-group">
            <label for="namaunit">nama unit</label><br><br>
            <input type="text" class="form-control" id="namaunit" name="namaunit" placeholder="nama unit"><br>
        </div>           

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
