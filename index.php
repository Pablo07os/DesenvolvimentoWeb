<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="src/style.css" class="rel">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>

    <section>
            
    <div class="card">

        <h1> Cadastre-se aqui</h1>

        <form method="POST" class="form-group">

        <h3>Insira seu nome e email</h3>    
        
       <input type="text" name="nome" placeholder="Seu nome" required>

       <input type="email" name="email" placeholder="Seu e-mail" required>

        
        <button class="btn-submit" type="submit">Cadastrar</button>

        </form>




    </div>

    </section>


    <div class="imagem-inicial">

            <img src="src/images/login-welcome-character-1.png" alt="">

    </div>

   
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