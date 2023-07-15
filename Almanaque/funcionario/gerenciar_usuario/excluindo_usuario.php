<?php
include('../php/conexao.php');

$excluindo = $_POST['excluindo'];
$valor = $_POST['valor'];

if($valor == "id_usuario"){

    $sql  = mysqli_query($mysqli, "DELETE FROM usuario WHERE id_usuario = '$excluindo'");

    header('location: usuario_lista.php');
    }
else{
    $sql  = mysqli_query($mysqli, "DELETE FROM usuario WHERE nome_usuario = '$excluindo'");

    header('location: usuario_lista.php');
}
?>