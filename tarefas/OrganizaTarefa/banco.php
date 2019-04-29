<?php 
    $bdServidor = '127.0.0.1';
    $bdUsuario = 'root';
    $bdSenha = 's2s0i0t9e';
    $bdBanco = 'tarefas';

    $conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdBanco);
    
    if (mysqli_connect_errno($conexao)) {
        echo "Problemas para conectar no banco de dados. verifique os dados!";
        die();
    }

?>