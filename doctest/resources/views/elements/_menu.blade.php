<ul id="menu">
@foreach($menus as $menu)
    <li>
        <a href="#">{{$menu->menu_cabecalho}}</a>
        <ul>
            @foreach($documentos as $documento)
                @if($documento->id_pagina == $menu->id)
                    <li>
                        <a href="{{route('documento.retornar',$documento->id)}}">{{$documento->nome_submenu}}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    <li>
@endforeach

</ul>