<?php
include('../../../include/conexao.php');
session_start();

$excluindo = $_POST['excluindo'];
$valor = $_POST['valor'];

$sql = mysqli_query($mysqli, "SELECT  *   FROM  livro WHERE nome_livro = '$excluindo'");
while ($result = mysqli_fetch_array($sql))    
    {
        $id_livro = $result['id_livro'];
    }

$sql_code = "SELECT * FROM movimentacao WHERE id_livro = '$id_livro'";

$sql_query = $mysqli->query($sql_code);
$quantidade = $sql_query->num_rows;

if($quantidade > 0){

    $_SESSION['modal_texto'] = "Não é possivel excluir esse livro, motivo: está vinculado a ".$quantidade." dado(s) de movimentação dos usuários. Caso não haja mais exemplares desse livro, por favor, atualize seu estoque para zero.";
    header('location: ../excluir_livro.php');
}
else{

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
}
?>