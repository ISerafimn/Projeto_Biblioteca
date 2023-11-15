<?php
include('../../../include/conexao.php');
session_start();

$excluindo = $_POST['excluindo'];
$valor = $_POST['valor'];

if($valor == "id_usuario"){

    $sql_code = "SELECT * FROM movimentacao WHERE id_usuario = '$excluindo'";

    $sql_query = $mysqli->query($sql_code);
    $quantidade = $sql_query->num_rows;

    if($quantidade > 0){

        $_SESSION['modal_texto'] = "Não é possivel excluir esse usuário, motivo: está vinculado a ".$quantidade." dado(s) de movimentação.";
        header('location: ../excluir_usuario.php');
    }
    else{
        $sql  = mysqli_query($mysqli, "DELETE FROM favorito WHERE id_usuario = '$excluindo'");

        $sql  = mysqli_query($mysqli, "DELETE FROM usuario WHERE id_usuario = '$excluindo'");
        header('location: ../usuario_lista.php');
    }
}
else{

    $sql = mysqli_query($mysqli, "SELECT  *   FROM  usuario WHERE nome_usuario = '$excluindo'");
    while ($result = mysqli_fetch_array($sql))    
        {
            $id_usuario = $result['id_usuario'];
        }

    $sql_code = "SELECT * FROM movimentacao WHERE id_usuario = '$id_usuario'";

    $sql_query = $mysqli->query($sql_code);
    $quantidade = $sql_query->num_rows;

    if($quantidade > 0){

        $_SESSION['modal_texto'] = "Não é possivel excluir esse usuário, motivo: está vinculado a ".$quantidade." dado(s) de movimentação.";
        header('location: ../excluir_usuario.php');
    }
    else{
        
        $sql  = mysqli_query($mysqli, "DELETE FROM favorito WHERE id_usuario = '$id_usuario'");

        $sql  = mysqli_query($mysqli, "DELETE FROM usuario WHERE nome_usuario = '$excluindo'");
        header('location: ../usuario_lista.php');
    }
}
?>