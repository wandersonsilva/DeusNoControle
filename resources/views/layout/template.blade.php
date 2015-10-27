<!DOCTYPE html>
<html>
<head>
    <title>Deus no Controle</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    Campeonato de Vídeo-Game
                </a>
            </div>

            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Campeonato <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ action('CampeonatoController@index') }}">Novo Campeonato</a> </li>
                        <li><a href="{{action('CampeonatoController@listar')}}">Listar Campeonato</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tipo Campeonato<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ action('CategoriaController@index') }}">Nova Categoria</a></li>
                        <li><a href="{{ action('CategoriaController@listar') }}">Listar Categoria</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jogadores<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ action('ParticipanteController@index') }}">Novo Jogador</a></li>
                        <li><a href="{{ action('ParticipanteController@listar') }}">Listar Jogadores</a></li>
                    </ul>
                </li>

            </ul>

        </div>
    </nav>

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('conteudo')

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>

</body>
</html>