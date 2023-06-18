<?php 
include ('conexao.php');
session_start();
$id_funcionario = $_SESSION['id_funcionario'];

$nome_funcionario=$_POST['nome_funcionario'];
$email_funcionario=$_POST['email_funcionario'];
$data_funcionario=$_POST['data_funcionario'];
$cpf_funcionario=$_POST['cpf_funcionario'];

$sql = mysqli_query($mysqli,"UPDATE funcionario SET nome_funcionario='$nome_funcionario', email_funcionario='$email_funcionario', data_funcionario='$data_funcionario', cpf_funcionario='$cpf_funcionario' WHERE id_funcionario='$id_funcionario'");

$_SESSION['email_funcionario'] = $email_funcionario;

header("Location: ../funcionario/perfil.php");
?>