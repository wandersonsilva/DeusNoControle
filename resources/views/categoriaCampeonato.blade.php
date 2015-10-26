@extends('template')
@section('conteudo')

    <h3>Categoria do Campeonato</h3>

    <hr />

    <form action="/cadCat" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="nome">Categoria</label>
            <input type="text" id="nome" name="nome" class="form-control" placeholder="Categoria">
        </div>


        <button type="submit" class="btn btn-default">Enviar</button>

    </form>

@endsection