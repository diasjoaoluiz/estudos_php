<?php

    $hostname = "localhost";
    $bd = "praticaJoao";
    $user = "root";
    $password = "1234@@alexandre";

    $mysqli = new mysqli($hostname, $user, $password, $bd);
    if($mysqli -> connect_errno) {
        echo "<script> alert(\"Erro ao conectar!\");</script>";    
    }