<?php
include('../php/conexao.php');
session_start();
$id_usuario = $_SESSION['id_usuario'];
$id_status_movimentacao = "4";
$id_livro = $_POST ['id_livro'];

$result = mysqli_query($mysqli, "INSERT INTO movimentacao(id_usuario, id_status_movimentacao, id_livro) VALUES ('$id_usuario', '$id_status_movimentacao', '$id_livro')");

echo "Se não apareceu nenhum erro, quer dizer que á funcionado por quanto";
?>