@extends('layouts.main')

@section('container')
<div class="main d-flex flex-column justify-content-center align-items-center">
    <div class="col-md-5">
    <form action="/periode/create" method="POST">
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
            <label for="kodeperiode">kode periode</label><br><br>
            <input type="text" class="form-control" id="kodeperiode" name="kodeperiode" placeholder="kode periode"><br>
        </div>
        <div class="form-group">
            <label for="bulanawal">bulan awal</label><br><br>
            <input type="text" class="form-control" id="bulanawal" name="bulanawal" placeholder="bulan awal"><br>
        </div>           
        <div class="form-group">
            <label for="bulanakhir">bulan akhir</label><br><br>
            <input type="text" class="form-control" id="bulanakhir" name="bulanakhir" placeholder="bulan akhir"><br>
        </div>           
        <div class="form-group">
            <label for="tglmulai">tgl mulai</label><br><br>
            <input type="date" class="form-control" id="tglmulai" name="tglmulai" placeholder="tgl mulai"><br>
        </div>           
        <div class="form-group">
            <label for="tglakhir">tgl akhir</label><br><br>
            <input type="date" class="form-control" id="tglakhir" name="tglakhir" placeholder="tgl akhir akhir"><br>
        </div>           

        <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</div>
@endsection
