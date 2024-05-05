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
        <form method="post" action="{{ route('clients.update', $dades_clients->DNI_client) }}">
			@csrf
            @method('PATCH')        
        <div class="form-group">           
            <label for="DNI_client">DNI client</label>
            <input type="text" class="form-control" name="DNI_client"/>
        </div>
        <div class="form-group">           
            <label for="nom_i_cognoms">Nom i cognoms</label>
            <input type="text" class="form-control" name="nom_i_cognoms"/>
        </div>
        <div class="form-group">           
            <label for="edat">Edat</label>
            <input type="number" class="form-control" name="edat"/>
        </div>
        <div class="form-group">           
            <label for="telefon">Telefon</label>
            <input type="number" class="form-control" name="telefon"/>
        </div>
        <div class="form-group">           
            <label for="adreça">Adreça</label>
            <input type="text" class="form-control" name="adreça"/>
        </div>        
        <div class="form-group">
            <label for="ciutat">Ciutat</label>
            <input type="text" class="form-control" name="ciutat"/>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email"/>
        </div>
        <div class="form-group">
            <label for="numero_del_permis_de_conduccio">Numero del permis de conduccio</label>
            <input type="number" class="form-control" name="numero_del_permis_de_conduccio"/>
        </div>
        <div class="form-group">
            <label for="punts_del_permis_de_conduccio">Punts del permis de conduccio</label>
            <input type="number" class="form-control" name="punts_del_permis_de_conduccio"/>
        </div>
        <div class="form-group">           
            <label for="tipus_de_targeta">Tipus de targeta</label>
            <select name="tipus_de_targeta">
			    <option value="Dèbit">Dèbit</option>
			    <option value="Crèdit">Crèdit</option>
			</select>            
        </div>   
        <div class="form-group">
            <label for="numero_de_la_targeta">Numero de la targeta</label>
            <input type="number" class="form-control" name="numero_de_la_targeta"/>
        </div>      
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('clients') }}">Accés directe a la Llista d'clients</a
@endsection
