<div class="row">
    <div class="col-xs-12 col-md-8">{!! Form::label('fecha_recepcion', 'Fecha de Recepción') !!}</div>
    <div class="col-xs-6 col-md-4">{!! Form::date('fecha_recepcion', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el título']) !!}</div>
</div>

<div class="row">
    <div class="form-group">
        <div class="col-xs-12 col-md-8">{!! Form::label('apellido', 'Apellido') !!}</div>
        <div class="col-xs-6 col-md-4">{!! Form::text('alumno[apellido]', null, ['class' => 'form-control', 'placeholder' => 'Apellido']) !!}</div>
        <div class="col-xs-12 col-md-8">{!! Form::label('nombres', 'Nombres') !!}</div>
        <div class="col-xs-6 col-md-4">{!! Form::text('alumno[nombres]', null, ['class' => 'form-control', 'placeholder' => 'Nombres']) !!}</div>
    </div>
</div>

<div class="form-group">
    {!! Form::label('titulo', 'Título') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca el título']) !!}
</div>

<div class="row">
    <div class="col-xs-5 col-md-3">{!! Form::label('director', 'Director') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::select('id', $referentes, $tesina->director_id) !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::label('fecha_recepcion_director', 'Fecha Recepción') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::date('fecha_recepcion_director', null, ['class' => 'form-control', 'placeholder' => 'Fecha Recepcion Director']) !!}</div>
</div>

<br>
<br>

<fieldset class="fieldset-activo"><legend>Comisión Trabajo Final Integrador</legend>
<div class="row">
    <div class="col-xs-5 col-md-3">{!! Form::label('comision_tfi', 'Fecha Aprobación Comision TFI') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::date('fecha_aprobacion_comision', null, ['class' => 'form-control', 'placeholder' => 'Fecha Aprobación Comision TFI']) !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::label('checkbox_aprueba_comision_tfi', 'Aprobado') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::checkbox('aprueba_comision_tfi') !!}</div>
</div>
</fieldset>

<!-- Evaluador 1 -->
<div class="row bg-success">
    <div class="col-xs-5 col-md-3">{!! Form::label('evaluador_1', 'Evaluador 1 :') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::select('id', $referentes, $tesina->evaluador_id_1) !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::label('fecha_designacion_eval_1', 'Fecha (Designación)') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::date('fecha_designacion_eval_1', null, ['class' => 'form-control', 'placeholder' => 'Fecha Designacion']) !!}</div>
</div>
<!-- FIN Evaluador 1 -->


<!-- Evaluador 2 -->
<div class="row">
    <div class="col-xs-5 col-md-3">{!! Form::label('evaluador_2', 'Evaluador 2 :') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::select('id', $referentes, $tesina->evaluador_id_2) !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::label('fecha_designacion_eval_2', 'Fecha (Designación)') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::date('fecha_designacion_eval_2', null, ['class' => 'form-control', 'placeholder' => 'Fecha Designacion']) !!}</div>
</div>
<!-- FIN Evaluador 2 -->

<!-- Evaluador 3 -->
<div class="row bg-success">
    <div class="col-xs-5 col-md-3">{!! Form::label('evaluador_3', 'Evaluador 3 :') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::select('id', $referentes, $tesina->evaluador_id_3) !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::label('fecha_designacion_eval_3', 'Fecha (Designación)') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::date('fecha_designacion_eval_3', null, ['class' => 'form-control', 'placeholder' => 'Fecha Designacion']) !!}</div>
</div>
<!-- FIN Evaluador 3 -->

