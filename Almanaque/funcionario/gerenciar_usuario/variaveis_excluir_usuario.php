<?php
include('../../include/conexao.php');
session_start();
$_SESSION['excluir'] = $excluir = $_POST['excluir'];

header("Location: excluir_usuario.php");
?>