@extends('layouts.app')
@section('title', 'Filmovi')
@section('sidebar')
@parent
@endsection
@section('content')

@if ($errors->any())
<div class="alert alert-primary" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@error('message')
<div class="alert alert-success">{{ $message }}</div>
@enderror

<p>
<h4>Novi film:</h4>
</p>
<hr>
<form method="POST" action="/filmovi" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="naslov"> Naslov filma:</label>
        <input class="form-control" maxlength="50" type="text" name="naslov" required="true" value="">
    </div> 
    <div class="form-group">
        <label for="zanr_id"> Žanr:</label>
        <select class="form-control" name="zanr_id" required="true">
            <option value=""></option>
            @foreach ($zanr as $z)
            <option value="{{$z->zanr_id}}">{{$z->naziv}}</option>
            @endforeach
        </select>
    </div> 
    <div class="form-group">
        <label for="godina"> Godina:</label>
        <select class="form-control" name="godina">
            <option value=""></option>
            @for ($god=1900; $god <= 2020; $god++)
            <option value="{{ $god }}">{{ $god }}</option>
            @endfor
        </select>
    </div>
    <div class="form-group">
        <label for="trajanje"> Trajanje:</label>
        <input class="form-control" maxlength="5" type="text" name="trajanje" required="true">
    </div> 
    <div class="form-group">
        <label for="slika"> Slika: </label>
        <input type="file" class="form-control-file" name="slika" >
    </div> 
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Spremi film</button>
    </div>
</form>
@endsection
