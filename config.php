<?php

$hostname = "localhost";
$bancodedados = "formulario";
$usuario = "root";
$senha = "";
$conexao = new mysqli ($hostname, $usuario, $senha, $bancodedados);

if ($conexao -> connect_errno) {
    echo "Falha ao conectar:(" . $conexao->connect_errno . ")" . $conexao->connect_errno;
}
else 
    echo "Conectado ao Banco de Dados";

?> 