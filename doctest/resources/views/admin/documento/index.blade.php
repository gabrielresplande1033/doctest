@extends('adminlte::page')

@section('title', 'Menu Cabecalho')

@section('content_header')
    <h1>Cadastrar Documento de Teste</h1>

    <ol class="breadcrumb">
        <li><a href="">Inserir</a></li>
    </ol>
@stop

@section('content')
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
    <div class="box">
        <div class="box-header">
            <h1>Documentacao de Teste</h1>
        </div>
        <div class="box-body">
            @if(Session::has('mensagem_sucesso'))
                <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
            @endif
            @if(Request::is('*/editarDocumento'))
                <h3>Editando</h3>
                <form method="POST" action="{{route('documento.atualizar', $documento->id)}}">
                    {{ method_field('PUT') }}
                    @else
                        <h3>Inserindo</h3>
                        <form method="POST" action="{{route('inserirTeste')}}">
                            @endif

                            {!! csrf_field() !!}
                            <div class="form-group">
                                <input type="text" name="nome_submenu"
                                       value="{{isset($documento->nome_submenu) ? $documento->nome_submenu : ''}}"
                                       placeholder="Nome sub-menu">
                            </div>
                            <div class="form-group">
                                <input type="text" name="nome_do_teste"
                                       value="{{isset($documento->nome_do_teste) ? $documento->nome_do_teste : ''}}"
                                       placeholder="Nome do Teste">
                            </div>
                            <div class="form-group">
                                <input type="text" name="comando_teste"
                                       value="{{isset($documento->comando_teste) ? $documento->comando_teste : ''}}"
                                       placeholder="Comando para rodar o teste">
                            </div>
                            <div class="form-group">
                                <textarea name="descricao_teste" placeholder="Descricao completa do teste" rows="30"
                                          cols="80">{{isset($documento->descricao_teste) ? $documento->descricao_teste : ''}}</textarea>
                            </div>
                            <div class="form-group">
                                <select name="id_pagina">
                                    @foreach($paginas as $pagina)
                                        @if(isset($documento->id_pagina))
                                            <option value="{{$pagina->id}}" {{$documento->id_pagina == $pagina->id ? 'selected' : ''}}>
                                                {{$pagina->menu_cabecalho}}</option>
                                        @else
                                            <option value="{{$pagina->id}}"> {{$pagina->menu_cabecalho}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-sucess" type="submit">Cadastrar</button>
                            </div>

                        </form>

        </div>
    </div>
@stop


