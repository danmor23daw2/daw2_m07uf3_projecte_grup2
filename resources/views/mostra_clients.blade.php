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
			<td>{{$dades_clients->DNI_client}}</td>
		</tr>
		<tr>
			<td>Nom i cognoms</td>
			<td>{{$dades_clients->nom_i_cognoms}}</td>
		</tr>
		<tr>
			<td>Edat</td>
			<td>{{$dades_clients->edat}}</td>
		</tr>
		<tr>
			<td>Telefon</td>
			<td>{{$dades_clients->telefon}}</td>
		</tr>
		<tr>
			<td>Adreça</td>
			<td>{{$dades_clients->adreça}}</td>
		</tr>
		<tr>
			<td>Ciutat</td>
			<td>{{$dades_clients->ciutat}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$dades_clients->email}}</td>
		</tr>
		<tr>
			<td>Numero del permis de conduccio</td>
			<td>{{$dades_clients->numero_del_permis_de_conduccio}}</td>
		</tr>
		<tr>
			<td>Punts del permis de conduccio</td>
			<td>{{$dades_clients->punts_del_permis_de_conduccio}}</td>
		</tr>
        <tr>
			<td>Tipus de targeta</td>
			<td>{{$dades_clients->tipus_de_targeta}}</td>
		</tr>
        <tr>
            <td>Número de targeta</td>
            <td>{{$dades_clients->numero_de_targeta}}</td>
        </tr>
	</tbody>	
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard<a/>                     
  </div>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('clients') }}">Torna a la llista<a/>
  </div>
<div>
@endsection
