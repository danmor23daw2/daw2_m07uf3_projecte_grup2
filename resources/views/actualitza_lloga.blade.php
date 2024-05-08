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
            <input type="text" class="form-control" name="DNI_client" value="{{ $dades_lloga->DNI_client }}"/>
        </div>
        <div class="form-group">           
            <label for="matricula_auto">Matricula auto</label>
            <input type="text" class="form-control" name="matricula_auto" value="{{ $dades_lloga->matricula_auto }}"/>
        </div>
        <div class="form-group">           
            <label for="data_del_prestec">Data del prestec</label>
            <input type="date" class="form-control" name="data_del_prestec" value="{{ $dades_lloga->data_del_prestec }}"/>
        </div>
        <div class="form-group">           
            <label for="data_de_devolucio">Data de devolucio</label>
            <input type="date" class="form-control" name="data_de_devolucio" value="{{ $dades_lloga->data_de_devolucio }}"/>
        </div>
        <div class="form-group">           
            <label for="lloc_de_devolucio">Lloc de devolucio</label>
            <input type="text" class="form-control" name="lloc_de_devolucio" value="{{ $dades_lloga->lloc_de_devolucio }}"/>
        </div>        
        <div class="form-group">      
            <label for="preu_per_dia">Preu per dia</label>
            <input type="text" class="form-control" name="preu_per_dia" value="{{ $dades_lloga->preu_per_dia }}"/>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $dades_lloga->email }}"/>
        </div>
        <div class="form-group">           
            <label for="prestec_amb_retorn_de_diposit_ple">Prestec amb retorn de diposit ple</label>
            <select name="prestec_amb_retorn_de_diposit_ple">
			    <option value="sí"{{ $dades_lloga->prestec_amb_retorn_de_diposit_ple == 'sí' ? 'selected' : '' }}>sí</option>
			    <option value="no" {{ $dades_lloga->prestec_amb_retorn_de_diposit_ple == 'no' ? 'selected' : '' }}>no</option>
			</select>            
        </div>   
        <div class="form-group">           
            <label for="tipus_dassegurança">Tipus d'assegurança</label>
            <select name="tipus_dassegurança">
			    <option value="Franquícia fins a 1000 Euros" {{ $dades_lloga->tipus_dassegurances == 'Franquía fins a 1000 Euros' ? 'selected' : '' }}>Franquícia fins a 1000 Euros</option>
			    <option value="Franquíca fins 500 Euros" {{ $dades_lloga->tipus_dassegurances == 'Franquíca fins 500 Euros' ? 'selected' : '' }}>Franquíca fins 500 Euros</option>
                <option value="Sense franquícia" {{ $dades_lloga->tipus_dassegurances == 'Sense franquía' ? 'selected' : '' }}>Sense franquícia</option>
			</select>            
        </div>     
			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('llogas') }}">Accés directe a la Llista d'lloga</a
@endsection
