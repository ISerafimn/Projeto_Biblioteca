<?php
include('../../../include/conexao.php');

$excluindo = $_POST['excluindo'];
$valor = $_POST['valor'];

if($valor == "id_livro"){

    $sql = mysqli_query($mysqli, "SELECT  *   FROM  livro WHERE id_livro = '$excluindo'");
    while ($result = mysqli_fetch_array($sql))
    
        {
            $imagem_livro = $result['url_imagem_livro'];
        }
        $deletar = "../../../imagens/livro_capa/".$imagem_livro;
        unlink($deletar);

    $sql  = mysqli_query($mysqli, "DELETE FROM livro WHERE id_livro = '$excluindo'");

    header('location: ../livro_lista.php');
    }
else{

    $sql = mysqli_query($mysqli, "SELECT  *   FROM  livro WHERE nome_livro = '$excluindo'");
    while ($result = mysqli_fetch_array($sql))
    
        {
            $imagem_livro = $result['url_imagem_livro'];
        }
        $deletar = "../../../imagens/livro_capa/".$imagem_livro;
        unlink($deletar);

    $sql  = mysqli_query($mysqli, "DELETE FROM livro WHERE nome_livro = '$excluindo'");

    header('location: ../livro_lista.php');
}
?>