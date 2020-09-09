@extends('layouts.app')
@section('title', 'Žanrovi')
@section('sidebar')
@parent
@endsection

@section('content')
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<style>
    .links {
        text-align: center;
        font-size: 21px;
    }
</style>
<br>
<div>
    <h4>{{ $subtitle ?? '' }}</h4>
</div>
<div>  
    <ul class="list-group">
        @foreach ($zanr as $z)
        <li class="list-group-item">
            <a href="{{url("/zanr/{$z->zanr_id}")}}">{{$z->naziv }}</a>
        </li>
        @endforeach
    </ul>
</div>
@endsection