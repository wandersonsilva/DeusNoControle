@extends('template')
@section('conteudo')

    <h3>Novo Campeonato VG</h3>

    <hr />

    <form action="/enviar" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome Campeonato">
        </div>

        <div class="form-group">
            <label for="nome">Categoria</label>
            <select id="categoria_id" name="categoria_id" class="form-control">
                <option value="null">Selecione</option>

                @foreach(App\Categoria::all() as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach

            </select>
        </div>


        <button type="submit" class="btn btn-default">Enviar</button>

    </form>

@endsection