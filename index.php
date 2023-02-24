<?php
    include("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/mycss.css">
    <title>Document</title>
</head>
<body>
    <main>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <form action="register.php" method="POST">
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

    
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>