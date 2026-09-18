
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Dados do Cliente</title>
</head>

<body>

    <h1>Dados do Cliente</h1>

    <form action="index.php" method="POST" onsubmit="confirmarCadastro()">

        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required>

        <br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required>

        <br><br>

        <button type="submit">Cadastrar</button>

    </form>

    <script> function confirmarCadastro() { alert("Dados enviados ao servidor com sucesso!"); } </script>

</body>

</html>

