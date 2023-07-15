<?php
include('../php/conexao.php');

$nome_usuario=$_POST['nome_usuario'];
$data_usuario=$_POST['data_usuario'];
$cpf_usuario=$_POST['cpf_usuario'];
$email_usuario=$_POST['email_usuario'];
$endereco_usuario=$_POST['endereco_usuario'];
$telefone_usuario=$_POST['telefone_usuario'];
$senha_usuario=$_POST['senha_usuario'];

    $result = mysqli_query($mysqli, "INSERT INTO usuario(nome_usuario, data_usuario, cpf_usuario, email_usuario, endereco_usuario, telefone_usuario, senha_usuario) VALUES ('$nome_usuario', '$data_usuario', '$cpf_usuario', '$email_usuario', '$endereco_usuario', '$telefone_usuario', '$senha_usuario')");
    
    header("Location: ../gerenciar_usuario/usuario_lista.php");
?>