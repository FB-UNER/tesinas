<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Example 1</title>
    {!! Html::style('/css/style.css') !!}
</head>
<body>
<header class="clearfix">
    <div id="logo">
        <a  href="{{ URL::previous() }}">  <img src="{{ asset('img/logoUNER.png') }}"></a>
    </div>
    <h1>Tesinas</h1>
    <h2>Título:  {{$pdftesina}} </h2>
    <div id="company" class="clearfix">
        <div>Fecha de Recepción: {{ date("d/m/Y", strtotime($tesina[0]->fecha_recepcion))}}</div>
        <div>Nombre y Apellido: {{$alumno->full_name}}</div>
    </div>
    <div id="project">
        <div><span>DIRECTOR</span> {{$referente->full_name}}</div>
        <div><span>FECHA RECEPCIÓN</span>
            @if (($tesina[0]->fecha_recepcion_director)  != '0000-00-00')
                {{ date("d/m/Y", strtotime($tesina[0]->fecha_recepcion_director))}}
            @else
                ----
            @endif
        </div>
        <div><span>APROBACIÓN COMISIÓN TFI</span>
        @if (($tesina[0]->fecha_aprobacion_comision)  != '0000-00-00')
            {{ date("d/m/Y", strtotime($tesina[0]->fecha_aprobacion_comision))}}
        @else
            ----
        @endif
        </div>
        <div><span>APROBADO</span>
            @if (($tesina[0]->aprueba_comision_tfi) == 1)
                Aprobado
            @else
                NO Aprobado
            @endif
        </div>
    </div>
</header>
<main>
    <table>
        <thead>
        <tr style="page-break-after:always;">
            <th class="desc"></th>
            <th class="service">Evaluador</th>
            <th class="unit">F Designacion</th>
            <th class="qty">F Entrega</th>
            <th class="total">F Modificacion</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="desc">1</td>
            <td class="service">{{$evaluador1->full_name}}</td>
            @if($tesina[0]->fecha_designacion_eval_1 != '0000-00-00')
                <td class="unit">{{date("d/m/Y", strtotime($tesina[0]->fecha_designacion_eval_1))}}</td>
            @else
                <td> ------------- </td>
            @endif
            @if($tesina[0]->fecha_entrega_eval_1 != '0000-00-00')
                <td class="qty">{{date("d/m/Y", strtotime($tesina[0]->fecha_entrega_eval_1))}}</td>
            @else
                <td> ------------- </td>
            @endif
            @if($tesina[0]->fecha_modificacion_eval_1 != '0000-00-00')
                <td class="total">{{date("d/m/Y", strtotime($tesina[0]->fecha_modificacion_eval_1))}}</td>
            @else
                <td class="unit">Sin modificacion</td>
            @endif
        </tr>
        <tr>
            <td class="desc">2</td>
            <td class="service">{{$evaluador2->full_name}}</td>
            @if($tesina[0]->fecha_designacion_eval_2 != '0000-00-00')
                <td class="unit">{{date("d/m/Y", strtotime($tesina[0]->fecha_designacion_eval_2))}}</td>
            @else
                <td> ------------- </td>
            @endif
            @if($tesina[0]->fecha_entrega_eval_2 != '0000-00-00')
                <td class="qty">{{date("d/m/Y", strtotime($tesina[0]->fecha_entrega_eval_2))}}</td>
            @else
                <td> ------------- </td>
            @endif
            @if($tesina[0]->fecha_modificacion_eval_2 != '0000-00-00')
                <td class="total">{{date("d/m/Y", strtotime($tesina[0]->fecha_modificacion_eval_2))}}</td>
            @else
                <td class="unit">Sin modificacion</td>
            @endif
        </tr>
        <tr>
            <td class="desc">3</td>
            <td class="service">{{$evaluador3->full_name}}</td>
            @if($tesina[0]->fecha_designacion_eval_3 != '0000-00-00')
                <td class="unit">{{date("d/m/Y", strtotime($tesina[0]->fecha_designacion_eval_3))}}</td>
            @else
                <td> ------------- </td>
            @endif
            @if($tesina[0]->fecha_entrega_eval_3 != '0000-00-00')
                <td class="qty">{{date("d/m/Y", strtotime($tesina[0]->fecha_entrega_eval_3))}}</td>
            @else
                <td> ------------- </td>
            @endif
            @if($tesina[0]->fecha_modificacion_eval_3 != '0000-00-00')
                <td class="total">{{date("d/m/Y", strtotime($tesina[0]->fecha_modificacion_eval_3))}}</td>
            @else
                <td class="unit">Sin modificacion</td>
            @endif
        </tr>
        </tbody>
    </table>
</main>

<footer>
    <div>
        Tesina Número : {{$tesina[0]->id}}
    </div>
</footer>
</body>
</html>