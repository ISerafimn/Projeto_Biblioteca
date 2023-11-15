<?php
include('../../../include/conexao.php');
session_start();

$nome_genero = $_POST['nome_genero_confirmado'];

if($nome_genero == "voltar"){
    header('location: excluir_genero.php');
}
else{

    $sql = mysqli_query($mysqli, "SELECT  *   FROM  genero WHERE nome_genero = '$nome_genero'");
    while ($result = mysqli_fetch_array($sql))    
        {
            $id_genero = $result['id_genero'];
        }

    $sql_code = "SELECT * FROM livro WHERE id_genero = '$id_genero'";

    $sql_query = $mysqli->query($sql_code);
    $quantidade = $sql_query->num_rows;

        if($quantidade > 0){

            $_SESSION['modal_texto'] = "Não é possivel excluir essa Categoria/Gênero, motivo: está vinculado a ".$quantidade." livro(s). Caso o nome esteja incorreto, por favor o atualize na aba de atualização ou mude a Categoria/Gênero dos livros vinculados.";
            header('location: ../excluir_genero.php');
        }
        else{
            $result = mysqli_query($mysqli, "DELETE FROM genero WHERE nome_genero = '$nome_genero'");
            header('location: ../genero_lista.php');
        }


}
?>