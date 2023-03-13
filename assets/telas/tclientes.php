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
                <div class="row">
                  <div class="col-12">
                    <div class="box">
                      <div class="box-header">
                          <div class="row">
                              <div class="col-6">
                                  <p class="text-uppercase fs-6">Clientes</p>
                              </div>
                              <div class="col-6">
                                  <div class="float-end">
                                      <a href="./tRegclientes.php"><button class="btn btn-primary">Cadastrar Cliente</button></a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="box-body">
                          <div class="row">
                            <div class="col-12">
                              <form class="row" action="">
                                <div class="col ps-2">
                                  <input class="form-control col" type="text" placeholder="Nome Cliente">
                                </div>
                                <div class="col ps-0">
                                  <input class="form-control" type="text" placeholder="CPF">
                                </div>
                                <div class="col ps-0">
                                  <input class="form-control" type="text" placeholder="Celular">
                                </div>
                                <div class="col ps-0">
                                  <input class="form-control selected" type="text" placeholder="Cidade">
                                </div>
                                <div class="col-lg ps-lg-0 pt-lg-0 col-md pt-md-0 ps-md-0 col-sm pt-sm-0 col-xs pt-2 ps-2 d-grid gap-2">
                                  <button type="submit" class="btn btn-primary text-uppercase">pesquisar</button>
                                </div>
                              </form>
                            </div>
                          </div>
                      </div>
                      <div class="row pt-2">
                        <div class="col-12 ps-2">
                          <table class="table">
                            <thead>
                              <tr class="table-dark">
                                <th scope="col">Nome</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Celuar</th>
                                <th scope="col">Cidade</th>
                              </tr>
                            </thead>
                            <tbody class="table-secondary table-striped-columns">
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                        </table> 
                        </div>
                      </div>
                      
                      </div>
                  </div>
                  </div>
                </div>
            </div>
    </main>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>