<?php

if (isset($_POST ['submit'])) {

        include_once('config.php');

        $nome = $_POST ['name'];
        $email = $_POST ['email'];
        $cep = $_POST ['cep'];
        $cidade = $_POST ['city'];
        $matricula = $_POST ['register'];
        $curso = $_POST ['course'];
        $interesse = implode(", ", $_POST['interest']);

        $sql = "INSERT INTO cadastro (nome,email,cep,cidade,matricula,curso,interesses) 
        VALUES ('$nome','$email','$cep','$cidade','$matricula','$curso','$interesse')";
        $consulta = mysqli_query($conexao, $sql);

}
?>