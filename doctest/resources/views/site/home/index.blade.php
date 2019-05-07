@extends('layouts.template')

@section('content')

    <style>
        p {
            font-size: 1.4em;
            margin-top: 0px;
        }

        pre{
            height: 80px;
            width: 60%;
            padding-left: 27%;
        }

        #pEspecial{
            font-size: 1.2em;
        }

    </style>

    <div style="text-align: center; margin-top: 40px">
        <img style="text-align: center" src="https://raw.githubusercontent.com/beforeti/syscor-dusk/master/logo_before.png?token=AGQHXFUPWQ6SAEGPBDSPFE243LJS6" alt="some text" width=250 height=100>
        <div>
            <h1 style="font-size: 50px; text-align: center">Laravel Dusk - Syscor</h1>
        </div>
        <div>
            <h2>Como Instalar:</h2>
            <pre>
               <p>1. Baixe o projeto apos instalar o git</p><code class="shell-session demo">user ~ $ git clone https://github.com/beforeti/syscor-dusk.git</code>
             </pre>
            <pre>
               <p>2. Instale o <b>composer</b></p><code class="shell-session demo">user ~ $ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');
" php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt';
unlink('composer-setup.php');
} echo PHP_EOL;
" php composer-setup.php php -r "unlink('composer-setup.php');"</code>
             </pre>

            <pre>
                <p style="margin-top: 70px;">3. Instale as <b>bibliotecas</b> (verifique se ha versoes mais recentes)</p><code class="shell-session demo">sudo apt-get install php7.2-xml
sudo apt-get install php7.2-curl
sudo apt-get install php-zipip
</code>
             </pre>

            <pre>
               <p style="margin-top: 100px;">4. Atualize as <b>bibliotecas</b></p><code class="shell-session demo">user ~ $ composer update
</code>
             </pre>
            <pre>
                <p style="margin-top: 100px;">5. Instale o <b>laravel dusk</b>
</p><code class="shell-session demo">user ~ $ php artisan dusk:install
</code>
             </pre>
            <pre>
               <p style="margin-top: 100px;">6. Instalacao sera concluida com sucesso caso apareca a mensagem:</p><code class="shell-session demo"> Dusk scaffolding installed successfully.
</code>
             </pre>
            <pre>
               <p  style="margin-top: 100px; margin-bottom: 0px">7. Como Configurar</p>
                <p id = "pEspecial" style="padding-top: 0px; padding-bottom: 0px;text-align: left";> 1.No <b>config_testes.php</b> sera necessario definir as configuracoes de login, senha, uf que ira acessar e o tempo de espera
 para os elementos.

 2.Arquivos como constantesBase.php tera configuracoes especificas do modulo, dados que são variaveis ficaram no topo do
 aquivo para serem alterados facilmente.

 3.E necessario definir se seu teste sera local ou beta no arquivo .env:
                </p><code class="shell-session demo" style="margin-top: 0px">BETA: APP_URL=https://syscor-homologacao.before.com.br/_sys/escolha.php
LOCAL: APP_URL=http://localhost:11000/_sys/escolha.php</code>
             </pre>

        </div>
    </div>

@stop