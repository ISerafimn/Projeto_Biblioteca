<?php
include('../../../include/conexao.php');

$nome_livro=$_POST['nome_livro'];
$id_genero=$_POST['id_genero'];
$editora_livro=$_POST['editora_livro'];
$num_edicao_livro=$_POST['num_edicao_livro'];
$estoque_livro=$_POST['estoque_livro'];

$name = $_FILES['imagem']['name'];
$temp = $_FILES['imagem']['tmp_name'];
move_uploaded_file($temp, "../../../imagens/livro_capa/". $name); 

$sinopse_livro=$_POST['sinopse_livro'];
$id_autor=$_POST['name'];

$result = mysqli_query($mysqli, "INSERT INTO livro(nome_livro, id_genero, editora_livro, num_edicao_livro, estoque_livro, url_imagem_livro, sinopse_livro, id_autor) VALUES ('$nome_livro', '$id_genero', '$editora_livro', '$num_edicao_livro', '$estoque_livro', '$name', '$sinopse_livro', '$id_autor')");

header("Location: ../livro_lista.php");
?>
