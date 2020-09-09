@extends('layouts.app')
@section('title', 'Filmovi')
<?php
$alpha_nums = array_merge(range('A', 'Z'), range('0', '9'));
?>
@section('sidebar')
@parent
@endsection

@section('content')
<style>
    .links {
        text-align: center;
        font-size: 21px;
    }
</style>

<button type="button" class="btn btn-link" style="font-size: xx-large">
    <a href='{{route('filmovi.create')}}'>Dodaj novi film:</a></button>

<div class="links">
    @foreach ($alpha_nums as $i) 
    <a href='{{url("filmovi/naslovo/".$i)}}'>|{{ $i }}|</a>
    @endforeach
</div>
<br>
<div>
    <h4>{{ $subtitle ?? '' }}</h4>
</div>
<div>
    <table class="table table-striped" style="text-align: center" >
        <thead class="thead-dark">
            <tr>
                <th scope="col">Slika</td>
                <th scope="col">Naslov filma</td>
                <th scope="col">Godina</td>
                <th scope="col">Trajanje</td>
                <th scope="col">Akcija</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($filmovi as $f)
            <tr style="font-size: large">
                <th><img src="{{ asset('slike/' . $f->slika) }}"widht="200" height="200" ></th>
                <th>{{$f->naslov }}</th>
                <th>{{$f->godina }}</th>
                <th>{{$f->trajanje }}</th>
                <th>
                    <form  name="film_delete" action="{{url("/filmovi/{$f->film_id}")}}
                          " method="POST" enctype="multipart/form-data">
                        @method('delete')
                        @csrf
                        <button type="submit" style="color: blue">[ obriši ]
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="links">
    @foreach ($alpha_nums as $i) 
    <a href='{{url("filmovi/naslovo/".$i)}}'>|{{ $i }}|</a>
    @endforeach
</div>
@endsection