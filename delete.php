<?php
    include "conexao.php";

    $id = $_GET["id"];
    $id_endereco = $_GET["id_endereco"];
    if(isset($_GET["id"])){
        $sqlDelete = mysqli_query($db_conection, "DELETE FROM usuarios WHERE id = {$id}")
        or die(mysqli_error($db_conection));
        $sqlDelete2 = mysqli_query($db_conection, "DELETE FROM enderecos WHERE id_endereco = {$id_endereco}")
        or die(mysqli_error($db_conection));

        header("Location: dados.php");
    }
?>