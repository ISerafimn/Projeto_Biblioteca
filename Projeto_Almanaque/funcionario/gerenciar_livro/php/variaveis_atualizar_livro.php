<?php
include('../../../include/conexao.php');
session_start();
$_SESSION['atualizar'] = $atualizar = $_POST['atualizar'];

if(isset($_POST['id_livro'])){
    $_SESSION['temp_id_livro'] = $_POST['id_livro'];
}

header("Location: ../atualizar_livro.php");
?>