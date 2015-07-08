@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar tesina: {{ $tesina->titulo }}</div>
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
