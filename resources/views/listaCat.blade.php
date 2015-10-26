@extends('template')
@section('conteudo')

    <h3>Listagem das Categorias de Campeonato</h3>

    <hr />

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categorias as $row)
            <tr>
                <td>{{ $row->nome }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection