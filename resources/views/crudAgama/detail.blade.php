@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <p class="text-center">detail data</p>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>

<h1>{{ $agama->id}}</h1>
<p>{{ $agama->nama_agama }}</p>
@endsection