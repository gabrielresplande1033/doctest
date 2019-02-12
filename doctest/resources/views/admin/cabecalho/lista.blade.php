@extends('adminlte::page')

@section('title', 'Menu Cabecalho')

@section('content_header')

   <h3><strong>Menus Cadastrados</strong><h3>

  <div>
    <table class="table" bordercolor = "black">
        <tbody>
            @foreach($menus as $menu)
           <tr>
               <td style="align-content: center; border-color: black">{{$menu->menu_cabecalho}}</td>
               <td style="border-color: black" width="50px">
                   <a href="/menus/{{$menu->id}}/editar" class = "btn btn-default btn-sm">Editar</a>  </td>
               <td style="border-color: black" width="50px">      <form id="confirm" method="POST" action="{{route('deletarCabecalho',  $menu->id)}}">
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