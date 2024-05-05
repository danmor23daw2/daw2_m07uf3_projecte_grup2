@extends('disseny')
@section('content')
<h1>Llista de Usuaris</h1>
<div class="mt-5">
<table class="table">
<thead>
<tr class="table-primary">
<td>Nom i cognoms</td>
<td>Email</td>
<td>Contrasenya</td>
<td>Tipus</td>
<td>Darrera hora d'entrada</td>
<td>Darrera hora de sortida</td>

</tr>
</thead>
<tbody>
@foreach($dades_usuaris as $treb)
<tr>
<td>{{$treb->nom_i_cognoms}}</td>
<td>{{$treb->email}}</td>
<td>{{$treb->contrasenya}}</td>
<td>{{$treb->tipus}}</td>
<td>{{$treb->darrera_hora_d_entrada}}</td>
<td>{{$treb->darrera_hora_de_sortida}}</td>
</tr>
<td class="text-left">
<form action="{{ route('usuaris.destroy', $treb->email)}}" method="post" style="display: inline-block">
<a href="{{ route('usuaris.edit', $treb->email)}}" class="btn btn-primary btn-sm">Edita</a>
<a href="{{ route('usuaris.show', $treb->email)}}" class="btn btn-info btn-sm">Mostra</a>
<a href="{{ route('usuaris.generarPDFUsuari', $treb->email)}}" class="btn btn-success btn-sm">Generar PDF</a>
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