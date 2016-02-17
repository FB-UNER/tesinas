@extends('app')

@section('content')
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span2">
            <!--Sidebar content-->
        </div>
        <div class="span10">
            <div class="panel panel-default"  style="text-align: center;">
                <div class="panel-heading">Facultad de Bromatología - Tesinas</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="Tfi/tesinas">
                                <img  src="{{ asset('/css/images/Lupa.png') }}" height="110px" width="122px"/>
                            </a>
                            <div><h5>Buscar</h5></div>
                        </div>
                        <div class="col-md-5">
                            <a href="{{route('Tfi.tesinas.create')}}" data-toggle="modal">
                                <img  src="{{ asset('/css/images/Nuevo.png') }}" height="110px" width="122px"/>
                            </a>
                            <div><h5>Nueva</h5></div>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
