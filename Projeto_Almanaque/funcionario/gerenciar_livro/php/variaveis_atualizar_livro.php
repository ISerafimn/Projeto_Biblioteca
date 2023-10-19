<?php
include('../../../include/conexao.php');
session_start();
$_SESSION['atualizar'] = $atualizar = $_POST['atualizar'];

header("Location: ../atualizar_livro.php");
?>