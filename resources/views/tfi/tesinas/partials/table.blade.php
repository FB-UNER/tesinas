<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Titulo</th>
        <th>Alumno</th>
        <th>Fecha Recepción</th>
    </tr>
    @foreach ($tesinas as $tesina)
        <tr data-id="{{ $tesina->id }}">
            <td>{{ $tesina->id }}</td>
            <td>{{ $tesina->titulo }}</td>
            <td>{{ $tesina->Alumno->apellido}}, {{$tesina->Alumno->nombres}} </td>
            <td>{{ date("d/m/Y", strtotime($tesina->fecha_recepcion))}}</td>
        </tr>
    @endforeach
</table>