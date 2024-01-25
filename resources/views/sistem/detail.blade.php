@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">detail data</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>

<h1>{{ $sistem->id}}</h1>
<p>{{ $sistem->nama_sistem }}</p>
<p>{{ $sistem->tipe_program }}</p>
<p>{{ $sistem->status_program }}</p>
@endsection