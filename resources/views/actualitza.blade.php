@extends('disseny')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
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
        <form method="post" action="{{ route('autos.update', $dades_autos->matricula_auto) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">           
            <label for="matricula_auto">Matricula Auto</label>
            <input type="text" class="form-control" name="matricula_auto" value="{{ $dades_autos->matricula_auto }}"/>
        </div>
        <div class="form-group">           
            <label for="numero_de_bastidor">Numero de bastidor</label>
            <input type="number" class="form-control" name="numero_de_bastidor" value="{{ $dades_autos->numero_de_bastidor }}"/>
        </div>
        <div class="form-group">           
            <label for="marca">Marca</label>
            <input type="text" class="form-control" name="marca" value="{{ $dades_autos->marca}}"/>
        </div>
        <div class="form-group">           
            <label for="model">Model</label>
            <input type="text" class="form-control" name="model" value="{{ $dades_autos->model }}"/>
        </div>
        <div class="form-group">           
            <label for="color">Color</label>
            <input type="text" class="form-control" name="color" value="{{ $dades_autos->color }}"/>
        </div>        
        <div class="form-group">
            <label for="nombre_de_places">Nombre de places</label>
            <input type="number" class="form-control" name="nombre_de_places" value="{{ $dades_autos->nombre_de_places }}"/>
        </div>
        <div class="form-group">
            <label for="nombre_de_portes">Nombre de portes</label>
            <input type="number" class="form-control" name="nombre_de_portes" value="{{ $dades_autos->nombre_de_portes }}"/>
        </div>
        <div class="form-group">
            <label for="grandaria_del_maleter">Grandaria del maleter</label>
            <input type="number" class="form-control" name="grandaria_del_maleter" value="{{ $dades_autos->grandaria_del_maleter }}"/>
        </div>
        <div class="form-group">           
            <label for="tipus_de_combustible">Tipus de combustible</label>
            <select name="tipus_de_combustible" value="{{ $dades_autos->tipus_de_combustible }}">
			    <option value="gasolina"{{ $dades_autos->tipus_de_combustible == 'gasolina' ? 'selected' : ''}}>Gasolina</option>
			    <option value="diesel" {{ $dades_autos->tipus_de_combustible == 'diesel' ? 'selected' : ''}}>Diesel</option>
			    <option value="elèctric" {{ $dades_autos->tipus_de_combustible == 'elèctric' ? 'selected' : ''}}>Elèctric</option>
			</select>            
        </div>         
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('autos') }}">Accés directe a la Llista d'autos</a
@endsection
