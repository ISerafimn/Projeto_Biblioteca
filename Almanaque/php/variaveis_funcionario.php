<?php
include('conexao.php');

$nome_funcionario=$_POST['nome_funcionario'];
$email_funcionario=$_POST['email_funcionario'];
$data_funcionario=$_POST['data_funcionario'];
$cpf_funcionario=$_POST['cpf_funcionario'];
$senha_funcionario=$_POST['senha_funcionario'];

    $result = mysqli_query($mysqli, "INSERT INTO funcionario (nome_funcionario, email_funcionario, data_funcionario, cpf_funcionario, senha_funcionario) VALUES ('$nome_funcionario', '$email_funcionario', '$data_funcionario', '$cpf_funcionario', '$senha_funcionario')");
    
    header("Location: ../funcionario_login.html");
?>

