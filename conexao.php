<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $banco = "milton_banco";

    $db_conection = mysqli_connect($server, $user, $password, $banco);

    if(!$db_conection){
        echo "erro: erro ao conectar ao banco";
    }
?>