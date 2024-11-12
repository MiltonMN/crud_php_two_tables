<?php 
    include "conexao.php";

    $nome = $_POST["name"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];

    $sql = mysqli_query($db_conection, "INSERT INTO usuarios (nome, email) VALUES ('$nome',' $email')");
    $sql2 = mysqli_query($db_conection, "INSERT INTO enderecos (endereco, numero) VALUES ('$endereco',' $numero')");

    if($sql){
        header("Location: index.php");
    }
?>
