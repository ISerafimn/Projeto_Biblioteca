<?php 
include ('conexao.php');
session_start();
$id = $_SESSION['var2'];

$funcionario_nome=$_POST['funcionario_nome'];
$funcionario_cargo=$_POST['funcionario_cargo'];
$funcionario_telefone=$_POST['funcionario_telefone'];
$funcionario_email=$_POST['funcionario_email'];

$_SESSION['variavel'] = $funcionario_cpf;

$sql = mysqli_query($mysqli,"UPDATE funcionario SET funcionario_nome='$funcionario_nome', funcionario_cargo='$funcionario_cargo', funcionario_telefone='$funcionario_telefone', funcionario_email='$funcionario_email' WHERE funcionario_id='$id'");

header("Location: ../funcionario/perfil.php");
?>