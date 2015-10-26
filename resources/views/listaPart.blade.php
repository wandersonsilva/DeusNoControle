@extends('template')
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
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection