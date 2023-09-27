<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Sobre</title>
</head>
<body>
    <?php include('include/import_menu.php');
    include('include/conexao.php'); ?>

    <br><br><br><br><br>

    <form action="#" method="POST">
        <h1>Login do Funcionario</h1>
        <p>Nome:</p>
        <input type="text" name="email_funcionario" placeholder="Digite o nome do funcionario" required>
        <p>Senha:</p>
        <input type="password" name="senha_funcionario"  placeholder="Digite a senha do funcionario" required>

        <br><?php include('php/login_funcionario.php'); ?><br>

        <button type="submit">Entrar</button>   
        <p>Ainda não tem uma conta? <a href="funcionario_cadastro.php">Criar Conta</a></p>
    </form>
    <br><a href="usuario_login.php">Voltar</a><br>

    <br><br><br><br><br><br>


    <?php include('include/import_footer.php'); ?>
</body>
</html>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="design/index.css">
    <link rel="stylesheet" href="design/login-cadastro.css">
    <link rel="stylesheet" href="design/menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php include('include/menu_login.php'); ?>
    

    
</body>
</html>