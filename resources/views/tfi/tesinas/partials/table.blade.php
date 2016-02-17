<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Titulo</th>
        <th>Alumno</th>
        <th>Fecha Recepción</th>
        <th>Acciones</th>
    </tr>
    @foreach ($tesinas as $tesina)
        <tr data-id="{{ $tesina->id }}">
            <td>{{ $tesina->id }}</td>
            <td>{{ $tesina->titulo }}</td>
            <td>{{ $tesina->Alumno->apellido}}, {{$tesina->Alumno->nombres}} </td>
            <td>{{ date("d/m/Y", strtotime($tesina->fecha_recepcion))}}</td>
            <td>
                <button type="button" class="btn btn-success">
                <a href="{{ route('Tfi.tesinas.edit', $tesina) }}">Editar</a></button>
            </td>
            <td>
                <button type="button" class="btn btn-info">
                    <a href="{{ route('pdf.show', $tesina->id) }}">Imprimir</a></button>
            </td>
            <td>
                {!! Form::open(array('url' => 'Tfi/tesinas/'.$tesina->id)) !!}
                {!! Form::hidden("_method", "DELETE") !!}
                <button type="submit" class="btn btn-danger">Eliminar</button>
                {!! Form::close() !!}
            </td>

        </tr>
    @endforeach
</table>