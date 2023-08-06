<?php
include('../../php/conexao.php');
session_start();
$_SESSION['excluir_autor'] = $excluir = $_POST['excluir_autor'];

header("Location: excluir_autor.php");
?>