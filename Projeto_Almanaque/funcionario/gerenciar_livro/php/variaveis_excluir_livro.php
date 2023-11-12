<?php
include('../../../include/conexao.php');
session_start();
$_SESSION['excluir'] = $excluir = $_POST['excluir'];

if(isset($_POST['id_livro'])){
    $_SESSION['temp_id_livro'] = $_POST['id_livro'];
}

header("Location: ../excluir_livro.php");
?>