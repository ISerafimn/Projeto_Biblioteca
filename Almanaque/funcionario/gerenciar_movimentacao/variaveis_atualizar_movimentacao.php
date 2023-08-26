<?php
include('../../include/conexao.php');
session_start();
$_SESSION['caminho'] = $_POST['caminho'];
$_SESSION['atualizar_por'] = $_POST['atualizar_por'];

header('location: atualizar_movimentacao.php');
?>