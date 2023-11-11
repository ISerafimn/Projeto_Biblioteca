<?php
include('../../../include/conexao.php');

$id_usuario = $_POST['id_usuario'];
$nome_usuario = $_POST['nome_usuario'];
$email_usuario = $_POST['email_usuario'];
$cpf_usuario = $_POST['cpf_usuario'];
$data_usuario = $_POST['data_usuario'];
$endereco_usuario = $_POST['endereco_usuario'];
$senha_usuario = password_hash($_POST['senha_usuario'], PASSWORD_DEFAULT);
$telefone_usuario = $_POST['telefone_usuario'];

$resultado = mysqli_query($mysqli, "UPDATE usuario SET nome_usuario='$nome_usuario', email_usuario='$email_usuario', cpf_usuario='$cpf_usuario', senha_usuario='$senha_usuario',  data_usuario='$data_usuario', endereco_usuario='$endereco_usuario', telefone_usuario='$telefone_usuario'  WHERE  id_usuario='$id_usuario'");

header('location: ../usuario_lista.php');
?>