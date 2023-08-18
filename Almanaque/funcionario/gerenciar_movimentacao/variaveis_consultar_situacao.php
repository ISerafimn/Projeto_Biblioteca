<?php
include('../../include/conexao.php');
session_start();
$_SESSION['consultar'] = $consultar = $_POST['consultar'];

header("Location: consultar_movimentacao.php");
?>