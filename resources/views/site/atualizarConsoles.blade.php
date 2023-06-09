<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Sistema de Jogos - Atualizar Console</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>

    <body>
        @component('layouts.header')
        @endcomponent

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Atualizar Console</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">
                <form action="/consoles/atualizar/{{ $console->id_consoles }}" method="POST">
                    @csrf
                    <input name="id" type="text" value="{{ $console->id_consoles }}" style="display: none">
                    <input name="nome" type="text" placeholder="Nome *" class="borda-preta" value="{{ $console->nome }}" required>
                    <br>
                    <input name="fabricante" type="text" placeholder="Fabricante *" class="borda-preta" value="{{ $console->fabricante }}" required>
                    <button type="submit" class="borda-preta">ENVIAR</button>
                </form>
                </div>
            </div>
        </div>

        @component('layouts.footer')
        @endcomponent
    </body>

    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
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

        .conteudo-pagina {
            width: 100%;
            height: 100%;
            text-align: center;
            margin-bottom: 50px;
        }

        .titulo-pagina {
            padding: 100px 0px 60px 0px;
            background-color: #2a9ee2;
            text-align: center;
        }

        .informacao-pagina {
            width: 100%;
            border: 2px rgba(0,0,0,.05) solid;

        }

        .informacao-pagina p{
            color: #333;
        }

        .borda-preta {
            border: solid 1px #333;
        }

        th {
            width: 25%;
            font-size: 18px;
            padding-right:20px;
        }

        th:first-child {
            padding-left:20px;
            padding-right:0;
        }

        td {
            padding-right:20px;
        }

        td:first-child {
            padding-left:20px;
            padding-right:0;
        }

        .table-buttons {
            display: flex;
            gap: 0.5rem;
            padding: 0.5rem 0rem;
        }

        .table-btn {
            width: 45px;
            height: 30px;
            border-radius: 10px;
        }

        .add {
            height: 53px;
            border-radius: 10px;
            background-repeat: no-repeat;
            background-position: center;
            font-size: 16px;
        }

        .add:hover {
            background-color: #589c0f;
        }
        
        .edit {
            background-image: url("images/edit.svg");
            background-color: #121F80;
            background-repeat: no-repeat;
            background-position: center;
        }

        .edit:hover {
            background-color: #0F459C;
        }

        .delete {
            background-image: url("images/delete.png");
            background-color: #D72929;
            background-repeat: no-repeat;
            background-position: center;
        }

        .delete:hover {
            background-color: #e44242;
        }

    </style>

    <script>
        
    </script>
</html>
