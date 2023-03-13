<?php
    include('conexao.php');

    if(isset($_POST['name']) || isset($_POST['cpf']) || isset($_POST['rg']) || isset($_POST['email']) || isset($_POST['celNumber1']) || isset($_POST['celNumber2']) || isset($_POST['telNumber']) || isset($_POST['cep']) || isset($_POST['stret']) || isset($_POST['number']) || isset($_POST['complement']) || isset($_POST['state']) || isset($_POST['city'])) {

            $name = $mysqli -> real_escape_string($_POST['name']);
            $cpf = $mysqli -> real_escape_string($_POST['cpf']);
            $rg = $mysqli -> real_escape_string($_POST['rg']);
            $email = $mysqli -> real_escape_string($_POST['email']);
            $celNumber1 = $mysqli -> real_escape_string($_POST['celNUmber1']);
            $celNumber2 = $mysqli -> real_escape_string($_POST['celNumber2']);
            $telNumber = $mysqli -> real_escape_string($_POST['telNumber']);
            $cep = $mysqli -> real_escape_string($_POST['cep']);


            $sql_code = "INSERT INTO clientes (name, cpf, rg, email, celNumber1, celNumber2, telNumber, cep) VALUES ('$name', '$cpf', '$rg', '$email', '$celNumber1', '$celNumber2', '$telNumber', '$cep')";
            $sql_query = $mysqli -> query($sql_code) or die("Falha na execução do código SQL: " . $mysqli -> error);

            header("Location: ../../index.php");
            
    }