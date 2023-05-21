<?php
include('conexao.php');

if(isset($_POST['usuario_email']) || isset($_POST['usuario_cpf'])) {

    if(strlen($_POST['usuario_email'])== 0 ) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['usuario_cpf'])== 0 ) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['usuario_email']);
        $senha = $mysqli->real_escape_string($_POST['usuario_cpf']);

        $sql_code = "SELECT * FROM usuario WHERE usuario_email = '$email' AND usuario_cpf = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['usuario_id'] = $usuario['usuario_id'];
            $_SESSION['usuario_nome'] = $usuario['usuario_nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao Logar! E-mail ou senha incorretos";
        }

    }



}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/login.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <title>Login</title>
</head>
<body>
   
        <section class="area-login">
            <div class="login">
                <div>
                    <img src="imagens/logo.png" width="200" height="auto">
                </div>
                <form action="" method="POST">
                    <input type="text" name="usuario_email" placeholder="digite o nome do usuario">
                    <input type="password" name="usuario_cpf"  placeholder="digite a senha do usuario">
                    <br><br>
                    <button type="submit">Entrar</button>   
                    <p>Ainda não tem uma conta?<a href="usuario_cadastro.html">Criar Conta</a></p>
                </form>
            </div>
        </section>
</body>