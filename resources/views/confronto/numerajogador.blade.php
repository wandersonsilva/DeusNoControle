@extends('layout.template')
@section('conteudo')

    <h3>Enumeração dos Participantes do Campeonato</h3>

    <hr />
    <form action="{{ action('ConfrontoController@adicionarNumeracao') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
        </tr>
        </thead>
        <tbody>
        @foreach($numerar as $row)
            <tr>
                <td>{{ $row->nome1 }} (J{{ $row->num_jogador }})</td>
                <td>
                    <a href="#"  id="show" class="btn btn-info">Numerar</a>

                    <p class="numera"><input type="number" id="numero" value="{{ $row->p1_id }}"><button type="submit" class="btn btn-info">Salvar</button></p>

                </td>

            </tr>
            <tr>
                <td>{{ $row->nome2 }} (J{{ $row->num_jogador }})</td>
                <td>
                    <a href="#" class="btn btn-info">Numerar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </form>

@endsection