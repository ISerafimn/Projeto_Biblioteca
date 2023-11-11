<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/livro-aberto.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <title>Localização</title>
    <style>
        .mapa{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php include('include/import_menu.php');
    include('include/conexao.php'); ?>

    <br><br><br><br><br>
    <div class="mapa">
        <h1>Localização da Retirada do Livro</h1><br>
        <p>Local de Retirada dos Livros: Estr. das Lágrimas n°2461</p><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.510252597405!2d-46.59305312449031!3d-23.621890963819187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5c9dcc194ffb%3A0x97d7853934328d05!2sEtec%20de%20Heli%C3%B3polis!5e0!3m2!1spt-BR!2sbr!4v1699570931165!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <br><br><br><br>

    <?php include('include/import_footer.php');
    include('include/acessibilidade.php') ?>
    <a id="link-acessibilidade" href="https://chrome.google.com/webstore/detail/selection-reader-text-to/fdffijlhedcdiblbingmagmdnokokgbi/related?hl=pt-BR"><i class="ri-speak-fill"></i></a>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>