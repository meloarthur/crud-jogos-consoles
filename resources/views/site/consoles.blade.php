<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Sistema de Jogos - Consoles</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>

    <body>
        <header>
            @component('layouts.header')
            @endcomponent
        </header>

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Consoles</h1>
            </div>
            
            <a href="/consoles/cadastro" class="btn btn-primary add">
                <button class="add" type="submit">Adicionar Console</button>
            </a>

            <div class="informacao-pagina">
                <div class="table-responsive text-center">
                    <div class="table-container">
                        <table class="table table-hover" id="tabela">
                            <thead>
                                <tr>
                                    <th class="text-center">Nome</th>
                                    <th class="text-center">Fabricante</th>
                                    <th class="text-center">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($consoles as $console)
                                <tr>
                                    <td>{{ $console->nome }}</td>
                                    <td>{{ $console->fabricante }}</td>
                                    <td class="table-buttons">
                                        <div class="button-container">
                                            <a href="/consoles/atualizar/{{ $console->id_consoles }}">
                                                <button class="table-btn edit" type="submit"></button>
                                            </a>
                                        </div>
                                        <div class="button-container">
                                            <form method="POST" action="/consoles/excluir/{{ $console->id_consoles }}">
                                                @csrf
                                                <button type="submit" class="table-btn delete"></button>
                                            </form>
                                        </div>
                                    </td>                      
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            @component('layouts.footer')
            @endcomponent
        </footer>
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

        .table-container {
            display: flex;
            justify-content: center;
        }
        
        /* Adicione essas propriedades CSS à tag da tabela */
        #tabela {
            width: 100%;
            margin: 0 auto;
        }

        th, td {
            width: 33.33%;
            padding: 16px;
        }

        th {
            font-size: 18px;
            padding-right:20px;
        }

        td {
            padding-right:20px;
        }

        .table-buttons, .button-container {
            gap: 0.5rem;
            padding: 0.5rem 0rem;
            display: inline-block;
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
            text-decoration: none;
            color: #fff
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
</html>
