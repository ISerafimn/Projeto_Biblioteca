<?php
include ('../include/conexao.php');

$nome_funcionario=$_POST['nome_funcionario'];
$email_funcionario=$_POST['email_funcionario'];
$data_funcionario=$_POST['data_funcionario'];
$cpf_funcionario = $_POST['cpf_funcionario'];
$senha_funcionario = password_hash($_POST['senha_funcionario'], PASSWORD_DEFAULT);
$id_sessao = 2;

    $result = mysqli_query($mysqli, "INSERT INTO funcionario (nome_funcionario, email_funcionario, data_funcionario, cpf_funcionario, senha_funcionario, id_sessao) VALUES ('$nome_funcionario', '$email_funcionario', '$data_funcionario', '$cpf_funcionario', '$senha_funcionario', '$id_sessao')");
    
    header("Location: ../funcionario_login.php");
?>

