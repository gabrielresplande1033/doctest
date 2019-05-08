@extends('adminlte::page')

@section('title', 'Menu Cabecalho')

@section('content_header')
    <h1>Cadastrar Menu Cabecalho</h1>

    <ol class="breadcrumb">
        <li><a href="">Inserir</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h1>Documentacao de Teste</h1>
        </div>
        <div clsass="box-body">
            @if(Session::has('mensagem_sucesso'))
                <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
            @endif

            @if(Request::is('*/editar'))
                <h3>Editando</h3>
                <form method="POST" action="{{route('atualizar', $menu->id)}}">
                    {{ method_field('PUT') }}
                    @else
                        <h3>Inserindo</h3>
                        <form method="POST" action="{{route('inserirCabecalho')}}">
                            @endif
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <input type="text" name="menu_cabecalho"
                                       value="{{isset($menu->menu_cabecalho) ? $menu->menu_cabecalho : ''}}"
                                       placeholder="Menu" class="form-control">
                            </div>
                            <div class="form-group">
                                <button action="" type="submit" class="btn btn-sucess">Salvar</button>
                            </div>
                        </form>
        </div>
    </div>
@stop