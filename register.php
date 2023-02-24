<?php
    include('conexao.php');

    if(isset($_POST['name']) || isset($_POST['user']) || isset($_POST['email']) || isset($_POST['password']) isset($_POST['passwordCheck'])) {

        if(strlen($_POST['name']) == 0) {
            echo "<script> alert(\"Prencha o campo nome de usuario!\");</script>";
        }else if(strlen($_POST['user']) == 0) {
            echo "<script> alert(\"Prencha o campo nome de usuario!\");</script>";
        }else if(strlen($_POST['email']) == 0) {
            echo "<script> alert(\"Prencha o campo e-mail!\");</script>";
        }else if(strlen($_POST['password']) == 0) {
            echo "<script> alert(\"Prencha o campo senha!\");</script>";
        }else if(strlen($_POST['passwordCheck']) == 0) {
            echo "<script> alert(\"Prencha o campo confirmar senha!\");</script>";
        }else {

            $name = $mysqli -> real_escape_string($_POST['name']);
            $user = $mysqli -> real_escape_string($_POST['user']);
            $email = $mysqli -> real_escape_string($_POST['email']);
            $password = $mysqli -> real_escape_string($_POST['password']);
            $passwordCheck = $mysqli -> real_escape_string($_POST['passwordCheck']);

            $sql_code = "INSERT INTO usuarios (user, email, password, name) VALUES ('$user', '$email', '$password', '$name')";
            $sql_query = $mysqli -> query($sql_code) or die("Falha na execução do código SQL: " . $mysqli -> error);

            $qtd = $sql_query -> num_rows;

            if($qtd == 1) {
                $usuario = $sql_query -> fetch_assoc();

                if(isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['name'] = $usuario['name'];

                header("Location: index.html");
            }else {
                echo "<script> alert(\"Falha no login, e-mail ou senha incorretos!\");</script>";  
            }
        }
    }