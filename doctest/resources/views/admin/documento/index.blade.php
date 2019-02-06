@extends('adminlte::page')

@section('title', 'Menu Cabecalho')

@section('content_header')
    <h1>Cadastrar Menu Cabecalho</h1>

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
            <form>
                <div class = "form-group">
                    <input type = "text" placeholder="Titulo Teste">
                </div>
                <div class="form-group">
                    <textarea name="comentário" rows="30" cols="80"></textarea>
                </div>
                <div class="form-group">
                    <button type = "submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
@stop