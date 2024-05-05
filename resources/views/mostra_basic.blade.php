@extends('disseny')
@section('content')
<h1>Dades del auto</h1>
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
			<td>Matricula auto</td>
			<td>{{$dades_autos->matricula_auto}}</td>
		</tr>
		<tr>
			<td>Numero de bastidor</td>
			<td>{{$dades_autos->numero_de_bastidor}}</td>
		</tr>
		<tr>
			<td>Marca</td>
			<td>{{$dades_autos->marca}}</td>
		</tr>
		<tr>
			<td>Model</td>
			<td>{{$dades_autos->model}}</td>
		</tr>
		<tr>
			<td>Color</td>
			<td>{{$dades_autos->color}}</td>
		</tr>
		<tr>
			<td>Nombre de places</td>
			<td>{{$dades_autos->nombre_de_places}}</td>
		</tr>
		<tr>
			<td>Nombre de portes</td>
			<td>{{$dades_autos->nombre_de_portes}}</td>
		</tr>
		<tr>
			<td>Grandaria del maleter</td>
			<td>{{$dades_autos->grandaria_del_maleter}}</td>
		</tr>
		<tr>
			<td>Tipus de combustible</td>
			<td>{{$dades_autos->tipus_de_combustible}}</td>
		</tr>
	</tbody>	
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard_basic') }}">Torna al dashboard<a/>                     
  </div>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('autos/index_basic') }}">Torna a la llista<a/>
  </div>
<div>
@endsection
