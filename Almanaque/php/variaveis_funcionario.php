<?php
include('conexao.php');

$funcionario_nome=$_POST['funcionario_nome'];
$funcionario_cargo=$_POST['funcionario_cargo'];
$funcionario_telefone=$_POST['funcionario_telefone'];
$funcionario_email=$_POST['funcionario_email'];
$funcionario_cpf=$_POST['funcionario_cpf'];

    $result = mysqli_query($mysqli, "INSERT INTO funcionario(funcionario_nome, funcionario_cargo, funcionario_telefone, funcionario_email, funcionario_cpf) VALUES ('$funcionario_nome', '$funcionario_cargo', '$funcionario_telefone', '$funcionario_email', '$funcionario_cpf')");
    
    header("Location: ../funcionario_login.html");
?>

