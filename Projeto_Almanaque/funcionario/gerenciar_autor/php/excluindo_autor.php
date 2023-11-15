<?php
include('../../../include/conexao.php');
session_start();
$excluindo = $_POST['excluindo'];
$valor = $_POST['valor'];

if($valor == "id_autor"){

    $sql_code = "SELECT * FROM livro WHERE id_autor = '$excluindo'";

    $sql_query = $mysqli->query($sql_code);
    $quantidade = $sql_query->num_rows;

    if($quantidade > 0){
        $_SESSION['modal_texto'] = "Não é possivel excluir esse autor, motivo: este autor está vinculado a ".$quantidade." livro(s), por favor, altere os autor(es) desses livros vinculados ou exclua os livros alvo(s)";
        header('location: ../excluir_autor.php');
    }
    else{

        $sql  = mysqli_query($mysqli, "DELETE FROM autor WHERE nome_autor = '$excluindo'");

        header('location: ../autor_lista.php');
    }
}
else{

    $sql = mysqli_query($mysqli, "SELECT  *   FROM  autor WHERE nome_autor = '$excluindo'");
    while ($result = mysqli_fetch_array($sql))    
        {
            $id_autor = $result['id_autor'];
        }

    $sql_code = "SELECT * FROM livro WHERE id_autor = '$id_autor'";

    $sql_query = $mysqli->query($sql_code);
    $quantidade = $sql_query->num_rows;

    if($quantidade > 0){
        $_SESSION['modal_texto'] = "Não é possivel excluir esse autor, motivo: este autor está vinculado a ".$quantidade." livro(s), por favor, altere os autor(es) desses livros vinculados ou exclua os livros alvo(s)";
        header('location: ../excluir_autor.php');
    }
    else{
        $sql  = mysqli_query($mysqli, "DELETE FROM autor WHERE nome_autor = '$excluindo'");

        header('location: ../autor_lista.php');
    }
}
?>