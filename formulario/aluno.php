<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de aluno</title>
        <style>
            body {
                background: #ccc;
                margin: 0 auto;
            }
            fieldset {
                display: grid;
                grid-template-columns: max-content 1fr;
                gap: 5px;
            }
            h1 {
                text-align: center;
            }
        </style>
    </head>
    <body>

        <h1>Cadastro de Alunos</h1>

        <form action="aluno_envio.php" method="POST">
            <fieldset>
                <legend>Dados básicos</legend>

                <label for="nome">Nome completo: </label>
                <input type="text" name="nome" id="nome" required>
                
                <label for="data-nasc">Data de nascimento: </label>
                <input id="data-nasc" type="date" name="data-nascimento" required>

                <label for="cpf">C.P.F.: </label>
                <input id="cpf" type="text" name="numero_cpf" required>

                <label for="telefone">Telefone: </label>
                <input type="tel" id="telefone" name="telefone-user" placeholder="(00) 9 1234-5678" required>

                <label for="campo-email">E-mail: </label>
                <input type="email" name="email" id="campo-email" placeholder="seulogin@hospedagem.com" required>

                <label for="endereco">Endereço: </label>
                <input id="endereco" type="text" name="endereco-completo" required>

                <button type="reset" id="btn-limpar">Limpar campos</button>
                <button type="submit" id="btn-enviar">Enviar cadastro</button>

            </fieldset>
        </form>

    </body>
</html>