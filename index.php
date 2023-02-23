<?php
    include("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <h2>FORMULARIO DE LOGIN</h2>
        <form action="login.php" method="_POST">
            <input type="text" name="user_email" placeholder="Login">
            <input type="password" name="password" placeholder="Senha">
            <input type="submit" name="send" placeholder="Enviar">
        </form> 
    </section>
    
</body>
</html>