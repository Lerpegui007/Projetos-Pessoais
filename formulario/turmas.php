<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name=viewport content="width=device-width, initial-scale=1.0">
        <title>Cadastro turmas</title>
        <style>
            * {
                font-family: times;
            }
            body {
                background: #789;
            }
            fieldset {
                display: grid;
                grid-template-columns: max-content 1fr;
                gap: 3px;
            }
        </style>
    </head>
    <body>
        <h1>Cadastro de Turmas</h1>

        <form action="turmas_envio.php" method="POST">
            <fieldset>
                <legend>Dados da turma</legend>

                <label for="nome">Nome da turma: </label>
                <input id="nome" type="text" name="nome-turma" placeholder="Atribua um nome para a turma" required>

                <label for="ano">Ano: </label>
                <input id="ano" type="number" name="ano-turma" required>
                
                <label for="turno">Turno: </label>
                <input id="turno" type="text" name="turno-turma" required>

                <label for="vinculo-curso">id-curso </label>
                <input id="vinculo-curso" type="text" name="curso" required>

                <button type="reset" id="btn-limpar">Limpar campos</button>
                <button type="submit" id="btn-enviar">Incluir turma</button>

            </fieldset>
        </form>
    </body>
</html>