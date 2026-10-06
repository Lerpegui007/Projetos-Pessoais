<!doctype html>
<html lang="pt-BR">
    <head>
        <meta name=viewport content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Cursos</title>
        <style>
            * {
                font-family: times;
            }
            body {
                background: #888;
            }
            fieldset {
                display: grid;
                grid-template-columns: max-content 1fr;
                gap: 3px;
            }
        </style>
    </head>
    <body>
        <h1>Cadastro de cursos</h1>

        <form action="cursos_envio.php" method="POST">
            <fieldset>
                <legend>Dados do curso</legend>

                <label for="nome">Nome do Curso: </label>
                <input id="nome" type="text" name="nome-curso" required>

                <label for="descricao-curso">Descrição do curso: </label>
                <textarea id="descricao-curso" name="descr-curso" rows=4 placehoder="Informe a descrição do curso..."></textarea>
                
                <label for="duracao">Duração: </label>
                <input id="duracao" type="text" name="duracao-curso">

                <button type="reset" id="btn-limpar">Limpar campos</button>
                <button type="submit" id="btn-enviar">Gravar</button>
            
            </fieldset>
        </form>
    </body>
</html>

