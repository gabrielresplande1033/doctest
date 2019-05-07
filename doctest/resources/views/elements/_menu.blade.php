<ul id="menu">
@foreach($menus as $menu)
    <li>
        <a href="#">{{$menu->menu_cabecalho}}</a>
        <ul>
            <li>
              <img src="https://raw.githubusercontent.com/beforeti/syscor/master/_sys/images/logo_vivo_go_nova_main.png?token=AGQHXFV2JOOSE6KL6HA6OVS43L7ES">
            </li>
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