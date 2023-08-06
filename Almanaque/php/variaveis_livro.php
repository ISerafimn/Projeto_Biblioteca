<?php
include('conexao.php');

$nome_livro=$_POST['nome_livro'];
$genero_livro=$_POST['genero_livro'];
$editora_livro=$_POST['editora_livro'];
$num_edicao_livro=$_POST['num_edicao_livro'];
$estoque_livro=$_POST['estoque_livro'];

$name = $_FILES['imagem']['name'];
$temp = $_FILES['imagem']['tmp_name'];
move_uploaded_file($temp, "../imagens/". $name); 

$sinopse_livro=$_POST['sinopse_livro'];
$id_autor=$_POST['name'];

$result = mysqli_query($mysqli, "INSERT INTO livro(nome_livro, genero_livro, editora_livro, num_edicao_livro, estoque_livro, url_imagem_livro, sinopse_livro, id_autor) VALUES ('$nome_livro', '$genero_livro', '$editora_livro', '$num_edicao_livro', '$estoque_livro', '$name', '$sinopse_livro', '$id_autor')");

header("Location: ../funcionario/gerenciar_livro/livro_lista.php");
?>
