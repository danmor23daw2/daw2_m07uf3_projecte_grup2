@extends('disseny')
@section('content')
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou Auto
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
    <form method="post" action="/autos">
        @csrf
        <div class="form-group">           
            <label for="matricula_auto">Matricula Auto</label>
            <input type="text" class="form-control" name="matricula_auto"/>
        </div>
        <div class="form-group">           
            <label for="numero_de_bastidor">Numero de bastidor</label>
            <input type="number" class="form-control" name="numero_de_bastidor"/>
        </div>
        <div class="form-group">           
            <label for="marca">Marca</label>
            <input type="text" class="form-control" name="marca"/>
        </div>
        <div class="form-group">           
            <label for="model">Model</label>
            <input type="text" class="form-control" name="model"/>
        </div>
        <div class="form-group">           
            <label for="color">Color</label>
            <input type="text" class="form-control" name="color"/>
        </div>        
        <div class="form-group">
            <label for="nombre_de_places">Nombre de places</label>
            <input type="number" class="form-control" name="nombre_de_places"/>
        </div>
        <div class="form-group">
            <label for="nombre_de_portes">Nombre de portes</label>
            <input type="number" class="form-control" name="nombre_de_portes"/>
        </div>
        <div class="form-group">
            <label for="grandaria_del_maleter">Grandaria del maleter</label>
            <input type="number" class="form-control" name="grandaria_del_maleter"/>
        </div>
        <div class="form-group">           
            <label for="tipus_de_combustible">Tipus de combustible</label>
            <select name="tipus_de_combustible">
			    <option value="gasolina">Gasolina</option>
			    <option value="diesel">Diesel</option>
			    <option value="elèctric">Elèctric</option>
			</select>            
        </div>   
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>    
  </div>
</div>
<div class="p-6 bg-white border-b border-gray-200">
<a href="{{ url('dashboard') }}">Torna al dashboard<a/>
</div>
@endsection
