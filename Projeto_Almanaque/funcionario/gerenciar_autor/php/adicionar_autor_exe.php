<?php
include('../../../include/conexao.php');

$nome_autor = $_POST['nome_autor'];
$pais_autor = $_POST['pais_autor'];
$nascimento_autor = $_POST['nascimento_autor'];
$falecimento_autor = $_POST['falecimento_autor'];

if($falecimento_autor == ""){
    $result = mysqli_query($mysqli, "INSERT INTO autor (nome_autor, pais_autor, nascimento_autor, falecimento_autor) VALUES ('$nome_autor', '$pais_autor', '$nascimento_autor', NULL)");
}
else{
    $result = mysqli_query($mysqli, "INSERT INTO autor (nome_autor, pais_autor, nascimento_autor, falecimento_autor) VALUES ('$nome_autor', '$pais_autor', '$nascimento_autor', '$falecimento_autor')");
}

header('location: ../autor_lista.php');
?>