@extends('layout.template')
@section('conteudo')

    <h3>Listagem dos Participantes Cadastrados</h3>

    <hr />

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
        </tr>
        </thead>
        <tbody>
        @foreach($participantes as $row)
            <tr>
                <td>{{ $row->nome }}</td>
                <td>
                    <a href="#" class="btn btn-info">Alterar</a>
                    <a href="{{ action('ParticipanteController@remover', [$row->id]) }}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection