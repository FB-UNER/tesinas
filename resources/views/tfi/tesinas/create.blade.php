@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nueva tesina: {{ $tesina->titulo }}</div>
                    <div class="panel-body">

                        {!! Form::open(['route' => 'Tfi.tesinas.store', 'method' => 'POST']) !!}
                        @include('tfi.tesinas.partials.fields')
                        <button type="submit" class="btn-success">Guardar</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection