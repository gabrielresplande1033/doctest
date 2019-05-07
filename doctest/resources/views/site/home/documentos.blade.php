@extends('layouts.template')

@section('content')
    <div>
        <h1 style="font-size: 50px; text-align: center; margin-top: 45px">{{$documentos->nome_submenu}}</h1>
        <h3 style="text-align: center">Teste possui como objetivo testar a receita de ponta a ponta, desde a insercao da Receita, ate a validacao em relatorio</h3>

    <br>

    <div style="margin-top: 5px; padding-left: 320px">
        <h3 style="margin-bottom: 0px; text-align: left">Para executar o teste, rode o seguinte comando na raiz do projeto:</h3>
      <pre><code style="width: 35%;text-align: left" class="shell-session demo">  user ~ $ </code></pre>
    </div>

    <div style="padding-left: 325px">
        <br>
        <br>
        <br>

        {!! $documentos->descricao_teste !!}
    </div>
    </div>

    <script>
        if (document.getElementsByClassName('demo').length > 0) {
            var i = 0;
            var txt = `{{$documentos->comando_teste}}`;
            var speed = 95;

            function typeItOut () {
                if (i < txt.length) {
                    document.getElementsByClassName('demo')[0].innerHTML += txt.charAt(i);
                    i++;
                    setTimeout(typeItOut, speed);
                }
            }

            setTimeout(typeItOut, 800);
        }
    </script>

@stop