<?php
session_start();
$var = $_SESSION['var3'];
$cpf = $var;
include ("conexao.php");
    
$sql = mysqli_query($mysqli, "DELETE FROM funcionario WHERE funcionario_cpf='$cpf'");

if(!isset($_SESSION)) {
    session_start();
}

session_destroy();
header("Location: ../index.html");

?>