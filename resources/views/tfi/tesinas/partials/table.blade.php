<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Titulo</th>
    </tr>
    @foreach ($tesinas as $tesina)
        <tr data-id="{{ $tesina->id }}">
            <td>{{ $tesina->id }}</td>
            <td>{{ $tesina->titulo }}</td>
        </tr>
    @endforeach
</table>