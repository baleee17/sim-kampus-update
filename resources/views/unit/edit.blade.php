@extends('layouts.main')

@section('container')

<form action="/unit/{{ $unit->id }}" method="POST">
    @csrf
    @method('put')
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
        <input type="number" value="{{ $unit->id }}" class="form-control" id="kodeunit" name="kodeunit" placeholder="kode unit"><br>
    </div>
    <div class="form-group">
        <label for="namaunit">nama unit</label><br><br>
        <input type="text" value="{{ $unit->nama_unit }}" class="form-control" id="namaunit" name="namaunit" placeholder="nama unit"><br>
    </div>           

    <button type="submit" class="btn btn-warning">Update</button>
</form>
@endsection