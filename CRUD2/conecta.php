<?php
	$host = "localhost";
    $usuario = "root";
    $senha = "s2s0i0t9e";
    $banco = "php";
    $conexao = "";
  
  	$conexao = mysqli_connect("{$host}", "{$usuario}", "{$senha}", "{$banco}");
  
if($conexao)
{
    
}else 
	
	 die("Não deu pra conectar ao banco!");
