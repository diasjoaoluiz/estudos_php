<?php

    $hostname = "localhost";
    $bd = "pratica";
    $user = "joao";
    $password = "762430";

    $mysqli = new mysqli($hostname, $user, $password, $bd);
    if($mysqli -> connect_errno) {
        echo "<script> alert(\"Erro ao conectar!\");</script>";    
    }