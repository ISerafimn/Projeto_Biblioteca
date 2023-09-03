<?php 
include ('../include/conexao.php');
session_start();
$id_usuario = $_SESSION['id_usuario'];

$nome_usuario=$_POST['nome_usuario'];
$email_usuario=$_POST['email_usuario'];
$endereco_usuario=$_POST['endereco_usuario'];
$telefone_usuario=$_POST['telefone_usuario'];

$sql = mysqli_query($mysqli,"UPDATE usuario SET nome_usuario='$nome_usuario', email_usuario='$email_usuario', endereco_usuario='$endereco_usuario', telefone_usuario='$telefone_usuario' WHERE id_usuario='$id_usuario'");


$_SESSION['email_usuario'] = $email_usuario;

header("Location: ../usuario/perfil.php");
?>