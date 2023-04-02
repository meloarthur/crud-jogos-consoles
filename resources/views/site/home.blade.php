<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Sistema de Jogos</title>
        <meta charset="utf-8">

        <style>
            html, body {
                height: 100%;
                margin: 0;
                font-family: 'Roboto', sans-serif;
            }

            p {
                color: #ffffff;
            }

            span {
                font-size: 12px;
                color: #000;
            }

            h1 {
                color: #ffffff;
                font-size: 28px;
            }

            h2 {
                color: #333333;
                font-size: 22px;
            }

            input, select, textarea, button {
                width: 100%;
                padding: 10px 15px;
                margin: 10px 0px 10px 0px;
                box-sizing: border-box;
                border-radius: 3px;
                background-color: transparent;
                color: #333;
            }

            .texto-branco {
                color: #ffffff;
            }

            .borda-branca {
                border: solid 1px #fff;
            }

            .borda-preta {
                border: solid 1px #333;
            }

            button {
                background-color: #7ab829;
                cursor: pointer;
                color: #fff;
            }

            button:hover {
                background-color: #6ea22c;
            }

            ::placeholder {
                color: #333333;
                opacity: 1;
            }

            :-ms-input-placeholder {
                color: #333333;
            }

            ::-ms-input-placeholder {
                color: #333333;
            }

            .logo {
                width: 50px;
                float: left;
                margin-left: 40px;
            }

            .conteudo-destaque {
                width: 100%;
                height: 100%;
                min-height: 800px;
            }

            .esquerda {
                float:left;
                background-color: #268fd0;
                width: 60%;
                height: 100%;
            }

            .direita {
                float:right;
                background-color: #2a9ee2;
                width: 40%;
                height: 100%;
            }

            .informacoes, .contato {
                margin: 100px 40px 40px 40px;
            }

            .contato-principal {
                margin: 0px 60px 60px 40px;
            }

            .chamada {
                margin-top: 30px;
                margin-left: 20px;
            }

            .video {
                margin: 40px;
            }

            .video img {
                max-width: 100%;
                max-height: 100%;
            }

            .conteudo-pagina {
                width: 100%;
                height: 100%;
                text-align: center;
                margin-bottom: 100px;
            }

            .titulo-pagina {
                padding: 100px 0px 60px 0px;
                background-color: #2a9ee2;
                text-align: center;
            }

            .informacao-pagina {
                text-align: center;
                margin-top: 30px;
            }

            .informacao-pagina p{
                color: #333;
            }

        </style>
    </head>

    <body>
        @component('layouts.header')
        @endcomponent

        <div class="conteudo-destaque">

            <div class="esquerda">
                <div class="informacoes">
                    <h1>Sistema de Jogos</h1>
                    <p>Software para cadastro de jogos e consoles.<p>
                    <ul class="chamada">
                        <li class="texto-branco">Sistema completo e simples</li>
                        <li class="texto-branco">Feito em Laravel + BladePHP + PostgreSQL</li>
                    </ul>
                </div>
            </div>

            <div class="direita">
                <div class="contato">
                    @component('layouts.formContato')
                        <h1>Contato</h1>
                        <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                    @endcomponent
                </div>
            </div>
            @component('layouts.footer')
            @endcomponent
        </div>
    </body>
</html>
