<?php
    include("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/mycss.css">
    <title>Document</title>
</head>
<body>
    
    <main>
        <div class="container">
            <form action="../phps/register.php" method="POST">
                <p class="h2 text-dark">Castre-se agora</p>

                <label for="" class="form-label">Nome e sobrenome</label>
                <input type="text" class="form-control" name="name">

                <label for="" class="form-label">Login suario</label>
                <input type="text" class="form-control" name="user">

                <label for="" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email">

                <label for="inputPassword5" class="form-label">Senha</label>
                <input type="password" id="inputPassword5" class="form-control" name="password" aria-describedby="passwordHelpBlock">
                <div id="passwordHelpBlock" class="form-text">
                    Sua senha deve possuir de 6-20 caracteres, contendo no mínimo 4 letras e 2 números, com exceção a espaços e emojis.
                </div>
                <label for="inputPassword5" class="form-label">Confirme sua senha</label>
                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                <div id="passwordHelpBlock" class="form-text">

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="passwordCheck" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Salvar login</label>
                </div>
                
                <button type="submit" class="btn btn-primary">Cadastrar-se</button>
            </form>
        </div>
    </main>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>