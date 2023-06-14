<?php
include('conexao.php');

$livros_nome=$_POST['livros_nome'];
$autor_id=$_POST['autor_id'];
$genero_id=$_POST['genero_id'];
$livro_editoria=$_POST['livro_editoria'];
$livro_num_edicao=$_POST['livro_num_edicao'];

    $result = mysqli_query($mysqli, "INSERT INTO livros(livros_nome, autor_id, genero_id, livro_editoria, livro_num_edicao) VALUES ('$livros_nome', '$autor_id', '$genero_id', '$livro_editoria', '$livro_num_edicao')");
    
    header("Location: ../funcionario/livro_lista.php");
?>
