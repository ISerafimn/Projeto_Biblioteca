<?php
include('../../php/conexao.php');

$id_livro = $_POST['id_livro'];
$nome_livro=$_POST['nome_livro'];
$genero_livro=$_POST['genero_livro'];
$editora_livro=$_POST['editora_livro'];
$num_edicao_livro=$_POST['num_edicao_livro'];
$estoque_livro=$_POST['estoque_livro'];
$url_imagem_livro=$_POST['url_imagem_livro'];
$sinopse_livro=$_POST['sinopse_livro'];
$id_autor=$_POST['name'];


$sql = mysqli_query($mysqli,"UPDATE livro SET nome_livro='$nome_livro', genero_livro='$genero_livro', editora_livro='$editora_livro', num_edicao_livro='$num_edicao_livro', estoque_livro='$estoque_livro', url_imagem_livro='$url_imagem_livro', sinopse_livro='$sinopse_livro', id_autor='$id_autor'  WHERE id_livro='$id_livro'");
    
header("Location: ../funcionario/livro_lista.php");


?>
