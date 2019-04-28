<?php
include "conecta.php";
include "cadastro.php";

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home</title>
</head>

<body>
    <h3>Cadastro usuário</h3>
    <form action="cadastro.php" method="POST">
        <p><input type="text" name="nome" placeholder="nome"></p>
        <p><input type="text" name="email" placeholder="email"></p>
        <p><input type="text" name="cpf" placeholder="cpf"></p>
        <p><input type="text" name="endereco" placeholder="endereco"></p>
        <p><button type="submit" name="cadastrar">Cadastrar</button></p>
    </form>
    <br>
    <h3>Clique em "Opções" para o resto do crud</h3>
    <form action="selecionar.php" method="POST">
        <p><button type="submit" name="selecionar">Opções</button></p>
    </form>







</body>

</html>