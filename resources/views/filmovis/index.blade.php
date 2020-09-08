<?php
//$alpha_nums = array_merge(range('A', 'Z'), range('0', '9'));
$alphas = (range('A', 'Z'));
$nums = (range('0', '9'));
?>
<div class="content">
    @foreach ($alphas as $i) 
    <a href='{{url("filmovi/naslovo/".$i)}}'>|{{ $i }}|</a>
    @endforeach
</div>
<div class="content">
    @foreach ($nums as $i) 
    <a href='{{url("filmovi/naslovo/".$i)}}'>|{{ $i }}|</a>
    @endforeach
</div>

{{ $subtitle ?? '' }}


<h3>Lista filmova:</h3>
<div class="container">
    <table>
        <thead>
            <tr>
                <td>Slika</td>
                <td>Naslov filma</td>
                <td>Godina</td>
                <td>Trajanje</td>
                <td>Akcija</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($filmovi as $f)
            <tr>
                <td><img src="{{ asset('slike/' . $f->slika) }}"widht="120" height="120" ></td>
                <td>{{$f->naslov }}</td>
                <td>{{$f->godina }}</td>
                <td>{{$f->trajanje }}</td>
                <td>
                    <form style="display:inline" name="film_delete" action="{{url("/filmovi/{$f->film_id}")}}
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
<a href='{{route('filmovi.create')}}'>Dodaj novi film</a>