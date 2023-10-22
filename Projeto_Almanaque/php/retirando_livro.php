<?php
session_start();
include('../include/conexao.php');
$id_usuario = $_SESSION['id_usuario'];

    $id_status_movimentacao = "4";
    $id_livro = $_POST ['id_livro'];

    $result = mysqli_query($mysqli, "INSERT INTO movimentacao(id_usuario, id_status_movimentacao, id_livro) VALUES ('$id_usuario', '$id_status_movimentacao', '$id_livro')");

    $_SESSION['temp_livro'] = $id_livro;
    $_SESSION['msg-retirada-livro'] = "<p  style='text-align: center; color: #276daf;'>Livro selecionado com sucesso!</p>";
    header('location: ../livro_aberto.php');
?>