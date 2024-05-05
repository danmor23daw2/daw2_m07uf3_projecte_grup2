@extends('disseny')
@section('content')
<h1>Llista de lloga</h1>
<div class="mt-5">
<table class="table">
<thead>
<tr class="table-primary">
<td>DNI client</td>
<td>Matricula auto</td>
<td>Data del prestec</td>
<td>Data de devolucio</td>
<td>Lloc de devolucio</td>
<td>Preu per dia</td>
<td>email</td>
<td>Prestec amb retorn de diposit ple</td>
<td>Tipus d'assegurança</td>
</tr>
</thead>
<tbody>
@foreach($dades_lloga as $treb)
<tr>
<td>{{$treb->DNI_client}}</td>
<td>{{$treb->matricula_auto}}</td>
<td>{{$treb->data_del_prestec}}</td>
<td>{{$treb->data_de_devolucio}}</td>
<td>{{$treb->lloc_de_devolucio}}</td>
<td>{{$treb->preu_per_dia}}</td>
<td>{{$treb->email}}</td>
<td>{{$treb->prestec_amb_retorn_de_diposit_ple}}</td>
<td>{{$treb->tipus_dassegurança}}</td>
</tr>
<td class="text-left">
<form action="{{ route('llogas.destroy', $treb->matricula_auto) }}" method="post" style="display: inline-block">
<a href="{{ route('llogas.edit', $treb->matricula_auto)}}" class="btn btn-primary btn-sm">Edita</a>
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