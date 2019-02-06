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
               <td style="border-color: black" width="250px">
                   <a href="/menus/{{$menu->id}}/editar" class = "btn btn-default btn-sm">Editar</a>
                   <form method="POST" action="{{route('deletarCabecalho',  $menu->id)}}">
                       {!! csrf_field() !!}
                       {{ method_field('DELETE') }}
                   <button class = "btn btn-sm">Excluir</button>
                   </form>
               </td>
           </tr>
            @endforeach
        </tbody>
    </table>
  </div>


@stop

@section('content')

@stop