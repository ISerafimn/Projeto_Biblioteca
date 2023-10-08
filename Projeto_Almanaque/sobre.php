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
    <title>Sobre</title>
    <style>
        .corpo{
            width: 75%;
            margin: auto;
        }
        p{
            text-align: justify;
        }
    </style>
</head>
<body>
    <?php include('include/import_menu.php'); ?>

    <br><br><br><br><br>

    <h1 style="text-align: center;">Sobre o Projeto Almanaque</h1>

    <br>
    
    <div class="corpo">
        <p>Este trabalho apresenta o desenvolvimento de um sistema inovador de empréstimo de livros por meio de um site hospedado localmente. O sistema proposto permite que os clientes/usuários se cadastrem na plataforma e tenham acesso a uma biblioteca virtual, onde podem escolher livros disponíveis para empréstimo. A característica distintiva deste sistema é que a retirada dos livros é realizada de forma física, onde os usuários visitam um local específico denominado "depósito" para pegar o livro selecionado anteriormente.
        <br><br>
        O objetivo principal deste TCC é descrever o processo de desenvolvimento desse sistema, incluindo a sua arquitetura, funcionalidades, segurança e interface de usuário. Além disso, o trabalho aborda a implementação de um sistema de gestão de prazos de devolução, garantindo que os usuários cumpram as datas estipuladas para a devolução dos livros.

        </p>
    </div>

    <br><br><br><br>

    <?php include('include/import_footer.php');
    include('include/acessibilidade.php') ?>
    <a id="link-up" href="#"><i class="ri-arrow-up-double-line"></i></a>
</body>
</html>