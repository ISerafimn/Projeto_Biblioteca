<?php
include('../../../include/conexao.php');

$excluindo = $_POST['excluindo'];
$valor = $_POST['valor'];

if($valor == "id_livro"){

    $sql  = mysqli_query($mysqli, "DELETE FROM livro WHERE id_livro = '$excluindo'");

    header('location: ../livro_lista.php');
    }
else{
    $sql  = mysqli_query($mysqli, "DELETE FROM livro WHERE nome_livro = '$excluindo'");

    header('location: ../livro_lista.php');
}
?>