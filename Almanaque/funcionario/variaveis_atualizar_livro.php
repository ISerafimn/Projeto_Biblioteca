<?php
include('conexao.php');
session_start();
$_SESSION['atualizar'] = $excluir = $_POST['atualizar'];

header("Location: atualizar_livro.php");
?>