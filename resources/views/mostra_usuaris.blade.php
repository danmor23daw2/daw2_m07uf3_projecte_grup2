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
			<td>Nom i cognoms</td>
			<td>{{$dades_usuaris->nom_i_cognoms}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$dades_usuaris->email}}</td>
		</tr>
		<tr>
			<td>contrasenya</td>
			<td>{{$dades_usuaris->contrasenya}}</td>
		</tr>
		<tr>
			<td>Tipus</td>
			<td>{{$dades_usuaris->tipus}}</td>
		</tr>
		<tr>
			<td>Darrera hora d'entrada</td>
			<td>{{$dades_usuaris->darrera_hora_d_entrada}}</td>
		</tr>
		<tr>
			<td>Darrera hora de sortida</td>
			<td>{{$dades_usuaris->darrera_hora_de_sortida}}</td>
		</tr>
	</tbody>	
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard<a/>                     
  </div>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('usuaris') }}">Torna a la llista<a/>
  </div>
<div>
@endsection
