<?php

$dbname = "tutorias"; // Indique o nome do banco de dados que será aberto

$usuario = "root"; // Indique o nome do usuário que tem acesso

$password = "s2s0i0t9e"; // Indique a senha do usuário

//1º passo - Conecta ao servidor MySQL

if (!($login = @mysql_connect("localhost", $usuario, $password))) {

    echo "Não foi possível estabelecer uma conexão asdfasdfasdfasd ";

    exit;
}

//2º passo - Seleciona o Banco de Dados

if (!($con = @mysql_select_db($dbname, $login))) {

    echo "Não foi possível estabelecer uma conexão com o gerenciador MySQL. Favor Contactar o Administrador.";

    exit;
}

?>