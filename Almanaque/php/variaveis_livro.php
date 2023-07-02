<?php
include('conexao.php');

$nome_livro=$_POST['nome_livro'];
$genero_livro=$_POST['genero_livro'];
$editora_livro=$_POST['editora_livro'];
$num_edicao_livro=$_POST['num_edicao_livro'];
$estoque_livro=$_POST['estoque_livro'];
$url_imagem_livro=$_POST['url_imagem_livro'];
$sinopse_livro=$_POST['sinopse_livro'];
$id_autor=$_POST['name'];

echo "$nome_livro <br>";
echo "$genero_livro <br>";
echo "$editora_livro <br>";
echo "$num_edicao_livro <br>";
echo "$estoque_livro <br>";
echo "$url_imagem_livro <br>";
echo "$sinopse_livro <br>";
echo "$id_autor <br>";

$result = mysqli_query($mysqli, "INSERT INTO livro(nome_livro, genero_livro, editora_livro, num_edicao_livro, estoque_livro, url_imagem_livro, sinopse_livro, id_autor) VALUES ('$nome_livro', '$genero_livro', '$editora_livro', '$num_edicao_livro', '$estoque_livro', '$url_imagem_livro', '$sinopse_livro', '$id_autor')");
    
header("Location: ../funcionario/livro_lista.php");


?>
