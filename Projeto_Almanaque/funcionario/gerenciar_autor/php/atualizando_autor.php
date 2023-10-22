<?php
include('../../../include/conexao.php');

$id_autor = $_POST['id_autor'];
$nome_autor = $_POST['nome_autor'];
$pais_autor = $_POST['pais_autor'];
$nascimento_autor = $_POST['nascimento_autor'];
$falecimento_autor = $_POST['falecimento_autor'];

if($falecimento_autor == ""){

    $resultado = mysqli_query($mysqli, "UPDATE autor SET nome_autor='$nome_autor', pais_autor='$pais_autor', nascimento_autor='$nascimento_autor', falecimento_autor= NULL WHERE id_autor='$id_autor'");
}
else{
    $resultado = mysqli_query($mysqli, "UPDATE autor SET nome_autor='$nome_autor', pais_autor='$pais_autor', nascimento_autor='$nascimento_autor', falecimento_autor='$falecimento_autor' WHERE id_autor='$id_autor'");
}
header('location: ../autor_lista.php');

?>
