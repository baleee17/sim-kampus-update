@extends('layouts.main')

@section('container')
<div class="main d-flex flex-column justify-content-center align-items-center">
    <div class="col-md-5">
    <form action="/status/tampil" method="POST">
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
            <label for="statusmhs">status mhs</label><br><br>
            <input type="text" class="form-control" id="statusmhs" name="statusmhs" placeholder="status mhs"><br>
        </div>
        <div class="form-group">
            <label for="namastatus">nama status</label><br><br>
            <input type="text" class="form-control" id="namastatus" name="namastatus" placeholder="nama status"><br>
        </div>           

        <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</div>
@endsection
