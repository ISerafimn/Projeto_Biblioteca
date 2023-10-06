<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Login</title>
    <style>
    .link-criar-entrar{
        text-align: center;
    }
    .link-criar-entrar a{
        color: #0f2235;
        transition: all .50s ease;
    }
    .link-criar-entrar a:hover{
        color: #fff;
    }
@media (max-width: 1200px){
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
        width: 80%;
    }


}
@media (max-width: 900px){
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
        width: 90%;
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
            <img src="imagens/coruja.png" class="left-login-image" alt="">
        </div>
        <form action="#" method="POST" class="form-login">
            <div class="right-login">
                <div class="card-login">
                    <h1>Login do Funcionario</h1>
                        <div class="textfield">
                            <label for="usuario">Email:</label>
                            <input type="text" name="email_funcionario" placeholder="Digite o nome do funcionario" required>
                        </div>
                        <div class="textfield">
                            <label for="usuario">Senha:</label>
                            <input type="password" name="senha_funcionario"  placeholder="Digite a senha do funcionario" required>
                        </div>

                        <?php include('php/login_funcionario.php'); ?>

                        <button class="btn-login" type="submit">Login</button>
                    
                    <div class="link-criar-entrar">
                    <p>Ainda não tem uma conta? <a href="funcionario_cadastro.php" style="text-align: center;">Criar Conta</a></p>
                    <a href="usuario_login.php" >Entrar como Usuário</a></div>
                </div>
            </div>
        </form>
    </div>
    <br>
    <?php include('include/import_footer.php');
    include('include/acessibilidade.php') ?>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>