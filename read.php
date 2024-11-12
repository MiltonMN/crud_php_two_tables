<?php 
    include "conexao.php";

    $dados = mysqli_query($db_conection, "SELECT * FROM usuarios");
    $dados1 = mysqli_query($db_conection, "SELECT * FROM enderecos");
?>