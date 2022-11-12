<?php
    //servidor, usuario, senha, banco
    //conexão com o bd - metodo estrutural

    $server      = "localhost";
    $user        = "root";
    $password    = "";
    $nameDB      = "alifest";
    
    $connect = mysqli_connect($server, $user, $password, $nameDB) or
    die ('Não foi possivel conectar ao banco' .mysqli_error($connect));

    //configurar classe de caracteres UTF-8
    mysqli_set_charset($connect, "utf8");

?>