@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Editar tesina:<small>   {{ $tesina->titulo }}</small></h2></div>
                    <div class="panel-body">

                        {!! Form::model($tesina, ['route' => ['Tfi.tesinas.update', $tesina], 'method' => 'PUT']) !!}
                        @include('tfi.tesinas.partials.fields')
                        <button type="submit" class="btn-success">Actualizar tesina</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('scripts')
    @include('tfi.tesinas.partials.validarModificacion')
    @include('tfi.tesinas.partials.controlCheckboxDiv')
@endsection