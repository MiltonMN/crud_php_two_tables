<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milton - Cadastro</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>
    <form method="POST" action="processa.php">
        <h3>Dados pessoais</h3>
        <label for="">Nome:</label>
        <input type="text" name="name" id="name"placeholder="Nome do usuário"><br><br>
        <label for="">Email:</label>
        <input type="email" name="email" id="email" placeholder="Email do usuário"><br><br>
        <h3>ndereço do usuário</h3>
        <label for="">Endereço:</label>
        <input type="text" name="endereco" id="endereco"placeholder="Endereço do usuário"><br><br>
        <label for="">Número:</label>
        <input type="text" name="numero" id="numero" placeholder="Número do Endereço"><br><br>

        <input type="submit" value="Cadastrar" name = "CadUsuario">
    </form>
</body>
</html>