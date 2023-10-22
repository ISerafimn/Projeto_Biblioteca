<?php
include('../../../include/conexao.php');

$id_genero = $_POST['id_genero'];
$nome_genero = $_POST['nome_genero'];
if($id_genero == "voltar"){
    header('location: atualizar_genero.php');
}
else{
    $result = mysqli_query($mysqli, "UPDATE genero SET nome_genero = '$nome_genero' WHERE id_genero = $id_genero");
    header('location: ../genero_lista.php');
}
?>