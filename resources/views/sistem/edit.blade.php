@extends('layouts.main')

@section('container')
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="col-md-5">
            <form action="/sistem/{{ $sistem->id }}" method="POST">
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
                    <label for="kodesistem">kode sistem</label><br><br>
                    <input type="text" value="{{ $sistem->id }}" class="form-control" id="kodesistem" name="kodesistem"
                        placeholder="sistem mhs"><br>
                </div>
                <div class="form-group">
                    <label for="namasistem">nama sistem</label><br><br>
                    <input type="text" value="{{ $sistem->nama_sistem }}" class="form-control" id="namasistem"
                        name="namasistem" placeholder="nama sistem"><br>
                </div>
                <div class="form-group">
                    <label for="tipeprogram">tipe program</label><br><br>
                    <input type="text" value="{{ $sistem->tipe_program }}" class="form-control" id="tipeprogram"
                        name="tipeprogram" placeholder="nama sistem"><br>
                </div>
                <div class="form-group">
                    <label for="statusprogram">status program</label><br><br>
                    <input type="text" value="{{ $sistem->status_program }}" class="form-control" id="statusprogram"
                        name="statusprogram" placeholder="nama sistem"><br>
                </div>

                <div class="text-center">
                <button class=" btn btn-warning" type="submit" >Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
