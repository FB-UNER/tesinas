<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Impresion de Tesinas</title>
   <style>
       .clearfix:after {
           content: "";
           display: table;
           clear: both;
       }

       a {
           color: #5D6975;
           text-decoration: underline;
       }

       body {
           position: relative;
           width: 15cm;
           height: 29.7cm;
           margin: 0 auto;
           color: #001028;
           background: #FFFFFF;
           font-family: Arial, sans-serif;
           font-size: 12px;
           font-family: Arial;
       }

       header {
           padding: 10px 0;
           margin-bottom: 30px;
       }

       #logo {
           text-align: center;
           margin-bottom: 10px;
       }

       #logo img {
           width: 290px;
       }

       h1 {
           border-top: 1px solid  #5D6975;
           border-bottom: 1px solid  #5D6975;
           color: #5D6975;
           font-size: 2.4em;
           line-height: 1.4em;
           font-weight: normal;
           text-align: center;
           margin: 0 0 20px 0;
           background: url(dimension.png);
       }

       #project {
           float: left;
       }

       #project span {
           color: #5D6975;
           text-align: right;
           width: 52px;
           margin-right: 10px;
           display: inline-block;
           font-size: 0.8em;
       }

       #company {
           float: right;
           text-align: right;
       }

       #project div,
       #company div {
           white-space: nowrap;
       }

       table {
           width: 100%;
           border-collapse: collapse;
           border-spacing: 0;
           margin-bottom: 20px;
       }

       table tr:nth-child(2n-1) td {
           background: #F5F5F5;
       }

       table th,
       table td {
           text-align: center;
       }

       table th {
           padding: 5px 20px;
           color: #5D6975;
           border-bottom: 1px solid #C1CED9;
           white-space: nowrap;
           font-weight: normal;
       }

       table .service,
       table .desc {
           text-align: left;
       }

       table td {
           padding: 20px;
           text-align: right;
       }

       table td.service,
       table td.desc {
           vertical-align: top;
       }

       table td.unit,
       table td.qty,
       table td.total {
           font-size: 1.2em;
       }

       table td.grand {
           border-top: 1px solid #5D6975;;
       }

       #notices .notice {
           color: #5D6975;
           font-size: 1.2em;
       }

       footer {
           color: #5D6975;
           width: 100%;
           height: 30px;
           position: absolute;
           bottom: 0;
           border-top: 1px solid #C1CED9;
           padding: 8px 0;
           text-align: center;
       }
   </style>
</head>
<body>
<header class="clearfix">

    <div id="logo">
       <a  href="{{ URL::previous() }}">  <img src="img\logoUNER.png"></a>
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