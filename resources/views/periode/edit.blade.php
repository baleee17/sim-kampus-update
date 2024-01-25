@extends('layouts.main')

@section('container')
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="col-md-5">
            <form action="/periode/{{ $periode->id }}" method="POST">
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
                    <label for="kodeperiode">kode periode</label><br><br>
                    <input type="text" value="{{ $periode->id }}" class="form-control" id="kodeperiode" name="kodeperiode"
                        placeholder="kode periode"><br>
                </div>
                <div class="form-group">
                    <label for="bulanawal">bulan awal</label><br><br>
                    <input type="text" value="{{ $periode->bulanawal }}" class="form-control" id="bulanawal"
                        name="bulanawal" placeholder="bulan awal"><br>
                </div>
                <div class="form-group">
                    <label for="bulanakhir">bulan akhir</label><br><br>
                    <input type="text" value="{{ $periode->bulanakhir }}" class="form-control" id="bulanakhir"
                        name="bulanakhir" placeholder="nama agama"><br>
                </div>
                <div class="form-group">
                    <label for="tglmulai">tgl mulai</label><br><br>
                    <input type="date" value="{{ $periode->tgl_mulai }}" class="form-control" id="tglmulai"
                        name="tglmulai" placeholder="nama agama"><br>
                </div>
                <div class="form-group">
                    <label for="tglakhir">tgl akhir</label><br><br>
                    <input type="date" value="{{ $periode->tgl_akhir }}" class="form-control" id="tglakhir"
                        name="tglakhir" placeholder="nama agama"><br>
                </div>

                <div class="text-center">
                <button class=" btn btn-warning" type="submit" >Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
