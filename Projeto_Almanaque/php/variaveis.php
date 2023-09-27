<?php
include ('../include/conexao.php');

$nome_usuario=$_POST['nome_usuario'];
$data_usuario=$_POST['data_usuario'];
$cpf_usuario=$_POST['cpf_usuario'];
$email_usuario=$_POST['email_usuario'];
$endereco_usuario=$_POST['endereco_usuario'];
$telefone_usuario=$_POST['telefone_usuario'];
$senha_usuario=$_POST['senha_usuario'];
$id_sessao = 1;

    $result = mysqli_query($mysqli, "INSERT INTO usuario(nome_usuario, data_usuario, cpf_usuario, email_usuario, endereco_usuario, telefone_usuario, senha_usuario, id_sessao) VALUES ('$nome_usuario', '$data_usuario', '$cpf_usuario', '$email_usuario', '$endereco_usuario', '$telefone_usuario', '$senha_usuario', '$id_sessao')");
    
    header("Location: ../usuario_login.php");
?>

