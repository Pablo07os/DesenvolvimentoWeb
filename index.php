<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Dados do Cliente</title>
</head>

<body>

    <h1>Dados do Cliente</h1>

    <form method="POST">
        
        <label>Nome:</label><br>
        
        <input type="text" name="nome" required>

        <label>E-mail:</label><br>

        <input type="email" name="email" required>

        <br><br>

        <button type="submit">Cadastrar</button>

    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $databaseUrl = getenv("DATABASE_URL");

    $conexao = pg_connect($databaseUrl);

    pg_query_params(
    $conexao,
    "INSERT INTO usuarios (nome, email) VALUES ($1, $2)",
    array($nome, $email)
);

    echo "Cadastro realizado com sucesso!";
}

?>

</body>

</html>