@extends('disseny')
@section('content')
<h1>Llista de lloga</h1>
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
@endforeach
</tbody>
</table>
<div>
<div class="p-6 bg-white border-b border-gray-200">
<a href="{{ url('dashboard') }}">Torna al dashboard<a/>
</div>
@endsection