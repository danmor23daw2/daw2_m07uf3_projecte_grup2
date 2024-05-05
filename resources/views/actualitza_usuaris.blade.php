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
        <form method="post" action="{{ route('usuaris.update', $dades_usuaris->email) }}">
			@csrf
            @method('PATCH')                
        <div class="form-group">           
            <label for="nom_i_cognoms">Nom i cognoms</label>
            <input type="text" class="form-control" name="nom_i_cognoms"/>
        </div>
        <div class="form-group">           
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email"/>
        </div>
        <div class="form-group">           
            <label for="contrasenya">Data del prestec</label>
            <input type="password" class="form-control" name="contrasenya"/>
        </div>
        <div class="form-group">           
            <label for="tipus">Tipus</label>
            <select name="tipus">
			    <option value="treballador">treballador</option>
			    <option value="cap_de_departament">cap de departament</option>
			</select>            
        </div> 
        <div class="form-group">           
            <label for="darrera_hora_d_entrada">Darrera hora d'entrada</label>
            <input type="time" class="form-control" name="darrera_hora_d_entrada"/>
        </div>        
        <div class="form-group"
            <label for="darrera_hora_de_sortida">Darrera hora de sortida</label>
            <input type="time" class="form-control" name="darrera_hora_de_sortida"/>
        </div>    
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('usuaris') }}">Accés directe a la Llista d'usuaris</a
@endsection
