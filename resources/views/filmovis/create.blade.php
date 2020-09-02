
@section('title', 'Dodaj novi film')
@section('content_header')
<h1>Novi film</h1>
@stop


@section('content')

@if ($errors->any())
<div class="alert alert-danger">
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

<h3>Dodaj novi film:</h3>

<form method="POST" action="/filmovi" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="naslov"> Naslov filma:</label>
        <br>
        <input maxlength="99" type="text" name="naslov" required="true" value="">
        <br>
        <br>

        <label for="zanr_id"> Žanr:</label>
        &nbsp;
        <select name="zanr_id" required="true">
            <option value=""></option>
            @foreach ($zanr as $z)
            <option value="{{$z->zanr_id}}">{{$z->naziv}}</option>
            @endforeach
        </select>
        &nbsp;
        <br>
        <br>

        <label for="godina"> Godina:</label>
        <input min="1950" max="2020" type="number" name="godina" required="true"
               value="">
        <br>
        <br>

        <label for="trajanje"> Trajanje:</label>
        <br>
        <input maxlength="5" type="number" min=0 name="trajanje" required="true"
               value="0">
        <br>
        <br>
        
        <label for="slika"> Slika: </label>
            <input type="file" name="slika" >
        <br>
   
    </div>
    <div class="form-group">
        <input type="submit" name="dodaj_film_sbm" value="Dodaj novi film">
    </div>
</form>

