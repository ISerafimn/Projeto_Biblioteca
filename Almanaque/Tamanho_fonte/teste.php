<?php
include('conexao.php');
$aumentar = $_POST ['aumentar'];
$diminuir = $_POST ['diminuir'];

$sql = "SELECT * FROM fonte";
$resultad = $mysqli->query($sql);
while ($row = mysqli_fetch_array($resultad))
    {
        echo $row['tamanho_fonte'];
        $tamanho_fonte = $row['tamanho_fonte'];
    }

    $tamanho = $tamanho_fonte + $aumentar;
    $tamanho = $tamanho - $diminuir;

$sql = mysqli_query($mysqli,"UPDATE fonte SET tamanho_fonte='$tamanho' WHERE id_fonte= 1");

session_start();
$_SESSION['tamanho_fonte'] = $tamanho;

header("Location: index.php");
?>