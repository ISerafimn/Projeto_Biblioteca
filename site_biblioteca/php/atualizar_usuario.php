<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATUALIZAR USUARIO PHP</title>
</head>
<?php 
include ('conexao.php');
$usuario_id=$_POST['usuario_id'];
$nome_usuario=$_POST['nome_usuario'];
$nascimento_usuario=$_POST['nascimento_usuario'];
$cpf_usuario=$_POST['cpf_usuario'];
$email_usuario=$_POST['email_usuario'];
$endereco_usuario=$_POST['endereco_usuario'];
$telefone_usuario=$_POST['telefone_usuario'];

$sql = mysqli_query($mysqli,"UPDATE usuario SET usuario_nome='$nome_usuario', usuario_nascimento='$nascimento_usuario', usuario_cpf='$cpf_usuario', usuario_email='$email_usuario', usuario_endereco='$endereco_usuario', usuario_endereco='$endereco_usuario', usuario_telefone='$telefone_usuario'  WHERE usuario_id='$usuario_id'");
?>

<body> 
<p><a href="index.html">VOLTAR</a>
</body>
</html>
