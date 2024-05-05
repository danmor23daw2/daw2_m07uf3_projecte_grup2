@extends('disseny')
@section('content')
<h1>Llista d'autos</h1>
<div class="mt-5">
<table class="table">
<thead>
<tr class="table-primary">
<td>Matricula auto</td>
<td>número de bastidor</td>
<td>marca</td>
<td>model</td>
<td>color</td>
<td>nombre de places</td>
<td>nombre de portes</td>
<td>grandària del maleter</td>
<td>tipus de combustible</td>
</tr>
</thead>
<tbody>
@foreach($dades_autos as $treb)
<tr>
<td>{{$treb->matricula_auto}}</td>
<td>{{$treb->numero_de_bastidor}}</td>
<td>{{$treb->marca}}</td>
<td>{{$treb->model}}</td>
<td>{{$treb->color}}</td>
<td>{{$treb->nombre_de_places}}</td>
<td>{{$treb->nombre_de_portes}}</td>
<td>{{$treb->grandaria_del_maleter}}</td>
<td>{{$treb->tipus_de_combustible}}</td>
</tr>

<td class="text-left">
<form action="{{ route('autos.destroy', $treb->matricula_auto)}}" method="post" style="display: inline-block">
<a href="{{ route('autos.edit', $treb->matricula_auto)}}" class="btn btn-primary btn-sm">Edita</a>
@csrf
@method('DELETE')
<button class="btn btn-danger btn-sm" type="submit">
Esborra
</button>
</form>
</td>
@endforeach
</tbody>
</table>
<div>
<div class="p-6 bg-white border-b border-gray-200">
<a href="{{ url('dashboard') }}">Torna al dashboard<a/>
</div>
@endsection