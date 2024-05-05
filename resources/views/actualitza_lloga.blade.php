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
        <form method="post" action="{{ route('llogas.update', $dades_lloga->matricula_auto) }}">
			@csrf
            @method('PATCH')        
            <div class="form-group">           
            <label for="DNI_client">DNI client</label>
            <input type="text" class="form-control" name="DNI_client"/>
        </div>
        <div class="form-group">           
            <label for="matricula_auto">Matricula auto</label>
            <input type="text" class="form-control" name="matricula_auto"/>
        </div>
        <div class="form-group">           
            <label for="data_del_prestec">Data del prestec</label>
            <input type="date" class="form-control" name="data_del_prestec"/>
        </div>
        <div class="form-group">           
            <label for="data_de_devolucio">Data de devolucio</label>
            <input type="date" class="form-control" name="data_de_devolucio"/>
        </div>
        <div class="form-group">           
            <label for="lloc_de_devolucio">Lloc de devolucio</label>
            <input type="text" class="form-control" name="lloc_de_devolucio"/>
        </div>        
        <div class="form-group">      
            <label for="preu_per_dia">Preu per dia</label>
            <input type="text" class="form-control" name="preu_per_dia"/>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email"/>
        </div>
        <div class="form-group">           
            <label for="prestec_amb_retorn_de_diposit_ple">Prestec amb retorn de diposit ple</label>
            <select name="prestec_amb_retorn_de_diposit_ple">
			    <option value="sí">sí</option>
			    <option value="no">no</option>
			</select>            
        </div>   
        <div class="form-group">           
            <label for="tipus_dassegurança">Tipus d'assegurança</label>
            <select name="tipus_dassegurança">
			    <option value="Franquícia fins a 1000 Euros">Franquícia fins a 1000 Euros</option>
			    <option value="Franquíca fins 500 Euros">Franquíca fins 500 Euros</option>
                <option value="Sense franquícia">Sense franquícia</option>
			</select>            
        </div>     
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('llogas') }}">Accés directe a la Llista d'lloga</a
@endsection
