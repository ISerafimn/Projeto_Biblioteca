<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Login</title>
    <style>
        :root{
    --bg-colors: #222327;
    --text-colors: #fff;
    --main-colors: #276daf;

    }
    .main-login{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .left-login{
        flex-direction: column;
        width: 50vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .left-login > h1 {
        font-size: 3vw;
        color: var(--text-colors);
    }
    .left-login-image{
        width: 35vw;
    }
    .right-login{
        margin-top: 10px;
        margin-bottom: 10px;
        width: 50vw;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .card-login{
        width: 60%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 30px 35px;
        color: #222327;
        background-color: #fff;
        border-radius: 20px;
    }

    .card-login > h1{
        color: #222327;
        font-weight: 800;
        margin: 0;
    }
    .textfield{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        margin: 10px 0px;
    }
    .textfield > input{
        border: 1px solid #ddd;
        width: 100%;
        border-radius: 10px;
        padding: 15px;
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        background-color: var(--text-colors);
        color: var(--bg-colors);
    }

    .textfield > label{
        color: #333;
        margin-bottom: 10px;
    }
    .btn-login{
        width: 100%;
        padding: 16px 0px;
        margin: 25px;
        border: none;
        border-radius: 8px;
        outline: none;
        text-transform: uppercase;
        font-weight: 800;
        font-size: 1rem;
        letter-spacing: 3px;
        color: #fff;
        background-color: var(--main-color);
        cursor: pointer;
        transition: all .50s ease;
    }
    .btn-login:hover{
        background-color: #235d92;
    }

    .link-criar-entrar{
        text-align: center;
    }
    .link-criar-entrar a{
        color: var(--main-colors);
        transition: all .50s ease;
    }
    .link-criar-entrar a:hover{
        color: #235d92;
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

    <header style="background-color: #222327; border-bottom: 1px solid">
        <a href="index.php" class="logo"><i class="ri-home-3-fill"></i><span>Almanaque</span></a> 

        <ul class="navbar">

            <div class="login-oculto">
                <form action="resultado_pesquisa.php">
                    <div class="search-icon">
                        <input type="search" placeholder="Pesquisar!" name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>">
                        <button type="submit" class="icon"><i class="ri-search-line"></i></button>
                    </div>
                </form>
            </div>

            <li><a href="index.php">Home</a></li>
            <li><a href="generos_literario.php">Categorias</a></li>
            <li><a href="livros.php">Livros</a></li>
            <li><a href="sobre.php">Sobre</a></li>

            <div class="login-oculto">
                <a href="usuario_login.php" class="user"><i class="ri-user-fill"></i>Entrar</a>
                <a href="usuario_cadastro.php" class="user"><i class="ri-user-add-fill"></i>Cadastrar</a>
            </div>
        </ul>

        <div class="main">
            <form action="resultado_pesquisa.php">
                <div class="search-icon">
                <input name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Pesquise Aqui!" type="text">
                    <button type="submit" class="icon"><i class="ri-search-line"></i></button>
                </div>
            </form>
            <a href="usuario_login.php" class="user"><i class="ri-user-fill"></i>Entrar</a>
            <a href="usuario_cadastro.php">Cadastrar</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/card-script.js"></script>
    <!-- JavaScript Link-->
    <script type="text/javascript" src="js/script.js"></script>

        
    <br><br><br><br>

    <div class="main-login">
        <div class="left-login">
            <h1>Faça Login<br>e comece a sua Leitura!</h1>
            <img src="imagens/coruja.png" class="left-login-image" alt="">
        </div>
        <form action="php/login.php" method="POST" class="form-login">
            <div class="right-login">
                <div class="card-login">
                    <h1>Login do Usuário</h1>
                        <div class="textfield">
                            <label for="usuario">Email:</label>
                            <input type="email" name="email_usuario" placeholder="Digite o nome do usuario" required>
                        </div>
                        <div class="textfield">
                            <label for="usuario">Senha:</label>
                            <input type="password" name="senha_usuario"  placeholder="Digite a senha do usuario" required>
                        </div>
                        <?php
                        if(isset($_SESSION['erro-login'])){
                            echo $_SESSION['erro-login'];
                            session_destroy();
                        }
                        ?>

                        <button class="btn-login" type="submit">Login</button>
                    
                    <div class="link-criar-entrar">
                    <p>Ainda não tem uma conta? <a href="usuario_cadastro.php" style="text-align: center;">Criar Conta</a></p>
                    <a href="funcionario_login.php" >Entrar como Funcionario</a></div>
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