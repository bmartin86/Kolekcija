
<h3>Lista filmova:</h3>
<div class="container">
    <div class="jumbotron">
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
            <td><img src="{{ asset('slike/' . $f->slika).'.jpg' }}"widht="120" height="120" ></td>
            <td>{{$f->naslov }}</td>
            <td>{{$f->godina }}</td>
            <td>{{$f->trajanje }}</td>
            <td>%</td>
        </tr>
@endforeach
    </tbody>
</table>
  </div>
</div>
