<?php
    include "conexao.php";
    
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $sql = mysqli_query($db_conection, "SELECT * from usuarios WHERE id = $id");
        $sql2 = mysqli_query($db_conection, "SELECT * from enderecos WHERE id = $id");
        $count = (is_array($sql)) ? count($sql) : 1;
        $count2 = (is_array($sql2)) ? count($sql2) : 1;
        
        if($count){
            $n = mysqli_fetch_array($sql);
            $nome = $n["nome"];
            $email = $n["email"];
        }
        if($count2){
            $n2 = mysqli_fetch_array($sql2);
            $endereco = $n2["endereco"];
            $numero = $n2["numero"];
        }
    }

    if(isset($_POST["btn-editar"])){
        $id = $_GET["id"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $endereco = $_POST["endereco"];
        $numero = $_POST["numero"];

        $queryUpdate = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";
        $queryUpdate2 = "UPDATE enderecos SET endereco = '$endereco', numero = '$numero' WHERE id_endereco = '$id'";

        $consulta = mysqli_query($db_conection, $queryUpdate);
        $consulta2 = mysqli_query($db_conection, $queryUpdate2);
        header("Location: dados.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br   ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuários</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>body{font-family: Poppins}</style>
</head>
<body>
<main class="h-screen flex items-center justify-center gap-12">
        <form method="post" class="flex flex-col items-center gap-8">
            <div>
                <h1 class="text-3xl font-bold">Atualizar Usuários - PHP</h1>
            </div>
            <div>
                <input type="text" class="px-4 py-1 border border-1 border-black outline-none rounded" placeholder="Nome do Usuário" name="nome">
            </div>
            <div>
                <input type="email" class="px-4 py-1 border border-1 border-black outline-none rounded" placeholder="Email do Usuário" name="email">
            </div>
            <div>
            <input type="text" class="px-4 py-1 border border-1 border-black outline-none rounded" placeholder="Endereço do Usuário" name="endereco">
            </div>
            <div>
            <input type="text" class="px-4 py-1 border border-1 border-black outline-none rounded" placeholder="Número do endereço" name="numero">
            </div>
            <div>
                <button type="submit" class="px-4 py-1 bg-purple-500 text-white font-bold rounded" name="btn-editar">Atualizar</button>
            </div>
        </form>
</main>
</body>
</html>