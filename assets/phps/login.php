<?php
    include('conexao.php');

    if(isset($_POST['userEmail']) || isset($_POST['password'])){

        if(strlen($_POST['userEmail']) == 0) {
            echo "<script> alert(\"Prencha o campo e-mail!\");</script>";
        } else if(strlen($_POST['password']) == 0) {
            echo "<script> alert(\"Prencha o campo senha!!\");</script>"; 
        }else if (strlen($_POST['userEmail']) == 0 && strlen($_POST['password'] == 0)) {
            echo "<script> alert(\"Prencha o campo e-mail e senha!!\");</script>";
        }else {
            $userEmail = $mysqli -> real_escape_string($_POST['userEmail']);
            $password = $mysqli -> real_escape_string($_POST['userEmail']);

            $sql_code = "SELECT * FROM usuarios WHERE user = '$userEmail' OR email = '$userEmail' AND password = '$password'";
            $sql_query = $mysqli -> query($sql_code) or die("Falha na execução do código SQL: " . $mysqli -> error);

            $qtd = $sql_query -> num_rows;

            if($qtd == 1) {
                $usuario = $sql_query -> fetch_assoc();

                if(isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['name'] = $usuario['name'];

                header("Location: index.php");

            }else {
                echo "<script> alert(\"Falha no login, e-mail ou senha incorretos!\");</script>";  
            }
        }
    }
