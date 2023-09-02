<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="design/login-cadastro.css">
    <link rel="stylesheet" href="design/index.css">
    <link rel="stylesheet" href="design/menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body style="background-color: white;">
<?php include('include/menu_login.php'); ?>
    
    <form action="#" method="POST">
        <h1>Login do Usuário</h1>
        <p>Nome:</p>
        <input type="text" name="email_usuario" placeholder="Digite o nome do usuario" required>
        <p>Senha:</p>
        <input type="password" name="senha_usuario"  placeholder="Digite a senha do usuario" required>
        
        <br><?php include('php/login.php'); ?><br>

        <button type="submit">Entrar</button> 
        <p>Ainda não tem uma conta? <a href="usuario_cadastro.php">Criar Conta</a></p>
        <a href="funcionario_login.php" style="text-align: center;">Entrar como Funcionario</a>
    </form>
    <br><a href="index.php">Voltar</a><br>

    
</body>
</html>