<?php
include "conecta.php";
if (isset($_POST['cadastrar'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];

    $sql = "INSERT INTO usuarios(nome, email, cpf, endereco) VALUES ('$nome', '$email', '$cpf', '$endereco')";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        header('Location:index.php');
    } else {
        echo "erro";
    }
}
