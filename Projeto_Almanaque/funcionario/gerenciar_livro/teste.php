<?php
session_start();
include('../../php/protect.php');
    
if($_SESSION['id_sessao'] == 2) {
    
include('../../include/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/livro-aberto.css">
    <link rel="shortcut icon" href="../../imagens/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Livro Lista</title>
    <style>
        .dp-menu input{
            display: none;
        }

        .dp-menu button{
            width: 175px;
            height: 50px;
            background-color: transparent;
            color: white;
            border: none;
        }

        .dp-menu button:hover{
            background-color: #161d3a;
        }

        .dp-menu a{
            text-align: center;
        }
        .dp-menu{
            border-color: rgb(31, 27, 27);
        }


        nav li{
        display: inline-block;
        background-color:(31, 27, 27);
        }

        nav li a {
            display: inline-block;
            text-decoration: none;
            color:aliceblue;
            padding: 25px;
        }

        nav li a:hover{
        background-color: #161d3a;
        }

        .dp-menu{
        position: absolute;
        display: none;
        }

        .dp-menu a{
        display: block;
        }

        .dropdown:hover .dp-menu{
        display: block;
        }
    </style>
</head>
<body>
    <?php include('../../include/import_menu_gerenciar.php'); 
    include('../../include/conexao.php'); ?>
<br><br><br><br><br>
<nav>
    <ul>
        <li>
            <a href="livro_lista.php">LISTA LIVROS</a>
        </li>
        <li class="dropdown">
            <a href="consultar_por.php">CONSULTAR por:</a>
        <div class="dp-menu">
            <form method="post" action="variaveis_livro.php">
                <input name="consultar" value="id_livro" style="display: none;">
                <button type="submit" name="Submit">Id</button>
            </form>
            <form method="post" action="variaveis_livro.php">
                <input name="consultar" value="nome_livro" style="display: none;">
                <button type="submit" name="Submit">Nome</button>
            </form>
            <form method="post" action="variaveis_livro.php">
                <input name="consultar" value="id_autor" style="display: none;">
                <button type="submit" name="Submit">Autor</button>
            </form>
            <form method="post" action="variaveis_livro.php">
                <input name="consultar" value="editora_livro" style="display: none;">
                <button type="submit" name="Submit">Editora</button>
            </form>
                <form method="post" action="variaveis_livro.php">
                <input name="consultar" value="genero_livro" style="display: none;">
                <button type="submit" name="Submit">Gênero</button>
            </form>
        </div>
        </li>
        <li>
            <a href="adicionar_livro.php">Adicionar LIVRO</a>
        </li>
        <li class="dropdown">
            <a href="atualizar_livro_por.php">ATUALIZAR LIVRO por:</a>
            <div class="dp-menu">
                <form method="post" action="variaveis_atualizar_livro.php">
                    <input name="atualizar" value="id_livro" style="display: none;">
                    <button type="submit" name="Submit">Id</button>
                </form>
                <form method="post" action="variaveis_atualizar_livro.php">
                    <input name="atualizar" value="nome_livro" style="display: none;">
                    <button type="submit" name="Submit">Nome</button>
                </form>
            </div>
        </li>
        <li class="dropdown">
            <a href="excluir_livro_por.php">Excluir LIVRO por:</a>
            <div class="dp-menu">
                <form method="post" action="variaveis_excluir_livro.php">
                    <input name="excluir" value="id_livro" style="display: none;">
                    <button type="submit" name="Submit">Id</button>
                </form>
                <form method="post" action="variaveis_excluir_livro.php">
                    <input name="excluir" value="nome_livro" style="display: none;">
                    <button type="submit" name="Submit">Nome</button>
                </form>
            </div>
        </li>
    </ul>
</nav>





    <br><br><br><br><br>

    
    <br><br><br>

    <?php include('../../include/import_footer_logado.php');
    include('../../include/acessibilidade.php') ?>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>
<?php
}
else {
    echo "Você não pode acessar essa página, sua permissão é inválida";
}
?>