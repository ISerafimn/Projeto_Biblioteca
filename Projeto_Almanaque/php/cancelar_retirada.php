<?php
include('../include/conexao.php');

    $id_status_movimentacao = $_POST ['id_status_movimentacao'];
    $id_movimentacao = $_POST ['id_movimentacao'];

    $sql = mysqli_query($mysqli,"UPDATE movimentacao SET id_status_movimentacao='$id_status_movimentacao' WHERE id_movimentacao='$id_movimentacao'");

    header('location: ../usuario/meus_livros.php');
?>