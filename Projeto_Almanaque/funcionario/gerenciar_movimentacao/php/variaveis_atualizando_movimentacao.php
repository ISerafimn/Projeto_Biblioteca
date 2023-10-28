<?php
session_start();
include('../../../include/conexao.php');
$id_status_movimentacao=$_POST['id_status_movimentacao'];

if($id_status_movimentacao == '1'){

    $id_movimentacao = $_POST['id_movimentacao'];

    $sql = "SELECT * FROM movimentacao where id_movimentacao = '$id_movimentacao'";
    $resultad = $mysqli->query($sql);
        while ($row = mysqli_fetch_array($resultad))
        {   
            $id_usuario = $row['id_usuario'];
            $id_livro = $row['id_livro'];
        }

    $id_funcionario = $_SESSION['id_funcionario'];
    $data_limite_movimentacao = $_POST['data_limite_movimentacao'];
    $data_saida_movimentacao= date('Y/m/d');
    $data_volta_movimentacao =  'null';
    $estoque_livro_post = $_POST['estoque_livro'];

    $sql = "SELECT * FROM livro where id_livro = '$id_livro'";
    $resultad = $mysqli->query($sql);
        while ($row = mysqli_fetch_array($resultad))
        {   
            $estoque_livro = $row['estoque_livro'];
        }

        $novo_estoque_livro = $estoque_livro - $estoque_livro_post;

    $sql = mysqli_query($mysqli,"UPDATE movimentacao SET data_saida_movimentacao='$data_saida_movimentacao', data_limite_movimentacao='$data_limite_movimentacao', data_volta_movimentacao= null, id_usuario='$id_usuario', id_livro='$id_livro', id_status_movimentacao='$id_status_movimentacao', id_funcionario='$id_funcionario' WHERE id_movimentacao='$id_movimentacao'");

    $sql = mysqli_query($mysqli,"UPDATE livro SET estoque_livro = '$novo_estoque_livro' WHERE id_livro='$id_livro'");

}
else{
    $id_movimentacao = $_POST['id_movimentacao'];
    $data_volta_movimentacao = date('Y/m/d');
    $estoque_livro_post = $_POST['estoque_livro'];

    $sql = "SELECT * FROM livro where id_livro = '$id_livro'";
    $resultad = $mysqli->query($sql);
        while ($row = mysqli_fetch_array($resultad))
        {   
            $estoque_livro = $row['estoque_livro'];
        }

        $novo_estoque_livro = $estoque_livro + $estoque_livro_post;

    $sql = mysqli_query($mysqli,"UPDATE movimentacao SET data_volta_movimentacao = '$data_volta_movimentacao', id_status_movimentacao='$id_status_movimentacao' WHERE id_movimentacao='$id_movimentacao'");

    $sql = mysqli_query($mysqli,"UPDATE livro SET estoque_livro = '$novo_estoque_livro' WHERE id_livro='$id_livro'");
}

header('location: ../movimentacao_lista.php');
?>
