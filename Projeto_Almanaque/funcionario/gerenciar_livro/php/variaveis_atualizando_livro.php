<?php
include('../../../include/conexao.php');

$id_livro = $_POST['id_livro'];
$nome_livro=$_POST['nome_livro'];
$id_genero=$_POST['id_genero'];
$editora_livro=$_POST['editora_livro'];
$num_edicao_livro=$_POST['num_edicao_livro'];
$estoque_livro=$_POST['estoque_livro'];

$name = $_FILES['imagem']['name'];
$temp = $_FILES['imagem']['tmp_name'];
move_uploaded_file($temp, "../../../imagens/livro_capa/". $name); 

$sql = mysqli_query($mysqli, "SELECT  *   FROM  livro WHERE id_livro = $id_livro");
while ($result = mysqli_fetch_array($sql))

    {
        $imagem_livro = $result['url_imagem_livro'];
    }
    $deletar = "../../../imagens/livro_capa/".$imagem_livro;
    unlink($deletar);

$sinopse_livro=$_POST['sinopse_livro'];
$id_autor=$_POST['name'];


$sql = mysqli_query($mysqli,"UPDATE livro SET nome_livro='$nome_livro', id_genero='$id_genero', editora_livro='$editora_livro', num_edicao_livro='$num_edicao_livro', estoque_livro='$estoque_livro', url_imagem_livro='$name', sinopse_livro='$sinopse_livro', id_autor='$id_autor'  WHERE id_livro='$id_livro'");

    
header("Location: ../livro_lista.php");
?>
