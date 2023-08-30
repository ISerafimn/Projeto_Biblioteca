<?php
include('../../include/conexao.php');

$nome_genero = $_POST['nome_genero'];

$result = mysqli_query($mysqli, "INSERT INTO genero (nome_genero) VALUES ('$nome_genero')");

header('location: genero_lista.php');

?>