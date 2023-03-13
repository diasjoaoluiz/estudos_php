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
    <title>Clientes</title>
</head>
<body>
    <main>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            <div class="container pt-2">
                <form action="../phps/registerClientes.php" method="POST">
                    <p class="h2 text-dark">Cadastrar Cliente</p>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 ps-0">
                                <label for="" class="form-label">* Nome</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="col ps-0">
                                <label for="" class="form-label">* CPF</label>
                                <input type="number" class="form-control" name="cpf">
                            </div>
                            <div class="col ps-0">
                                <label for="" class="form-label">RG</label>
                                <input type="number" class="form-control" name="rg">
                            </div>
                        </div>
                    </div>
                    <div class="container pt-2">
                        <div class="row">
                            <div class="col-lg-6 ps-0">
                                <label for="" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="col-lg ps-0">
                                <label for="" class="form-label">* Numero de Celular</label>
                                <input type="number" class="form-control" name="celNumber1">
                            </div>
                            <div class="col-lg ps-0">
                                <label for="" class="form-label">Numero de Celular</label>
                                <input type="number" class="form-control" name="celNumber2">
                            </div>
                            <div class="col-lg ps-0">
                                <label for="" class="form-label">Numero de Telefone</label>
                                <input type="number" class="form-control" name="telNumber">
                            </div>
                        </div>
                    </div>
                    <div class="container pt-2">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-sm-6 ps-0">
                                <label for="" class="form-label">CEP</label>
                                <input type="number" class="form-control" name="cep">      
                            </div>
                            <div class="col ps-0">
                                <div class="pt-4">
                                    <button type="button" class="btn btn-block btn-primary btn-sm text-uppercase">pesquisar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container pt-2">
                        <div class="row">
                            <div class="col-lg-11 ps-0">
                                <label for="" class="form-label">Logadouro</label>
                                <input type="text" class="form-control" name="stret">
                            </div>
                            <div class="col ps-0">
                                <label for="" class="form-label">Numero</label>
                                <input type="number" class="form-control" name="number">
                            </div>
                        </div>
                    </div>
                    <div class="container pt-2">
                        <div class="row">
                            <div class="col-lg-4 ps-0">
                                <label for="" class="form-label">Bairro</label>
                                <input type="text" class="form-control" name="neighborhood">
                            </div>
                            <div class="col-lg-4 ps-0">
                                <label for="" class="form-label">Complemento</label>
                                <input type="text" class="form-control" name="complement">
                            </div>
                            <div class="col ps-0">
                                <label for="" class="form-label">* Estado</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Selecione o Estado</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col ps-0">
                                <label for="" class="form-label">* Cidade</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Selecione o Estado Primeiro</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4">
                        <button type="submit" class="btn btn-primary">Cadastrar-se</button>
                    </div>
                </form>
            </div>
    </main>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>