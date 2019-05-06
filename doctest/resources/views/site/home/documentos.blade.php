@extends('layouts.template')

@section('content')
    <div>
        <h1 style="font-size: 50px; text-align: center">{{$documentos->nome_submenu}}</h1>
    </div>

    <p>{{$documentos->descricao_teste}}</p>
    <div id="docTexto" style="display: none">
        <h2 style="color: yellow; text-align: center">Nome do Teste</h2>
    </div>
@stop