@extends('adminlte::page')

@section('title', 'Menu Cabecalho')

@section('content_header')

    <h3><strong>Documentos Cadastrados</strong><h3>

            <div>
                <table class="table table-striped" bordercolor = "black">
                    <tbody>
                    @foreach($documentos as $doc)
                        <tr>
                            <td style="align-content: center; border-color: black">{{$doc->nome_submenu}}</td>
                            <td style="border-color: black" width="50px">
                                <a href="/documentos/{{$doc->id}}/editarDocumento" class = "btn btn-default btn-sm">Editar</a>  </td>
                            <td style="border-color: black" width="50px">      <form id="confirm" method="POST" action="{{route('deletarDocumento',  $doc->id)}}">
                                    {!! csrf_field() !!}
                                    {{ method_field('DELETE') }}
                                    <button id="removerProduto"  onclick="return confirm('Are you sure?')" class = "btn btn-sm">Excluir</button>
                                </form> </td>
                        </tr>
                    @endforeach

                    <div id="app">
                        @include('flash_message')
                    </div>

                    </tbody>
                </table>
            </div>

@stop

@section('content')

@stop