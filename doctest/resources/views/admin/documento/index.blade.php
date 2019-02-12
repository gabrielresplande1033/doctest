@extends('adminlte::page')

@section('title', 'Menu Cabecalho')

@section('content_header')
    <h1>Cadastrar Documento de Teste</h1>

    <ol class = "breadcrumb">
        <li><a href="">Inserir</a> </li>
    </ol>
@stop

@section('content')
    <div class = "box">
        <div class="box-header">
            <h1>Documentacao de Teste</h1>
        </div>
        <div class="box-body">
            @if(Session::has('mensagem_sucesso'))
                <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
            @endif
            <form method="POST" action="{{route('inserirTeste')}}">
                {!! csrf_field() !!}
                <div class = "form-group">
                    <input type = "text" name = "nome_submenu" value="{{isset($documento->nome_do_teste) ? $documento->nome_do_teste : ''}}" placeholder="Nome sub-menu">
                </div>
                <div class = "form-group">
                    <input type = "text" name = "nome_do_teste" placeholder="Nome do Teste">
                </div>
                <div class = "form-group">
                    <input type = "text" name = "comando_teste" placeholder="Comando para rodar o teste">
                </div>
                <div class="form-group">
                    <textarea name="descricao_teste" placeholder="Descricao completa do teste" rows="30" cols="80"></textarea>
                </div>
                <div class ="form-group">
                     <select name="id_pagina">
                         @foreach($paginas as $pagina)
                             <option value="{{$pagina->id}}"> {{$pagina->menu_cabecalho}}</option>
                         @endforeach
                     </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-sucess" type = "submit">Cadastrar</button>
                </div>

            </form>
        </div>
    </div>
@stop


