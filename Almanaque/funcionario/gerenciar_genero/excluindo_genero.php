<?php
include('../../include/conexao.php');

$nome_genero = $_POST['nome_genero_confirmado'];

if($nome_genero == "voltar"){
    header('location: excluir_genero.php');
}
else{
    $result = mysqli_query($mysqli, "DELETE FROM genero WHERE nome_genero = '$nome_genero'");
    header('location: genero_lista.php');
}
?>