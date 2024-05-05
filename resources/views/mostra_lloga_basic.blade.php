@extends('disseny')
@section('content')
<h1>Dades del client</h1>
<div class="mt-5">
  <table class="table table-striped table-bordered table-hover">
	<thead class="thead-dark">
		<tr class="table-primary">
			<th scope="col">CAMP</td>
			<th scope="col">VALOR</td>
        </tr>
	</thead>
	<tbody>
		<tr>
			<td>DNI client</td>
			<td>{{$dades_lloga->DNI_client}}</td>
		</tr>
		<tr>
			<td>Matricula auto</td>
			<td>{{$dades_lloga->matricula_auto}}</td>
		</tr>
		<tr>
			<td>Data del prestec</td>
			<td>{{$dades_lloga->data_del_prestec}}</td>
		</tr>
		<tr>
			<td>Data de devolucio</td>
			<td>{{$dades_lloga->data_de_devolucio}}</td>
		</tr>
		<tr>
			<td>Lloc de devolucio</td>
			<td>{{$dades_lloga->lloc_de_devolucio}}</td>
		</tr>
		<tr>
			<td>Preu per dia</td>
			<td>{{$dades_lloga->preu_per_dia}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$dades_lloga->email}}</td>
		</tr>
		<tr>
			<td>Prestec amb retorn de diposit ple</td>
			<td>{{$dades_lloga->prestec_amb_retorn_de_diposit_ple}}</td>
		</tr>
		<tr>
			<td>Tipus d'assegurança</td>
			<td>{{$dades_lloga->tipus_dassegurança}}</td>
		</tr>
	</tbody>	
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard_basic') }}">Torna al dashboard<a/>                     
  </div>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('llogas/index_basic') }}">Torna a la llista<a/>
  </div>
<div>
@endsection
