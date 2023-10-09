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
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Livro Lista</title>
    <style>
        .navgerenciar a{
            color: white;
            padding: 0px 25px;
            left: 50%;
            text-align: center;
            margin: auto;
            transition: all .50s ease;
        } 
        .navgerenciar a:hover{
            color: var(--main-color);
        }
        .navmain{
            margin: auto;
            width: 100%;
            align-items: center;
        }
    </style>
</head>
<body>
    <?php
    include('../../include/import_menu_gerenciar.php');
    include('../../include/conexao.php'); ?>

    <br><br><br><br><br>

                    <div class="navgerenciar" style="text-align: center;">
                        <span><a href="livro_lista.php">LIVROS</a></span>
                        <span><a href="consultar_por.php">CONSULTAR</a></span>
                        <span><a href="adicionar_livro.php">Adicionar</a></span>
                        <span><a href="atualizar_livro_por.php">ATUALIZAR</a></span>
                        <span><a href="excluir_livro_por.php">Excluir</a></span><hr>
                    </div>


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