<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Almanaque</title>
</head>
<body>
<header>
        <div class="header-left">
            <div class="logo">
                <img src="./logo.png" alt="">
            </div>
            <nav>
                <ul>
                    <li class="dropdown">
                        <a href="generos_literario.php">Categorias</a>
                        <div class="dp-menu">
                            <?php
                                include('conexao.php');
                                $sql = "SELECT * FROM genero";
                                $resultad = $mysqli->query($sql);
                                    while ($row = mysqli_fetch_array($resultad))
                                        {
                                            echo    "<form method='post' action='lista_genero.php'>
                                                        <input name='id_genero' value='".$row['id_genero']."' style='display: none;'>
                                                        <button type='submit' name='Submit'>
                                                            ".$row['nome_genero']."
                                                        </button>
                                                    </form>";
                                        }
                            ?>
                        </div>
                    </li>
                    <li>
                        <a href="livros.php">Livros</a>
                    </li>
                    <li>
                        <a href="contato.php">Contato</a>
                    </li>

                    <?php

                    if(isset($_SESSION['id_sessao'])){
                        if($_SESSION['id_sessao'] == 1) {
                            ?>
                                <li class="dropdown">
                                    <a href="perfil.php" style="width: 125px; text-align: center;">PERFIL</a>
                                    <div class="dp-menu" style="width: 125px; text-align: center;">
                                        <a href="perfil.php">Meu Perfil</a>
                                        <a href="meus_livros.php">Meus Livros</a>
                                        <a href="../php/logout.php">Sair</a>
                                    </div>
                                </li>

                    <?php
                        }
                        elseif($_SESSION['id_sessao'] == 2){
                            ?>  
                                <li class="dropdown">
                                    <a href="gerenciar.php" style="width: 150px; text-align: center;">GERENCIAR</a>
                                    <div class="dp-menu" style="width: 150px; text-align: center;">
                                        <a href="gerenciar_livro/livro_lista.php">Livros</a>
                                        <a href="gerenciar_autor/autor_lista.php">Autor</a>
                                        <a href="gerenciar_usuario/usuario_lista.php">Usuarios</a>
                                        <a href="gerenciar_movimentacao/movimentacao_lista.php">Movimentação</a>
                                        <a href="gerenciar_genero/genero_lista.php">Gêneros</a>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a href="perfil.php" style="width: 125px; text-align: center;">PERFIL</a>
                                    <div class="dp-menu" style="width: 125px; text-align: center;">
                                        <a href="perfil.php">Meu Perfil</a>
                                        <a href="../php/logout.php">Sair</a>
                                    </div>
                                </li>

                    <?php
                        }
                    }
                    else{
                    ?>
                    <li class="dropdown">
                        <a href="usuario_login.php" style="width: 125px; text-align: center;">ENTRAR</a>
                        <div class="dp-menu">
                            <a href="usuario_login.php">Login</a>
                            <a href="usuario_cadastro.php">Cadastra-se</a>
                        </div>
                    </li>
                    <?php
                    }
                    ?>

            </nav>
        </div>
        <div class="header-right">
        <form action=resultado_pesquisa.php>
                <input name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Pesquise Aqui!" type="text">
                <button type="submit">Buscar</button>
            </form>
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </header>
    <script>
        hamburger = document.querySelector(".hamburger");
        nav = document.querySelector("nav");
        hamburger.onclick = function() {
            nav.classList.toggle("active");
        }
    </script>
</body>
</html>