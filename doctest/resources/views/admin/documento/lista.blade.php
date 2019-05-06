@extends('adminlte::page')

@section('title', 'Menu Cabecalho')

@section('content_header')

    <h3><strong>Documentos Cadastrados</strong><h3>

            <div>
                <table class="table table-striped" bordercolor = "black">
                    <tbody>
                    @foreach($documentos as $documento)
                        <tr>
                            <td style="align-content: center; border-color: black">{{$documento->nome_do_teste}}</td>
                            <td style="border-color: black" width="50px">
                                <a href="/documentos/{{$documento->id}}/editarDocumento" class = "btn btn-default btn-sm">Editar</a>  </td>
                            <td style="border-color: black" width="50px">      <form id="confirm" method="POST" action="{{route('deletarDocumento',  $documento->id)}}">
                                    {!! csrf_field() !!}
                                    {{ method_field('DELETE') }}
                                    <button onclick="myFunction()" class = "btn btn-sm">Excluir</button>
                                </form> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <script>
                function myFunction() {
                    confirm("Deseja realmente excluir esse registro?");
                }
            </script>

@stop

@section('content')

@stop