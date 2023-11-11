<?php
include('../../../include/conexao.php');
session_start();
$_SESSION['caminho'] = $_POST['caminho'];
$_SESSION['atualizar_por'] = $_POST['atualizar_por'];

if(isset($_POST['id_usuario'])){
    $_SESSION['id_usuario_movimentacao'] = $_POST['id_usuario'];
}

header('location: ../atualizar_movimentacao.php');
?>