@extends('template')
@section('conteudo')

    <h3>Listagem de Campeonatos</h3>

    <hr />

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Número</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Data</th>
        </tr>
        </thead>
        <tbody>
        @foreach($campeonatos as $row)
            <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->nome }}</td>
                <td>{{ $row->categoria['nome'] }}</td>
                <td>{{ $row->created_at->format('d/m/Y') }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection