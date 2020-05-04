<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "facillitta";

    //Criando a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $conn->set_charset("utf8");
?>