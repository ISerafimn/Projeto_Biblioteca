<?php
include('../../../include/conexao.php');
session_start();
$_SESSION['atualizar_autor'] = $autor = $_POST['atualizar_autor'];

header("Location: ../atualizar_autor.php");
?>