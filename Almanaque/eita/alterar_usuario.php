<?php

include ('../php/conexao.php');

$nome_usuario = $_POST['nome_usuario'];
$email_usuario = $_POST['email_usuario'];
$cpf_usuario = $_POST['cpf_usuario'];
$data_usuario = $_POST['data_usuario'];
$senha_usuario = $_POST['senha_usuario'];
$endereco_usuario = $_POST['endereco_usuario'];
$telefone_usuario = $_POST['telefone_usuario'];

$resultado = mysqli_query($mysqli, "UPDATE usuario SET nome_usuario='$nome_usuario', email_usuario='$email_usuario', cpf_usuario='$cpf_usuario, data_usuario='$data_usuario', senha_usuario='$senha_usuario', endereco_usuario='$endereco_usuario', telefone_usuario='$telefone_usuario'");

header("location: alterar_usuario.html");

?>