<?php
    include "read.php";
    include "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Usuarios - PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>body{font-family: Poppins}</style>
</head>
<body class="flex items-center justify-center flex-col gap-4">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Número</th>
                <th>Funções</th>
            </tr>
        </thead>
        <?php  while($user = mysqli_fetch_assoc($dados)){ ?>
            <tbody>
            <tr>
                <td class="p-2"><?php echo $user["id"] ?></td>
                <td class="p-2"><?php echo $user["nome"] ?></td>
                <td class="p-2"><?php echo $user["email"] ?></td>
                <?php  while($user1 = mysqli_fetch_assoc($dados1)){?>
                <td class="p-2"><?php echo $user1["endereco"] ?></td>
                <td class="p-2"><?php echo $user1["numero"] ?></td>
                
                <?php break;} ?>
                <td>
                    <a href="delete.php?id_user=<?php echo $user["id"];?>" class="bg-red-600 text-white px-4 py-1">Excluir</a>
                    <a href="update.php?id_user=<?php echo $user["id"];?>" class="bg-green-600 text-white px-4 py-1">Atualizar</a>
                </td>
            </tr>
            </tbody>
        
            <?php } ?>   
    </table>
</body>
</html>