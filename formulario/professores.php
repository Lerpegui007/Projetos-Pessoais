<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name=viewport content="width=device-width, initial-scale=1.0">
        <title>Cadastro Professores</title>
        <style>
            * {
                font-family: times;
            }
            body {
                background: #bbb;
                margin: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            form {
                width: 100%;
            }
            fieldset {
                display: grid;
                grid-template-columns: max-content 1fr;
                gap: 3px;
            }
            button {
                font-size: 1em;
            }
        </style>
    </head>
    <body>
        <h1>Cadastro de Professores</h1>

        <form action="professores_envio.php" method="POST">
            <fieldset>
                <legend>Dados do professor</legend>

                <label for="nome">Nome completo: </label>
                <input id="nome" type="text" name="nome_completo" required>
                
                <label for="cpf">CPF.: </label>
                <input id="cpf" type="text" name="numero-cpf" required>

                <label for="telefone">Telefone: </label>
                <input id="telefone" type="tel" name="telefone-user" required>

                <label for="email">Email: </label>
                <input id="email" type="email" name="email" placeholder="seulogin@hospedagem.com" required>

                <label for="formacao">Formação: </label>
                <textarea id="formacao" name="formacao-completa" rows=5 placeholder="Escreva sua formação..."></textarea>

                <button type="reset" id="btn-limpar">Limpar campos</button>
                <button type="submit" id="btn-enviar">Cadastrar</button>

            </fieldset>
        </form>
    </body>
</html>
