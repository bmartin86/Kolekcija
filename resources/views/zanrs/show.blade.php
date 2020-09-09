@extends('layouts.app')
@section('title', 'Lista filmova odabranog žanra')
@section('sidebar')
@parent
@endsection
@section('content')
@if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<h3>Lista filmova žanra {{$lista_filmova_odabranog_zanra->first()->zanr()->first()->naziv ?? ''}}:</h3>
<hr>
<ul class="list-group list-group-flush">
    @foreach ($lista_filmova_odabranog_zanra as $z)
    <li class="list-group-item"><img src="{{ asset('slike/' . $z->slika) }}"widht="100" height="100" > 
        <b>{{$z->naslov}} ({{$z->godina }}</b>) </li>
    @endforeach
</ul>   
@endsection

@section('css')
<link rel="stylesheet" href="/css/app.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop