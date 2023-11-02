<?php
session_start();
include('../include/conexao.php');

$id_usuario = $_POST['id_usuario'];
$id_livro = $_POST['id_livro'];
$id_favorito = $_POST['id_favorito'];
$caminho = $_POST['caminho'];
if(isset($_POST['tela'])){
    $tela = $_POST['tela'];
}
else{
    $tela = "nenhuma";
}

if(isset($_POST['sessao'])){
    $sessao = $_POST['sessao'];
}

if($caminho == 'adicionar'){
    $result = mysqli_query($mysqli, "INSERT INTO favorito(id_usuario, id_livro) VALUES ('$id_usuario', '$id_livro')");
    if($sessao == 'ativa'){
        $_SESSION['temp_livro'] = $id_livro;
        header('location: ../livro_aberto.php');
    }
    else{
        header('location: ../index.php');
    }
}
else{
    $result  = mysqli_query($mysqli, "DELETE FROM favorito WHERE id_favorito = '$id_favorito' AND id_livro = '$id_livro'");
    if($sessao == 'ativa'){
        $_SESSION['temp_livro'] = $id_livro;
        header('location: ../livro_aberto.php');
    }
    else{
        header('location: ../index.php');
    }
}


?>