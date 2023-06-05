<?php
session_start();
$var = $_SESSION['variavel'];
$cpf = $var;
include ("conexao.php");

$usuario_nome = $_POST['usuario_nome'];
$sql = mysqli_query($mysqli, "DELETE FROM usuario WHERE usuario_cpf='$cpf'");

if(!isset($_SESSION)) {
    session_start();
}

session_destroy();
header("Location: ../index.html");

?>