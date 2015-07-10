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
    <!-- Fila 1 -->
    <div class="col-xs-5 col-md-3">{!! Form::label('evaluador_1', 'Evaluador 1 :') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::select('id', $referentes, $tesina->evaluador_id_1) !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::label('fecha_designacion_eval_1', 'Fecha (Designación)') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::date('fecha_designacion_eval_1', null, ['class' => 'form-control', 'placeholder' => 'Fecha Designacion']) !!}</div>

    <!-- Fila 2 -->
    <div class="col-xs-5 col-md-3"></div>
    <div class="col-xs-5 col-md-3"></div>
    <div class="col-xs-5 col-md-3">{!! Form::label('fecha_entrega_eval_1', 'Fecha (Entrega)') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::date('fecha_entrega_eval_1', null, ['class' => 'form-control', 'placeholder' => 'Fecha Entrega']) !!}</div>
    <!-- Fila 3 -->
    <div class="col-xs-5 col-md-3">Modificación</div>
    <div class="col-xs-5 col-md-3">
        {!! Form::radio('modificacion_eval_1', $tesina->modificacion_eval_1 ) !!}SI
        {!! Form::radio('modificacion_eval_1'  ) !!}NO
    </div>
    <div class="col-xs-5 col-md-3">{!! Form::label('modificacion_eval_1', 'Fecha (Modificación)') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::date('modificacion_eval_1', null, ['class' => 'form-control', 'placeholder' => 'Fecha Entrega']) !!}</div>
</div>
<!-- FIN Evaluador 1 -->
<br>
<!-- Evaluador 2 -->
<div class="row">
    <!-- Fila 1 -->
    <div class="col-xs-5 col-md-3">{!! Form::label('evaluador_2', 'Evaluador 2 :') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::select('id', $referentes, $tesina->evaluador_id_2) !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::label('fecha_designacion_eval_2', 'Fecha (Designación)') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::date('fecha_designacion_eval_2', null, ['class' => 'form-control', 'placeholder' => 'Fecha Designacion']) !!}</div>

    <!-- Fila 2 -->
    <div class="col-xs-5 col-md-3"></div>
    <div class="col-xs-5 col-md-3"></div>
    <div class="col-xs-5 col-md-3">{!! Form::label('fecha_entrega_eval_2', 'Fecha (Entrega)') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::date('fecha_entrega_eval_2', null, ['class' => 'form-control', 'placeholder' => 'Fecha Entrega']) !!}</div>
    <!-- Fila 3 -->
    <div class="col-xs-5 col-md-3">Modificación</div>
    <div class="col-xs-5 col-md-3">
        {!! Form::radio('modificacion_eval_2', $tesina->modificacion_eval_2 ) !!}SI
        {!! Form::radio('modificacion_eval_2'  ) !!}NO
    </div>
    <div class="col-xs-5 col-md-3">{!! Form::label('modificacion_eval_2', 'Fecha (Modificación)') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::date('modificacion_eval_2', null, ['class' => 'form-control', 'placeholder' => 'Fecha Entrega']) !!}</div>

</div>
<!-- FIN Evaluador 2 -->
<br>
<!-- Evaluador 3 -->
<div class="row bg-success">
    <!-- Fila 1 -->
    <div class="col-xs-5 col-md-3">{!! Form::label('evaluador_3', 'Evaluador 3 :') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::select('id', $referentes, $tesina->evaluador_id_3) !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::label('fecha_designacion_eval_3', 'Fecha (Designación)') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::date('fecha_designacion_eval_3', null, ['class' => 'form-control', 'placeholder' => 'Fecha Designacion']) !!}</div>

    <!-- Fila 2 -->
    <div class="col-xs-5 col-md-3"></div>
    <div class="col-xs-5 col-md-3"></div>
    <div class="col-xs-5 col-md-3">{!! Form::label('fecha_entrega_eval_3', 'Fecha (Entrega)') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::date('fecha_entrega_eval_3', null, ['class' => 'form-control', 'placeholder' => 'Fecha Entrega']) !!}</div>
    <!-- Fila 3 -->
    <div class="col-xs-5 col-md-3">Modificación</div>
    <div class="col-xs-5 col-md-3">
        {!! Form::radio('modificacion_eval_3', $tesina->modificacion_eval_3 ) !!}SI
        {!! Form::radio('modificacion_eval_3'  ) !!}NO
    </div>
    <div class="col-xs-5 col-md-3">{!! Form::label('modificacion_eval_3', 'Fecha (Modificación)') !!}</div>
    <div class="col-xs-5 col-md-3">{!! Form::date('modificacion_eval_3', null, ['class' => 'form-control', 'placeholder' => 'Fecha Entrega']) !!}</div>
</div>
<!-- FIN Evaluador 3 -->

