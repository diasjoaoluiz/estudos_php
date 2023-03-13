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
                <a class="navbar-brand text-uppercase" href="index.php">home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./assets/telas/tclientes.php">Listar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./assets/telas/tRegclientes.php">Cadastar Funcionario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./assets/telas/tregister.php">Cadastar Usuario</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./assets/telas/tlogin.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        

    
    </main>

    
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>