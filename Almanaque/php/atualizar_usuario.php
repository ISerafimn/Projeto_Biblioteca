<?php 
include ('conexao.php');
session_start();
$usuario_id = $_SESSION['var2'];

$nome_usuario=$_POST['nome_usuario'];
$nascimento_usuario=$_POST['nascimento_usuario'];
$cpf_usuario=$_POST['cpf_usuario'];
$email_usuario=$_POST['email_usuario'];
$endereco_usuario=$_POST['endereco_usuario'];
$telefone_usuario=$_POST['telefone_usuario'];

$_SESSION['variavel'] = $cpf_usuario;

$sql = mysqli_query($mysqli,"UPDATE usuario SET usuario_nome='$nome_usuario', usuario_nascimento='$nascimento_usuario', usuario_cpf='$cpf_usuario', usuario_email='$email_usuario', usuario_endereco='$endereco_usuario', usuario_endereco='$endereco_usuario', usuario_telefone='$telefone_usuario'  WHERE usuario_id='$usuario_id'");

header("Location: ../usuario/perfil.php");
?>