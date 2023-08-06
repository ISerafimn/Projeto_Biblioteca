<?php
include('../../php/conexao.php');

$excluindo = $_POST['excluindo'];
$valor = $_POST['valor'];

if($valor == "id_autor"){

    $sql  = mysqli_query($mysqli, "DELETE FROM autor WHERE id_autor = '$excluindo'");

    header('location: autor_lista.php');
    }
else{
    $sql  = mysqli_query($mysqli, "DELETE FROM autor WHERE nome_autor = '$excluindo'");

    header('location: autor_lista.php');
}
?>