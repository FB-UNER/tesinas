<!--
 * Created by PhpStorm.
 * User: jparra
 * Date: 29/06/2015
 * Time: 12:45
 */ -->

@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Tesinas</div>

                    @if (Session::has('message'))

                        <p class="alert alert-success">{{ Session::get('message') }}</p>

                    @endif

                    <div class="panel-body">
                        {!! Form::model(Request::all(), ['route' => 'TFI.tesinas.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
                        <div class="form-group">
                            {!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la tesina']) !!}
                        </div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                        {!! Form::close() !!}
                        <p>

                        </p>
                        <p>Hay {{ $tesinas->total() }} tesinas</p>
                        @include('tfi.tesinas.partials.table')
                        {!! $tesinas->appends(Request::only(['titulo', 'type']))->render() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


