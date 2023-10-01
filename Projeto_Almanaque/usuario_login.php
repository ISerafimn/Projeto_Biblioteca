<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css  ">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Login</title>
    <style>
        
@media (max-width: 950px){
    .main-login{
        flex-direction: column;
    }
    .left-login > h1{
        display: none;
    }
    form .left-login{
        width: 100%;
        height: auto;
    }
    .left-login{
        width: 100%;
        height: auto;
    }
    .left-login-image{
        width: 50vw;
    }
    .form-login,
    .right-login{
        width: 100%;
    }
    .card-login{
        width: 100%;
    }
}
    </style>
</head>
<body>
    <?php include('include/import_menu.php');
    include('include/conexao.php'); ?>

    <br><br><br>

    <div class="main-login">
        <div class="left-login">
            <h1>Faça Login<br>e comece a sua Leitura!</h1>
            <img src="" class="left-login-image" alt="">
        </div>
        <form action="#" method="POST" class="form-login">
            <div class="right-login">
                <div class="card-login">
                    <h1>Login do Usuário</h1>
                        <div class="textfield">
                            <label for="usuario">Email:</label>
                            <input type="text" name="email_usuario" placeholder="Digite o nome do usuario" required>
                        </div>
                        <div class="textfield">
                            <label for="usuario">Senha:</label>
                            <input type="password" name="senha_usuario"  placeholder="Digite a senha do usuario" required>
                        </div>

                        <?php include('php/login.php'); ?>

                        <button class="btn-login" type="submit">Login</button>
                    
                    <p>Ainda não tem uma conta? <a href="usuario_cadastro.php">Criar Conta</a></p>
                    <a href="funcionario_login.php" >Entrar como Funcionario</a>
                </div>
            </div>
        </form>
    </div>

    <?php include('include/import_footer.php');
    include('include/acessibilidade.php') ?>
</body>
</html>