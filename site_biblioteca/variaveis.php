<?php
include('conexao.php');

$nome_usuario=$_POST['nome_usuario'];
$nascimento_usuario=$_POST['nascimento_usuario'];
$cpf_usuario=$_POST['cpf_usuario'];
$email_usuario=$_POST['email_usuario'];
$endereco_usuario=$_POST['endereco_usuario'];
$telefone_usuario=$_POST['telefone_usuario'];

$result = mysqli_query($mysqli, "INSERT INTO usuario(usuario_nome, usuario_nascimento, usuario_cpf, usuario_email, usuario_endereco, usuario_telefone) VALUES ('$nome_usuario', '$nascimento_usuario', '$cpf_usuario', '$email_usuario', '$endereco_usuario', '$telefone_usuario')");


?>

