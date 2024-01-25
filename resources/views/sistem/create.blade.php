@extends('layouts.main')

@section('container')
<div class="main d-flex flex-column justify-content-center align-items-center">
    <div class="col-md-5">
    <form action="/sistem/create" method="POST">
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
            <label for="kodesistem">kode sistem</label><br><br>
            <input type="text" class="form-control" id="kodesistem" name="kodesistem" placeholder="kode unit"><br>
        </div>
        <div class="form-group">
            <label for="namasistem">nama sistem</label><br><br>
            <input type="text" class="form-control" id="namasistem" name="namasistem" placeholder="nama unit"><br>
        </div>           
        <div class="form-group">
            <label for="tipeprogram">tipe program</label><br><br>
            <input type="text" class="form-control" id="tipeprogram" name="tipeprogram" placeholder="nama unit"><br>
        </div>           
        <div class="form-group">
            <label for="statusprogram">status program</label><br><br>
            <input type="text" class="form-control" id="statusprogram" name="statusprogram" placeholder="nama unit"><br>
        </div>           

        <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</div>
@endsection
