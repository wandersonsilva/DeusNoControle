@extends('layout.mobile')
@section('titulo')
    Participantes
@endsection
@section('conteudo')

    <div data-role="header" data-theme="b">
        <h1>Participantes</h1>
    </div>
    <ul data-role="listview" data-inset="true" data-filter="true" data-filter-reveal="false" data-filter-placeholder="Procurar">
        @foreach($participantes as $row)
        <li><a href="#" id="search">{{ $row->nome }}</a></li>
        @endforeach
    </ul>

@endsection