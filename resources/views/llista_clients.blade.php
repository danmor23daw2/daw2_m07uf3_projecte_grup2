@extends('disseny')
@section('content')
<h1>Llista de clients</h1>
<div class="mt-5">
<table class="table">
<thead>
<tr class="table-primary">
<td>DNI client</td>
<td>Nom i cognoms</td>
<td>Edat</td>
<td>telefon</td>
<td>adreça</td>
<td>ciutat</td>
<td>email</td>
<td>Numero del permis de conduccio</td>
<td>Punts del permis de conduccio</td>
<td>Tipus de targeta</td>
<td>Numero de la targeta</td>
</tr>
</thead>
<tbody>
@foreach($dades_clients as $treb)
<tr>
<td>{{$treb->DNI_client}}</td>
<td>{{$treb->nom_i_cognoms}}</td>
<td>{{$treb->edat}}</td>
<td>{{$treb->telefon}}</td>
<td>{{$treb->adreça}}</td>
<td>{{$treb->ciutat}}</td>
<td>{{$treb->email}}</td>
<td>{{$treb->numero_del_permis_de_conduccio}}</td>
<td>{{$treb->punts_del_permis_de_conduccio}}</td>
<td>{{$treb->tipus_de_targeta}}</td>
<td>{{$treb->numero_de_la_targeta}}</td>
</tr>
<td class="text-left">
<form action="{{ route('clients.destroy', $treb->DNI_client)}}" method="post" style="display: inline-block">
<a href="{{ route('clients.edit', $treb->DNI_client)}}" class="btn btn-primary btn-sm">Edita</a>
<a href="{{ route('clients.show', $treb->DNI_client)}}" class="btn btn-info btn-sm">Mostra</a>
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